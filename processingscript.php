<body style="background-color:black;">
<div align="center" class="throbber-loader">
  Posting...
</div>
<link rel="stylesheet" href="http://css-spinners.com/css/spinner/throbber.css" type="text/css">
<?php
$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "picture ". basename( $_FILES["fileToUpload"]["name"]). " uploaded";
    }
if ($target_file == "upload/") {
echo "-nofile-";
} else {
$picturedata = "<img class=\"center fit\" src=\"" . $target_file .  "\"alt=\"text\">";
}
$date = date('m/d/Y h:i:s a', time());

if(isset($_POST['field1'])) {
    $data = "<p> <b> <font color=\"red\">" . $date . "</font> </b> </p>" . "<p>" . $_POST['field1'] . "<br>" . "</p>" . $picturedata ;
    $data .= file_get_contents('data.txt');
    $ret = file_put_contents('data.txt', $data);
    if($ret === false) {
        die('There was an error writing this file');
    }
    else {
        echo "Written to file";
    }
}
else {
   die('no post data to process');
}
?>
<meta http-equiv="refresh" content="0.1; URL='/#'" />
