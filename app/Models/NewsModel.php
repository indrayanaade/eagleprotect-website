<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model{
    protected $table = 'news';

    public function getNews(int $page = 1, int $perPage = 6, ?string $category = null, $excludedSlug = null){
        $offset = ($page - 1) * $perPage;

        $builder = $this->db->table($this->table);
        $builder->select('news.id, news.title, news.thumbnail, news.slug, news.excerpt, news.published_at, mns.category_name');
        $builder->join('master_news_category mns', 'mns.id = news.category_id');
        $builder->where('news.void', 0);

        if (!empty($category) && $category !== 'all') {
            $builder->where('mns.category_name', $category);
        }
        if (!empty($excludedSlug)) {
            $builder->where('news.slug !=', $excludedSlug);
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

    public function getNewsBySlug(string $slug){
        return $this->db->table($this->table)
            ->select('news.*, nd.content AS news_content, mna.name AS news_author, mns.category_name')
            ->join('news_detail nd', 'nd.news_id = news.id')
            ->join('master_news_author mna', 'mna.id = nd.author_id')
            ->join('master_news_category mns', 'mns.id = news.category_id')
            ->where('news.slug', $slug)
            ->where('news.void', 0)
            ->get()
            ->getRowArray();
    }

    public function getRelatedNews(string $slug, int $limit = 3){
        return $this->db->table($this->table)
            ->select('news.id, news.slug, mns.category_name, news.title, news.thumbnail, news.excerpt, news.published_at')
            ->join('master_news_category mns', 'mns.id = news.category_id')
            ->where('news.slug !=', $slug)
            ->where('news.void', 0)
            ->orderBy('news.published_at', 'DESC')
            ->limit($limit)
            ->get()
            ->getResultArray();
    }
    public function getRelatedNewsMobile(string $slug, int $limit = 4){
        return $this->db->table($this->table)
            ->select('news.id, news.slug, mns.category_name, news.title, news.thumbnail, news.excerpt, news.published_at')
            ->join('master_news_category mns', 'mns.id = news.category_id')
            ->where('news.slug !=', $slug)
            ->where('news.void', 0)
            ->orderBy('news.published_at', 'DESC')
            ->limit($limit)
            ->get()
            ->getResultArray();
    }

    public function getHeadlineWithSlug(){
        return $this->db->table($this->table)
            ->select('news.*, mns.category_name')
            ->join('master_news_category mns', 'mns.id = news.category_id')
            ->where('news.is_headline', 1)
            ->where('news.void', 0)
            ->orderBy('news.published_at', 'DESC')
            ->limit(1)
            ->get()
            ->getRow(); // <-- stdClass, akses pakai $headline->slug
    }

}
