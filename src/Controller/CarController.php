<?php
namespace App\Controller;
 use App\Controller\AbstractController;
class CarController extends AbstractController
{
    public function showReservationDetails($param)
    {
        
        $this->render('reservation', ['id' => $param['id'], 'name' => 'ablo']);
    }
}



// CREATE TABLE user (
//     id INT AUTO_INCREMENT PRIMARY KEY,
//     pseudo VARCHAR(255) NOT NULL,
//     email VARCHAR(255) UNIQUE NOT NULL,
//     password VARCHAR(255) NOT NULL,
//     status BOOLEAN DEFAULT FALSE 
//  );

//  INSERT INTO user (pseudo, email, password, status) VALUES
// ('admin', 'admin@gmail.com', 'admin', TRUE),
// ('user', 'user@gmail.com', 'user', FALSE);
