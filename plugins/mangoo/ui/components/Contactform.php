<?php namespace Mangoo\Ui\Components;

use Cms\Classes\ComponentBase;
use ApplicationException;

class Contactform extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Contact Form',
            'description' => 'Contact us.'
        ];
    }
}
