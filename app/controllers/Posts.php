<?php


class Posts extends Controller
{
    private $postModel;
    public function index(){
        $posts=$this->postModel->getAllPosts();
        $this->view('pages/index',$posts ?: []);
    }

    public function __construct()
    {
        $this->postModel = $this->model('Post');
    }


}




