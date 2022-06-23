<?php
session_start();
include 'greenwork.class.php';

$ds = DIRECTORY_SEPARATOR;
 
$storeFolder = 'uploads';
$userFolder = $_SESSION['username'];

if (!isset($_SESSION['post_id'])){
    $_SESSION['post_id'] = uniqid("p");
}

$postFolder = $_SESSION['post_id'];

if(isset($_FILES["file"]["name"]) && count($_POST) > 2){
  $file = $_FILES["file"];
  $totalFiles = count($file['name']);
  $filesArray = array();

  for($i = 0; $i < $totalFiles; $i++){
    $imageName = $file["name"][$i];
    $tmpName = $file["tmp_name"][$i];

    $imageExtension = explode('.', $imageName);

    $name = $imageExtension[0];
    $imageExtension = strtolower(end($imageExtension));

    $newImageName = $name . " - " . uniqid(); // Generate new image name
    $newImageName .= '.' . $imageExtension;

    $targetPath = dirname(__FILE__) . $ds . $storeFolder . $ds;

    if (!file_exists($postFolder))
        mkdir($targetPath.$postFolder, 0777, true);

    $targetFile = $targetPath.$postFolder.'/'. $newImageName;

    move_uploaded_file($tmpName, $targetFile);
    
    $filesArray[] = $newImageName;
  }
    $images = json_encode($filesArray);
    foreach($_POST as $name => $value){
			$_POST[$name] = trim(htmlentities($value));
		}
  	extract($_POST);
      
    $gw = new Greenwork($_SESSION['username'], $_SESSION['user_id']);
    $gw -> insertPost($postFolder, $title, $ingredients, $steps, $images);
    unset($_SESSION['post_id']);
    
  }
?>