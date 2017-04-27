<!DOCTYPE html>
<html lang="en" class="app">
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="../css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="../css/animate.css" type="text/css" />
	<link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css" />
	<link rel="stylesheet" href="../css/font.css" type="text/css" />
	
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

	<link type="text/css" rel="stylesheet" media="all" href="../css/chat.css" />
	<link type="text/css" rel="stylesheet" media="all" href="../css/screen.css" />
	<link type="text/css" rel="stylesheet" media="all" href="../css/messagerie.css" />
	<script type="text/javascript">
	var auto_refresh = setInterval(
	function ()
	{
		$('#msg').load('affiche.php?m=<?php echo $_GET['m']; ?>').fadeIn("slow");
		$('#list').load('msg.php?m=<?php echo $_GET['m']; ?>').fadeIn("slow");
		var objDiv = document.getElementById("msg");
		objDiv.scrollTop = objDiv.scrollHeight;
	}, 1000); // refresh every 1000 milliseconds
	</script>
</head>
<body class="">
  <section class="vbox">
    <section>
      <section class="hbox stretch">
		<section id="content">
		<?php
			$_SESSION['username'] = "sou";
		?>
		<a style="margin:15px 40px;" class="btn btn-success" href="javascript:void(0)" onclick="javascript:chatWith('admin')">Chat avec admin</a>
       
		    <section class="hbox stretch">
              <section class="vbox">
			  <section class="scrollable wrapper w-f">
				
				<div class="col-md-3">
					<div id="list" class="list">
							<!-- liste user  -->	
					</div>
					</div>
					<div class="col-md-8">
						<div class="contentMsg">
							<div id="msg" class="msg">
								<!-- affiche -->
								
							</div>
						</div>
							<div class="chatboxinput"><textarea class="chatboxtextarea" onkeydown="javascript:return checkChatBoxInputKey(event,this,'<?php echo $_GET['m']; ?>');"
							style="margin-top:20px; overflow:auto; resize:none; width:100%; color: black;"
							rows="8" placeholder="Entrer votre message ici..."></textarea></div>
					</div>
				</section>
			  </section>
          
          </section>
          <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen, open" data-target="#nav,html"></a>
        </section>
        
      </section>
    </section>
  </section>

	<script src="../js/bootstrap.js"></script>
	<script src="../js/app.js"></script> 
	<script src="../js/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="../js/app.plugin.js"></script>
	<script src="../js/jquery.js"></script>
	<script src="../js/chat.js"></script>
</body>
</html>