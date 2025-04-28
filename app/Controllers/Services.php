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

        $packages = [];

        switch ($type) {
            case "security":
                $packages = [
                    // "id" => $id, // untuk backend nanti
                    "type" => $type,
                    "img" => "",
                    "img_mobile" => "",
                    "tagline" => "Security Service",
                    "packages_name" => "Security Service",
                    "description" => "Security",
                ];
                break;

            case "legal":
                $allPackages = [
                    [
                        "id" => 1,
                        "img" => "general-legal-service.png",
                        "img_mobile" => "legal-01-mobile.png",
                        "type" => $type,
                        "tagline" => "Legal Service",
                        "packages_name" => "GENERAL LEGAL SERVICE",
                        "description" => "Eagle Protect's General Legal Service offers comprehensive legal assistance to ensure that businesses, organizations, and individuals remain compliant with applicable laws and regulations. Our team of experienced legal professionals provides expert advice on various legal matters, including corporate law, employment law, contracts, and compliance issues. By utilizing our services, clients can mitigate legal risks, avoid costly disputes, and operate with confidence in an ever-changing legal landscape. \n
                                            One of the key aspects of our General Legal Service is contract drafting and review. We assist clients in preparing legally sound contracts that protect their interests and align with industry standards. Whether it's a partnership agreement, supplier contract, or employment agreement, our legal experts carefully analyze every clause to ensure fairness and enforceability. This proactive approach helps clients avoid potential conflicts and safeguard their business relationships. \n
                                            Another crucial area of our legal service is regulatory compliance. Companies must adhere to a variety of local and international regulations, depending on their industry and operational scope. Our legal team helps businesses stay up to date with legal requirements, providing guidance on matters such as licensing, tax obligations, environmental laws, and industry-specific compliance. By staying compliant, organizations can prevent penalties and maintain a positive reputation. \n
                                            In addition to compliance and contract law, our General Legal Service also covers dispute resolution and legal representation. We assist clients in resolving disputes through negotiation, mediation, or litigation when necessary. Our skilled legal team works diligently to achieve favorable outcomes, minimizing financial losses and reputational damage. Whether dealing with internal conflicts, customer disputes, or legal claims, Eagle Protect ensures that our clients receive the best possible legal support. \n
                                            Ultimately, our General Legal Service is designed to provide peace of mind to businesses and individuals alike. We believe that legal security is a crucial foundation for success, and our services are tailored to meet the specific needs of each client. By choosing Eagle Protect, clients gain access to top-tier legal expertise, ensuring that they can navigate legal challenges effectively while focusing on growth and development."
                    ],
                    [
                        "id" => 2,
                        "img" => "legal-service.png",
                        "img_mobile" => "legal-02-mobile.png",
                        "type" => $type,
                        "packages_name" => "LEGAL ASSISTANCE",
                        "description" => "At Eagle Protect, we understand that security goes beyond physical protection. That’s why we offer Legal Assistance, a comprehensive service integrated into all our security solutions. This service ensures that every aspect of our protection follows legal regulations, providing our clients with peace of mind and full compliance with the law. \n
                                            Our Legal Assistance service supports clients in handling security-related legal matters, including compliance with local regulations, incident documentation, and legal consultation. Whether for event security, private protection, or corporate safety, our team ensures that all operations align with the latest legal requirements. \n
                                            We work closely with legal professionals to offer expert guidance in risk management and incident response. In case of security breaches or disputes, our legal support team is ready to provide professional advice and assistance, ensuring the best possible outcome for our clients. \n
                                            By integrating Legal Assistance into our security services, we help clients navigate complex legal frameworks, avoid potential legal risks, and maintain a strong legal standing. Our commitment to legality and professionalism enhances the overall effectiveness and reliability of our protection services. \n
                                            At Eagle Protect, security and legality go hand in hand. Our Legal Assistance service reflects our dedication to providing not just protection, but also legal assurance, allowing our clients to focus on their core activities with confidence."
                    ],
                    [
                        "id" => 3,
                        "img" => "official-translator.png",
                        "img_mobile" => "legal-03-mobile.png",
                        "type" => $type,
                        "tagline" => "Legal Service",
                        "packages_name" => "OFFICIAL TRANSLATOR",
                        "description" => "Eagle Protect's Official Translator Service provides professional and certified translation solutions for businesses, government agencies, and individuals. Our team of experienced translators ensures that every document is accurately translated while maintaining the integrity and context of the original content. Whether it's legal documents, contracts, business reports, or official certificates, we guarantee high-quality translations that meet international standards. \n
                        One of the key benefits of our Official Translator Service is its legal validity. Many documents require certified translations to be accepted by government institutions, embassies, or legal entities. Our translators are officially recognized and authorized to provide certified translations, ensuring that clients receive documents that are legally valid and can be used for official purposes, such as visa applications, business registrations, or court proceedings. \n
                        Accuracy and confidentiality are at the core of our service. We understand the importance of precise translations, especially for sensitive documents such as contracts, financial statements, and legal agreements. Our team follows strict quality control procedures, ensuring that translations are not only linguistically accurate but also culturally appropriate. Additionally, we uphold strict confidentiality policies to protect our clients' information. \n
                        Another essential aspect of our Official Translator Service is multilingual support. We provide translations in multiple languages to cater to the needs of businesses and individuals operating in global markets. Whether it's translating corporate documents for international expansion or personal documents for immigration purposes, our service ensures smooth communication across language barriers. \n
                        By choosing Eagle Protect's Official Translator Service, clients can be confident that their documents are professionally translated and officially recognized. We combine expertise, precision, and confidentiality to deliver translations that meet the highest standards. With our support, businesses and individuals can navigate international procedures with ease, ensuring compliance and effective communication in any official setting."
                    ],
                ];

                // Ambil yang sesuai dengan ID
                $filtered = array_filter($allPackages, function ($item) use ($id) {
                    return $item['id'] == $id;
                });

                // Reset index dan ambil pertama (karena hasilnya bisa array dengan 1 elemen)
                $filtered = array_values($filtered);

                if (empty($filtered)) {
                    throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Paket tidak ditemukan.");
                }

                $packages = $filtered[0];
                break;

            case "healthcare":
                $allPackages = [
                    [
                        "id" => 1,
                        "img" => "escorted-ambulance.png",
                        "img_mobile" => "healthcare-01-mobile.png",
                        "type" => $type,
                        "tagline" => "Healthcare Service",
                        "packages_name" => "General Legal Service",
                        "description" => "Eagle Protect’s Escorted Ambulance Service is a premium healthcare solution that ensures the safe and efficient transportation of individuals requiring medical assistance. Whether it's for emergency situations or non-emergency medical transfers, our escorted ambulance service guarantees that patients receive the highest level of care during transport. Our trained paramedics, equipped with advanced medical equipment, accompany every patient to provide immediate medical attention and ensure comfort throughout the journey. \n
                                        The Escorted Ambulance Service is available for both local and long-distance transfers. We understand that patients in need of medical attention often require immediate, reliable, and secure transportation. With our ambulances equipped with state-of-the-art medical equipment and staffed by experienced healthcare professionals, we offer peace of mind to both patients and their families, ensuring that medical needs are addressed promptly and efficiently. \n
                                        One of the key benefits of our Escorted Ambulance Service is the availability of highly trained paramedics and emergency medical technicians (EMTs). These professionals are skilled in handling a wide range of medical conditions and emergencies, from basic first aid to advanced life support. They are always ready to respond to any situation, ensuring that the patient’s condition is monitored and managed effectively during transit. \n
                                        Eagle Protect’s Escorted Ambulance Service also prioritizes patient comfort. Our ambulances are designed to offer a comfortable environment, with reclining stretchers, oxygen support, and medical monitoring systems in place to make the transport as smooth as possible. We aim to provide a seamless experience for patients and their families, ensuring that the journey is not only medically secure but also as comfortable as possible. \n
                                        By choosing Eagle Protect's Escorted Ambulance Service, you can rest assured that your loved ones are in safe hands. Our commitment to professionalism, medical expertise, and compassionate care ensures that patients receive the highest standard of care during transport. Whether it’s for routine medical transfers or emergency situations, we are dedicated to providing the best possible service to meet the unique needs of every patient."
                    ],
                    [
                        "id" => 2,
                        "img" => "life-insurance.png",
                        "img_mobile" => "healthcare-02-mobile.png",
                        "type" => $type,
                        "tagline" => "Healthcare Service",
                        "packages_name" => "HOSPITAL AND INSURANCE COVERAGE PROCEDURES",
                        "description" => "Eagle Protect’s Hospital and Insurance Coverage Procedures ensure that clients receive seamless assistance in navigating medical treatments and insurance claims. We provide guidance on hospital admissions, treatment processes, and the coordination of insurance coverage to ensure that patients receive the medical care they need without financial stress. Our experienced team works directly with hospitals and insurance providers to streamline the procedures, ensuring that clients are fully informed of their rights and the steps to follow for reimbursement or coverage approvals. \n
                                        Our Hospital and Insurance Coverage Procedures begin with the initial assessment of the patient's medical needs. We help clients identify the best hospitals that offer the required treatments and services, ensuring that they receive high-quality care. Our team also assists with the pre-authorization process, working with insurance companies to ensure that treatments are covered before hospitalization or procedures begin. This proactive approach helps minimize delays and ensures that clients are not faced with unexpected medical bills. \n
                                        We also provide support during the hospitalization process. Our team helps coordinate communication between the hospital and insurance providers, ensuring that all necessary documents, such as medical reports, treatment plans, and invoices, are submitted accurately and promptly. We understand that managing healthcare logistics can be overwhelming, and our goal is to reduce the burden on the patient and their family by handling the procedural details and paperwork efficiently. \n
                                        In addition to managing hospital admissions and treatment coverage, our Hospital and Insurance Coverage Procedures also assist with insurance claims and reimbursement processes. We guide clients through the steps of filing claims, ensuring that all necessary documentation is properly submitted. If there are any issues with claims approval, we work closely with the insurance providers to resolve them quickly and effectively, ensuring that clients are reimbursed for eligible expenses without unnecessary delays. \n
                                        By choosing Eagle Protect’s Hospital and Insurance Coverage Procedures, clients can rest assured that they will receive comprehensive support throughout their healthcare journey. We are committed to simplifying the often complex procedures involved with hospital admissions, insurance claims, and treatment coverage, ensuring that patients receive the best care possible while minimizing financial challenges."
                    ],
                    [
                        "id" => 3,
                        "img" => "motorbike-ambulance.png",
                        "img_mobile" => "healthcare-03-mobile.png",
                        "type" => $type,
                        "tagline" => "Healthcare Service",
                        "packages_name" => "MOTORBIKE AMBULANCE",
                        "description" => "Eagle Protect’s Motorbike Ambulance service provides a rapid and efficient emergency medical response, particularly in congested areas where conventional ambulances may face delays due to traffic. Designed to navigate through heavy traffic and reach patients quickly, the motorbike ambulance is a valuable tool in emergency medical care, especially in urban settings or areas with narrow roads and high population density. Our highly trained paramedics on motorbikes are equipped with essential medical supplies to provide immediate care until the patient can be transferred to a full-service hospital if necessary. \n
                                        The Motorbike Ambulance service is ideal for situations requiring fast response times, such as accidents, heart attacks, strokes, or other critical medical emergencies. The motorbike's agility allows our medical team to bypass traffic and reach the patient much faster than traditional ambulances. This swift service can be life-saving, particularly in time-sensitive situations where every second counts. \n
                                        Equipped with portable medical equipment, including oxygen, defibrillators, and basic life-saving tools, our motorbike ambulances provide essential care on the spot. The paramedics are trained in advanced first aid and emergency medical procedures, ensuring that the patient receives high-quality care during transportation. The team assesses the patient's condition and provides immediate interventions to stabilize their health before further medical treatment is provided at a hospital. \n
                                        In addition to offering swift medical care, the Motorbike Ambulance service is also beneficial for non-emergency medical situations, such as transporting patients with minor injuries or requiring quick medical attention. This service helps free up traditional ambulances for more critical cases, optimizing the efficiency of emergency medical services. \n
                                        Choosing Eagle Protect’s Motorbike Ambulance service means opting for speed, efficiency, and expert medical care in critical situations. Whether in an emergency or a non-emergency scenario, our motorbike ambulances offer a unique and efficient solution that ensures patients receive timely medical assistance, no matter the circumstances."
                    ],
                    [
                        "id" => 4,
                        "img" => "healthcare-member.png",
                        "img_mobile" => "healthcare-04-mobile.png",
                        "type" => $type,
                        "tagline" => "Healthcare Service",
                        "packages_name" => "PRE-REGISTERED HEALTHCARE MEMBERS",
                        "description" => "Eagle Protect’s Pre-Registered Healthcare Members program offers a streamlined healthcare experience for individuals who register with us in advance. This service provides members with exclusive access to a range of medical services, including priority medical treatment, consultations, and emergency services. By pre-registering, members ensure that their medical needs are addressed efficiently, allowing for faster response times during emergencies and easier access to healthcare services without delays. The program is designed to prioritize the health and well-being of our members by providing them with a hassle-free experience whenever medical assistance is required. \n
                                        Our Pre-Registered Healthcare Members enjoy several benefits, such as reduced waiting times, direct access to healthcare professionals, and priority appointments for medical consultations. Members are also eligible for personalized health assessments and preventive care plans, tailored to their specific health needs. The pre-registration process allows us to have your medical history on file, ensuring that our healthcare providers are fully aware of your health conditions and treatment preferences before delivering care. This results in more efficient, personalized, and effective medical services. \n
                                        In emergency situations, our Pre-Registered Healthcare Members are given priority over non-registered individuals, ensuring that they receive immediate medical attention. Whether it's an ambulance dispatch or a medical consultation, the pre-registration process ensures a smoother and faster process, allowing members to receive the care they need without unnecessary delays. This service is especially beneficial for individuals with chronic conditions, the elderly, or those who require frequent medical attention. \n
                                        The Pre-Registered Healthcare Members program is also linked to our network of hospitals, clinics, and specialists, offering members discounts and exclusive packages for medical treatments. This ensures that they receive top-quality care at a reduced cost, making healthcare more accessible and affordable. Additionally, our team provides members with ongoing support and health monitoring, ensuring they stay on track with their health goals. \n
                                        By becoming a Pre-Registered Healthcare Member with Eagle Protect, you are taking a proactive step in securing your health and well-being. Our program provides peace of mind knowing that you have access to timely, high-quality healthcare services whenever you need them. It’s a simple, efficient, and effective way to stay ahead in managing your health."
                    ]
                ];

                $filtered = array_filter($allPackages, function ($item) use ($id) {
                    return $item['id'] == $id;
                });

                $filtered = array_values($filtered);

                if (empty($filtered)) {
                    throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Paket tidak ditemukan.");
                }

                $packages = $filtered[0];
                break;

            default:
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Unknown service type.");
        }

        $faqs = [
            [
                'id'       => 1,
                'question' => 'What services does Eagle Protect offer?',
                'answer'   => 'We offer security services, general legal services, and risk assessment solutions tailored to your needs.'
            ],
            [
                'id'       => 2,
                'question' => 'How do I hire security services?',
                'answer'   => 'You can contact us directly via our website or phone number to get started with a consultation.'
            ],
            [
                'id'       => 3,
                'question' => 'What types of security packages do you offer?',
                'answer'   => 'You can contact us directly via our website or phone number to get started with a consultation.'
            ],
            [
                'id'       => 4,
                'question' => 'Can I hire security for a specific event?',
                'answer'   => 'You can contact us directly via our website or phone number to get started with a consultation.'
            ],
            [
                'id'       => 5,
                'question' => 'What experience and certifications do your guards have?',
                'answer'   => 'You can contact us directly via our website or phone number to get started with a consultation.'
            ],
            [
                'id'       => 6,
                'question' => 'How do you guarantee fast response times?',
                'answer'   => 'We offer security services, general legal services, and risk assessment solutions tailored to your needs.'
            ],
            [
                'id'       => 7,
                'question' => 'Do you offer additional services?',
                'answer'   => 'You can contact us directly via our website or phone number to get started with a consultation.'
            ],
            [
                'id'       => 8,
                'question' => 'What is the cost of your services?',
                'answer'   => 'You can contact us directly via our website or phone number to get started with a consultation.'
            ],
            [
                'id'       => 9,
                'question' => 'How is payment made?',
                'answer'   => 'You can contact us directly via our website or phone number to get started with a consultation.'
            ],
            [
                'id'       => 10,
                'question' => 'Do you coordinate with authorities?',
                'answer'   => 'You can contact us directly via our website or phone number to get started with a consultation.'
            ]

        ];

        return view('service/service_detail', array_merge([
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
            'faqs' => $faqs
        ], $packages));        
    }
}