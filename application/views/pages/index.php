		<h1><span style="color:orange">Seznam maturitní četby</span></h1>
		<div class="container">

		<h2><span style="color:orange">Ukázka četby</span></h2>

			<table class="table table-dark">
		  		<thead>
			    <tr>
			      <th scope="col"></th>
			      <th scope="col"><span style=>Název knihy</th>
			      <th scope="col">Autor</th>
			    </tr>
			 	</thead>
			 	<tbody>
			 	<?php if ($knihy): ?>
                 <?php foreach($knihy as $knihy): ?>
				    <tr class="table-secondary"> 
				      <th><?php echo $knihy->id_knihy;?></th>
				      <td><?php echo $knihy->nazev_knihy;?></td>
				      <td><?php echo $knihy->autor;?></td>
				    </tr>
			     <?php endforeach ?>
			    <?php endif ?>
            	</tbody>
			</table> 
			</div>

		</div>
	</body>