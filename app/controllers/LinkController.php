<?php
namespace Link\Controllers;
use Link\Models\Post;
class SaveController extends BaseController{
	public function post(){
		session_start();
		$link = $_POST['link'];
		Post::SaveLink($_SESSION['id'], $link);
		$data = Post::GetData($_SESSION['id']);
		$this -> render('saver.html', ['data' => $data]);
	}
}
?>
