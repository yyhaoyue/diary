<html>
<script type="text/javascript">
  <!--
  if (screen.width <= 800) {
    window.location = "/mobile.php";
  }
</script>
<head>
    <link rel="stylesheet" type="text/css" href="mystyle.css">
    <style>
        overflow-y: hidden;
        body {
            margin: 0;
        }
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
            position: fixed;
            top: 0;
            width: 100%;
        }
        li {
            float: left;
        }
        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        li a:hover:not(.active) {
            background-color: #111;
        }
        .active {
            background-color: #4CAF50;
        }
    </style>
</head>
<style>
    * {
        padding: 0;
        margin: 0;
    }
    .fit {
        max-width: 80%;
        max-height: 80%;
    }
    .center {
        display: block;
        margin: auto;
    }
    input[type=text] {
        padding: 5px;
        border: 2px solid #ccc;
        -webkit-border-radius: 5px;
        border-radius: 5px;
    }
    input[type=text]:focus {
        border-color: #333;
    }
    input[type=submit] {
        padding: 5px 15px;
        background: #ccc;
        border: 0 none;
        cursor: pointer;
        -webkit-border-radius: 5px;
        border-radius: 5px;
    }
    input[type=file] {
        padding: 5px 15px;
        background: #ccc;
        border: 0 none;
        cursor: pointer;
        -webkit-border-radius: 5px;
</style>

<body>

    <ul>
        <li><a class="active" href="#">Home</a>
        </li>
        <li><a href="#something">something</a>
        </li>
    </ul>

    <div style="padding:20px;margin-top:30px;background-color:#1abc9c;height:auto;width:100%;">
        <link href="style.css" rel="stylesheet" type="text/css" />
        <form action="processingscript.php" method="POST" enctype="multipart/form-data">
            <textarea name="field1" rows="4" cols="50"></textarea>
            <br>
            <br>
            <input type="file" name="fileToUpload" id="fileToUpload" />
            <br>

            <br>
            <br>
            <input type="submit" name="submit" value="Submit">
        </form>

        <?php $myfilename="data.txt" ; if(file_exists($myfilename)){ echo file_get_contents($myfilename); } ?>

    </div>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript" language="JavaScript">
        function set_body_height() { // set body height = window height
            $('body').height($(window).height());
        }
        $(document).ready(function() {
            $(window).bind('resize', set_body_height);
            set_body_height();
        });
    </script>

    <div style="background-color:#000000;width:100%;">
        <!--[if mso]>
<br>
<br>
  <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="mailto:derekyingyong@gmail.com?subject=Send_Feedback" style="height:36px;v-text-anchor:middle;width:200px;" arcsize="9%" strokecolor="#7ea613" fill="t">
    <v:fill type="tile" src="https://imgur.com/clZqdfM.gif" color="#99c739" />
    <w:anchorlock/>
    <center style="color:#ffffff;font-family:sans-serif;font-size:13px;font-weight:bold;">Send Feedback</center>
  </v:roundrect>
<![endif]--><a href="mailto:derekyingyong@gmail.com?subject=Send_Feedback" style="background-color:#99c739;background-image:url(https://imgur.com/clZqdfM.gif);border:1px solid #7ea613;border-radius:3px;color:#ffffff;display:inline-block;font-family:sans-serif;font-size:13px;font-weight:bold;line-height:36px;text-align:center;text-decoration:none;width:200px;-webkit-text-size-adjust:none;mso-hide:all;">Send Feedback</a>
    </div>
    <div style="background-color:#000000">
        <br>
</body>

</html>
