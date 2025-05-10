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
            'project_slides'      => [
                [
                    'id' => 1,
                    'img' => 'rubish-free.png',
                    'title' => 'Rubbish-Free Initiative',
                    'desc' => 'We are committed to enhancing the quality of life and environment in our patrolled areas. Our goal is to collaborate with local communities and authorities to significantly improve street cleanliness, making Bali cleaner and more beautiful for everyone.'
                ],
                [
                    'id' => 2,
                    'img' => 'smart-city.png',
                    'title' => 'Creating a Smart City',
                    'desc' => 'In partnership with Polres Badung, we share the ambitious goal of transforming Bali into a smart, improved, and interconnected city. This initiative is focused on raising safety standards and finding innovative solutions to urban challenges, paving the way for a smarter future.'
                ],
                [
                    'id' => 3,
                    'img' => 'medical-emergency.png',
                    'title' => 'Medical Emergency Response',
                    'desc' => 'Working alongside leading healthcare chains, we are developing a more efficient and effective emergency response network. Our vision is to ensure that every area in Bali has a dedicated response unit, guaranteeing timely care in emergencies and making Bali a worry-free destination for health emergencies.'
                ],
                [
                    'id' => 4,
                    'img' => 'aerial-control.png',
                    'title' => 'Aerial Control',
                    'desc' => 'As part of our commitment to smart city evolution, we are implementing aerial control through drones. This initiative is designed to enhance safety in common areas and streets, manage traffic more effectively, and improve the mobility of all emergency units, including our team, police, and ambulances, all while respecting the privacy of private residences. Aerial control represents a leap forward in responsive and comprehensive urban safety.'
                ],
                [
                    'id' => 5,
                    'img' => 'dummy-layout.png',
                    'title' => 'Dummy Layout',
                    'desc' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'
                ],
                [
                    'id' => 6,
                    'img' => 'dummy-layout.png',
                    'title' => 'Dummy Layout',
                    'desc' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'
                ],
                [
                    'id' => 7,
                    'img' => 'dummy-layout.png',
                    'title' => 'Dummy Layout',
                    'desc' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'
                ],
                [
                    'id' => 8,
                    'img' => 'dummy-layout.png',
                    'title' => 'Dummy Layout',
                    'desc' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'
                ],
            ]
        ]);        
    }

    public function detail(){
        $id = $this->request->getPost('id');

        // Bisa tambahkan pengecekan validasi id jika perlu

        return $this->response->setJSON([
            'redirect' => base_url('projects/detail/' . $id)
        ]);
    }



    public function view($id){
        $project = $this->findProjectById($id);

        if (!$project) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Project not found");
        }

        return view('project/detail', [
            'title' => $project['title'],
            'project' => $project
        ]);
    }


}