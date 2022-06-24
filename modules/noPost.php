<?php 
include 'db.class.php';
// fetch all posts folders names 
$db = new DBC;
$pdo = $db -> connect();
$sql = "SELECT gen_post_id FROM post;";
$stmt = $pdo -> prepare($sql);
$stmt -> execute();
$folderPosts = $stmt -> fetchAll(PDO::FETCH_ASSOC);
$dirPosts = [];
for($i = 0; $i < count($folderPosts); $i++){
	$dirPosts[] = $folderPosts[$i]['gen_post_id'];
}

error_log(json_encode($dirPosts));
$imgsFolder = "modules/uploads/";
$folders = scandir($imgsFolder);
// function to delete non-empty folders
function deleteDirectory($dir) {
    if (!file_exists($dir)) {
        return true;
    }

    if (!is_dir($dir)) {
        return unlink($dir);
    }

    foreach (scandir($dir) as $item) {
        if ($item == '.' || $item == '..') {
            continue;
        }

        if (!deleteDirectory($dir . DIRECTORY_SEPARATOR . $item)) {
            return false;
        }

    }

    return rmdir($dir);
}
// check whether the post folder name have an actual post in the database
foreach ($folders as $folderI => $folderN){
	if ($folderN == '.' || $folderN == '..') {
            continue;
	}
    // delete it if theres no posts for it
	if (!in_array($folderN, $dirPosts)){
		error_log("$folderN");
		deleteDirectory($imgsFolder.$folderN);
	}
}


?>