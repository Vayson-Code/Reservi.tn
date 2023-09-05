<?php

class Restau
{
private ?int $id=null;
private string $name;
private int $numtable;
private string $adress;
private string $tel;
private string $de;
private string $img;
private string $geo;
private string $vid;

public function __construct($id=null,$na, $ta, $ad , $te, $de , $img,$geo,$vid)
{
$this->id= $id;
$this->name= $na;
$this->numtable= $ta;
$this->adress= $ad;
$this->tel= $te;
$this->de= $de;
$this->img= $img;
$this->geo= $geo;
$this->vid= $vid;
}
//
public function getimg(){
    return $this->img;
}

public function Setimg(){
     $this->img=$img;
}
public function getde(){
    return $this->de;
}

public function Setde(){
     $this->de=$de;
}
public function getid(){
    return $this->id;
}

public function Setid(){
     $this->id=$id;
}
public function  getname(){
    return $this->name;
}

public function setname(){
     $this->firstName=$name;
}
//
public function getadress(){
    return $this->adress;
}

public function setadress(){
     $this->adress=$adress;
}
//
public function getnumtable(){
    return $this->numtable;
}

public function setnumtable(){
     $this->numtable=$numtable;
}
//
public function gettel(){
    return $this->tel;
}

public function settel(){
     $this->tel=$tel;
}
//
public function getgeo(){
    return $this->geo;
}

public function setgeo(){
     $this->geo=$geo;
}
//
public function getvid(){
    return $this->vid;
}

public function setvid(){
     $this->vid=$vid;
}
//

}
?>