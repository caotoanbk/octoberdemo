<?php namespace Mangoo\Ui\Components;

use Cms\Classes\ComponentBase;
use ApplicationException;

class Services extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Services',
            'description' => 'Services section.'
        ];
    }
}
