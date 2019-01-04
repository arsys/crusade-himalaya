<html>
	<head>
		<style>
		body{
			margin-left: 0px;
			padding: 0px;
		}
		#loader{
			height:1500px;
			width:1500px;
			background-color: #E7808B;
			position:fixed;
			top:50%;

			left:50%;
			transform:translate(-50%,-50%);
			z-index: 999;
			transition:all .5s;
		}
		#loader img{
			position:absolute;
			top:50%;
			left:50%;
			transform:translate(-50%,-50%);
		}

			
		</style>
	</head>
	<body>
		<div id="loader">
			<img src="{{asset('img/10.jpg')}}" alt="" width="30%">
		</div>
		
		<img src="{{asset('img/img.gif')}}" alt="" width="30%">
		
	</body>
	<script type="text/javascript">
		var loader=document.getElementById("loader");
		window.addEventListener("load",function(){
			loader.style.height="100px";
			loader.style.width="100px";
			loader.style.borderRadius="50%";
			loader.style.visibility="hidden";
		});
	</script>
	
</html>
<!-- <html>
	<head>
		<style>
		html,body{
			margin:0;
			padding:0;
			width:100%;
			height: 100vh;
			background:url('/img/coffee.jpg') no-repeat 50% 50%;
			background-size:cover;
			}
			#loader{
				position:fixed;
				width:100%;
				height:100vh;
				z-index:1;
				overflow:visible;
				background:#000 url('/img/img.gif') no-repeat center ;
			}
			h1{
				position:absolute;
				top:47%;
				left:50%;
				transform:translate(-50%, -50%);
				color:#fff;
				font-family: Poppins;

			}
		</style>
		
	</head>
	<body>
		<div id="loader">
			<div id="content">
				<h1>Gif As A Preloader</h1>
			</div>
		</div>
	</body>
	<script type="text/javascript">
		var	loader;
		function loadNow(opacity){
			if(opacity<=0){
				displayContent();
			}
			else{
				loader.style.opacity=opacity;
				window.setTimeout(dunction(){
					loadNow(opacity -0.05)
				}, 100);
			}
		}
		function displayContent(){
			loader.style.display="none";
			document.getElementById('content').style.display='block';

		}
		document.addEventListener("DOMContentLoaded", function(){
			loader=document.getElementById('loader');
			loadNow(1);

		});
	</script>
</html> -->