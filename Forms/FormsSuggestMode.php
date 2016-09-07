<?php namespace Statamic\Addons\Forms;
use Statamic\Addons\Suggest\Modes\AbstractMode;
use Statamic\API\Form;
class FormsSuggestMode extends AbstractMode
{
    public function suggestions()
    {
        $forms = Form::all();
        $data  = [];
        $index = 0;
        foreach($forms as $key => $form) {
            $data[$index]['value'] = $form['name'];
            $data[$index]['text'] = $form['title'];
            $index++;
        }
        return $data;
    }
}
