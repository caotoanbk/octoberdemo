<?php namespace Mangoo\Ui\Components;

use Cms\Classes\ComponentBase;
use ApplicationException;

class Testimonial extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Testimonial',
            'description' => 'Testimonial section.'
        ];
    }
}
