<?php
namespace App\Controller;

use App\Controller\AbstractController;

class HomeController extends AbstractController
{
    public function index()
    {
       $this->render('home');
    }
}



// -- Créer la base de données
// CREATE DATABASE car_location;

// -- Utiliser la base de données
// USE car_location;


// -- Créer la table car

// CREATE TABLE car (
//     car_id INT AUTO_INCREMENT PRIMARY KEY,
//     model VARCHAR(50) NOT NULL,
//     image_path VARCHAR(255) NOT NULL,
//     price DECIMAL(10, 2) NOT NULL,
//     description TEXT
// );

// INSERT INTO car (model, image_path, price, description)
// VALUES
//     ('Peugeot', 'peugeot.jpg', 15000.00, 'Compact car with great fuel efficiency.'),
//     ('Renault', 'renault.jpg', 45000.00, 'Muscle car known for its powerful engine.'),
//     ('Mercedes', 'mercedes.jpg', 20000.00, 'Reliable sedan with comfortable interior.'),
//     ('Audi', 'audi.jpg', 30000.00, 'Spacious sedan with advanced safety features.');

