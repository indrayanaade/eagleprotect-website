<?php

namespace App\Controllers;
use CodeIgniter\Encryption\Encryption;

class Services extends BaseController
{
    public function index(): string{
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
            'security_slides'      => [
                [
                    'id' => 1,
                    'img' => 'security-01.png',
                    'title' => '24/7 Emergency Number',
                    'desc' => 'Available anytime for immediate assistance, ensuring safety and rapid response.'
                ],
                [
                    'id' => 2,
                    'img' => 'security-02.png',
                    'title' => 'Surveillance Equipment Maintenance and 24/7 Service',
                    'desc' => 'Ensuring reliable performance with regular maintenance and round-the-clock support.'
                ],
                [
                    'id' => 3,
                    'img' => 'security-03.png',
                    'title' => 'Advanced Alarm System',
                    'desc' => 'Ensuring maximum security with cutting-edge technology and real-time threat detection.'
                ],
                [
                    'id' => 4,
                    'img' => 'security-04.png',
                    'title' => 'EAGLE PROTECT Escort',
                    'desc' => 'Providing safe and professional escort services for individuals and high-risk assets.'
                ],
                [
                    'id' => 5,
                    'img' => 'security-05.png',
                    'title' => 'Private Security',
                    'desc' => 'Delivering professional protection services tailored to individual and corporate security needs.'
                ],
                [
                    'id' => 6,
                    'img' => 'security-06.png',
                    'title' => 'Private Security',
                    'desc' => 'Instant emergency alerts for rapid response and enhanced safety.'
                ],
            ],
            'legal_slides' => [
                [
                    'id' => 1,
                    'img' => 'legal-01.png',
                    'title' => 'General Legal Services',
                ],
                [
                    'id' => 2,
                    'img' => 'legal-02.png',
                    'title' => 'Legal Assistance',
                ],
                [
                    'id' => 3,
                    'img' => 'legal-03.png',
                    'title' => 'Official Translator',
                ],
            ],
            'healthcare_slides' => [
                [
                    'id' => 1,
                    'img' => 'healthcare-01.png',
                    'title' => 'Eagle Protect Escorted Ambulance',
                ],
                [
                    'id' => 2,
                    'img' => 'healthcare-02.png',
                    'title' => 'Hospital and Insurance Coverage Procedures',
                ],
                [
                    'id' => 3,
                    'img' => 'healthcare-03.png',
                    'title' => 'Motorbike Ambulance',
                ],
                [
                    'id' => 4,
                    'img' => 'healthcare-04.png',
                    'title' => 'Pre-Registered Healthcare Members',
                ],
            ]
            
        ]);        
    }

    /*public function detail(){
        $request = service('request');
        $encrypter = \Config\Services::encrypter();
        $id = $request->getPost('id');
        $type = $request->getPost('type');

        if (!$id || !$type) {
            return $this->response->setStatusCode(400)->setJSON([
                'error' => 'Missing ID or type'
            ]);
        }

        $encryptedID = bin2hex($encrypter->encrypt($id));
        // Arahkan ke URL detail dengan parameter
        return $this->response->setJSON([
            'redirect' => base_url("services/detail/{$encryptedID}/{$type}")
        ]);
    }

    // Untuk handle halaman detail yang sebenarnya
    public function showDetail($encryptedID = null, $type = null){
        $encrypter = \Config\Services::encrypter();
        $type = strtolower($type);

        try {
            $id = $encrypter->decrypt(hex2bin($encryptedID));
        } catch (\Exception $e) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Invalid ID.");
        }

        if (!$id || !$type) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("ID atau Type kosong.");
        }

        switch ($type) {
            case 'security':
                $packages = [
                    'id' => $id,
                    'type' => $type,
                    'packages_name' => 'Private Class',
                    'description' => 'Khusus 1 peserta',
                ];
                break;
            case 'legal':
                $packages = [
                    'id' => $id,
                    'type' => $type,
                    'packages_name' => 'Private Class',
                    'description' => 'Khusus 1 peserta',
                ];
                break;
            case 'healthcare':
                $packages = [
                    'id' => $id,
                    'type' => $type,
                    'packages_name' => 'Group Class',
                    'description' => 'Untuk 5-10 orang',
                ];
                break;
            default:
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Unknown service type.");
        }

        return view('service/service_detail', $packages);
    }*/
    public function detail(){
        $request = service('request');
        $id = $request->getPost('id');
        $type = $request->getPost('type');

        if (!$id || !$type) {
            return $this->response->setStatusCode(400)->setJSON([
                'error' => 'Missing ID or type'
            ]);
        }

        // Arahkan ke URL detail dengan parameter
        return $this->response->setJSON([
            'redirect' => base_url("services/detail/{$id}/{$type}")
        ]);
    }

    // Untuk handle halaman detail yang sebenarnya
    public function showDetail($id = null, $type = null){
        if (!$id || !$type) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("ID atau Type kosong.");
        }

        switch ($type) {
            case 'security':
                $packages = [
                    'id' => $id,
                    'type' => $type,
                    'packages_name' => 'Private Class',
                    'description' => 'Khusus 1 peserta',
                ];
                break;
            case 'legal':
                $packages = [
                    'id' => $id,
                    'type' => $type,
                    'packages_name' => 'Private Class',
                    'description' => 'Khusus 1 peserta',
                ];
                break;
            case 'healthcare':
                $packages = [
                    'id' => $id,
                    'type' => $type,
                    'packages_name' => 'Group Class',
                    'description' => 'Untuk 5-10 orang',
                ];
                break;
            default:
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Unknown service type.");
        }

        return view('service/service_detail', $packages);
    }

}