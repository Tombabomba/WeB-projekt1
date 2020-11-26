
	<body>
		<nav class="navbar navbar-expand-lg navbar-warning bg-warning">
		  <a class="navbar-brand navbar-light bg" href="<?php echo base_url();?>">Maturitní počteníčko</a>		  
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarColor02">
		    <ul class="navbar-nav mr-auto">
				<?php foreach($menu as $p): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url($p->id_categorie)?>"><?= $p->categorie ?><span class="sr-only">(current)</span></a>
                        </li>
                <?php endforeach; ?>
		    </ul>
		  </div>
		</nav>