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
            $stmt -> execute([$gen_post_id, $title,$ingredient,$steps, $images, $this->user_id]);
            $stmt = null;
        }

        public function remove($post_id){
            $sql = "DELETE FROM `post` WHERE gen_post_id = ?;";
            $stmt = $this
                    ->connect()
                    ->prepare($sql);
            $stmt -> execute([$post_id]);
            $stmt = null;
        }

        public function findPost($post_id){
            $sql = "SELECT * FROM `post` WHERE gen_post_id = ? LIMIT 1;";
            $stmt = $this
                    ->connect()
                    ->prepare($sql);
            $stmt -> execute([$post_id]); 
            $exist = $stmt -> fetch();
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