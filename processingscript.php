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
	            if(move_uploaded_file($_FILES["files"]["tmp_name"][$f], $path . md5(time() . $name) . $name))
	            $count++; // Number of successfully uploaded file
		    $picturedata .= "<img class=\"center fit\" src=\"" . $path . md5(time() . $name) . $name .  "\"alt=\"text\">";
	        }
	    }
	}
}
//$picturedata = "<img class=\"center fit\" src=\"" . $target_file .  "\"alt=\"text\">";







if(isset($_POST['field1'])) {
    $data = "<table> <tr> <td> <p class=\"ltext\"> <b> <font color=\"red\">" . date("m/d") . "</td> <td>" . $picturedata . "</font> </b> </p> </td> </tr>" . "<p> </table>" . $_POST['field1'] .  "</p>" . "<hr>" ;
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
<meta http-equiv="refresh" content="10; URL='/#'" />
