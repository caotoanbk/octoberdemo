<?php namespace Mangoo\Ui\Components;

use Cms\Classes\ComponentBase;
use ApplicationException;

class Intro extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Intro',
            'description' => 'Intro section.'
        ];
    }
}
