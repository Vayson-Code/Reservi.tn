<?php
include'./Model/reservation.php';
include'./config.php';
class ReservationC
{


    public function listReservationUser($id)
	{
		$sql="SELECT * FROM reservation where id_user=:id";
		$db=config::getConnexion();
		try {
            // print_r($client->getDob()->format('Y-m-d'));
             $query = $db->prepare($sql);
             $query->execute([
                 'id' =>$id
             ]);
             $liste=$query->fetchAll();
                 return $liste;
         }catch (Exeption $e){die('error:'.$e->getMessage());}
	}
	
	public function listReservation()
	{
		$sql="SELECT * FROM reservation ";
		$db=config::getConnexion();
		try{
			$liste=$db->query($sql);
			return $liste;
		}catch (Exeption $e){die('error:'.$e->getMessage());}
	}
    
    public function listReservationr($r)
	{
		$sql="SELECT * FROM reservation where nom_reservation like '%".$r."%' ORDER BY id_reservation";
		$db=config::getConnexion();
        $req = $db->prepare($sql);
       // $req->bindValue(':r', $r);
		try{
			$req->execute();
            $liste=$req->fetchAll();
			return $liste;
		}catch (Exeption $e){die('error:'.$e->getMessage());}
	}


    public function nomR($id)
	{
		$sql="SELECT name FROM restaux where id = :id";
		$db=config::getConnexion();
		try{
			$query = $db->prepare($sql);
            $query->execute([
                'id' => $id
            ]);
            $liste=$query->fetchAll();
			return $liste;
		}catch (Exeption $e){die('error:'.$e->getMessage());}
	}

    public function geoR($id)
	{
		$sql="SELECT geo FROM restaux where id = :id";
		$db=config::getConnexion();
		try{
			$query = $db->prepare($sql);
            $query->execute([
                'id' => $id
            ]);
            $liste=$query->fetchAll();
			return $liste;
		}catch (Exeption $e){die('error:'.$e->getMessage());}
	}
    public function vidR($id)
	{
		$sql="SELECT vid FROM restaux where id = :id";
		$db=config::getConnexion();
		try{
			$query = $db->prepare($sql);
            $query->execute([
                'id' => $id
            ]);
            $liste=$query->fetchAll();
			return $liste;
		}catch (Exeption $e){die('error:'.$e->getMessage());}
	}
    public function addReservation($reservation)
    {
        $sql = "INSERT INTO reservation  
        VALUES (NULL, :fn,:ln,:ad,:do,:nom,:req,:num)";
        $db=config::getConnexion();
        try {
           // print_r($client->getDob()->format('Y-m-d'));
            $query = $db->prepare($sql);
            $query->execute([
                'fn' => $reservation->getdate_reservation(),
                'ln' => $reservation->gettel(),
                'ad' => $reservation->getid_restau(),
                'do' => $reservation->getid_user(),
                'nom' => $reservation->getnom_reservation(),
                'req' => $reservation->getreq(),
                'num' => $reservation->getnum()
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }


    public function deleteReservation($id)
    {
        $sql = "DELETE FROM reservation WHERE id_reservation = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

   public function updateReservation($reservation, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE reservation SET 
                    date_reservation = :na, 
                    id_restau= :numt, 
                    id_user = :ad, 
                    nom_reservation= :te,
                    req= :req,
                    num= :num
                WHERE id_reservation= :idr'
            );
            $query->execute([
                'idr' => $id,
                'na' => $reservation->getdate_reservation(),
                'numt' => $reservation->getid_restau(),
                'ad' => $reservation->getid_user(),
                'te' => $reservation->getnom_reservation(),
                'req' => $reservation->getreq(),
                'num' => $reservation->getnum()
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    public function showReservation($id)
    {
        $sql = "SELECT * from reservation where id_reservation = $id";
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