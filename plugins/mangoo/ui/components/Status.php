<?php namespace Mangoo\Ui\Components;

use Cms\Classes\ComponentBase;
use ApplicationException;

class Status extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Status',
            'description' => 'Status website.'
        ];
    }
}
