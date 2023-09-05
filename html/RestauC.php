<?php
require('./Controller/Restau.php');
//include "$_SERVER[DOCUMENT_ROOT]/Model/Restau.php";
require('config.php');
class RestauC
{
	
	public function listRestaux()
	{
		$sql="SELECT * FROM restaux ORDER BY numtable";
		$db=config::getConnexion();
		try{
			$liste=$db->query($sql);
			return $liste;
		}catch (Exeption $e){die('error:'.$e->getMessage());}
	}

    public function listRestauxr($r)
	{
		$sql="SELECT * FROM restaux where name like '%".$r."%' ORDER BY numtable";
		$db=config::getConnexion();
        $req = $db->prepare($sql);
       // $req->bindValue(':r', $r);
		try{
			$req->execute();
            $liste=$req->fetchAll();
			return $liste;
		}catch (Exeption $e){die('error:'.$e->getMessage());}
	}


    public function addRestau($restau)
    {
        $sql = "INSERT INTO restaux  
        VALUES (NULL, :fn,:ln, :ad,:dob,:de,:img,:geo,:vid)";
        $db = config::getConnexion();
        try {
           // print_r($client->getDob()->format('Y-m-d'));
            $query = $db->prepare($sql);
            $query->execute([
                'fn' => $restau->getname(),
                'ln' => $restau->getnumtable(),
                'ad' => $restau->getadress(),
				'dob' => $restau->gettel(),
                'de' => $restau->getde(),
                'img' => $restau->getimg(),
                'geo' => $restau->getgeo(),
                'vid' => $restau->getvid()
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }


    public function deleteRestau($id)
    {
        $sql = "DELETE FROM restaux WHERE id = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

   public function updateRestau($restau, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE restaux SET 
                    name = :na, 
                    numtable= :numt, 
                    adress = :ad, 
                    tel= :te,
                    de=:de,
                    img=:img,
                    geo=:geo,
                    vid=:vid
                WHERE id= :idr'
            );
            $query->execute([
                'idr' => $id,
                'na' => $restau->getname(),
                'numt' => $restau->getnumtable(),
                'ad' => $restau->getadress(),
                'te' => $restau->gettel(),
                'de' => $restau->getde(),
                'img' => $restau->getimg(),
                'geo' => $restau->getgeo(),
                'vid' => $restau->getvid()
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    public function showRestau($id)
    {
        $sql = "SELECT * from restaux where id = $id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $client = $query->fetch();
            return $client;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
 }




?>