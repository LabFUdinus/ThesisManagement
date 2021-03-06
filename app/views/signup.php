<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sign Up</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">





    <!-- For sample logo only-->
    <!--Remove if you no longer need this font-->
    <link rel="stylesheet" type="text/css" href="lib/AquafinaFont.css">
    <!--For sample logo only-->






    <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.css">
    <script src="lib/jquery-1.7.2.min.js" type="text/javascript"></script>
    <script src="javascripts/site.js" type="text/javascript"></script>
    
    <link rel="stylesheet" type="text/css" href="stylesheets/theme.css">


    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="assets/dinus.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
  <!--[if IE 7 ]> <body class="ie ie7 "> <![endif]-->
  <!--[if IE 8 ]> <body class="ie ie8 "> <![endif]-->
  <!--[if IE 9 ]> <body class="ie ie9 "> <![endif]-->
  <!--[if (gt IE 9)|!(IE)]><!--> 
  <body class=""> 
  <!--<![endif]-->
    
    
    <div class="row-fluid login">
    <div class="dialog">
        <p class="brand" href="index.html">Awesome.</p>
        <div class="block">
            <div class="block-header">
                <h2>Sign Up</h2>
            </div>
			<ul id="myTab" class="nav nav-tabs" role="tablist">
			<li class="active"><a href="#student" role="tab" data-toggle="tab" aria-controls="home">Student</a></li>
			<li><a href="#supervisor" data-toggle="tab" aria-controls="profile">Supervisor</a></li>
			</ul>
			<div id="myTabContent" class="tab-content" style="padding:0">
			  <div class="tab-pane fade in active" id="student">
				<form>
					<input type="text" name="username" id="username" class="span12" placeholder="Username">
					<input type="password" name="password" id="password" class="span12" placeholder="Password">
					<input type="password" name="repass" id="repass" class="span12" placeholder="Retype Password">
					<input type="text" name="nim" id="nim" class="span12" placeholder="NIM">
					<input type="text" name="name" id="name" class="span12" placeholder="Name">
					<input type="text" name="address" id="address" class="span12" placeholder="Address">
					<input type="text" name="handphone" id="handphone" class="span12" placeholder="Handphone">
					<input type="text" name="email" id="email" class="span12" placeholder="Email">
				</form>
				</div>
			  <div class="tab-pane fade" id="supervisor">
				<form>
					<input type="text" name="username" id="username" class="span12" placeholder="Username">
					<input type="password" name="password" id="password" class="span12" placeholder="Password">
					<input type="password" name="repass" id="repass" class="span12" placeholder="Retype Password">
					<input type="text" name="nip" id="nip" class="span12" placeholder="NIP">
					<input type="text" name="name" id="name" class="span12" placeholder="Name">
					<input type="text" name="address" id="address" class="span12" placeholder="Address">
					<input type="text" name="handphone" id="handphone" class="span12" placeholder="Handphone">
					<input type="text" name="email" id="email" class="span12" placeholder="Email">
				</form>
			  </div>
			</div>
			<div class="form-actions" style="margin:0">
				<a href="." class="btn btn-success pull-right" onclick="/*fungsi()*/">Sign Up</a><a href="."><span class="glyphicon glyphicon-home"></span>Back to login</a>
				<div class="clearfix"></div>
			</div>
        </div>
    </div>
</div>



    
    <script src="lib/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script>
    
  </body>
</html>



<html>