<?php namespace Mangoo\Ui\Components;

use Cms\Classes\ComponentBase;
use ApplicationException;

class Portfolio extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Portfolio',
            'description' => 'Portfolio section.'
        ];
    }
}
