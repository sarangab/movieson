<?php
include 'db.php';

$query = "select user_id, movie_id from user_movie";
$result = mysql_query($query);
$resultset = mysql_fetch_row($result);

$user_id = $resultset[0];
$movie_id = $resultset[1];

$query = "select email from user where user_id = $user_id";
$result = mysql_query($query);
$row = mysql_fetch_row($result);
$email = $row[0];

$query = "select name from movie where movie_id = $movie_id";
$result = mysql_query($query);
$row = mysql_fetch_row($result);
$movie_name = $row[0];

#echo "\nMovie name is $movie_name and user email = $email";

include 'parser/hbo.php';

echo "\n";
$target_array = (begin_hbo());

foreach ($target_array as $array) {
    foreach ($array as $a) {
        $day = $a['day'];
        $times = $a['times'];
        foreach ($times as $time) {
            if ($time['name'] == $movie_name) {
                send_mail($movie_name, $email, $day, $time['time']);
            } else {
                #var_dump($time);
            }
        }
    }
}

function send_mail($movie_name, $email, $day, $time) {
set_include_path('/home/sudheer/workspace/openhack/testing/trunk/library/' . PATH_SEPARATOR . get_include_path());
require_once 'Zend/Mail.php';
require_once 'Zend/Loader/Autoloader.php';
$autoloader = Zend_Loader_Autoloader::getInstance();
$autoloader->setFallbackAutoloader(true);

$smtpServer = 'smtp.gmail.com';
$username = 'internatrails@gmail.com';
$password = 'mambalam';

$config = array('ssl' => 'tls', 
                'auth' => 'login',
                'username' => $username,
                'password' => $password);
$transport = new Zend_Mail_Transport_Smtp($smtpServer, $config);
#var_dump(func_get_args());

$mail = new Zend_Mail;
$mail->setFrom('internatrails@gmail.com', 'Open Sender');
$mail->addTo($email, 'Open Recipient');
$mail->setSubject('Movie on TV');

$body = "Hello, the movie $movie_name is being broadcasted on HBO on $day at $time. Enjoy";
$mail->setBodyText($body);

try {
    $mail->send($transport);
} catch (Exception $e) {
    echo "\nSorry. Network issue. Mail will be sent later\n";
    #var_dump(func_get_args());
    echo $body;
}

}
