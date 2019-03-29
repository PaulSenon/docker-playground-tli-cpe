<?php
class DB{
	const dbName = "test_database";
	const pass = "1234";
	const user = "root";

	public function __construct(){
		return $this->getDB();
	}

	public static function getDB(){
		$db = null;
		try{
			$db = new PDO(
				"mysql:host=mysql-server;dbname=".self::dbName,
				self::user,
				self::pass,
				[
					PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
				]
			);
		}catch(Exception $e){
			die("ERROR : DB CONNECT");
		}
		return $db;
	}
} 

$db = DB::getDB(); 
$res = $db->query("SELECT * FROM User");

echo "<h1>Hello</h1>";
echo "<ul>";
foreach($res->fetchAll() as $user){
	$prenom = $user['prenom'];
	$nom = utf8_encode($user['nom']);
	echo "<li>$prenom, $nom</li>";
}
echo "</ul>";

?>
