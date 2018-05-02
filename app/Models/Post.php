<?php

namespace app\Models;

class Post extends Model {

    protected $table = 'posts';

    public function editPost($title,$content,$id){
        $stmt = $this->mysqli->stmt_init();

        $stmt->prepare('UPDATE '.$this->table.' SET title=?,content=? WHERE id = ?');

        $stmt->bind_param('ssi',$title,$content,$id);

        $stmt->execute();
    }

    public function deletePost($id){
        $stmt = $this->mysqli->stmt_init();

        $stmt->prepare('DELETE FROM '.$this->table.' WHERE id = ?');

        $stmt->bind_param('i',$id);

        $stmt->execute();
    }

    public function addPost($title,$content){

        $stmt = $this->mysqli->stmt_init();

        $stmt->prepare('INSERT INTO '.$this->table.' (title,content,created) VALUES(?,?,?)');

        $time = time();

        $stmt->bind_param('ssi',$title,$content,$time);

        $stmt->execute();

    }

}