<?php


namespace App\Controller;

use Belgian\View;

class Error404
{

    public function index()
    {
        $view = new View\LoadView('error404');
        $view->render();
    } 

}





