<html>
<head>
<title>Landing Page Creation</title>
<script src='script/jquery-1.4.4.min.js'></script>
<script src='script/spectrum.js'></script>
<script src="script/jquery.fontselector.js" ></script>
<script type="text/javascript" src="script/jHtmlArea-0.8.js"></script>
<link rel='stylesheet' href='css/spectrum.css' />
<link rel="stylesheet" href="css/fontselector.css"  />
<link rel="Stylesheet" type="text/css" href="css/jHtmlArea.css" />
<style>
.container {
	padding: 20px;
	float:left;
	width:30%;
}
.container input {
	size: 50px;
	padding: 5px;
	margin-bottom: 10px;
}
.container textarea {
	padding: 5px;
	margin-bottom: 10px;
	width:400px;
	height:200px;
}
.container span {
	padding: 5px;
	margin-right: 20px;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.bgColor {
	display: inline-block !important;
	margin-right: 10px;
}

#pg-centerer {
    position: absolute;
    left: 50%;
    top: 50%;
}

#shifter {
    position: relative;
    height: 100px;           /** Must set the height here. **/
    left: -50%;
}

#item {
    position: relative;
    top: -50%;
}
</style>
</head>
<body>
<h2>Landing Page Creation</h2>
<div class="container">
  <form method="post" id="form" >
	<span>Choose Template:</span><br/>
	<input class="templateSelection" type="radio" name="template" value="template1" /> <span>Template 1</span><br/>
	<input class="templateSelection" type="radio" name="template" value="template2" /> <span>Template 2</span><br/>
  
    <input type="text" name="LOGO_IMG" value="Logo Url" />
    <br/>
    <input type="text" name="CONTACT_PHONE" value="PHONE" />
    <br/>
    <input type="text" name="CONTACT_EMAIL" value="EMAIL" />
    <br/>
    <input type="text" name="BANNER_IMG" value="Banner Image Url" />
    <br/>
    <input type="text" name="FOOTER_CONTENT" value="Footer" />
    <br/>
    <span> Header BG:</span>
    <input type="text" name="HEADER_BG" value="#FFFFFF" class="bgColor" />
    <br/>
    <span> Header Text Color:</span>
    <input type="text" name="HEADER_TEXT_COLOR" value="#FFFFFF" class="bgColor" />
    <br/>
    <span> Main BG:</span>
    <input type="text" name="MAIN_BG" value="#FFFFFF" class="bgColor" />
    <br/>
    <span> Main Text Color: </span>
    <input type="text" name="MAIN_TEXT_COLOR" value="#FFFFFF" class="bgColor" />
    <br/>
    <span> Footer BG: </span>
    <input type="text" name="FOOTER_BG" value="#FFFFFF" class="bgColor" />
    <br/>
    <span> Footer Text Color: </span>
    <input type="text" name="FOOTER_TEXT_COLOR" value="#FFFFFF" class="bgColor" />
    <br/>
    <input type="hidden" name="HEADER_FONT" id="header_font"  value="'Arial,Arial,Helvetica,sans-serif'" />
    <input type="hidden" name="MAIN_FONT"  id="main_font" value="'Arial,Arial,Helvetica,sans-serif'" />
    <input type="hidden" name="FOOTER_FONT"  id="footer_font" value="'Arial,Arial,Helvetica,sans-serif'" />
    <span> Header Font: </span>
    <div id="header" class="fontSelect">
      <div class="arrow-down"></div>
    </div>
    <span> Main Content Font:</span>
    <div id="main" class="fontSelect">
      <div class="arrow-down"></div>
      </div>
    <span> Footer Font:</span>  <div id="footer" class="fontSelect">
      <div class="arrow-down"></div>
    </div>
    <textarea name="MAIN_CONTENT">CONTENET Here...</textarea>
    <br/>
    <input type="button"  name="submit" value="submit" id="submit"/>
  </form>
</div>
<div id="pg-centerer" style="display:none;">
    <div id="shifter">
        <div id="item"><img src="/Loading_please_wait.gif" /></div>
    </div>
</div>

<div style="float:left; width:60%;">
<h3>Preview</h3>
<iframe id="preview" src="" width="100%" height="100%" ></iframe>
</div>
</body>
</html>
<script type="text/javascript">
$(document).ready(function(e) {
	$('#submit').click(function(){
	$.ajax({
		url:'ajax.php',
		data: $('#form').serialize(),
		beforeSend: function(){
			$('#pg-centerer').show();
		},
		success:function(mesg){
			var templateValue = '/'+$('input[name=template]:checked').val()+'.php';
			$('#preview').attr('src',templateValue);	
			$('#pg-centerer').fadeOut('slow');
		}
		
	});



		/*$('.templateSelection').click(function(){
			var templateValue = '/'+$(this).val()+'.php';
			$('#preview').attr('src',templateValue);
		});*/
		
	});
	$('textarea').htmlarea();
		
		$(".bgColor").spectrum();
		$("bgColor").show();
});


$(function() {
		$('#header').fontSelector({
			'hide_fallbacks' : true,
			'initial' : 'Arial,Arial,Helvetica,sans-serif',
			'selected' : function(style) { $('#header_font').val(style);},
			'fonts' : [
				'Arial,Arial,Helvetica,sans-serif',
				'Arial Black,Arial Black,Gadget,sans-serif',
				'Comic Sans MS,Comic Sans MS,cursive',
				'Courier New,Courier New,Courier,monospace',
				'Georgia,Georgia,serif',
				'Impact,Charcoal,sans-serif',
				'Lucida Console,Monaco,monospace',
				'Lucida Sans Unicode,Lucida Grande,sans-serif',
				'Palatino Linotype,Book Antiqua,Palatino,serif',
				'Tahoma,Geneva,sans-serif',
				'Times New Roman,Times,serif',
				'Trebuchet MS,Helvetica,sans-serif',
				'Verdana,Geneva,sans-serif',
				'Gill Sans,Geneva,sans-serif'
				]
		});
		
		$('#main').fontSelector({
			'hide_fallbacks' : true,
			'initial' : 'Arial,Arial,Helvetica,sans-serif',
			'selected' : function(style) { $('#main_font').val(style); },
			'fonts' : [
				'Arial,Arial,Helvetica,sans-serif',
				'Arial Black,Arial Black,Gadget,sans-serif',
				'Comic Sans MS,Comic Sans MS,cursive',
				'Courier New,Courier New,Courier,monospace',
				'Georgia,Georgia,serif',
				'Impact,Charcoal,sans-serif',
				'Lucida Console,Monaco,monospace',
				'Lucida Sans Unicode,Lucida Grande,sans-serif',
				'Palatino Linotype,Book Antiqua,Palatino,serif',
				'Tahoma,Geneva,sans-serif',
				'Times New Roman,Times,serif',
				'Trebuchet MS,Helvetica,sans-serif',
				'Verdana,Geneva,sans-serif',
				'Gill Sans,Geneva,sans-serif'
				]
		});
		
		$('#footer').fontSelector({
			'hide_fallbacks' : true,
			'initial' : 'Arial,Arial,Helvetica,sans-serif',
			'selected' : function(style) { $('#footer_font').val(style);},
			'fonts' : [
				'Arial,Arial,Helvetica,sans-serif',
				'Arial Black,Arial Black,Gadget,sans-serif',
				'Comic Sans MS,Comic Sans MS,cursive',
				'Courier New,Courier New,Courier,monospace',
				'Georgia,Georgia,serif',
				'Impact,Charcoal,sans-serif',
				'Lucida Console,Monaco,monospace',
				'Lucida Sans Unicode,Lucida Grande,sans-serif',
				'Palatino Linotype,Book Antiqua,Palatino,serif',
				'Tahoma,Geneva,sans-serif',
				'Times New Roman,Times,serif',
				'Trebuchet MS,Helvetica,sans-serif',
				'Verdana,Geneva,sans-serif',
				'Gill Sans,Geneva,sans-serif'
				]
		});
		
	});

	



</script>