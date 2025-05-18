<?php

namespace App\Controllers;

class Contact_Us extends BaseController{
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
        return view('contact_us/index', [
            'title'       => 'Contact Us',
            'activeMenu'  => 'contact_us',
            'jsFiles'     => [
                'assets/adminlte/plugins/jquery/jquery-3.7.1.min.js',
                'assets/js/contact_us.js'
            ],
            'cssFiles'    => [
                'assets/css/style.css',
                'assets/css/contact_us.css',
                'assets/css/service.css'
            ],
            'faqs' => $faqs
        ]); 
    }
    public function submit(){
        helper('email_helper');
        $request = service('request');

        // Validasi input
        $validation = \Config\Services::validation();
        $validation->setRules([
            'fullname' => 'required',
            'company'  => 'required',
            'email'    => 'required|valid_email',
            'message'  => 'required'
        ]);

        if (!$validation->withRequest($request)->run()) {
            return $this->response->setStatusCode(400)->setJSON([
                'status' => 'error',
                'errors' => $validation->getErrors()
            ]);
        }

        // Ambil data
        $data = [
            'fullname' => $request->getPost('fullname'),
            'company'  => $request->getPost('company'),
            'email'    => $request->getPost('email'),
            'phone'    => $request->getPost('phone'),
            'user_message'  => $request->getPost('message'),
        ];

        // Simpan ke database (contoh, jika punya tabel 'contacts')
        $contactModel = new \App\Models\ContactModel();
        $contactModel->insert($data);

        $result = send_contact_email($data);

        if ($result !== true) {
            return $this->response->setStatusCode(500)->setJSON([
                'status' => 'error',
                'message' => 'Failed to send email.',
                'debug'   => $result
            ]);
        }

        // Untuk sekarang kita kirimkan response saja
        return $this->response->setJSON([
            'status'  => 'success',
            'message' => 'Message received. Thank you!',
            'data'    => $data
        ]);
    }
}
