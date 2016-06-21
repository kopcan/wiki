<?php
$currentPage = basename($_SERVER['SCRIPT_FILENAME'], '.php');
$xml = simplexml_load_file("./data/data.xml") or die("ERROR: Cannot create object");
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Georgios Wiki<?php echo "&#8212;".strtoupper($currentPage); ?></title>
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
	
	h1{
		margin-top: 40px;
		margin-bottom: 50px;
	}
	
	h2{
		font-weight: 28px;
	}
	
	h3{
		font-weight: 21px;
	}
		</style>
	</head>

	<body>
		<div class="container">
			<div class="row content con-right">