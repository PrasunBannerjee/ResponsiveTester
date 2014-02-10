<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Responsive Website Design Testing Online tool</title>

<meta name="language" content="en-us" />
<meta name="description" content="Responsive website tester is a simple online tool for web developers and website testers to check whether their website and web applications are compatible with different screen sizes such as smartphones, tablets, laptops, desktops and custom resolutions." />
<meta name="keywords" content="how to check responsive website, check responsive website, responsive website check, check responsive design, responsive check, responsive design check, check responsive site, check website responsive, responsive site check, responsive web design check, how to check responsive design, check responsive web design, check site responsive, responsive tester, responsive design tester, responsive site tester, responsive web tester, responsive tester tool, responsive layout tester, responsive web design tester, mobile responsive tester, responsive theme tester, responsive website sizes, responsive sizes, responsive website size, responsive web design sizes, responsive screen sizes, responsive device sizes, responsive site sizes, the responsive web, responsive website tester custom resolution, custom screen sizes website online tester, online custom resolution responsive website tester tool,  online custom resolution responsive website checker tool, tools made by Prasun Bannerjee" />
<meta name="classification" content="online tool, free online tool, internet tool, web design testing tool, website testing tool, internet" />
<link rel="author" href="https://plus.google.com/+PrasunBannerjee" />
<meta name="distribution" content="Global" />
<meta name="rating" content="General" />
<meta name="robots" content="index, follow" />
<meta name="revisit-after" content="29 days" />
<meta name="creator" content="Prasun Bannerjee" />
<meta name="publisher" content="WebCraftisan, TechLobe" />



<link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
 <style type="text/css">
      body {
        padding-top: 70px;
        padding-bottom: 40px;
		padding-left: 15px;
		padding-right: 15px;
  		background-image:url(img/white_leather.png);
      	  }
	  
	  	#frames{overflow-x:scroll;width:100%;margin-bottom:10px;padding-bottom:20px;}
	
		
	  
#backtotop {
	position: fixed;
	right:0px;
	bottom:25px;
	display:none;/*hide the button first*/
}
#backtotop a {
	text-decoration:none;
	border:0 none;
	display:block;
	width:31px;
	height:75px;
}
#backtotop a:hover {
	opacity:.8; /*mouse over fade effect*/
}
.clrb {
	clear:both;
}
#maindiv {
	width:700px;
	border:1px solid #999;
	margin:auto;
	padding:20px;
}


.boxborder {
-webkit-border-radius: 35px;-moz-border-radius: 35px;border-radius: 35px;border:40px solid #000000;background-color:#F2F2F2;-webkit-box-shadow: 0px 10px 23px rgba(0, 0, 0, 0.8);
-moz-box-shadow:    0px 10px 23px rgba(0, 0, 0, 0.8);
box-shadow:         0px 10px 23px rgba(0, 0, 0, 0.8);

-webkit-transition: all 0.5s;
	-moz-transition: all 0.5s;
	transition: all 0.5s;



}
	  
	  </style>


</head>

<body>

<!-- navbar area -->
<div class="navbar navbar-fixed-top">
    <ul class="nav">
      
            <li> <a class="brand" href="#">Responsive Tester</a></li>
           <li class="divider-vertical">
            
              <!-- Form area -->
 
 <li class="form-inline">
  <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>" >
   <li class="input-append"> 
  <input class="span3"   title="Enter any website name to check its responsive behaviour" type="text" placeholder="Test your own site" id="url" />
  <input type="submit" class="btn btn-danger" value="Go!" id="button" name="button"></li>
  
  <input type="radio" name="group1" value="1" id="check1" checked="checked">Standard Sizes/Devices 
<input type="radio" name="group1" id="check2" value="2" > Custom Size
<input type="text" class="span2" placeholder="Width in pixel" id="width" name="width" disabled="disabled">
  <input type="text" class="span2" placeholder="Height in pixel" id="height" name="height" disabled="disabled">
 
  </form></li>
                   
<?php
if (isset($_POST['url']))
{

    $Ht = $_POST['height'];
    $Wt = $_POST['width'];

}
     ?>       
 
 
 <li>&nbsp;&nbsp;</li>
 <li>&nbsp;&nbsp;</li>
 <li>&nbsp;&nbsp;</li>
 <li>&nbsp;&nbsp;</li>
 <li>&nbsp;&nbsp;</li>
            <!-- options area -->
           <li>
              <a href="#myModal" role="button" data-toggle="modal"><i class="icon-info-sign"></i> About this Tool</a></li>
              
           
            
    </ul>
</div>
  <!-- Navbar Ends here -->



  
  
  <div class="hero-unit">
  <h1>Is Your Web Site/App Responsive? Test here</h1><br>
  <p>Scroll below for standard screen sizes, or enter your own screen resolution. Just type in your website name and hit Go! That's all you need to do to test your website. </p>
  <p>
    <a class="btn btn-primary btn-large" href="#myModal" role="button" data-toggle="modal">
      Learn more
    </a>
  </p>
</div>
  <center>
  <div id="abc">
   
   
   
  </div>
 
  
<div id="inner">

<div id="f1" class="frame"><h2>240<span> x 320</span><span class="small">(small phone)</span><br><img src="img/loader-circle.gif"/></h2><iframe sandbox="allow-same-origin allow-forms allow-scripts" seamless width="255" height="320" class="boxborder"></iframe></div><br><hr/><div id="f2" class="frame"><h2>320<span> x 480</span><span class="small">(iPhone)</span><br><img src="img/loader-circle.gif"/><br></h2><iframe class="boxborder" sandbox="allow-same-origin allow-forms allow-scripts" seamless width="335" height="480"></iframe></div><br><hr/><div id="f3" class="frame"><h2>480<span> x 640</span><span class="small">(small tablet)</span><br><img src="img/loader-circle.gif"/></h2><iframe class="boxborder" sandbox="allow-same-origin allow-forms allow-scripts" seamless width="495" height="640"></iframe></div><br><hr/><div id="f6" class="frame"><h2>640<span> x 1136</span><span class="small">(iPhone 5, 5C, 5S)</span><br><img src="img/loader-circle.gif"/></h2><iframe class="boxborder" sandbox="allow-same-origin allow-forms allow-scripts" seamless width="645" height="1136"></iframe></div><br><hr/><div id="f4" class="frame"><h2>768<span> x 1024</span><span class="small">(iPad - Portrait)</span><br><img src="img/loader-circle.gif"/></h2><iframe class="boxborder" sandbox="allow-same-origin allow-forms allow-scripts" seamless width="783" height="1024"></iframe></div><br><hr/><div id="f5" class="frame"><h2>1024<span> x 768</span><span class="small">(iPad - Landscape)</span><br><img src="img/loader-circle.gif"/></h2><iframe class="boxborder" sandbox="allow-same-origin allow-forms allow-scripts" seamless width="1039" height="768"></iframe></div>


					</div>
  
    
   
  
   

       
        
        
	</center>  
  
  
  
  <div id="backtotop">
   <a href="#" class="btn btn-inverse" >
      <i class="icon-chevron-up icon-white"></i> Back to Top 
   </a>
</div>





  
  <!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">About the Responsive Website Tester</h3><br>
   <center><a href="https://twitter.com/share" class="twitter-share-button" data-text="Is your #website ready for all screen sizes? Check out using #Online Responsive Tester #Tool" data-via="PrasunBannerjee">Tweet</a>
                    <a href="https://twitter.com/PrasunBannerjee" class="twitter-follow-button" data-show-count="true">Follow @PrasunBannerjee</a></center>
      
  </div>
  <div class="modal-body">
    <p>Hi, I'm <a href="http://google.com/+PrasunBannerjee" rel="author" title="Prasun Bannerjee" target="_blank">Prasun Bannerjee</a>. I'm a blogger and blog at <a href="http://www.techlobe.com" title="Tech Lobe" target="_blank">TechLobe</a>, <a href="http://www.pixelbing.com" title="PixelBing" target="_blank">PixelBing</a> and a few more blogs. </p>
    <p> I created this simple tool for web developers and website testers so they can test the their website for responsive layout, and for whether their website is compatible with various devices of different screen sizes or not. The tool is free of cost, please help me promote and share it.
    <h3>What's different?</h3>
    <p> There are a lot of tools available for checking the responsive layout of websites. This one, however gives out the flexibility to have custom set of width and height entered by the user to check for specific sizes. </p>
    <hr>
    <p><strong> If you liked my effort please share it to the world, it doesn't cost you a dime but can help my effort reach more people. Thanks</strong></p><hr>
 <strong>NOTE</strong>   <font size="-1"><ul><li>Shown here are screen resolution in pixels. Some devices may have more condensed pixel density in physical reality, therefore the "Size" should not be misinterpreted with "Resolution"</li><li>Additional 5 pixel width has been used in the mini screens below to incorporate the vertical scroll bar</li></ul> </font>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
   
  </div>
</div>
  
  
  
  
  
  <!-- Javascripts -->
<script src="http://code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script>
<script type="text/javascript" src="http://twitter.github.com/bootstrap/assets/js/bootstrap-dropdown.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

	<script type="text/javascript" src="js/responsive.js"></script>
    
    
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
	
	<script type="text/javascript">
    $('.dropdown-menu input, .dropdown-menu label').click(function(e) {
        e.stopPropagation();
    });
	
</script>

<script>  
    $(document).ready(function()
        
		var w= <?php echo $Wt; ?>;
		var h= <?php echo $Ht; ?>;
		
    });
</script>


<!-- efforless script below -->
<script type="text/javascript">
	jQuery(document).ready(function(){
		
		//code for radio button
		$('#check2').click(function () {
    if ($('#check2').is(":checked")) {
        $('#width')
            .removeAttr("disabled")
        $('#height')
            .removeAttr("disabled")
            }
    else {
        $('#width')
            .attr("disabled", "disabled")
            $('#height')
            .attr("disabled", "disabled")
            
    }
});

$('#check1').click(function () {
    if ($('#check2').is(":checked")) {
        $('#width')
            .removeAttr("disabled")
        $('#height')
            .removeAttr("disabled")
            }
    else {
        $('#width')
            .attr("disabled", "disabled")
            $('#height')
            .attr("disabled", "disabled")
            
    }
});

		
		
		var pxShow = 300;//height on which the button will show
		var fadeInTime = 1000;//how slow/fast you want the button to show
		var fadeOutTime = 1000;//how slow/fast you want the button to hide
		var scrollSpeed = 1000;//how slow/fast you want the button to scroll to top. can be a value, 'slow', 'normal' or 'fast'
		jQuery(window).scroll(function(){
			if(jQuery(window).scrollTop() >= pxShow){
				jQuery("#backtotop").fadeIn(fadeInTime);
			}else{
				jQuery("#backtotop").fadeOut(fadeOutTime);
			}
		});
		 
		jQuery('#backtotop a').click(function(){
			jQuery('html, body').animate({scrollTop:0}, scrollSpeed); 
			return false; 
		}); 
	});
	
	
	
	$('#button').click(function () {
    if ($('#check1').is(":checked")) {
        $('#inner').html('<div id="f1" class="frame"><h2>240<span> x 320</span><span class="small">(small phone)</span><br><img src="img/loader-circle.gif"/></h2><iframe sandbox="allow-same-origin allow-forms allow-scripts" seamless width="255" height="320" class="boxborder"></iframe></div><br><hr/><div id="f2" class="frame"><h2>320<span> x 480</span><span class="small">(iPhone)</span><br><img src="img/loader-circle.gif"/><br></h2><iframe class="boxborder" sandbox="allow-same-origin allow-forms allow-scripts" seamless width="335" height="480"></iframe></div><br><hr/><div id="f3" class="frame"><h2>480<span> x 640</span><span class="small">(small tablet)</span><br><img src="img/loader-circle.gif"/></h2><iframe class="boxborder" sandbox="allow-same-origin allow-forms allow-scripts" seamless width="495" height="640"></iframe></div><br><hr/><div id="f6" class="frame"><h2>640<span> x 1136</span><span class="small">(iPhone 5, 5C, 5S)</span><br><img src="img/loader-circle.gif"/></h2><iframe class="boxborder" sandbox="allow-same-origin allow-forms allow-scripts" seamless width="645" height="1136"></iframe></div><br><hr/><div id="f4" class="frame"><h2>768<span> x 1024</span><span class="small">(iPad - Portrait)</span><br><img src="img/loader-circle.gif"/></h2><iframe class="boxborder" sandbox="allow-same-origin allow-forms allow-scripts" seamless width="783" height="1024"></iframe></div><br><hr/><div id="f5" class="frame"><h2>1024<span> x 768</span><span class="small">(iPad - Landscape)</span><br><img src="img/loader-circle.gif"/></h2><iframe class="boxborder" sandbox="allow-same-origin allow-forms allow-scripts" seamless width="1039" height="768"></iframe></div>');
	}
    else { if ($('#check2').is(":checked")) {
		
		w=$('#width').val();
		h=$('#height').val();
        $('#inner').html('<div id="f2" class="frame"><h2>Custom resolution of '+w+'px x '+h+'px<br><img src="img/loader-circle.gif"/></h2><iframe sandbox="allow-same-origin allow-forms allow-scripts" seamless width="'+w+'" height="'+h+'" class="boxborder"></iframe></div><br><hr/>');
            
    }
	}
});



	
	
	
</script>



</body>
</html>
