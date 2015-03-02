<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>im'ibrahim</title>
<link rel="stylesheet" href="css/main.css"/>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>

<style>
	#profile a img{opacity:1;border-color':'#71C341}
	#hello strong,#hello .thin,#hello a{opacity:1}
	
	
</style>
</head>

<body>

<div id="container">
	<div id="content">
    	
    	<div id="profile">
        	<a href="#">
        		<img src="images/ibrahim.jpg" alt="ibrahim hassan"/>
        	</a>
        </div>
        
    	<div id="hello">
        	<span class="hellotext"><strong>Hello!</strong> <span class="thin">I'm Ibrahim</span></span>
		   	<a href="http://facebook.com/ibrahim.sherazi" target="_blank"><img src="images/fb.png" alt=""></a>
		   	<a href="#" target="_blank"><img src="images/insta.png" alt=""></a>
		   	<a href="#" target="_blank"><img src="images/tw.png" alt=""></a>
		   	<a href="#" target="_blank"><img src="images/linkedin.png" alt=""></a>
        </div>
        
    </div>
</div>

<script>
$(window).on('load',function(){
	$('#profile a img').animate({'opacity':'1'}, 300, function(){
		$('#profile a img').animate({'border-color':'#71C341'}, 1000, function(){
				$('#hello strong').animate({'opacity':'1'}, 1000, function(){
						$('#hello .thin').animate({'opacity':'1'}, 1200, function(){
							$('#profile a img').addClass('shadow');
							
							$('#hello a').animate({'position':'relative'},600,function(){
								$('#hello a:nth-child(2)').animate({'position':'relative'},300,function(){
									$('#hello a:nth-child(2)').addClass('bouncy');
									$('#hello a:nth-child(3)').animate({'position':'relative'},300,function(){
										$('#hello a:nth-child(3)').addClass('bouncy');
										$('#hello a:nth-child(4)').animate({'position':'relative'},300,function(){
											$('#hello a:nth-child(4)').addClass('bouncy');
											$('#hello a:nth-child(5)').animate({'position':'relative'},300,function(){
												$('#hello a:nth-child(5)').addClass('bouncy');	
											})
										})
									})
								})
							})
						})
					})
				})
		});
	});
	

</script>
</body>
</html>