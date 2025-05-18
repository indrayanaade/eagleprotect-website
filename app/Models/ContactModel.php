<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactModel extends Model
{
    protected $table            = 'contacts_us';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;

    protected $allowedFields = [
        'fullname',
        'company',
        'email',
        'phone',
        'message'
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';

    // Aturan Validasi
    protected $validationRules = [
        'fullname' => 'required|min_length[3]',
        'company'  => 'required|min_length[2]',
        'email'    => 'required|valid_email',
        'message'  => 'required|min_length[5]',
        // 'phone'    => 'permit_empty|numeric|exact_length[13]'
    ];

    protected $validationMessages = [
       'fullname' => [
            'required'    => 'Full name is required.',
            'min_length'  => 'Full name must be at least 3 characters long.'
        ],
        'company' => [
            'required'    => 'Company name is required.',
            'min_length'  => 'Company name must be at least 2 characters long.'
        ],
        'email' => [
            'required'    => 'Email address is required.',
            'valid_email' => 'Please enter a valid email address.'
        ],
        'message' => [
            'required'    => 'Message is required.',
            'min_length'  => 'Message must be at least 5 characters long.'
        ],
        // 'phone' => [
        //     'numeric'        => 'Phone number must contain only numbers.',
        //     'exact_length'   => 'Phone number must be exactly 13 digits.',
        // ]

    ];

    protected $skipValidation = false;
}
