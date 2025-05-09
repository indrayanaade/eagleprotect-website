<?php

namespace App\Controllers;

class Projects extends BaseController
{
    public function index(): string{
        return view('project/index', [
            'title'       => 'Projects',
            'activeMenu'  => 'Projects',
            'jsFiles'     => [
                'assets/adminlte/plugins/jquery/jquery-3.7.1.min.js',
                'assets/js/project.js'
            ],
            'cssFiles'    => [
                'assets/css/style.css',
                'assets/css/project.css'
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
}