<?php
    require_once "db.class.php";

    class Greenwork extends DBC{

        public $username;
        public $user_id;

		function __construct($username, $user_id)
		{
			$this -> username = $username;
			$this -> user_id = $user_id;
		}

        public function insertPost($gen_post_id, $title,$ingredient,$steps, $images) {
            $sql = "INSERT INTO post(gen_post_id,title,ingredient,steps,images,user_id) VALUES(?,?,?,?,?,?);";
            $stmt = $this
                    ->connect()
                    ->prepare($sql);
            $stmt -> execute([$gen_post_id, $title, $ingredient, $steps, $images, $this->user_id]);
            $stmt = null;
        }

        public function editPost($title, $ingredient, $steps, $post_id) {
            $sql = "UPDATE post SET title=?, ingredient=?, steps=? WHERE id=?;";
            $stmt = $this
                    ->connect()
                    ->prepare($sql);
            $stmt -> execute([$title, $ingredient, $steps, $post_id]);
            $stmt = null;
        }

        public function removePost($post_id){
            $sql = "DELETE FROM `post` WHERE id = ?;";
            $stmt = $this
                    ->connect()
                    ->prepare($sql);
            $stmt -> execute([$post_id]);
            $stmt = null;
        }

        public function findPost($folder_post_id){
            $sql = "SELECT * FROM `post` WHERE gen_post_id = ? LIMIT 1;";
            $stmt = $this
                    ->connect()
                    ->prepare($sql);
            $stmt -> execute([$folder_post_id]); 
            $exist = $stmt -> fetch();
            $stmt = null;
            return $exist;
        }
        public function getPost($post_id){
            $sql = "SELECT * FROM `post` WHERE id = ? LIMIT 1;";
            $stmt = $this
                    ->connect()
                    ->prepare($sql);
            $stmt -> execute([$post_id]); 
            $exist = $stmt -> fetch(PDO::FETCH_ASSOC);
            $stmt = null;
            return $exist;
        }

		public function getMyPosts(){
			$sql = "SELECT id, title, created_at FROM `post` WHERE user_id = ?;";
            $stmt = $this
                    ->connect()
                    ->prepare($sql);
            $stmt -> execute([$this->user_id]); 
            $posts = $stmt -> fetchAll(PDO::FETCH_ASSOC);
            $stmt = null;
            return $posts;
		}

    }