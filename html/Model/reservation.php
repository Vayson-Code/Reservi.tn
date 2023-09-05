<?php

class Reservation
{
private ?int $id_reservation=null;
private string $date_reservation;
private int $tel;
private int $id_restau;
private int $id_user;
private string $nom_reservation;
private string $req;
private int $num;


public function __construct($id_reservation=null,$date_reservation, $tel, $id_restau,$id_user,$nom_reservation,$req,$num)
{
$this->id_reservation= $id_reservation;
$this->date_reservation= $date_reservation;
$this->tel= $tel;
$this->id_restau= $id_restau;
$this->id_user= $id_user;
$this->nom_reservation= $nom_reservation;
$this->req= $req;
$this->num= $num;
}
//
public function getid_reservation(){
    return $this->id_reservation;
}

public function Setid_reservation(){
     $this->id_reservation=$id_reservation;
}
public function getdate_reservation(){
    return $this->date_reservation;
}

public function Setdate_reservation(){
     $this->date_reservation=$date_reservation;
}

public function gettel(){
    return $this->tel;
}

public function settel(){
     $this->tel=$tel;
}
//
public function getid_restau(){
    return $this->id_restau;
}

public function setid_restau(){
     $this->id_restau=$id_restau;
}
//
public function getnom_reservation(){
    return $this->nom_reservation;
}

public function setnom_reservation(){
     $this->nom_reservation=$nom_reservation;
}
//
public function getreq(){
    return $this->req;
}

public function setreq(){
     $this->req=$req;
}
//
public function getnum(){
    return $this->num;
}

public function setnum(){
     $this->num=$num;
}
//
public function getid_user(){
    return $this->id_user;
}

public function setid_user(){
     $this->id_user=$id_user;
}


}
?>