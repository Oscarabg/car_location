<?php
namespace App\Repository;

use App\Repository\AbstractRepository;

class UserRepository extends AbstractRepository
{

    public function getUserByEmail(string $email): array
    {

        $req = "SELECT * FROM user WHERE email = :email";
        $stmt = $this->pdo->prepare($req);
        $stmt->bindParam(':email', $email, \PDO::PARAM_STR);
        $stmt->execute();
        $res = $stmt->fecth(\PDO::FETCH_ASSOC);

        return $res;
    }

}