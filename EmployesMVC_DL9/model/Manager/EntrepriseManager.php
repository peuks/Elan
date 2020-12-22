<?php

namespace Model\Manager;

use App\AbstractManager;

class EntrepriseManager extends AbstractManager {

    private static $className = "Model\Entity\Entreprise";

    public function __construct(){
        self::connect();
    }

    public function findAll(){
        $sql = "SELECT * 
                FROM entreprise";

        return self::getResults(
            self::select($sql, null, true),
            self::$className
        );
    }

    public function findOneById($id){
        $sql = "SELECT * 
                FROM entreprise 
                WHERE id = :id";

        return self::getOneOrNullResult(
            self::select($sql, ["id" => $id], false),
            self::$className
        );
    }
}