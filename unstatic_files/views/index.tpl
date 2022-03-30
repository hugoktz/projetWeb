
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>InternSearch Home</title>
		<link rel="stylesheet" type="text/css" href="css/Base.css">
		<link rel="stylesheet" type="text/css" href="css/Logo.css">
        <link rel="stylesheet" type="text/css" href="css/Navigation.css">
		<link rel="stylesheet" type="text/css" href="css/Footer.css">
		<link rel="stylesheet" type="text/css" href="css/Responsive.css">
		<link rel="stylesheet" type="text/javascript" href="js.js">
		<meta name="viewport" content="width=device-width", initial-scale="1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
		<link rel="icon" type="image/png" sizes="16x16" href="logo.png">

	</head>

    <body>
		<div class="logo">
			<a href="home.html"><img src="static_files/logo.png" alt="logo" width="100px" height="100px"></a>
			<h2>
				InternSearch
			</h2>
		</div>

			<!--<div class ="nav">
				<ul>
					<li class="list active">	
						<a href="first_page.php">		
							<span class="icon">
								<ion-icon name="home"></ion-icon>
							</span>
    					<span class="text">Home</span>
    				</a>
    			</li>
    			<li class="list">	
    				<a href="#">		
    					<span class="icon">
    						<ion-icon name="document-text"></ion-icon>
    					</span>
    					<span class="text">Offer</span>
    				</a>
    			</li>
    			<li class="list">	
    				<a href="#">	
    					<span class="icon">
    						<ion-icon name="storefront"></ion-icon>
    					</span>
    					<span class="text">Company</span>
    				</a>
    			</li>
    			<li class="list">	
    				<a href="#">			
    					<span class="icon">
    						<ion-icon name="person"></ion-icon>
    					</span>
    					<span class="text">Student</span>
    				</a>
    			</li>
    			<li class="list">	
    				<a href="#">	
    					<span class="icon">
    						<ion-icon name="school"></ion-icon>
    					</span>
    					<span class="text">Represent</span>
    				</a>
    			</li>
    			<li class="list">
    				<a href="#">	
    					<span class="icon">
    						<ion-icon name="library"></ion-icon>
    					</span>
    					<span class="text">Pilote</span>
    				</a>
    			</li>
				<div class="indicator"></div>
    		    </ul>    		
    	    </div>-->


        <div id="centrer" class="centrage">
            <h1 id="titreSection">Interact With An Account</h1>
            <div class=box id="margintop">
            <ul>
                <h1 id="textSection">Interact with an account of :</h1>
                
                {foreach from=$roles item=p}

                <li id="list"><h4>As <a href="login_{$p}.php">{$p}</a></h4> </li>

                {/foreach}
            </ul>
        </div>
		</div>





		<div class="footer-basic">
			<footer>
				<div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
				<ul class="list-inline">
					<li class="list-inline-item"><a href="#">Home</a></li>
					<li class="list-inline-item"><a href="#">Services</a></li>
					<li class="list-inline-item"><a href="#">About</a></li>
					<li class="list-inline-item"><a href="#">Terms</a></li>
					<li class="list-inline-item"><a href="#">Privacy Policy</a></li>
				</ul>
				<p class="copyright">InternSearch © 2022</p>
			</footer>
		</div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
		<script>
			const list =document.querySelectorAll('.list');
			function activeLink(){
				list.forEach((item) =>
				item.classList.remove('active'));
				this.classList.add('active');
				}
			list.forEach((item)=>
			item.addEventListener('click',activeLink))
		</script>
	
		<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
		<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<script src="js/app.js"></script>

	</body>
</html>