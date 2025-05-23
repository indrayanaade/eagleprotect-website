<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model{
    protected $table = 'news';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'category_id', 'image', 'content', 'created_at'];
    protected $useTimestamps = true;

    public function getNews(int $page = 1, int $perPage = 6, ?string $category = null){
        $offset = ($page - 1) * $perPage;

        $builder = $this->db->table($this->table);
        $builder->select('news.id, news.title, news.thumbnail, news.excerpt, news.published_at, mns.category_name');
        $builder->join('master_news_category mns', 'mns.id = news.category_id');
        $builder->where('news.void', 0);

        if (!empty($category) && $category !== 'all') {
            $builder->where('mns.category_name', $category);
        }

        $builderCount = clone $builder;
        $total = $builderCount->countAllResults(false);

        $result = $builder
            ->orderBy('news.published_at', 'DESC')
            ->limit($perPage, $offset)
            ->get()
            ->getResult();

        return [
            'news'        => $result,
            'total'       => $total,
            'total_pages' => ceil($total / $perPage),
        ];
    }

    public function getCategories(){
        $builder = $this->db->table('master_news_category');
        $builder->select('id, category_name');
        $builder->orderBy('category_name', 'ASC');

        return $builder->get()->getResultArray();
    }

    public function getHeadline(){
        $builder = $this->db->table($this->table);
        $builder->select('news.id, news.title, news.thumbnail, news.excerpt, news.published_at, mns.category_name');
        $builder->join('master_news_category mns', 'mns.id = news.category_id');
        $builder->where('news.void', 0);
        $builder->where('news.is_headline', 1);
        $builder->orderBy('news.published_at', 'DESC');
        $builder->limit(1);

        return $builder->get()->getRow(); // Ambil satu baris sebagai headline
    }


}
