
<?php
namespace Link\Models;
class Post {
	public static function DB(){
		return new \PDO("mysql:dbname=mvclink;host=localhost","root", "sdslabsmysql");
	}
	public static function create($id, $email, $password){
		$db = self::DB();
		$query = $db->prepare('INSERT INTO table1(id, email, password) values ( :id, :email, :password)');
		$result = $query->execute(
			['id' => $id,
			'email' => $email,
			'password' => $password]);
		if (!$result ) {
			var_dump($query->errorInfo());
		}
	}
	public static function Validation($id, $password){
		$db = self::DB();
		$query = $db->prepare('SELECT * FROM table1 where id = :id AND password = :password');
		$result = $query->execute(
			['id' => $id,
			'password' => $password
			]
			);
		if (!$result){
			print_r($query->errorInfo());
		}
		return $query->fetch(\PDO::FETCH_ASSOC);
	}
	public static function GetData($id){
		$db = self::DB();
		$query = $db->prepare('SELECT * FROM table2 where id = :id');
		$result = $query->execute(
			['id' => $id]
			);
		return $query->fetchAll(\PDO::FETCH_ASSOC);
	}
	public static function SaveLink($id, $link){
		$db = self::DB();
		$query = $db->prepare('INSERT INTO table2(id, link) values(:id, :link)');
		$result = $query->execute(
			['id' => $id,
			'link' => $link]
			);
	}
	
}
