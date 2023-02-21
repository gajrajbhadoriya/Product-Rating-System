<?php

namespace App\Database;

use Exception;
use PDO;

class DBTransaction
{
    public const DB_NAME       = 'test';
    public const DB_USER       = 'root';
    public const DB_PASSWORD   = '';
    public const DB_HOST       = 'localhost';
    protected $pdo;
    public $last_insert_id;
    private $id;
    private $userName;
    private $productName;


    public function __construct($id="", $userName="", $productName="")
    {
        $this->id = $id;
        $this->userName = $userName;
        $this->productName = $productName;
        $this->pdo = new PDO("mysql:host=" . self::DB_HOST . ";dbname=" . self::DB_NAME, self::DB_USER, self::DB_PASSWORD);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setuserName($userName)
    {
        $this->userName = $userName;
    }

    public function getuserName()
    {
        return $this->userName;
    }

    public function setproductName($productName)
    {
        $this->productName = $productName;
    }

    public function getproductName()
    {
        return $this->productName;
    }

    public function insertTransaction($sql, $data)
    {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($data);
        $this->last_insert_id = $this->pdo->lastInsertId();
        return $this->last_insert_id;
    }
    public function fetchData()
    {
        $stmt = $this->pdo->prepare('SELECT * FROM rating');
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function fetchOne()
    {
        try {
            $stm = $this->pdo->prepare("SELECT FROM rating where id=?");
            $stm->execute([$this->id]);
            return $stm->fetchAll();
        } catch(Exception $e) {
            return $e->getMessage();
        }
    }

    public function deleteData()
    {
        try {
            $stm = $this->pdo->prepare("DELETE FROM rating WHERE id= ?");
            $stm->execute([$this->id]);
            return $stm->fetchAll();
            echo "<script>alert('data delete Successfully');document.location='read.php'</script>";
        } catch(Exception $e) {
            return $e->getMessage();
        }
    }

    public function updateData()
    {
        try {
            $stm = $this->pdo->prepare("UPDATE rating SET id = ?, username = ?, product_name = ?");
            $stm->execute([$this->userName, $this->productName,$this->id]);
        } catch(Exception $e) {
            return $e->getMessage();
        }
    }
}
