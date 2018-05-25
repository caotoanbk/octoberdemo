<?php namespace Mangoo\Ui\Components;

use Cms\Classes\ComponentBase;
use ApplicationException;

class Client extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Client section',
            'description' => 'Client of us.'
        ];
    }
}
