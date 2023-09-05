<?php
include './config.php';
include './Client.php';

class ClientC
{
    public function listClients()
    {
        $sql = "SELECT * FROM users";
        $db=config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deleteUser($user_id)
    {
        $sql = "DELETE FROM users WHERE user_id = :id";
        $db=config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $user_id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function addClient($client)
    {
        $sql = "INSERT INTO users  
        VALUES (NULL, :ln, :ad,:dob)";
        $db=config::getConnexion();
        try {
           
            $query = $db->prepare($sql);
            $query->execute([
                
                'ln' => $client->getUserName(),
                'ad' => $client->getPassword(),
                'dob' => $client->getDate()
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function updateClient($client, $user_id)
    {
         
        try {
            $db=config::getConnexion();
            $query = $db->prepare(
                'UPDATE users SET
                    user_name = :user_name, 
                    password = :password, 
                    date = :date
                WHERE user_id= :idClient'
            );
            $query->execute([
                'idClient' => $user_id,
                'user_name' => $client->getUserName(),
                'password' => $client->getPassword(),
              
                'date' => $client->getDate()
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function showClient($id)
    {
        $sql = "SELECT * from users where user_id = $id";
        $db=config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $client = $query->fetch();
            return $client;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    public function listClientsr($r)
	{
		$sql="SELECT * FROM users where user_name like '%".$r."%'";
		$db=config::getConnexion();
        $req = $db->prepare($sql);
       // $req->bindValue(':r', $r);
		try{
			$req->execute();
            $liste=$req->fetchAll();
			return $liste;
		}catch (Exeption $e){die('error:'.$e->getMessage());}
	}
}
