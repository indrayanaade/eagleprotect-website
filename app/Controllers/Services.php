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
            'security_slides'      => [
                [
                    'img' => 'security-01.png',
                    'title' => '24/7 Emergency Number',
                    'desc' => 'Available anytime for immediate assistance, ensuring safety and rapid response.'
                ],
                [
                    'img' => 'security-02.png',
                    'title' => 'Surveillance Equipment Maintenance and 24/7 Service',
                    'desc' => 'Ensuring reliable performance with regular maintenance and round-the-clock support.'
                ],
                [
                    'img' => 'security-03.png',
                    'title' => 'Advanced Alarm System',
                    'desc' => 'Ensuring maximum security with cutting-edge technology and real-time threat detection.'
                ],
                [
                    'img' => 'security-04.png',
                    'title' => 'EAGLE PROTECT Escort',
                    'desc' => 'Providing safe and professional escort services for individuals and high-risk assets.'
                ],
                [
                    'img' => 'security-05.png',
                    'title' => 'Private Security',
                    'desc' => 'Delivering professional protection services tailored to individual and corporate security needs.'
                ],
                [
                    'img' => 'security-06.png',
                    'title' => 'Private Security',
                    'desc' => 'Instant emergency alerts for rapid response and enhanced safety.'
                ],
            ],
            
        ]);        
    }

}