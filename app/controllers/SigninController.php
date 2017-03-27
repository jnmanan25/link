<?php
namespace Linkit\Controllers;
use Linkit\Models\Post;
class LoginController extends BaseController{
	public function get(){
		$this -> render('login.html');
	}
	public function post(){
		session_start();
		$_SESSION['id'] = $_POST['id'];
		$_SESSION['password'] = $_POST['password'];
		if (Post::Validation($_SESSION['id'], $_SESSION['password'])){
				
			$data = Post::GetData($_SESSION['id']);
			$this -> render('saver.html', ['data' => $data]);
		}
		else{
			$this -> render('login.html');
		}
	}
}
?>