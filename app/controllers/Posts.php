<?php


class Posts extends Controller
{
    public function __construct(){
        $this->postModel = $this->model('Post');
    }
    public function index(){
        if($this->postModel->getAllPosts() !== false){
            $data = $this->postModel->getAllPosts();
            $this->view('posts/index', $data);
        }
        $this->view('posts/index');
    }
}


