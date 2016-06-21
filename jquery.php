<?php
$currentPage = basename($_SERVER['SCRIPT_FILENAME'], '.php');
$xml = simplexml_load_file("data.xml") or die("ERROR: Cannot create object");
echo "<pre>";
echo $currentPage;
//print_r($xml);
echo $xml->zaznam[2]->obsah;
echo "</pre>";
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Wiki</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<style>
			    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
	
	.con-right{
		border-right: 3px solid #f1f1f1;
		height: auto
	}
		</style>
	</head>

	<body>
		<div class="container">
			<div class="row content con-right">
				<div class="col-md-3 sidenav">
					<h4>Georgios Wiki</h4>
					<ul class="nav nav-pills nav-stacked">
						<li <?PHP if($currentPage == "php"){echo 'class="active"';}?> ><a href="index.php">PHP</a></li>
						<li <?PHP if($currentPage == "sgl"){echo 'class="active"';}?> ><a href="#section2">SQL</a></li>
						<li <?PHP if($currentPage == "javascript"){echo 'class="active"';}?> ><a href="#section3">JAVASCRIPT</a></li>
						<li <?PHP if($currentPage == "jquery"){echo 'class="active"';}?> ><a href="#section3">JQUERY</a></li>
						<li <?PHP if($currentPage == "bootstrap"){echo 'class="active"';}?> ><a href="#section3">BOOTSTRAP</a></li>
						<li <?PHP if($currentPage == "css"){echo 'class="active"';}?> ><a href="#section3">CSS</a></li>
						<li <?PHP if($currentPage == "html"){echo 'class="active"';}?> ><a href="#section3">HTML</a></li>
						<li <?PHP if($currentPage == "xml"){echo 'class="active"';}?> ><a href="#section3">XML</a></li>
					</ul><br>
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Search Blog..">
						<span class="input-group-btn">
						  <button class="btn btn-default" type="button">
							<span class="glyphicon glyphicon-search"></span>
						  </button>
						</span>
					</div>
				</div>

				<div class="col-md-9">
					
					<hr>
					<h4><small>RECENT POSTS</small></h4>
					<ul>
						<li><a href="#section2">Friends</a></li>
						<li><a href="#section3">Family</a></li>
						<li><a href="#section3">Photos</a></li>
					</ul>
					
					
					<hr>
					<h4><small>RECENT POSTS</small></h4>
					<ul>
						<li><a href="#section2">Friends</a></li>
						<li><a href="#section3">Family</a></li>
						<li><a href="#section3">Photos</a></li>
					</ul>
				
					
					<hr>
					<h4><small>RECENT POSTS</small></h4>
					<ul>
						<li><a href="#section2">Friends</a></li>
						<li><a href="#section3">Family</a></li>
						<li><a href="#section3">Photos</a></li>
					</ul>
					<hr>
					<p>&nbsp;</p><p>&nbsp;</p>
					<?php
						foreach($xml->children() as $zaznamy){
							if($zaznamy->kategoria == strtoupper($currentPage)){
								echo "<h2>".$zaznamy->nazov."</h2>";
								echo "<p>".$zaznamy->obsah."</p>";
								echo "<hr>";
							}
						}
					?>
				</div>
			</div>
		</div>
		
		<footer class="container">
  <p>Georgios</p>
</footer>
	</body>
</html>