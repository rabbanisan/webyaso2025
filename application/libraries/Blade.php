<?php
use duncan3dc\Laravel\BladeInstance;

class Blade
{
    protected $blade;

    public function __construct()
    {
        $views = APPPATH . 'views';
        $cache = APPPATH . 'cache';

        $this->blade = new BladeInstance($views, $cache);
    }

    public function view($view, $data = [])
    {
        echo $this->blade->render($view, $data);
    }
}
