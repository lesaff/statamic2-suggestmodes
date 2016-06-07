<?php namespace Statamic\Addons\Collections;

use Statamic\Addons\Suggest\Modes\AbstractMode;
use Statamic\API\Content;

class CollectionsSuggestMode extends AbstractMode
{
    public function suggestions()
    {
        
        $collections = Content::collections();

        $data  = [];
        $index = 0;

        foreach($collections as $key => $collection) {

            $data[$index]['value'] = $collection->path();
            $data[$index]['text'] = $collection->data()['title'];
            $index++;
        }

        return $data;
    }
}