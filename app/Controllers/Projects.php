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
                    'title' => 'Rubbish Free Initiative',
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

        if (!$id || !is_numeric($id)) {
            return $this->response->setJSON([
                'error' => true,
                'message' => 'Invalid ID'
            ])->setStatusCode(400);
        }

        return $this->response->setJSON([
            'redirect' => base_url('projects/view/' . $id)
        ]);
    }

    public function view($id){
        $projects = [
            1 => [
                "title"        => "Rubbish Free Initiative",
                "cover_image"  => "rubbish-free-projects.png",
                "content"      => [
                    "main" => "The Growing Waste Problem in Bali and Its Environmental Impact",
                    "main_desc" => "Bali, known for its stunning beaches and vibrant culture, has been facing a growing waste management crisis in recent years. Rapid tourism growth and increasing urbanization have led to a surge in plastic waste, food scraps, and non-biodegradable materials piling up in streets, rivers, and beaches. While some efforts have been made to address the issue, inadequate waste disposal infrastructure and lack of public awareness continue to exacerbate the problem. As a result, Bali struggles to maintain its reputation as a paradise island, as unchecked pollution threatens both its environment and its tourism-dependent economy. \n
                    One of the most significant consequences of improper waste management is its impact on Bali’s marine ecosystem. Plastics and other pollutants often end up in the ocean, harming marine life and disrupting fragile ecosystems. Sea turtles, fish, and seabirds frequently ingest plastic waste, leading to fatal health complications. Coral reefs, which are crucial to marine biodiversity and attract millions of tourists, are also suffering from pollution-induced degradation. As waste continues to accumulate in Bali’s waters, the island risks losing its natural beauty and the ecological balance that sustains both wildlife and local communities. \n
                    Beyond its environmental impact, waste pollution poses serious health risks to Bali’s residents and visitors. Accumulated garbage creates breeding grounds for mosquitoes, increasing the spread of diseases such as dengue fever and malaria. Open dumping sites and burning waste release harmful toxins into the air, contributing to respiratory illnesses. In addition, contaminated water sources from improperly discarded waste can lead to gastrointestinal infections and other waterborne diseases. Without immediate intervention, these health hazards will continue to affect Bali’s growing population and the millions of tourists who visit each year. \n
                    The issue of waste pollution in Bali is not just an environmental and health crisis but also a socio-economic concern. Poor waste management diminishes the island’s appeal as a world-class tourist destination, affecting local businesses and livelihoods. Hotels, restaurants, and tourism operators struggle to maintain high standards as beaches and public spaces become littered with trash. Moreover, waste-related disasters, such as recent landfill collapses, further highlight the urgent need for effective solutions. Addressing this crisis requires a collaborative effort from the government, businesses, and the community to implement sustainable waste management practices and promote environmental responsibility. \n\n",
                    "extra" => "Eagle Protects Commitment to Cleanliness and Safety",
                    "extra_desc" => "Eagle Protect is dedicated to maintaining cleanliness in every area under its patrol. As a security service provider, we recognize that a safe environment is also a clean one. Our team actively monitors public spaces, reporting and addressing waste issues to ensure that our surroundings remain well-maintained. By collaborating with local authorities and community groups, we aim to enhance cleanliness and uphold high environmental standards. Our efforts go beyond security, as we strive to protect not only people but also the beauty of Bali, ensuring a pleasant atmosphere for residents and visitors alike. \n
                    Eagle Protect is committed to making Bali a safer, cleaner, and more comfortable place for everyone. As part of our initiatives, we conduct regular clean-up activities in public spaces, encourage responsible waste disposal, and raise awareness about the importance of environmental sustainability. Our patrol teams help prevent illegal dumping and educate the community on maintaining cleanliness. By integrating security with environmental responsibility, we take an active role in preserving Bali’s natural beauty, reinforcing our mission to safeguard both the people and the environment of this island paradise. \n\n",
                ],
                "info" => [
                    "date"     => "23th May, 2025",
                    "location" => "Kedonganan, Beach",
                    "time"     => "10:00 am – end"
                ],
                "organizer" => [
                    "name"   => "Agus Silalahi",
                    "title"  => "Eagle Project Head",
                    "phone"  => "0812 1212 1212 1212",
                    "photo" => "team/sample.png"
                ]
            ],
            2 => [
                "title"        => "Smart City",
                "cover_image"  => "smart-city.png",
                "content"      => [
                    "main" => "The Growing Waste Problem in Bali and Its Environmental Impact",
                    "main_desc" => "Bali, known for its stunning beaches and vibrant culture, has been facing a growing waste management crisis in recent years. Rapid tourism growth and increasing urbanization have led to a surge in plastic waste, food scraps, and non-biodegradable materials piling up in streets, rivers, and beaches. While some efforts have been made to address the issue, inadequate waste disposal infrastructure and lack of public awareness continue to exacerbate the problem. As a result, Bali struggles to maintain its reputation as a paradise island, as unchecked pollution threatens both its environment and its tourism-dependent economy. \n
                    One of the most significant consequences of improper waste management is its impact on Bali’s marine ecosystem. Plastics and other pollutants often end up in the ocean, harming marine life and disrupting fragile ecosystems. Sea turtles, fish, and seabirds frequently ingest plastic waste, leading to fatal health complications. Coral reefs, which are crucial to marine biodiversity and attract millions of tourists, are also suffering from pollution-induced degradation. As waste continues to accumulate in Bali’s waters, the island risks losing its natural beauty and the ecological balance that sustains both wildlife and local communities. \n
                    Beyond its environmental impact, waste pollution poses serious health risks to Bali’s residents and visitors. Accumulated garbage creates breeding grounds for mosquitoes, increasing the spread of diseases such as dengue fever and malaria. Open dumping sites and burning waste release harmful toxins into the air, contributing to respiratory illnesses. In addition, contaminated water sources from improperly discarded waste can lead to gastrointestinal infections and other waterborne diseases. Without immediate intervention, these health hazards will continue to affect Bali’s growing population and the millions of tourists who visit each year. \n
                    The issue of waste pollution in Bali is not just an environmental and health crisis but also a socio-economic concern. Poor waste management diminishes the island’s appeal as a world-class tourist destination, affecting local businesses and livelihoods. Hotels, restaurants, and tourism operators struggle to maintain high standards as beaches and public spaces become littered with trash. Moreover, waste-related disasters, such as recent landfill collapses, further highlight the urgent need for effective solutions. Addressing this crisis requires a collaborative effort from the government, businesses, and the community to implement sustainable waste management practices and promote environmental responsibility. \n\n",
                    "extra" => "Eagle Protects Commitment to Cleanliness and Safety",
                    "extra_desc" => "Eagle Protect is dedicated to maintaining cleanliness in every area under its patrol. As a security service provider, we recognize that a safe environment is also a clean one. Our team actively monitors public spaces, reporting and addressing waste issues to ensure that our surroundings remain well-maintained. By collaborating with local authorities and community groups, we aim to enhance cleanliness and uphold high environmental standards. Our efforts go beyond security, as we strive to protect not only people but also the beauty of Bali, ensuring a pleasant atmosphere for residents and visitors alike. \n
                    Eagle Protect is committed to making Bali a safer, cleaner, and more comfortable place for everyone. As part of our initiatives, we conduct regular clean-up activities in public spaces, encourage responsible waste disposal, and raise awareness about the importance of environmental sustainability. Our patrol teams help prevent illegal dumping and educate the community on maintaining cleanliness. By integrating security with environmental responsibility, we take an active role in preserving Bali’s natural beauty, reinforcing our mission to safeguard both the people and the environment of this island paradise. \n\n",
                ],
                "info" => [
                    "date"     => "23th May, 2025",
                    "location" => "Kedonganan, Beach",
                    "time"     => "10:00 am – end"
                ],
                "organizer" => [
                    "name"   => "Agus Silalahi",
                    "title"  => "Eagle Project Head",
                    "phone"  => "0812 1212 1212 1212",
                    "photo" => "team/sample.png"
                ]
            ],
            3 => [
                "title"        => "Medical Emergency Response",
                "cover_image"  => "medical-emergency.png",
                "content"      => [
                    "main" => "The Growing Waste Problem in Bali and Its Environmental Impact",
                    "main_desc" => "Bali, known for its stunning beaches and vibrant culture, has been facing a growing waste management crisis in recent years. Rapid tourism growth and increasing urbanization have led to a surge in plastic waste, food scraps, and non-biodegradable materials piling up in streets, rivers, and beaches. While some efforts have been made to address the issue, inadequate waste disposal infrastructure and lack of public awareness continue to exacerbate the problem. As a result, Bali struggles to maintain its reputation as a paradise island, as unchecked pollution threatens both its environment and its tourism-dependent economy. \n
                    One of the most significant consequences of improper waste management is its impact on Bali’s marine ecosystem. Plastics and other pollutants often end up in the ocean, harming marine life and disrupting fragile ecosystems. Sea turtles, fish, and seabirds frequently ingest plastic waste, leading to fatal health complications. Coral reefs, which are crucial to marine biodiversity and attract millions of tourists, are also suffering from pollution-induced degradation. As waste continues to accumulate in Bali’s waters, the island risks losing its natural beauty and the ecological balance that sustains both wildlife and local communities. \n
                    Beyond its environmental impact, waste pollution poses serious health risks to Bali’s residents and visitors. Accumulated garbage creates breeding grounds for mosquitoes, increasing the spread of diseases such as dengue fever and malaria. Open dumping sites and burning waste release harmful toxins into the air, contributing to respiratory illnesses. In addition, contaminated water sources from improperly discarded waste can lead to gastrointestinal infections and other waterborne diseases. Without immediate intervention, these health hazards will continue to affect Bali’s growing population and the millions of tourists who visit each year. \n
                    The issue of waste pollution in Bali is not just an environmental and health crisis but also a socio-economic concern. Poor waste management diminishes the island’s appeal as a world-class tourist destination, affecting local businesses and livelihoods. Hotels, restaurants, and tourism operators struggle to maintain high standards as beaches and public spaces become littered with trash. Moreover, waste-related disasters, such as recent landfill collapses, further highlight the urgent need for effective solutions. Addressing this crisis requires a collaborative effort from the government, businesses, and the community to implement sustainable waste management practices and promote environmental responsibility. \n\n",
                    "extra" => "Eagle Protects Commitment to Cleanliness and Safety",
                    "extra_desc" => "Eagle Protect is dedicated to maintaining cleanliness in every area under its patrol. As a security service provider, we recognize that a safe environment is also a clean one. Our team actively monitors public spaces, reporting and addressing waste issues to ensure that our surroundings remain well-maintained. By collaborating with local authorities and community groups, we aim to enhance cleanliness and uphold high environmental standards. Our efforts go beyond security, as we strive to protect not only people but also the beauty of Bali, ensuring a pleasant atmosphere for residents and visitors alike. \n
                    Eagle Protect is committed to making Bali a safer, cleaner, and more comfortable place for everyone. As part of our initiatives, we conduct regular clean-up activities in public spaces, encourage responsible waste disposal, and raise awareness about the importance of environmental sustainability. Our patrol teams help prevent illegal dumping and educate the community on maintaining cleanliness. By integrating security with environmental responsibility, we take an active role in preserving Bali’s natural beauty, reinforcing our mission to safeguard both the people and the environment of this island paradise. \n\n",
                ],
                "info" => [
                    "date"     => "23th May, 2025",
                    "location" => "Kedonganan, Beach",
                    "time"     => "10:00 am – end"
                ],
                "organizer" => [
                    "name"   => "Agus Silalahi",
                    "title"  => "Eagle Project Head",
                    "phone"  => "0812 1212 1212 1212",
                    "photo" => "team/sample.png"
                ]
            ],
            4 => [
                "title"        => "Aerial Control",
                "cover_image"  => "aerial-control.png",
                "content"      => [
                    "main" => "The Growing Waste Problem in Bali and Its Environmental Impact",
                    "main_desc" => "Bali, known for its stunning beaches and vibrant culture, has been facing a growing waste management crisis in recent years. Rapid tourism growth and increasing urbanization have led to a surge in plastic waste, food scraps, and non-biodegradable materials piling up in streets, rivers, and beaches. While some efforts have been made to address the issue, inadequate waste disposal infrastructure and lack of public awareness continue to exacerbate the problem. As a result, Bali struggles to maintain its reputation as a paradise island, as unchecked pollution threatens both its environment and its tourism-dependent economy. \n
                    One of the most significant consequences of improper waste management is its impact on Bali’s marine ecosystem. Plastics and other pollutants often end up in the ocean, harming marine life and disrupting fragile ecosystems. Sea turtles, fish, and seabirds frequently ingest plastic waste, leading to fatal health complications. Coral reefs, which are crucial to marine biodiversity and attract millions of tourists, are also suffering from pollution-induced degradation. As waste continues to accumulate in Bali’s waters, the island risks losing its natural beauty and the ecological balance that sustains both wildlife and local communities. \n
                    Beyond its environmental impact, waste pollution poses serious health risks to Bali’s residents and visitors. Accumulated garbage creates breeding grounds for mosquitoes, increasing the spread of diseases such as dengue fever and malaria. Open dumping sites and burning waste release harmful toxins into the air, contributing to respiratory illnesses. In addition, contaminated water sources from improperly discarded waste can lead to gastrointestinal infections and other waterborne diseases. Without immediate intervention, these health hazards will continue to affect Bali’s growing population and the millions of tourists who visit each year. \n
                    The issue of waste pollution in Bali is not just an environmental and health crisis but also a socio-economic concern. Poor waste management diminishes the island’s appeal as a world-class tourist destination, affecting local businesses and livelihoods. Hotels, restaurants, and tourism operators struggle to maintain high standards as beaches and public spaces become littered with trash. Moreover, waste-related disasters, such as recent landfill collapses, further highlight the urgent need for effective solutions. Addressing this crisis requires a collaborative effort from the government, businesses, and the community to implement sustainable waste management practices and promote environmental responsibility. \n\n",
                    "extra" => "Eagle Protects Commitment to Cleanliness and Safety",
                    "extra_desc" => "Eagle Protect is dedicated to maintaining cleanliness in every area under its patrol. As a security service provider, we recognize that a safe environment is also a clean one. Our team actively monitors public spaces, reporting and addressing waste issues to ensure that our surroundings remain well-maintained. By collaborating with local authorities and community groups, we aim to enhance cleanliness and uphold high environmental standards. Our efforts go beyond security, as we strive to protect not only people but also the beauty of Bali, ensuring a pleasant atmosphere for residents and visitors alike. \n
                    Eagle Protect is committed to making Bali a safer, cleaner, and more comfortable place for everyone. As part of our initiatives, we conduct regular clean-up activities in public spaces, encourage responsible waste disposal, and raise awareness about the importance of environmental sustainability. Our patrol teams help prevent illegal dumping and educate the community on maintaining cleanliness. By integrating security with environmental responsibility, we take an active role in preserving Bali’s natural beauty, reinforcing our mission to safeguard both the people and the environment of this island paradise. \n\n",
                ],
                "info" => [
                    "date"     => "23th May, 2025",
                    "location" => "Kedonganan, Beach",
                    "time"     => "10:00 am – end"
                ],
                "organizer" => [
                    "name"   => "Agus Silalahi",
                    "title"  => "Eagle Project Head",
                    "phone"  => "0812 1212 1212 1212",
                    "photo" => "team/sample.png"
                ]
            ],
            5 => [
                "title"        => "Dummy Layout",
                "cover_image"  => "dummy-layout.png",
                "content"      => [
                    "main" => "The Growing Waste Problem in Bali and Its Environmental Impact",
                    "main_desc" => "Bali, known for its stunning beaches and vibrant culture, has been facing a growing waste management crisis in recent years. Rapid tourism growth and increasing urbanization have led to a surge in plastic waste, food scraps, and non-biodegradable materials piling up in streets, rivers, and beaches. While some efforts have been made to address the issue, inadequate waste disposal infrastructure and lack of public awareness continue to exacerbate the problem. As a result, Bali struggles to maintain its reputation as a paradise island, as unchecked pollution threatens both its environment and its tourism-dependent economy. \n
                    One of the most significant consequences of improper waste management is its impact on Bali’s marine ecosystem. Plastics and other pollutants often end up in the ocean, harming marine life and disrupting fragile ecosystems. Sea turtles, fish, and seabirds frequently ingest plastic waste, leading to fatal health complications. Coral reefs, which are crucial to marine biodiversity and attract millions of tourists, are also suffering from pollution-induced degradation. As waste continues to accumulate in Bali’s waters, the island risks losing its natural beauty and the ecological balance that sustains both wildlife and local communities. \n
                    Beyond its environmental impact, waste pollution poses serious health risks to Bali’s residents and visitors. Accumulated garbage creates breeding grounds for mosquitoes, increasing the spread of diseases such as dengue fever and malaria. Open dumping sites and burning waste release harmful toxins into the air, contributing to respiratory illnesses. In addition, contaminated water sources from improperly discarded waste can lead to gastrointestinal infections and other waterborne diseases. Without immediate intervention, these health hazards will continue to affect Bali’s growing population and the millions of tourists who visit each year. \n
                    The issue of waste pollution in Bali is not just an environmental and health crisis but also a socio-economic concern. Poor waste management diminishes the island’s appeal as a world-class tourist destination, affecting local businesses and livelihoods. Hotels, restaurants, and tourism operators struggle to maintain high standards as beaches and public spaces become littered with trash. Moreover, waste-related disasters, such as recent landfill collapses, further highlight the urgent need for effective solutions. Addressing this crisis requires a collaborative effort from the government, businesses, and the community to implement sustainable waste management practices and promote environmental responsibility. \n\n",
                    "extra" => "Eagle Protects Commitment to Cleanliness and Safety",
                    "extra_desc" => "Eagle Protect is dedicated to maintaining cleanliness in every area under its patrol. As a security service provider, we recognize that a safe environment is also a clean one. Our team actively monitors public spaces, reporting and addressing waste issues to ensure that our surroundings remain well-maintained. By collaborating with local authorities and community groups, we aim to enhance cleanliness and uphold high environmental standards. Our efforts go beyond security, as we strive to protect not only people but also the beauty of Bali, ensuring a pleasant atmosphere for residents and visitors alike. \n
                    Eagle Protect is committed to making Bali a safer, cleaner, and more comfortable place for everyone. As part of our initiatives, we conduct regular clean-up activities in public spaces, encourage responsible waste disposal, and raise awareness about the importance of environmental sustainability. Our patrol teams help prevent illegal dumping and educate the community on maintaining cleanliness. By integrating security with environmental responsibility, we take an active role in preserving Bali’s natural beauty, reinforcing our mission to safeguard both the people and the environment of this island paradise. \n\n",
                ],
                "info" => [
                    "date"     => "23th May, 2025",
                    "location" => "Kedonganan, Beach",
                    "time"     => "10:00 am – end"
                ],
                "organizer" => [
                    "name"   => "Agus Silalahi",
                    "title"  => "Eagle Project Head",
                    "phone"  => "0812 1212 1212 1212",
                    "photo" => "team/sample.png"
                ]
            ],
            6 => [
                "title"        => "Dummy Layout",
                "cover_image"  => "dummy-layout.png",
                "content"      => [
                    "main" => "The Growing Waste Problem in Bali and Its Environmental Impact",
                    "main_desc" => "Bali, known for its stunning beaches and vibrant culture, has been facing a growing waste management crisis in recent years. Rapid tourism growth and increasing urbanization have led to a surge in plastic waste, food scraps, and non-biodegradable materials piling up in streets, rivers, and beaches. While some efforts have been made to address the issue, inadequate waste disposal infrastructure and lack of public awareness continue to exacerbate the problem. As a result, Bali struggles to maintain its reputation as a paradise island, as unchecked pollution threatens both its environment and its tourism-dependent economy. \n
                    One of the most significant consequences of improper waste management is its impact on Bali’s marine ecosystem. Plastics and other pollutants often end up in the ocean, harming marine life and disrupting fragile ecosystems. Sea turtles, fish, and seabirds frequently ingest plastic waste, leading to fatal health complications. Coral reefs, which are crucial to marine biodiversity and attract millions of tourists, are also suffering from pollution-induced degradation. As waste continues to accumulate in Bali’s waters, the island risks losing its natural beauty and the ecological balance that sustains both wildlife and local communities. \n
                    Beyond its environmental impact, waste pollution poses serious health risks to Bali’s residents and visitors. Accumulated garbage creates breeding grounds for mosquitoes, increasing the spread of diseases such as dengue fever and malaria. Open dumping sites and burning waste release harmful toxins into the air, contributing to respiratory illnesses. In addition, contaminated water sources from improperly discarded waste can lead to gastrointestinal infections and other waterborne diseases. Without immediate intervention, these health hazards will continue to affect Bali’s growing population and the millions of tourists who visit each year. \n
                    The issue of waste pollution in Bali is not just an environmental and health crisis but also a socio-economic concern. Poor waste management diminishes the island’s appeal as a world-class tourist destination, affecting local businesses and livelihoods. Hotels, restaurants, and tourism operators struggle to maintain high standards as beaches and public spaces become littered with trash. Moreover, waste-related disasters, such as recent landfill collapses, further highlight the urgent need for effective solutions. Addressing this crisis requires a collaborative effort from the government, businesses, and the community to implement sustainable waste management practices and promote environmental responsibility. \n\n",
                    "extra" => "Eagle Protects Commitment to Cleanliness and Safety",
                    "extra_desc" => "Eagle Protect is dedicated to maintaining cleanliness in every area under its patrol. As a security service provider, we recognize that a safe environment is also a clean one. Our team actively monitors public spaces, reporting and addressing waste issues to ensure that our surroundings remain well-maintained. By collaborating with local authorities and community groups, we aim to enhance cleanliness and uphold high environmental standards. Our efforts go beyond security, as we strive to protect not only people but also the beauty of Bali, ensuring a pleasant atmosphere for residents and visitors alike. \n
                    Eagle Protect is committed to making Bali a safer, cleaner, and more comfortable place for everyone. As part of our initiatives, we conduct regular clean-up activities in public spaces, encourage responsible waste disposal, and raise awareness about the importance of environmental sustainability. Our patrol teams help prevent illegal dumping and educate the community on maintaining cleanliness. By integrating security with environmental responsibility, we take an active role in preserving Bali’s natural beauty, reinforcing our mission to safeguard both the people and the environment of this island paradise. \n\n",
                ],
                "info" => [
                    "date"     => "23th May, 2025",
                    "location" => "Kedonganan, Beach",
                    "time"     => "10:00 am – end"
                ],
                "organizer" => [
                    "name"   => "Agus Silalahi",
                    "title"  => "Eagle Project Head",
                    "phone"  => "0812 1212 1212 1212",
                    "photo" => "team/sample.png"
                ]
            ],
            7 => [
                "title"        => "Dummy Layout",
                "cover_image"  => "dummy-layout.png",
                "content"      => [
                    "main" => "The Growing Waste Problem in Bali and Its Environmental Impact",
                    "main_desc" => "Bali, known for its stunning beaches and vibrant culture, has been facing a growing waste management crisis in recent years. Rapid tourism growth and increasing urbanization have led to a surge in plastic waste, food scraps, and non-biodegradable materials piling up in streets, rivers, and beaches. While some efforts have been made to address the issue, inadequate waste disposal infrastructure and lack of public awareness continue to exacerbate the problem. As a result, Bali struggles to maintain its reputation as a paradise island, as unchecked pollution threatens both its environment and its tourism-dependent economy. \n
                    One of the most significant consequences of improper waste management is its impact on Bali’s marine ecosystem. Plastics and other pollutants often end up in the ocean, harming marine life and disrupting fragile ecosystems. Sea turtles, fish, and seabirds frequently ingest plastic waste, leading to fatal health complications. Coral reefs, which are crucial to marine biodiversity and attract millions of tourists, are also suffering from pollution-induced degradation. As waste continues to accumulate in Bali’s waters, the island risks losing its natural beauty and the ecological balance that sustains both wildlife and local communities. \n
                    Beyond its environmental impact, waste pollution poses serious health risks to Bali’s residents and visitors. Accumulated garbage creates breeding grounds for mosquitoes, increasing the spread of diseases such as dengue fever and malaria. Open dumping sites and burning waste release harmful toxins into the air, contributing to respiratory illnesses. In addition, contaminated water sources from improperly discarded waste can lead to gastrointestinal infections and other waterborne diseases. Without immediate intervention, these health hazards will continue to affect Bali’s growing population and the millions of tourists who visit each year. \n
                    The issue of waste pollution in Bali is not just an environmental and health crisis but also a socio-economic concern. Poor waste management diminishes the island’s appeal as a world-class tourist destination, affecting local businesses and livelihoods. Hotels, restaurants, and tourism operators struggle to maintain high standards as beaches and public spaces become littered with trash. Moreover, waste-related disasters, such as recent landfill collapses, further highlight the urgent need for effective solutions. Addressing this crisis requires a collaborative effort from the government, businesses, and the community to implement sustainable waste management practices and promote environmental responsibility. \n\n",
                    "extra" => "Eagle Protects Commitment to Cleanliness and Safety",
                    "extra_desc" => "Eagle Protect is dedicated to maintaining cleanliness in every area under its patrol. As a security service provider, we recognize that a safe environment is also a clean one. Our team actively monitors public spaces, reporting and addressing waste issues to ensure that our surroundings remain well-maintained. By collaborating with local authorities and community groups, we aim to enhance cleanliness and uphold high environmental standards. Our efforts go beyond security, as we strive to protect not only people but also the beauty of Bali, ensuring a pleasant atmosphere for residents and visitors alike. \n
                    Eagle Protect is committed to making Bali a safer, cleaner, and more comfortable place for everyone. As part of our initiatives, we conduct regular clean-up activities in public spaces, encourage responsible waste disposal, and raise awareness about the importance of environmental sustainability. Our patrol teams help prevent illegal dumping and educate the community on maintaining cleanliness. By integrating security with environmental responsibility, we take an active role in preserving Bali’s natural beauty, reinforcing our mission to safeguard both the people and the environment of this island paradise. \n\n",
                ],
                "info" => [
                    "date"     => "23th May, 2025",
                    "location" => "Kedonganan, Beach",
                    "time"     => "10:00 am – end"
                ],
                "organizer" => [
                    "name"   => "Agus Silalahi",
                    "title"  => "Eagle Project Head",
                    "phone"  => "0812 1212 1212 1212",
                    "photo" => "team/sample.png"
                ]
            ],
            8 => [
                "title"        => "Dummy Layout",
                "cover_image"  => "dummy-layout.png",
                "content"      => [
                    "main" => "The Growing Waste Problem in Bali and Its Environmental Impact",
                    "main_desc" => "Bali, known for its stunning beaches and vibrant culture, has been facing a growing waste management crisis in recent years. Rapid tourism growth and increasing urbanization have led to a surge in plastic waste, food scraps, and non-biodegradable materials piling up in streets, rivers, and beaches. While some efforts have been made to address the issue, inadequate waste disposal infrastructure and lack of public awareness continue to exacerbate the problem. As a result, Bali struggles to maintain its reputation as a paradise island, as unchecked pollution threatens both its environment and its tourism-dependent economy. \n
                    One of the most significant consequences of improper waste management is its impact on Bali’s marine ecosystem. Plastics and other pollutants often end up in the ocean, harming marine life and disrupting fragile ecosystems. Sea turtles, fish, and seabirds frequently ingest plastic waste, leading to fatal health complications. Coral reefs, which are crucial to marine biodiversity and attract millions of tourists, are also suffering from pollution-induced degradation. As waste continues to accumulate in Bali’s waters, the island risks losing its natural beauty and the ecological balance that sustains both wildlife and local communities. \n
                    Beyond its environmental impact, waste pollution poses serious health risks to Bali’s residents and visitors. Accumulated garbage creates breeding grounds for mosquitoes, increasing the spread of diseases such as dengue fever and malaria. Open dumping sites and burning waste release harmful toxins into the air, contributing to respiratory illnesses. In addition, contaminated water sources from improperly discarded waste can lead to gastrointestinal infections and other waterborne diseases. Without immediate intervention, these health hazards will continue to affect Bali’s growing population and the millions of tourists who visit each year. \n
                    The issue of waste pollution in Bali is not just an environmental and health crisis but also a socio-economic concern. Poor waste management diminishes the island’s appeal as a world-class tourist destination, affecting local businesses and livelihoods. Hotels, restaurants, and tourism operators struggle to maintain high standards as beaches and public spaces become littered with trash. Moreover, waste-related disasters, such as recent landfill collapses, further highlight the urgent need for effective solutions. Addressing this crisis requires a collaborative effort from the government, businesses, and the community to implement sustainable waste management practices and promote environmental responsibility. \n\n",
                    "extra" => "Eagle Protects Commitment to Cleanliness and Safety",
                    "extra_desc" => "Eagle Protect is dedicated to maintaining cleanliness in every area under its patrol. As a security service provider, we recognize that a safe environment is also a clean one. Our team actively monitors public spaces, reporting and addressing waste issues to ensure that our surroundings remain well-maintained. By collaborating with local authorities and community groups, we aim to enhance cleanliness and uphold high environmental standards. Our efforts go beyond security, as we strive to protect not only people but also the beauty of Bali, ensuring a pleasant atmosphere for residents and visitors alike. \n
                    Eagle Protect is committed to making Bali a safer, cleaner, and more comfortable place for everyone. As part of our initiatives, we conduct regular clean-up activities in public spaces, encourage responsible waste disposal, and raise awareness about the importance of environmental sustainability. Our patrol teams help prevent illegal dumping and educate the community on maintaining cleanliness. By integrating security with environmental responsibility, we take an active role in preserving Bali’s natural beauty, reinforcing our mission to safeguard both the people and the environment of this island paradise. \n\n",
                ],
                "info" => [
                    "date"     => "23th May, 2025",
                    "location" => "Kedonganan, Beach",
                    "time"     => "10:00 am – end"
                ],
                "organizer" => [
                    "name"   => "Agus Silalahi",
                    "title"  => "Eagle Project Head",
                    "phone"  => "0812 1212 1212 1212",
                    "photo" => "team/sample.png"
                ]
            ],
        ];

        if (!isset($projects[$id])) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Project not found");
        }

        return view('project/detail', [
            "title"       => "Projects",
            "activeMenu"  => "Projects",
            "jsFiles"     => [
                "assets/adminlte/plugins/jquery/jquery-3.7.1.min.js",
                "assets/js/project.js"
            ],
            "cssFiles"    => [
                "assets/css/style.css",
                "assets/css/project.css",
                "assets/css/normalize.css"
            ],
            "projectData"  => $projects[$id]
        ]);
    }
}