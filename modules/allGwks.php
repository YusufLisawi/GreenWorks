<?php 
include 'db.class.php';
$db = new DBC;
$pdo = $db ->connect();

$sql = "SELECT p.id, p.images, p.gen_post_id,p.title,p.ingredient,p.steps, u.username, u.id `user_id` FROM `post` AS p JOIN `user` AS u ON p.user_id = u.id;";
$stmt = $pdo -> prepare($sql);
$stmt -> execute();
$allPosts = $stmt -> fetchAll(PDO::FETCH_ASSOC);
?>