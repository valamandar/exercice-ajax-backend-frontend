<?php

// Controllers 

namespace App;

use App\Database;

class User extends Database
{

    public function __construct()
    {
        parent::__construct();
    }

    public function create()
    {
        echo "Voilà , je suis né !";
    }

    public function info()
    {
        echo "Je suis tout à toi !";
        var_dump($_GET);
    }

    public function all()
    {
        $request = $this->pdo->prepare('SELECT id, name, username, email FROM users');

        $request->execute([]);

        $response = $request->fetchAll(\PDO::FETCH_ASSOC);

        sleep(2);

        echo json_encode($response);

        header('HTTP/1.1 200 OK');
        exit();
    }
}
