<?php

use App\Models\Memorials;

function insertIntoMemorialImages($data, $title, $url)
{
    
    $temp = array(
        'title' => $title,
        'url' => $url
    );
    $data->memorialImages()->create($temp);
}

function create_or_update_memorial_description($data, $description = null)
{
    $result = $data::with('memorialDescription')
        ->whereHas('memorialDescription', function ($q) use ($data) {
            $q->where('memorial_id', $data->id);
        })->get();
    if (count($result) == 0) {
        $model = Memorials::find($data->id);
        $model->memorialDescription()->create($description);
    } else {
        $result = collect($result)->map(function ($item) use ($description) {
            $item->memorialDescription->update($description);
        });
    }
}
