<?php

namespace App\Controllers;

class Pricelists extends BaseController
{
    public function index(): string
    {
        return view('pricelist/index', [
            'title'       => 'Pricelist',
            'activeMenu'  => 'pricelist',
            'jsFiles'     => [
                'assets/adminlte/plugins/jquery/jquery-3.7.1.min.js',
                'assets/js/pricelist.js'
            ],
            'cssFiles'    => [
                'assets/css/style.css',
                'assets/css/pricelist.css'
            ],
            'packages' => [
                [
                    'title' => 'BASIC',
                    'special_offer' => '',
                    'price' => 'IDR 800.000',
                    'category' => 'private',
                    'features' => [
                        'IDENTIFICATION PLATE AND ID',
                        '24/7 CUSTOMER SERVICE',
                        '24/7 EMERGENCY NUMBER',
                        'ACCESS TO EAGLE PROTECT SERVICES',
                        'FAST REACT (under 12 minutes)',
                    ]
                ],
                [
                    'title' => 'BASIC PLUS',
                    'special_offer' => '',
                    'price' => 'IDR 1.500.000',
                    'category' => 'private',
                    'features' => [
                        'IDENTIFICATION PLATE AND ID',
                        '24/7 CUSTOMER SERVICE',
                        '24/7 EMERGENCY NUMBER',
                        'ACCESS TO EAGLE PROTECT SERVICES',
                        'FAST REACT (under 12 minutes)',
                        'BASIC PLUS SURVEILLANCE',
                        'EQUIPMENT PACK INCLUDED',
                        'SURVEILLANCE EQUIPMENT MAINTENANCE AND 24/7 SERVICE',
                    ]
                ],
                [
                    'title' => 'PREMIUM',
                    'special_offer' => '',
                    'price' => 'IDR 2.500.000',
                    'category' => 'private',
                    'features' => [
                        'IDENTIFICATION PLATE AND ID',
                        '24/7 CUSTOMER SERVICE',
                        '24/7 EMERGENCY NUMBER',
                        'ACCESS TO EAGLE PROTECT SERVICES',
                        'PREMIUM FAST REACT (under 7 minutes)',
                        'INCLUDED ON THE PATROL ROUTE',
                        'PREMIUM SURVEILLANCE EQUIPMENT PACK INCLUDED',
                        'LEGAL ASSISTANCE',
                        'PROFESSIONAL TRANSLATOR',
                        'SURVEILLANCE EQUIPMENT MAINTENANCE AND 24/7 SERVICE',
                    ]
                ],
                [
                    'title' => 'PREMIUM PLUS',
                    'special_offer' => '',
                    'price' => 'IDR 4.500.000',
                    'category' => 'private',
                    'features' => [
                        'IDENTIFICATION PLATE AND ID',
                        '24/7 CUSTOMER SERVICE',
                        '24/7 EMERGENCY NUMBER',
                        'ACCESS TO EAGLE PROTECT SERVICES',
                        'INCLUDED ON THE PATROL ROUTE',
                        'PREMIUM PLUS SURVEILLANCE EQUIPMENT',
                        'PACK INCLUDED',
                        'LEGAL ASSISTANCE',
                        'PROFESSIONAL TRANSLATOR',
                        'EAGLE PROTECT ESCORTED AMBULANCE',
                        'HOSPITAL AND INSURANCE COVERAGE PROCEDURES',
                        'SURVEILLANCE EQUIPMENT MAINTENANCE AND 24/7 SERVICE',
                    ]
                ],
                [
                    'title' => 'PROTECTED',
                    'special_offer' => 'LIMITED AVAILABILITY, JOIN THE WAITLIST',
                    'price' => 'IDR 9.500.000',
                    'category' => 'private',
                    'features' => [
                        'IDENTIFICATION PLATE AND ID',
                        'VIP SECURED CONVOY',
                        '24/7 CUSTOMER SERVICE',
                        '24/7 EMERGENCY NUMBER',
                        'PROTECTED SPECIAL RATE EP SERVICES BOOK',
                        'PROTECTED FAST REACT (under 5 minutes)',
                        'INCLUDED ON THE CONTROL ROUTE (higher freq.)',
                        'ACCESS TO AI ADVANCED CCTV ADD ONS',
                        'CONNECTED ALARM SYSTEMS',
                        'SOS SYSTEM INCLUDED (1 units)',
                        'LEGAL ASSISTANCE',
                        'PROFESSIONAL TRANSLATOR',
                        'EAGLE PROTECT FIRST AID',
                        'HOSPITAL AND INSURANCE COVERAGE',
                        'PROCEDURES WITH FAST AMBULANCE SERVICE',
                        'UP TO 10 REGISTERED HEALTHCARE MEMBERS FOR',
                        'FAST HEALTHCARE ASSISTANCE',
                        'SURVEILLANCE EQUIPMENT MAINTENANCE AND 24/7 SERVICE',
                        'NO INTERNET, NO WORRIES; WE’VE GOT YOU COVERED WITH STARLINK'
                    ]
                ],
                [
                    'title' => 'BASIC PACKAGE 1',
                    'special_offer' => '',
                    'price' => 'IDR 381.000',
                    'category' => 'cctv',
                    'features' => [
                        '3 Total Camera',
                        '2 Turret Camera - 2MP',
                        '1 Bullet Camera (Outdoor) - 2MP',
                        'DVR',
                        '1TB HDD',
                        '48H Cloud Backup',
                        'Cable 50 M',
                    ]
                ],
                [
                    'title' => 'BASIC PACKAGE 2',
                    'special_offer' => '',
                    'price' => 'IDR 424.000',
                    'category' => 'cctv',
                    'features' => [
                        '4 Total Camera',
                        '2 Turret Camera - 2MP',
                        '2 Bullet Camera (Outdoor) - 2MP',
                        'DVR',
                        '1TB HDD',
                        '48H Cloud Backup',
                        'Cable 50 M',
                    ]
                ],
                [
                    'title' => 'BASIC PACKAGE 3',
                    'special_offer' => '',
                    'price' => 'IDR 546.000',
                    'category' => 'cctv',
                    'features' => [
                        '5 Total Camera',
                        '3 Turret Camera - 2MP',
                        '2 Bullet Camera (Outdoor) - 2MP',
                        'DVR',
                        '1TB HDD',
                        '48H Cloud Backup',
                        'Cable 50 M',
                    ]
                ],
                [
                    'title' => 'ADVANCE PACKAGE 1',
                    'special_offer' => '',
                    'price' => 'IDR 859.000',
                    'category' => 'cctv',
                    'features' => [
                        '3 Total Camera',
                        '2 Turret Camera - 2MP',
                        '1 Bullet Camera (Outdoor) - 2MP',
                        'DVR',
                        '1TB HDD',
                        '48H Cloud Backup',
                        'Cable 50 M',
                    ]
                ],
                [
                    'title' => 'ADVANCE PACKAGE 2',
                    'special_offer' => '',
                    'price' => 'IDR 1.548.000',
                    'category' => 'cctv',
                    'features' => [
                        '6 Total Camera',
                        '3 Turret Camera - 5MP',
                        '2 Bullet Camera (Outdoor) - 5MP',
                        '1 Dome Camera - 5MP',
                        'DVR',
                        '1TB HDD',
                        '48H Cloud Backup',
                        'Cable 50 M',
                    ]
                ],
                [
                    'title' => 'ADVANCE PACKAGE 3',
                    'special_offer' => '',
                    'price' => 'IDR 546.000',
                    'category' => 'cctv',
                    'features' => [
                        '9 Total Camera',
                        '5 Turret Camera - 5MP',
                        '3 Bullet Camera (Outdoor) - 5MP',
                        '1 Dome Camera - 5MP',
                        'DVR',
                        '2TB HDD',
                        '48H Cloud Backup',
                        'Cable 50 M',
                    ]
                ],
                [
                    'title' => 'PRO PACKAGE 1',
                    'special_offer' => '',
                    'price' => 'IDR 2.384.000',
                    'category' => 'cctv',
                    'features' => [
                        '6 Total Camera',
                        '4 Turret Camera - 2MP',
                        '2 Bullet Camera (Outdoor) - 8.3MP',
                        'DVR',
                        '2TB HDD',
                        '48H Cloud Backup',
                        'Cable 50 M',
                    ]
                ],
                [
                    'title' => 'PRO PACKAGE 2',
                    'special_offer' => '',
                    'price' => 'IDR 4.626.000',
                    'category' => 'cctv',
                    'features' => [
                        '12 Total Camera',
                        '7 Turret Camera - 5MP',
                        '4 Bullet Camera (Outdoor) - 8.3MP',
                        '1 Dome Camera - 8.3MP',
                        'DVR',
                        '2TB HDD',
                        '48H Cloud Backup',
                        'Cable 50 M',
                    ]
                ],
                [
                    'title' => 'PRO PACKAGE 3',
                    'special_offer' => '',
                    'price' => 'On Demand',
                    'sub_title' => 'Custom Solution - Tarlored to Your Needs',
                    'category' => 'cctv',
                    'features' => [
                        'Fully Customizable Setup',
                        'Number and type of cameras (Turret, Bullet, Dome) customized to your property',
                        'DVR and storage options (HDD size and cloud backup) tailored to meet your specific needs',
                        'Flexible cable lengths and other equipment based on your unique requirements',
                    ]
                ],
                [
                    'title' => 'SMALL OFFICE / HOSPITALITY',
                    'special_offer' => '',
                    'price' => 'IDR 1.200.000',
                    'category' => 'corporate',
                    'features' => [
                        '24/7 Customer Service and Emergency Hotline',
                        'Identification Plate and ID',
                        'Constant Surveillance',
                        'Coordination With Local Authorities',
                        'Access to EP Special Rates',
                        'Catalogue (Coming Soon)',
                    ]
                ],
                [
                    'title' => 'MEDIUM OFFICE / HOSPITALITY',
                    'special_offer' => '',
                    'price' => 'IDR 2.500.000',
                    'category' => 'corporate',
                    'features' => [
                        '24/7 Customer Service and Emergency Hotline',
                        'Identification Plate and ID',
                        'Constant Surveillance',
                        'Coordination With Local Authorities',
                        'Guaranteed Response Under 12 Minutes',
                        'Access to EP Special Rates',
                        'Catalogue (Coming Soon)',
                    ]
                ],
                [
                    'title' => 'LARGE OFFICE / HOSPITALITY',
                    'special_offer' => '',
                    'price' => 'IDR 4.500.000',
                    'category' => 'corporate',
                    'features' => [
                       '24/7 Customer Service and Emergency Hotline',
                        'Identification Plate and ID',
                        'Constant Surveillance',
                        'Coordination With Local Authorities',
                        'Guaranteed Response Under 12 Minutes',
                        'Access to EP Special Rates',
                        'Catalogue (Coming Soon)',
                    ]
                ],
                [
                    'title' => 'CUSTOM CORPORATE START FROM',
                    'special_offer' => 'LIMITED AVAILABILITY',
                    'price' => 'IDR 10.000.000',
                    'category' => 'corporate',
                    'features' => [
                        'Priority Services With Under 6 Minutes  Response Time',
                        'All Additional Services Included as Needed, Fully Tailored to The Business Requirements',
                        'Access to Special Rates for Luxury Vehicle Fleet',
                        'Access to Private Jets and Special  Packages for Urgent Travel',
                        'Urgent Vip Escort Organization with Authorities',
                    ]
                ],
                [
                    'title' => '',
                    'special_offer' => '',
                    'price' => 'BY REQUEST ADD-ONS',
                    'category' => 'corporate',
                    'features' => [
                        'SOS Button',
                        'Increased Control Route',
                        'Frequency (Guaranteed response  under 7 minutes)',
                        'CCTV Installation and Customized  Surveillance',
                        'Advanced Alarm Systems (Based On Request)',
                        'Bodyguard Services',
                        'Private Security Details',
                        'In-Place Guard Services',
                        'Legal Assistance',
                        'Professional Translator',
                        'VIP and Special Escort Services',
                        'Emergency Coordination Services',
                        'Hospital and Insurance Coordination',
                        'Emergency Medical Response  Integration',
                        'Escorted Ambulance Services',
                        'Priority Access Services',
                    ]
                ],
                [
                    'title' => 'BASIC PACKAGE 1',
                    'special_offer' => '',
                    'price' => 'IDR 4.112.000',
                    'category' => 'it_acquisition',
                    'features' => [
                        '2 Turret Cameras (2MP)',
                        '1 Bullet Camera (Outdoor, 2MP)',
                        'DVR',
                        '1TB HDD',
                        'Cable 50 M',
                    ],
                    'add_ons' => [
                        'Acquisition Option: Ownership transferred, installation included. Any additional material costs excluded.',
                        'Technician Package: IDR 200,000 / month, includes 2 service visits per month for troubleshooting and emergency repairs (additional equipment charges borne by the client).',
                    ]
                ],
                [
                    'title' => 'BASIC PACKAGE 2',
                    'special_offer' => '',
                    'price' => 'IDR 4.575.000',
                    'category' => 'it_acquisition',
                    'features' => [
                        '2 Turret Cameras (2MP)',
                        '2 Bullet Camera (Outdoor, 2MP)',
                        'DVR',
                        '1TB HDD',
                        'Cable 50 M',
                    ],
                    'add_ons' => [
                        'Acquisition Option: Ownership transferred, installation included. Any additional material costs excluded.',
                        'Technician Package: IDR 200,000 / month, includes 2 service visits per month for troubleshooting and emergency repairs (additional equipment charges borne by the client).'
                    ]
                ],
                [
                    'title' => 'BASIC PACKAGE 3',
                    'special_offer' => '',
                    'price' => 'IDR 5.892.000',
                    'category' => 'it_acquisition',
                    'features' => [
                        '3 Turret Cameras (2MP)',
                        '2 Bullet Camera (Outdoor, 2MP)',
                        'DVR',
                        '1TB HDD',
                        'Cable 50 M',
                    ],
                    'add_ons' => [
                        'Acquisition Option: Ownership transferred, installation included. Any additional material costs excluded.',
                        'Technician Package: IDR 200,000 / month, includes 2 service visits per month for troubleshooting and emergency repairs (additional equipment charges borne by the client).'
                    ]
                ],
                [
                    'title' => 'ADVANCED PACKAGE 1',
                    'special_offer' => '',
                    'price' => 'IDR 9.278.000',
                    'category' => 'it_acquisition',
                    'features' => [
                        '2 Turret Cameras (2MP)',
                        '1 Bullet Camera (Outdoor, 5MP)',
                        'DVR',
                        '2TB HDD',
                        'Cable 50 M',
                    ],
                    'add_ons' => [
                        'Acquisition Option: Ownership transferred, installation included. Any additional material costs excluded.',
                        'Technician Package: IDR 200,000 / month, includes 2 service visits per month for troubleshooting and emergency repairs (additional equipment charges borne by the client).',
                    ]
                ],
                [
                    'title' => 'ADVANCED PACKAGE 2',
                    'special_offer' => '',
                    'price' => 'IDR 16.720.000',
                    'category' => 'it_acquisition',
                    'features' => [
                        '3 Turret Cameras (5MP)',
                        '1 Bullet Camera (Outdoor, 5MP)',
                        'DVR',
                        '2TB HDD',
                        'Cable 50 M',
                    ],
                    'add_ons' => [
                        'Acquisition Option: Ownership transferred, installation included. Any additional material costs excluded.',
                        'Technician Package: IDR 200,000 / month, includes 2 service visits per month for troubleshooting and emergency repairs (additional equipment charges borne by the client).'
                    ]
                ],
                [
                    'title' => 'ADVANCED PACKAGE 3',
                    'special_offer' => '',
                    'price' => 'IDR 26.435.000',
                    'category' => 'it_acquisition',
                    'features' => [
                        '5 Turret Cameras (5MP)',
                        '3 Bullet Camera (Outdoor, 5MP)',
                        'DVR',
                        '1TB HDD',
                        'Cable 50 M',
                    ],
                    'add_ons' => [
                        'Acquisition Option: Ownership transferred, installation included. Any additional material costs excluded.',
                        'Technician Package: IDR 200,000 / month, includes 2 service visits per month for troubleshooting and emergency repairs (additional equipment charges borne by the client).'
                    ]
                ],
                [
                    'title' => 'PRO PACKAGE 1',
                    'special_offer' => '',
                    'price' => 'IDR 25.750.000',
                    'category' => 'it_acquisition',
                    'features' => [
                        '4 Turret Cameras (8.3MP)',
                        '2 Bullet Camera (Outdoor, 8.3MP)',
                        'DVR',
                        '2TB HDD',
                        'Cable 50 M',
                    ],
                    'add_ons' => [
                        'Acquisition Option: Ownership transferred, installation included. Any additional material costs excluded.',
                        'Technician Package: IDR 200,000 / month, includes 2 service visits per month for troubleshooting and emergency repairs (additional equipment charges borne by the client).',
                    ]
                ],
                [
                    'title' => 'PRO PACKAGE 2',
                    'special_offer' => '',
                    'price' => 'IDR 25.750.000',
                    'category' => 'it_acquisition',
                    'features' => [
                        '7 Turret Cameras (5MP)',
                        '4 Bullet Camera (Outdoor, 8.3MP)',
                        '1 Dome Camera (8.3MP)',
                        'DVR',
                        '2TB HDD',
                        'Cable 50 M',
                    ],
                    'add_ons' => [
                        'Acquisition Option: Ownership transferred, installation included. Any additional material costs excluded.',
                        'Technician Package: IDR 200,000 / month, includes 2 service visits per month for troubleshooting and emergency repairs (additional equipment charges borne by the client).'
                    ]
                ],
                [
                    'title' => 'ADVANCED PACKAGE 3',
                    'special_offer' => '',
                    'price' => 'CUSTOM SOLUTION',
                    'category' => 'it_acquisition',
                    'features' => [
                        'Fully Customizable Setup',
                        'Number and type of cameras (Turret, Bullet, Dome) customized to your property',
                        'DVR and storage options (HDD size and cloud backup) tailored to meet your specific needs',
                        'Flexible cable lengths and other equipment based on your unique requirements',
                    ],
                    'add_ons' => [
                        'Acquisition Option: Ownership transferred, installation included. Any additional material costs excluded.',
                        'Technician Package: IDR 200,000 / month, includes 2 service visits per month for troubleshooting and emergency repairs (additional equipment charges borne by the client).'
                    ]
                ],
                [
                    'title' => 'PRICE',
                    'special_offer' => '',
                    'price' => 'IDR 3.000.000',
                    'category' => 'tourist_property',
                    'features' => [
                        'IDENTIFICATION PLATE AND ID',
                        '24/7 CUSTOMER SERVICE',
                        '24/7 EMERGENCY NUMBER',
                        'ACCESS TO EAGLE PROTECT  SERVICES',
                        'FAST REACT (under 12 minutes)',
                    ]
                ],
                [
                    'title' => '',
                    'special_offer' => '',
                    'price' => 'CUSTOMIZED PACKET',
                    'category' => 'tourist_property',
                    'features' => [
                        'From this packet, we offer flexibility and needs from you. After that, our team will discuss it and provide a price according to the requested needs after verification.',
                    ]
                ],
                [
                    'title' => 'BASIC SECURITY OFFICER (STANDARD)',
                    'special_offer' => '',
                    'price' => 'IDR 3.700.000',
                    'category' => 'comp_asset',
                    'features' => [
                        'Includes regulations-compliant uniforms.',
                        '6 Days a Week, 8h per day',
                    ]
                ],
                [
                    'title' => 'EAGLE PROTECT OFFICER (STANDARD)',
                    'special_offer' => '',
                    'price' => 'IDR 6.500.000',
                    'category' => 'comp_asset',
                    'features' => [
                        'Includes regulations-compliant uniforms.',
                        '6 Days a Week, 8h per day',
                    ]
                ],
                [
                    'title' => 'SPECIALIZED SECURITY OFFICER',
                    'special_offer' => '',
                    'price' => 'IDR 8.000.000',
                    'category' => 'comp_asset',
                    'features' => [
                        'Includes regulations-compliant uniforms.',
                        '6 Days a Week, 8h per day',
                    ]
                ],
                [
                    'title' => 'HEAD DIVISION SECURITY OFFICER',
                    'special_offer' => '',
                    'price' => 'IDR 15.000.000',
                    'category' => 'comp_asset',
                    'features' => [
                        'Equipped for arrests and armed duties (available only after comprehensive verification).',
                        '6 Days a Week, 8h per day',
                    ]
                ],
                [
                    'title' => 'EAGLE PROTECT OFFICER (STANDARD)',
                    'special_offer' => '',
                    'price' => 'IDR 6.500.000',
                    'category' => 'comp_asset',
                    'features' => [
                        'Includes regulations-compliant uniforms.',
                        '6 Days a Week, 8h per day',
                    ]
                ],
                [
                    'title' => 'EAGLE PROTECT',
                    'utilities' => 'CYBERSECURITY',
                    'image' => [
                        'assets/img/cyber-tools.png'
                    ],
                    'special_offer' => 'LIMITED AVAILABILITY',
                    'price' => '',
                    'category' => 'by_request',
                    'features' => [
                        'In today’s rapidly evolving digital landscape, advanced cybersecurity is no longer a luxury but a necessity. Eagle Protect introduces EGLNet, a state-of-the-art safety router designed to provide unmatched network protection. Featuring cutting-edge encryption and high-level security technology, EGLNet shields your connection from cyber threats, ensuring your privacy and data are always secure. Experience peace of mind with a device tailored for the challenges of tomorrow.',
                        'Customized pricing and subscription packages available upon request.',
                    ]
                ],
                [
                    'title' => 'EAGLE PROTECT',
                    'utilities' => 'SOS BUTTON',
                    'image' => [
                        'assets/img/sos-tools.png',
                        'assets/img/google-play.png',
                        'assets/img/app-store.png',
                    ],
                    'special_offer' => '',
                    'price' => 'IDR 300.000',
                    'category' => 'by_request',
                    'features' => [
                        'Introducing the SOS Button Service Our SOS Button Service is a premium safety feature designed to provide rapid emergency assistance with unparalleled reliability.',
                    ]
                ],
                [
                    'title' => 'EAGLE PROTECT',
                    'utilities' => 'PERSON OF INTEREST PACKET',
                    'image' => [
                        '',
                    ],
                    'special_offer' => 'LIMITED AVAILABILITY',
                    'price' => '',
                    'category' => 'by_request',
                    'features' => [
                        'Here’s a refined version of the description for your “Person of Interest Packet”:
                        For individuals requiring the highest level of protection, our Person of Interest Packet offers unparalleled security services. Designed for both home and external environments, this package provides maximum backup security, incorporating advanced technologies and customizable solutions.
                        Every service is tailored to the specific needs and locations to be covered. Applications are subject to a thorough verification process to ensure precise customization and effectiveness. Pricing is provided upon request, based on the areas and services required.
                        With Eagle Protect, safeguard your peace of mind with next- generation protection.'
                    ]
                ],
            ]
        ]);        
    }

}