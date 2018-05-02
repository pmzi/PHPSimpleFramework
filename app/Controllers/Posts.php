<?php

namespace app\Controllers;

use app\models\Post;

class Posts extends Controller {

    public function show($id){

        $post = new Post();

        $post = $post->getSpecific($id);

        $post['created'] = date('Y/m/d',$post['created']);

        $this->view('public/showPost',['post'=>$post]);

    }

    public function showAll(){

        $post = new Post();

        $post = $post->getAll();

        $this->view('public/showAll',['posts'=>$post]);

    }

    public function edit($id){

        if(!isset($_SESSION['isAdmin'])){
            echo "403";
            return;
        }

        if(count($_POST) != 0){
            $this->editPost($id);
        }

        $post = new Post();

        $post = $post->getSpecific($id);

        $this->view('panel/add',['post'=>$post]);

    }

    public function editPost($id){
        if(isset($_POST['title']) && isset($_POST['content'])){

            $post = new Post();

            $post->editPost($_POST['title'],$_POST['content'],$id);

        }
    }

    public function add(){

        if(!isset($_SESSION['isAdmin'])){
            echo "403";
            return;
        }

        if(count($_POST) != 0){
            return $this->addPost();
        }

        return $this->view('panel/add');

    }

    public function addPost(){

        if(isset($_POST['title']) && isset($_POST['content'])){
            $post = new Post();

            $post->addPost($_POST['title'],$_POST['content']);

            header('location: showAll');

        }



    }

    public function delete($id){

        if(!isset($_SESSION['isAdmin'])){
            echo "403";
            return;
        }

        $post = new Post();

        $post->deletePost($id);

        header('location: ../../posts/showAll');

    }

}