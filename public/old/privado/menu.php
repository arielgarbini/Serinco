<nav class="navbar navbar-default" role="navigation">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">CCSA</a>
					</div>
					<div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<li><a href="http://www.infotema.com.ar">Home</a></li>
							<li><a href="noticias.php">Noticias</a></li>
					                <?php if($_SESSION['rol']==1){ ?> 
                                                        <li><a href="users.php">Usuarios</a></li>
					                <?php } ?>
						</ul>
                                                <ul class="nav navbar-nav navbar-right"> 
                                                <li><a href="logout.php">Salir</a></li> 
                                                </ul>
					</div><!--/.nav-collapse -->
				</div><!--/.container-fluid -->
			</nav> 