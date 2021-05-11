<?php
class Person
{
    protected $conn;

    public function __construct()
    {
        $this->connection();
    }
    // connessione al DB
    public function connection()
    {
        $this->conn = new PDO('mysql:host=127.0.0.1;dbname=crudtest', 'root', '');
    }
    public function getAll()
    {
        $query = $this->conn->prepare("SELECT * FROM people");
        $query->execute();
        return $query;
    }

    public function addPerson($data)
    {
        // var_dump($data);
        $query = $this->conn->prepare("INSERT INTO people (name,lastname,genre) VALUES (:name,:lastname,:genre)");
        $params = [
            ':name' => $data['name'],
            ':lastname' => $data['lastname'],
            ':genre' => $data['genre'],
        ];
        $query->execute($params);
    }

    public function getID($id)
    {
        
        $query = $this->conn->prepare("SELECT * FROM people WHERE id=:id");
        $query->bindParam(':id', $id,PDO::PARAM_INT);
        $query->execute();
        $data= $query->fetch(PDO::FETCH_ASSOC);
        return $data;
    }
    public function store($data)
    {
        // var_dump($data);
        $query = $this->conn->prepare("UPDATE people SET name=:name, lastname = :lastname, genre=:genre  WHERE id=:id");
        $params = [
            ':name' => $data['name'],
            ':lastname' => $data['lastname'],
            ':genre' => $data['genre'],
            ':id' => $data['id'],
        ];
        $query->execute($params);
    }
    public function delete($id)
    {
        // var_dump($data);
        $query = $this->conn->prepare("DELETE FROM people  WHERE id =:id");
        $query->bindParam(':id', $id,PDO::PARAM_INT);
        $query->execute();
        $data= $query->fetch(PDO::FETCH_ASSOC);
        return $data;
    }
}
