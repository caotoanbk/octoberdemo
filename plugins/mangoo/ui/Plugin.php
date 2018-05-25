<?php namespace Mangoo\Ui;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
     public function pluginDetails()
    {
        return [
            'name'        => 'Ui Plugin',
            'description' => 'Provides all ui component to website.',
            'author'      => 'Mangoo',
            'icon'        => 'icon-leaf'
        ];
    }

    public function registerComponents()
    {
        return [
            'Mangoo\Ui\Components\Contactform' => 'contactform',
            'Mangoo\Ui\Components\Googlemap' => 'googlemap',
            'Mangoo\Ui\Components\Client' => 'clientus',
            'Mangoo\Ui\Components\Portfolio' => 'portfolio',
            'Mangoo\Ui\Components\Status' => 'status',
            'Mangoo\Ui\Components\About' => 'about',
            'Mangoo\Ui\Components\Testimonial' => 'testimonial',
            'Mangoo\Ui\Components\Services' => 'servicessection',
            'Mangoo\Ui\Components\Intro' => 'introsection',
        ];
    }

}
