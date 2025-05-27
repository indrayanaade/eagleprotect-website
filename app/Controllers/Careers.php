<?php

namespace App\Controllers;
use App\Models\CareerModel;

class Careers extends BaseController
{
    public function index(): string{
        $faqs = [
            [
                'id'       => 1,
                'question' => 'What services does Eagle Protect offer?',
                'answer'   => 'Eagle Protect provides professional security services for events, businesses, and private clients. We offer 24/7 surveillance, rapid response teams, VIP escort services, CCTV installation, legal assistance, and more.'
            ],
            [
                'id'       => 2,
                'question' => 'How do I hire security services?',
                'answer'   => 'You can contact us via WhatsApp (+62 858 8660 8888), email (sales@eagleprotect.id), or our website (www.eagleprotect.id) to request a customized security proposal.'
            ],
            [
                'id'       => 3,
                'question' => 'What types of security packages do you offer?',
                'answer'   => 'We offer monthly and annual subscription packages for businesses and individuals, including continuous surveillance, rapid response in under 15 minutes, and coordination with local authorities.'
            ],
            [
                'id'       => 4,
                'question' => 'Can I hire security for a specific event?',
                'answer'   => 'Yes, we provide event security services, including access control, guest monitoring, and standby support units ready to respond to any incident.'
            ],
            [
                'id'       => 5,
                'question' => 'What experience and certifications do your guards have?',
                'answer'   => 'Our guards are KTA certified and receive training in self-defense, first aid, English communication, and advanced security protocols.'
            ],
            [
                'id'       => 6,
                'question' => 'How do you guarantee fast response times?',
                'answer'   => 'We have strategic patrol routes and real-time communication with our mobile units, ensuring response times between 6 to 15 minutes.'
            ],
            [
                'id'       => 7,
                'question' => 'Do you offer additional services?',
                'answer'   => 'Yes, we provide additional services such as panic buttons (SOS), VIP escorts, legal assistance, emergency medical response, professional translation, and more.'
            ],
            [
                'id'       => 8,
                'question' => 'What is the cost of your services?',
                'answer'   => 'Costs vary depending on the chosen package or service. We offer a 10% discount on annual subscriptions. For personalized quotes, please contact us.'
            ],
            [
                'id'       => 9,
                'question' => 'How is payment made?',
                'answer'   => 'Payment must be made at the time of contract signing or before the start of service. We accept payments in IDR and provide flexible payment options based on the contracted service.'
            ],
            [
                'id'       => 10,
                'question' => 'Do you coordinate with authorities?',
                'answer'   => 'Yes, we maintain direct communication with local authorities and emergency services to ensure rapid and efficient responses in any situation.'
            ]

        ];
        return view('career/index', [
            'title'       => 'Careers',
            'activeMenu'  => 'Careers',
            'jsFiles'     => [
                'assets/adminlte/plugins/jquery/jquery-3.7.1.min.js',
                'assets/adminlte/plugins/jquery/jquery-ui.min.js',
                'assets/js/career.js'
            ],
            'cssFiles'    => [
                'assets/css/style.css',
                'assets/css/career.css',
                'assets/css/service.css',
                'assets/adminlte/plugins/jquery/jquery-ui.css'
            ],
            'faqs' => $faqs
        ]);
    }

    public function data()
    {
        $model = new CareerModel();
        $positions = $model->getActiveCareers(); // Semua data posisi aktif

        return $this->response->setJSON($positions);
    }
}