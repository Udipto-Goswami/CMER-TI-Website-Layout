<?php
	

  ?>

  <!doctype html>
<html>

  <head>
    <title>about_us_act</title>
    <link rel="stylesheet"type="text/css" href="sample_css.css">
    <link rel="stylesheet"type="text/css" href="menu_s.css">
<!--......................................the slideshow........................................................-->
	<style type="text/css">
	#slideshow { 
		
     
    position:relative;
    width: 1485px; 
    height: 1449px; 
    padding: 0px; 
 

    
}

#slideshow > div { 
    position: absolute; 
    top: 0px; 
    left: 0px; 
    right: 10px; 
    bottom: 10px; 
}
	</style>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script>
	$("#slideshow > div:gt(0)").hide();

setInterval(function() { 
  $('#slideshow > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow');
},  5000);
	</script>

<!--....................................end of slideshow.............................................................-->

<script type="text/javascript">
    var ul;
var li_items; 
var li_number;
var image_number = 0;
var slider_width = 0;
var image_width;
var current = 0;
function init(){	
	ul = document.getElementById('image_slider');
	li_items = ul.children;
	li_number = li_items.length;
	for (i = 0; i < li_number; i++){
		// nodeType == 1 means the node is an element.
		// in this way it's a cross-browser way.
		//if (li_items[i].nodeType == 1){
			//clietWidth and width???
			image_width = li_items[i].childNodes[0].clientWidth;
			slider_width += image_width;
			image_number++;
	}
	
	ul.style.width = parseInt(slider_width) + 'px';
	slider(ul);
}

function slider(){		
		animate({
			delay:17,
			duration: 3000,
			delta:function(p){return Math.max(0, -1 + 2 * p)},
			step:function(delta){
					ul.style.left = '-' + parseInt(current * image_width + delta * image_width) + 'px';
				},
			callback:function(){
				current++;
				if(current < li_number-1){
					slider();
				}
				else{
					var left = (li_number - 1) * image_width;					
					setTimeout(function(){goBack(left)},3000); 				
					setTimeout(slider, 3000);
				}
			}
		});
}
function goBack(left_limits){
	current = 0;	
	setInterval(function(){
		if(left_limits >= 0){
			ul.style.left = '-' + parseInt(left_limits) + 'px';
			left_limits -= image_width / 10;
		}	
	}, 17);
}
function animate(opts){
	var start = new Date;
	var id = setInterval(function(){
		var timePassed = new Date - start;
		var progress = timePassed / opts.duration
		if(progress > 1){
			progress = 1;
		}
		var delta = opts.delta(progress);
		opts.step(delta);
		if (progress == 1){
			clearInterval(id);
			opts.callback();
		}
	}, opts.dalay || 17);
}
window.onload = init;
</script>

  </head>
    <body>
    	<div id="slideshow" style="position:absolute">
    	<div>
    		 <img src="Aviary Photo_131093630460243541.png">
  		</div>
  		 <div>
    		 <img src="Aviary Photo_131093630140229334.png">
  		 </div>

  		<div>
    		 <img src="Aviary Photo_131093630014510153.png">
  		 </div>
  		<div>
    		 <img src="Aviary Photo_131093629635620158.png">
  		 </div>
  		<div>
    		 <img src="Aviary Photo_131093629298581088.png">
  		 </div>
		</div>

      <div class="d1" style="position:absolute;margin:auto;">
      		<!--title divs-->


      		<header>
            <div class="d11" style="opacity:0.2px ;box-shadow:0px 0px 9px -3px black;">

            </div>
            <div class="d11" style="background-color:transparent;">
            <div style="position:absolute;">
            <img src="red.png" style="height:190px;width:190px; margin-left:20px;">
            </div>
            <div style="color:black;font-family:Tahoma;font-size:34px;text-align:center;position:absolute;margin-top:30px;margin-left:170px"><b>Central Muga Eri Research and Training Institute (CMER&TI)</b></div>

            <div style="color:black;font-family:Tahoma;font-size:20px;position:absolute;margin-top:110px;margin-left:470px;">Lahdoigarh-785700,Jorhat( ASSAM )</div>
            <div style="color:black;font-family:Tahoma;font-size:20px;position:absolute;margin-top:140px;margin-left:390px; text-align:center;">Central Silk Board,Ministry Of Textile:Govt. of India
            <br>
             <b>( AN ISO 9001 : 2008 Certified Institute )</b>
            </div>
            </div>
          </header>

      		<div style="margin-left:207px; margin-top:210px; position:absolute;">
      			<div class="dropdown">
  					<a href="sample_1.html" style="text-decoration:none;"><button class="dropbtn">Home</button></a>
 				 </div>

 				<div class="dropdown"  style="margin-left:121px;">
 				 <button class="dropbtn">About</button>
 					 <div class="dropdown-content">
  						  <a href="about_us_intro.html">Introduction</a>
  						  <a href="about_us_back.html">Background</a>
  						  <a href="about_us_man.html">Mandate</a>
  						  <a href="about_us_act.html">Activities</a>
  						  <a href="Vision for 2020.pdf">Vision Plan 2020</a>
  						  
 					 </div>
 				</div>

 				<div class="dropdown"  style="margin-left:242px;">
 				 <button class="dropbtn">Organisation</button>
 					 <div class="dropdown-content">
  						  <a href="org_setup.html">Org Setup</a>
  						 
  						  
 					 </div>
 				</div>
 				<div class="dropdown"  style="margin-left:362.5px;">
 				 <button class="dropbtn">Division</button>
 					 <div class="dropdown-content">
  						  <a href="#">R & D</a>
  						  <a href="#">Administrative</a>
  						   <a href="#">Establishment</a>
  						    <a href="#">Store & Purchase</a>
                  <a href="#">Accounts</a>
                  <a href="#">Receipt & Dispatch</a>
                  <a href="#">Library</a>
  						  
 					 </div>
 				</div>
  
  <div class="dropdown"  style="margin-left:483.5px;">
 				 <button class="dropbtn">Publication</button>
 					 <div class="dropdown-content">
  						  <a href="#">Publications & Patents</a>
  						  <a href="#">Research Publication</a>
  						  <a href="#">Books & Manuals</a>
  						  <a href="#">Tech Notes</a>
  						  <a href="#">Leaflets & Pamphlets</a>
                 <a href="#">Newsletters</a>

  					  
 					 </div>
 				</div>
  
  <div class="dropdown"  style="margin-left:604.5px;">
 				 <button class="dropbtn">Technologies</button>
 					 <div class="dropdown-content">
  						  <a href="#">Tech & Patents</a>
  						  <a href="#">Brief Details</a>
  						  <a href="#">Muga Culcure</a>
                <a href="#">Eri Culcure</a>
                <a href="#">Tech & implementation</a>
  						  
 					 </div>
 				</div>
  
  <div class="dropdown"  style="margin-left:725px;">
 				 <button class="dropbtn">Projects</button>
 					 <div class="dropdown-content">
  						  <a href="#">Ongoing</a>
  						  <a href="#">Concluded</a>
  					
  						  
  						  
 					 </div>
 				</div>
  
  <div class="dropdown"  style="margin-left:846px;">
 				 <a href="#" style="text-decoration:none;"><button class="dropbtn">Contact Us</button></a>
 					 
 				</div>
  
  <div class="dropdown"  style="margin-left:966.5px;">
 				 <a href="#" style="text-decoration:none;"><button class="dropbtn">Gallery</button></a>
 					 
 				</div>
  
  </div>

      		<div class="d12"></div>
      		<!--info div_left-->
      	<div class="d13" style="width:1073px;">
        <img src="Aviary Photo_131097859387011145.png" style="position:absolute; margin-top:97px;margin-left:1px">
              <div class="d17" style="width:1069.5px;"><b>Activities of the Institute </b></div>  
                
      		</div>
      		<!--info div_right-->
      
      		
      	
      		<!--footer divs-->
      		<footer id="foot">
      		<div class="d18" style="margin-left:150px">Sitemap</div>
      		<div class="d18" style="">Feedback</div>
      		<div class="d18" style="">Terms and Use</div>
      		<div class="d18" style="">Policy & Privacy</div>
      		
      		<div id="copy">Copyright &copy; All right reserved CMER&TI (2015 - 2016)</div>
      	
      
      		</footer>
      		
     
      
    </body>

</html>
