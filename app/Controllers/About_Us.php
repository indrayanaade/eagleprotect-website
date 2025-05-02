<?php

namespace App\Controllers;

class About_Us extends BaseController
{
    public function index(): string
    {
        return view('about_us/index', [
            'title'       => 'About Us',
            'activeMenu'  => 'about_us',
            'jsFiles'     => [
                'assets/adminlte/plugins/jquery/jquery-3.7.1.min.js',
                'assets/js/about_us.js'
            ],
            'cssFiles'    => [
                'assets/css/style.css',
                'assets/css/about_us.css'
            ],
        ]); 
    }
}
