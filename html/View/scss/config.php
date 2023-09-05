<?php
class config
{
    private static $pdo = null;
    public static function getConnection()
    {
        if (!isset(self::$pdo))
        {
            try
            {
                $pdo = new PDO("mysql:host=localhost;dbname=reservi.tn", 'root', '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
            }
            catch(PDOException $e)
            {
                echo "Connection failed : " . $e->getMessage();
            }
            return $pdo;
        }
        
    }
    
}
?>
