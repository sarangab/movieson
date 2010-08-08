<?php

function begin_hbo() {
$response = file_get_contents("http://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20html%20where%20url%3D%22http%3A%2F%2Fwww.hbosouthasia.com%2Fsouthasia%2Fprint_schedule_thisweek%22%20and%20xpath%3D'%2F%2Fdiv%5B%40id%3D%22wrapper%22%5D%2Ftable%2Ftr%2Ftd'&format=json&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys&callback=");

$response_array = json_decode($response);

$forward = ($response_array->query->results);

$output_array = array();
foreach ($forward as $value) {
    $output_array[] = process_inner($value);
}

return $output_array;

}

function process_inner($array) {
    $days = array();
    foreach ($array as $day) {
        $day_array = array();
        $h2 = $day->h2;
        $show_day = $h2->span;
        $day_array['day'] = $show_day . "/2010";
        $day_array['times'] = array();
        $ul = $day->ul;
        foreach ($ul as $list) {
            foreach ($list as $list_item) {
                $time = $list_item->span->content;
                $movie_array = array();
                $movie_array['time'] = $time;
                $movie_array['name'] = $list_item->p->span->content;
                $day_array['times'][] = $movie_array;
            }
            $days[] = $day_array;
        }
    }
    
    return ($days);
}


