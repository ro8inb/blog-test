<?php


class PostsController   {

    private $postsManager;
    private $commentsManager;
    private $controller;

    public function __construct()
    {
        $this->postsManager = new PostsManager();
        $this->controller = new Controller();
    }

    public function index() {
        $posts = $this->postsManager->getPosts();
        $this->controller->render('/posts', compact('posts'));
    }

    public function post($argument = null) {
        if($argument) {
            $post = $this->postsManager->getPost($argument);
            if($post != null) {
                $this->controller->render('/post', compact('post'));

            }
            else {
                echo 'Cet article n\' existe pas';
            }
        }
    }
}