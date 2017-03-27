<?php
namespace Linkit\Controllers;
use Linkit\Models\Post;
class PostController extends BaseController{
public function get(){
	$this -> render('login.html');
	}
	public function post(){
		$id = $_POST['id'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		POST::create($id, $email, $password);
		
		$this->render('login.html');
	}
}
?>