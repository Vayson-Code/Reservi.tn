<?php 

session_start();

	
	
	include("config.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		
		

			//read from database
			$db = config::getConnection();
        $sql = 'SELECT * FROM users';
        try
        {
            $query = $db->prepare($sql);
            $query->execute();
            $result = $query->fetchAll();
        }

        catch(PDOException $e)
        {
            $e->getMessage();
        }

			
				
				

				foreach($result as $row){
					if($row['password'] == $password)
					{

						$_SESSION['user_id']=$row['user_id'];
						echo"aaa";
                        header('Location: index.php');
						
						
					}
			
			
		}
		
	}
?>