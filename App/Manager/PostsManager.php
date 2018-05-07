<?php



class PostsManager
{
    private $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    public function getPosts()
    {
        $req = $this->database->connect()->prepare('SELECT * FROM posts');
        $req->execute();
        return $req->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getPost ($id) {
        $req = $this->database->connect()->prepare('SELECT * FROM posts where id = :id');
        $req->bindParam(':id',  $id );
        $req->execute();
        return $req->fetchAll(\PDO::FETCH_ASSOC);
    }
}