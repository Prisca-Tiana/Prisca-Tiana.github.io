<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Mathrix</title>
		
		<link  rel="stylesheet" type="text/css" href="Content/bootstrap-4.5.0-dist/css/bootstrap-4.4.1.css">
		<link  rel="stylesheet" type="text/css" href="Content/bootstrap-4.5.0-dist/css/bootstrap.css">
		<link  rel="stylesheet" type="text/css" href="Content/bootstrap-4.5.0-dist/css/bootstrap.css.map">
		<link  rel="stylesheet" type="text/css" href="Content/bootstrap-4.5.0-dist/css/bootstrap.min.css">
		<link  rel="stylesheet" type="text/css" href="Content/bootstrap-4.5.0-dist/css/bootstrap.min.css.map">
		<link  rel="stylesheet" type="text/css" href="Content/css/style.css">
        <script src="js/popper.min.js"></script>
        <script src="Content/bootstrap-4.5.0-dist/js/jquery-3.4.1.min.js"></script>
        <script src="Content/bootstrap-4.5.0-dist/js/bootstrap-4.4.1.js"></script>
        <script src="Content/bootstrap-4.5.0-dist/js/bootstrap.js"></script>
		<script src="Content/bootstrap-4.5.0-dist/js/bootstrap.js.map"></script>
		<script src="Content/bootstrap-4.5.0-dist/js/bootstrap.min.js"></script>
		<script src="Content/bootstrap-4.5.0-dist/js/bootstrap.min.js.map"></script>
		<script src="Content/scripts/main.js"></script>
	</head>

	<body>
	<main>
	  <div id="wrap">
		  <div class="container" id="preloader">
			  <div class="flex-wrap" id="logo_display">
				  <img src="Content/images/Logo.png" class="img-fluid" alt="Mathrix">
			  </div>
			  <div class="d-flex container justify-content-center" id="presentation">
				  <p>C'est pas sorcier les maths.</p>
			  </div>
		  </div>
		  
	    <div class="tab-content">
			<!--start-->
			<div class="tab-pane in active" id="start">

				<div class="flex-wrap row" >
					<div class="col-6 d-flex justify-content-center loader-image">
						<img src="Content/images/Logo.png" class="img-fluid" alt="Mathrix">
					</div>
					<div class="col-6 loader-text">
						<div class="d-flex justify-content-center" >
							<p>
							Constater pour la majorité des élèves, les maths ne sont pas amusants et ennuyeux.<br> 
							Mathrix est donc là pour aider les élèves avec cette matière.
							</p>
						</div>
						<div class="d-flex justify-content-center"><a data-toggle="tab" href="#classe" class="btn mathrix-btn">Commençons</a></div>
					</div>
				</div>
			</div>
			<!--end start-->
			
			<!--grade-->
			<div class="tab-pane fade" id="classe">

				<div class="flex-wrap row" >
					<div class="col-3"></div>
				  <div class="col-3 d-flex flex-column justify-content-center" >
						  <button type="button" class="btn mathrix-btn"><a href="Views/six.php">6ème</a></button><br>
						  <button type="button" class="btn mathrix-btn"><a href="Views/five.php">5ème</a></button><br>
						  <button type="button" class="btn mathrix-btn"><a href="Views/four.php">4ème</a></button><br>
						  <button type="button" class="btn mathrix-btn"><a href="Views/three.php">3ème</a></button><br>
						 
					</div>
					<div class="col-3 d-flex flex-column justify-content-center" >
						<button type="button" class="btn mathrix-btn"><a href="Views/two.php">Seconde</a></button><br>
						<button type="button" class="btn mathrix-btn"><a href="Views/one.php">Première</a></button><br>
				  		<button type="button" class="btn mathrix-btn"><a href="Views/last.php">Terminale</a></button><br></div>
						
					<div class="col-3"></div>
			  </div>
			  </div>
					
		</div>
		  </div>
		  <!--end grade-->
			
	    </div>
			  
  	  </div>
	</main>
</body>
</html>
