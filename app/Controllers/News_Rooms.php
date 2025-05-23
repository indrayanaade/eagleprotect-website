<?php

namespace App\Controllers;
use App\Models\NewsModel;

class News_Rooms extends BaseController
{
    public function index(): string{
        $model = new \App\Models\NewsModel();
        $categories = $model->getCategories();
        $headline   = $model->getHeadline();
        return view('news_room/index', [
            'title'       => 'News Room',
            'activeMenu'  => 'News Room',
            'headline'    => $headline,
            'categories'  => $categories,
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
    public function fetch(){
        $page     = (int) $this->request->getGet('page') ?? 1;
        $category = $this->request->getGet('category');
        $perPage  = 6;

        $model = new \App\Models\NewsModel();
        $data  = $model->getNews($page, $perPage, $category);

        $formatted = array_map(function($item) {
            return [
                'id'            => $item->id,
                'title'         => $item->title,
                'thumbnail'     => $item->thumbnail,
                'category_name' => $item->category_name,
                'excerpt'       => $item->excerpt,
                'published_at'  => date('F jS Y', strtotime($item->published_at)),
            ];
        }, $data['news']);

        return $this->response->setJSON([
            'data'         => $formatted,
            'total_pages'  => $data['total_pages'],
            'current_page' => $page,
        ]);
    }
}