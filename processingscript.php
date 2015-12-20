<body style="background-color:black;">
<div align="center" class="throbber-loader">
  Posting...
</div>
<link rel="stylesheet" href="http://css-spinners.com/css/spinner/throbber.css" type="text/css">
<?php
date_default_timezone_set('America/Los_Angeles');
$date = date('d:m:h:i:s a', time());
$valid_formats = array("jpg", "png", "gif", "zip", "bmp");
$max_file_size = 4800*4800; //100 kb
$path = "upload/"; // Upload directory
$count = 0;
$numx = 1;
$mutipletoday = 0;

if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST"){
	// Loop $_FILES to exeicute all files
	foreach ($_FILES['files']['name'] as $f => $name) {     
	    if ($_FILES['files']['error'][$f] == 4) {
	        continue; // Skip file if any error found
	    }	       
	    if ($_FILES['files']['error'][$f] == 0) {	           
	        if ($_FILES['files']['size'][$f] > $max_file_size) {
	            $message[] = "$name is too large!.";
	            continue; // Skip large files
	        }
			elseif( ! in_array(pathinfo($name, PATHINFO_EXTENSION), $valid_formats) ){
				$message[] = "$name is not a valid format";
				continue; // Skip invalid file formats
			}
	        else{ // No error found! Move uploaded files 
		    $numx++;
	            if(move_uploaded_file($_FILES["files"]["tmp_name"][$f], $path . md5(time() . $name . $numx) . $name))
	            $count++; // Number of successfully uploaded file
		    $thisfile = $path . md5(time() . $name . $numx) . $name;
		    if($count <= "4") {
		    $picturedata .= "<a href='" . $thisfile . "' data-lightbox=\"" .  $date .  "\"><img src=\"" . $path . md5(time() . $name . $numx) . $name . "\"alt=\"text\" height=\"42\" width=\"42\" class='likeordislike'><h4 class='liketext'></h4></a>";
} else {
		    $picturedata .= "<a hidden href='" . $thisfile . "' data-lightbox=\"" .  $date .  "\"><img hidden src=\"" . $path . md5(time() . $name . $numx) . $name . "\"alt=\"text\" height=\"42\" width=\"42\" class='likeordislike'><h4 class='liketext'></h4></a>";
}
	            if($count == "2") {
		    $picturedata .= "<br>";
}
}
	    }
	}
}
//$picturedata = "<img class=\"center fit\" src=\"" . $target_file .  "\"alt=\"text\">";






$hr = "<hr>";
if(isset($_POST['field1'])) {
//if date("m/d") in file.read('data.txt'):
    $today = date("m/d");
    if( strpos(file_get_contents("./data.txt"),$today) !== true) {
$str=file_get_contents('data.txt');
//$str=str_replace("<div class=\"card\">
//        <div class=\"card-header\">" . $today . 
//        "</div><div class=\"card-content\">
//        <div class=\"card-content-inner\">", "",$str);

file_put_contents('data.txt', $str);
$hr = "";
$mutipletoday = 1;

}
 //   	if($mutipletoday == "1") {
//	$data = "<div class=\"card\">
//    	<div class=\"card-header\">" . $today . 
//	"</div><div class=\"card-content\">
//        <div class=\"card-content-inner\">
//	<table> <tr> <td> " . "</td> <td>" . $picturedata . " </td> <td valign=\"top\">" . nl2br($_POST['field1']) . "</td></tr>" . "</table>"
//	 . $hr ;
//} else {
 $data = "<div class=\"card\">
        <div class=\"card-header\">" . $today . 
        "</div><div class=\"card-content\">
        <div class=\"card-content-inner\">
        <table> <tr> <td> " . "</td> <td>" . $picturedata . " </td> <td valign=\"top\">" . nl2br($_POST['field1']) . "</td></tr>" . "</table>
   </div>
</div>
</div>"
. $hr . $_POST['lock'];
//}
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



    if(isset($_POST["lock"]))
     {
       echo "testvariabel has been set!";
     }
?>
<meta http-equiv="refresh" content="10; URL='/#'" />
