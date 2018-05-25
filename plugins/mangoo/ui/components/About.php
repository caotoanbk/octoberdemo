<?php namespace Mangoo\Ui\Components;

use Cms\Classes\ComponentBase;
use ApplicationException;

class About extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'About',
            'description' => 'About us.'
        ];
    }
}
