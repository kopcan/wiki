			<div class="col-md-3 sidenav">
				<h4>Georgios Wiki</h4>
				<ul class="nav nav-pills nav-stacked">
					<li <?PHP if($currentPage == "php"){echo 'class="active"';}?> ><a href="php.php">PHP</a></li>
					<li <?PHP if($currentPage == "sgl"){echo 'class="active"';}?> ><a href="sql.php">SQL</a></li>
					<li <?PHP if($currentPage == "javascript"){echo 'class="active"';}?> ><a href="javascript.php">JAVASCRIPT</a></li>
					<li <?PHP if($currentPage == "jquery"){echo 'class="active"';}?> ><a href="jquery.php">JQUERY</a></li>
					<li <?PHP if($currentPage == "bootstrap"){echo 'class="active"';}?> ><a href="pootstrap.php">BOOTSTRAP</a></li>
					<li <?PHP if($currentPage == "css"){echo 'class="active"';}?> ><a href="css.php">CSS</a></li>
					<li <?PHP if($currentPage == "html"){echo 'class="active"';}?> ><a href="html.php">HTML</a></li>
					<li <?PHP if($currentPage == "xml"){echo 'class="active"';}?> ><a href="xml.php">XML</a></li>
				</ul>
				<br>
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Search Blog..">
					<span class="input-group-btn">
						<button class="btn btn-default" type="button">
							<span class="glyphicon glyphicon-search"></span>
						</button>
					</span>
				</div>
			</div>	