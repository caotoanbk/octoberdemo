<?php namespace Mangoo\Ui\Components;

use Cms\Classes\ComponentBase;
use ApplicationException;

class Googlemap extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Google Location',
            'description' => 'Location of us.'
        ];
    }
}
