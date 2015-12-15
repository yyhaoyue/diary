<head>
<meta name = "viewport"  content = "initial-scale = 1.0, user-scalable = no">

<script type="text/javascript">
  <!--
  if (screen.width >= 800) {
    window.location = "/index.php";
  }
</script>


</head>
<style>


  .fpath input {
	border: none;
	border-color: transparent;
	background: transparent;
}

  .file_button_container,
  .file_button_container input {
       height: 47px;
       width: 47px;
   }

   .file_button_container {
       background: transparent url(res/Button.png) left top no-repeat;
       background-size: 40px auto; 
	font-size:16px;
 }

   .file_button_container input {
       opacity: 0;
   }



.fit {
        max-width: 90%;
        max-height: 90%;
    }
.center {
        display: block;
        margin: auto;
    }



#slideout {
    position: fixed;
    top: 40px;
    left: 0;
    width: 35px;
    padding: 12px 0;
    text-align: center;
    background: #EEEEEE;
    -webkit-transition-duration: 0.3s;
    -moz-transition-duration: 0.3s;
    transition-duration: 0.3s;
    -o-transition-duration: 0.3s;
    -webkit-border-radius: 0 5px 5px 0;
    -moz-border-radius: 0 5px 5px 0;
    border-radius: 0 5px 5px 0;
}
#slideout_inner {
    position: fixed;
    top: 40px;
    left: -300px;
    background: #EEEEEE;
    width: 250px;
    padding: 25px;
    height: 300px;
    -webkit-transition-duration: 0.3s;
    -moz-transition-duration: 0.3s;
    transition-duration: 0.3s;
    -o-transition-duration: 0.3s;
    text-align: left;
    -webkit-border-radius: 0 0 5px 0;
    -moz-border-radius: 0 0 5px 0;
    border-radius: 0 0 5px 0;
}
#slideout_inner textarea {
    width: 250px;
    height: 100px;
    margin-bottom: 6px;
}
#slideout:hover {
    left: 250px;
}
#slideout:hover #slideout_inner {
    left: 0;
}



    #container{
        width: 250px;
        margin: 0 auto;
    }
    input{
        width: 250px;
        height: 25px;
        font-size:18px;
        -webkit-border-radius: 5px;
    }
    input#submit{
        width: 80px;
        height: 30px;
    }

</style>

<div id="container">
<div id="slideout">
    <img src="/res/pencil.png" alt="Write" />
    <div id="slideout_inner">
                <form action="processingscript.php" method="POST" enctype="multipart/form-data">

            <textarea id="field1" name="field1" placeholder="Say something..." rows=13 cols=29></textarea>
            <br /><br />
	    <div class="file_button_container">
            <input type="file" name="fileToUpload" id="fileToUpload" onchange="javascript: document.getElementById ('fileName').value = this.value"/>
	    </div>
<div class="fpath">
	    <input type="text" id="fileName" readonly="readonly">
	    </div>
            <br /><br />
            <input type="submit" value="submit" id="submit">
        </form>
    </div>
</div>


<body style="background-color:#1abc9c;">

<div id="data">
<?php $myfilename="data.txt" ; if(file_exists($myfilename)){ echo file_get_contents($myfilename); } ?>
</div>




</div>
</body>
