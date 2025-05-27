<?php

namespace App\Models;

use CodeIgniter\Model;

class CareerModel extends Model{
    protected $table = 'careers';
    protected $primaryKey = 'id';
    protected $useSoftDeletes = false; // pakai kolom manual deleted_at
    protected $allowedFields = [
        'title', 'slug', 'type', 'excerpt', 'deadline',
        'published_at', 'void', 'deleted_at', 'created_at', 'updated_at'
    ];

    public function getActiveCareers(){
        return $this->builder()
            ->where('void', 0)
            ->where('deleted_at', null)
            ->where('deadline >=', date('Y-m-d'))
            ->orderBy('published_at', 'DESC')
            ->get()
            ->getResultArray();
    }

    public function getBySlug(string $slug){
        return $this->builder()
            ->where('slug', $slug)
            ->where('deleted_at', null)
            ->get()
            ->getRowArray();
    }

    public function baseBuilder(){
        return $this->db->table($this->table)->select('*');
    }


    public function searchAndFilter(?string $keyword = null, ?string $type = null){
        $builder = $this->baseBuilder()
            ->where('void', 0)
            ->where('deleted_at', null)
            ->where('deadline >=', date('Y-m-d'));

        if ($keyword) {
            $builder->groupStart()
                ->like('title', $keyword)
                ->orLike('excerpt', $keyword)
                ->groupEnd();
        }

        if ($type && in_array($type, ['Full Time', 'Part Time', 'Internship'])) {
            $builder->where('type', $type);
        }

        return $builder->orderBy('published_at', 'DESC')->get()->getResultArray();
    }

}