<?php

namespace Model\Manager;

use App\AbstractManager;

class SalarieManager extends AbstractManager {

    private static $className = "Model\Entity\Salarie";

    public function __construct(){
        self::connect();
    }

    public function findAll(){
        $sql = "SELECT * 
                FROM salarie";

        return self::getResults(
            self::select($sql, null, true),
            self::$className
        );
    }

    public function findOneById($id){
        $sql = "SELECT * 
                FROM salarie 
                WHERE id = :id";

        return self::getOneOrNullResult(
            self::select($sql, ["id" => $id], false),
            self::$className
        );
    }
}