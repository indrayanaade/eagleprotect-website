<?php

namespace App\Controllers;

class News_Rooms extends BaseController
{
    public function index(): string{
        return view('news_room/index', [
            'title'       => 'News Room',
            'activeMenu'  => 'News Room',
            'jsFiles'     => [
                'assets/adminlte/plugins/jquery/jquery-3.7.1.min.js',
                'assets/js/news_room.js'
            ],
            'cssFiles'    => [
                'assets/css/style.css',
                'assets/css/news_room.css'
            ]
        ]);        
    }
}