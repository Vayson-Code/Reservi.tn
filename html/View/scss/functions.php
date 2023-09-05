<?php



function random_num($length)
{

	$text = "";
	if($length < 5)
	{
		$length = 5;
	}

	$len = rand(4,$length);

	for ($i=0; $i < $len; $i++) { 
		# code...

		$text .= rand(0,9);
	}

	return $text;
}
 function fetchResponses($user_id){
	$db = $pdo = new PDO("mysql:host=localhost;dbname=reservi.tn", 'root', '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
   $sql = 'SELECT * FROM users WHERE user_id=:user_id';
   try
   {
	   $query = $db->prepare($sql);
	   $query->bindValue('user_id', $user_id);
	   $query->execute();
	   return $query->fetchAll();
   }

   catch(PDOException $e)
   {
	   $e->getMessage();
   }
}