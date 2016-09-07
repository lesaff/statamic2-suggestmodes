<?php namespace Statamic\Addons\Typeforms;
use Statamic\Addons\Suggest\Modes\AbstractMode;
class TypeformsSuggestMode extends AbstractMode
{

    public function suggestions()
    {
        $request = 'https://api.typeform.com/v1/forms?key='.$this->request->input('api_key');
        $forms = @json_decode(file_get_contents($request), true);
        $data  = [];
        $index = 0;
        foreach($forms as $key => $form) {
            $data[$index]['value'] = $form['id'];
            $data[$index]['text'] = $form['name'];
            $index++;
        }
        return $data;
    }
}
