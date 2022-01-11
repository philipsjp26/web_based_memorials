<?php

use App\Models\Memorials;
function insertIntoMemorialImages($data, $title, $url) {
    $temp = array(
        'title' => $title,
        'url' => $url
    );
    $data->memorialImages()->create($temp);
}
