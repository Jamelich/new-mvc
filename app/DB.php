<?php

namespace App;

// use SQLite3;

class DB
{
    protected $table;
    private $db;
    private $array_bd;

    // public function __construct(array $model = [])
    // {
    //     $this->db = new SQLite3(__DIR__ . '/../../database.sqlite');

    //     foreach ($model as $field => $value) {
    //         $this->$field = $value;
    //     }
    // }

    public function __construct()
    {
        $this->db = new \PDO("mysql:host=localhost;dbname=shop-book", 'root', '');
    }

    public function getAll()
    {
        $stmt = $this->db->query('SELECT * FROM ' . $this->table);
        $this->array_bd = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        // $this->array_products = $stmt->fetchAll();
        return $this->array_bd;
        // echo $this->table;
        // echo '<br><pre>';
        // print_r($this->array_bd);
        // var_dump($this->array_bd);
    }

    // public function getById(int $id): ?static
    // {
    //     $result = $this->db->querySingle('SELECT * FROM ' . $this->table . ' WHERE id = ' . $id, true);

    //     if ($result === []) {
    //         return null;
    //     }

    //     $className = static::class;

    //     return new $className($result);
    // }

    // public function getAll(): array
    // {
    //     $result = $this->db->query('SELECT * FROM ' . $this->table);

    //     if ($result === false || $result->numColumns() === 0) {
    //         return [];
    //     }

    //     $items = [];

    //     $className = static::class;

    //     while ($item = $result->fetchArray(SQLITE3_ASSOC)) {
    //         $items[] = new $className($item);
    //     }

    //     return $items;
    // }
}
