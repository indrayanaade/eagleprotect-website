<?php

namespace App\Controllers;

class Services extends BaseController
{
    public function index(): string
    {
        return view('service/index', [
            'title'       => 'Services',
            'activeMenu'  => 'Services',
            'jsFiles'     => [
                'assets/adminlte/plugins/jquery/jquery-3.7.1.min.js',
                'assets/js/service.js'
            ],
            'cssFiles'    => [
                'assets/css/style.css',
                'assets/css/service.css'
            ],
        ]);        
    }

}