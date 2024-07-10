<?php

namespace App\Core;

class Database
{
    // des proprietes static :  $host = , $dbname , $userName, $password, $connexion
    private static string $host = 'localhost';
    private static string $dbName = 'car_location';
    private static string $userName = 'root';
    private static string $password = '';
    private static \PDO $connexion;

    public static function initConnection()
    {
        try {
            self::$connexion = new \PDO('mysql:host=' . self::$host . ';dbname=' . self::$dbName . ';charset=utf8mb4', self::$userName, self::$password);
        } catch (\PDOException $e) {
            echo 'Erreur de connexion' . $e->getMessage();
            exit;
        }
    }

    /**
     * Get the value of connexion
     */
    public static function getConnexion()
    {
        return self::$connexion;
    }
}

// namespace App\Core;

// class Database
// {
//     private static string $host = 'localhost';
//     private static string $dbName = 'car_location';
//     private static string $userName = 'root';
//     private static string $password = '';
//     private static PDO $connexion;

//     public static function initConnection()
//     {
//         try {
//             self::$connexion = new PDO(
//                 "mysql:host=".self::$host.";dbname=".self::$dbName, ';charset=utf8mb4',
//                 self::$userName,
//                 self::$password,
//                 );
//             // self::$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
//         } catch (PDOException $e) {

//             echo 'Erreur de connexion : ' . $e->getMessage();
//         }   
//     }

//     public static function getConnexion(){
//         return self::$connexion;
//     }

   
// }

//     // des propriétes static: $host = $dbname, $userName, $password, $connexion
//     // method static initConnection
//     // retourner la connexion à la base de donnee

//     // $connexion = new PDO
//     // getter de connexion