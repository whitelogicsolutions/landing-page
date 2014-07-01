<?php include('config.php'); ?>
<html>
<head>
<title>Template 1</title>
<style>
#wrapper{
	margin:0 auto;
	width:100%;
	border:1px solid #FF0000;
	max-width:1000px;
}
#header{
	background:<?=HEADER_BG?>;
	width:100%;
	border-bottom:1px solid #000;
	display:inline-block;
	color:<?=HEADER_TEXT_COLOR?>;
	font-family:<?=HEADER_FONT;?>;
}

#logo{
	float:left;
	padding:10px;
}
#contact{
	float:right;
	padding:10px;
}
#banner{
	margin-top:10px;
	margin-bottom:10px;
	border-bottom:1px solid #000;
	max-width:1000px;
	width:100%;
}
#main{
	/*min-height:800px;*/
	background:<?=MAIN_BG?>;
	border-bottom:1px solid #000;
	padding:10px;
	width:63%;
	margin-right:10px;
	float:left;
	color:<?=MAIN_TEXT_COLOR?>;
	font-family:<?=MAIN_FONT;?>;
	max-width:500px;
}
#right{
	background:#FF0000;
	float:left;
	padding:10px;
	width:32%;
	min-height:250px;
	max-width:225px;
	
}
#footer{
	min-height:40px;
	background:<?=FOOTER_BG?>;
	color:#fff;
	padding:10px;
	width:100%;
	float:left;
	color:<?=FOOTER_TEXT_COLOR?>;
	font-family:<?=FOOTER_FONT;?>;
}


</style>
</head>
<body>
<div id="wrapper">
<div id="header"><div id="logo"><img src="<?=LOGO_IMG ?>" width="200" height="200" /></div><div id="contact">Phone:<?= CONTACT_PHONE?><br/>Email:<?= CONTACT_EMAIL?></div></div>
	<div id="banner">
	<img src="<?= BANNER_IMG ?>" width="100%" height="400" />	
	</div>
	<div id="main">
		<?= MAIN_CONTENT ?>
	</div>
	<div id="right">
		Contact Form
	</div>
	<div id="footer">
		<?= FOOTER_CONTENT ?>
	</div>
</div>
</body>
</html>