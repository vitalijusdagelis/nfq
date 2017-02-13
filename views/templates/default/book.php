<?php
include('header.php');
?>
<div class="container">
	<div class="well well-sm">
		<div class="row">
			<div class="col-sm-2">Pavadinimas</div>
			<div class="col-sm-10"><strong><?php echo $book['book_name']; ?></strong></div>
		</div>
	</div>
	<div class="well well-sm">
		<div class="row">
			<div class="col-sm-2">Leidimo metai</div>
			<div class="col-sm-10"><?php echo $book['book_year']; ?></div>
		</div>
	</div>
	<div class="well well-sm">
		<div class="row">
			<div class="col-sm-2">Autorius (-iai)</div>
			<div class="col-sm-10">
			<?php 
				foreach ($authors as $author) {
					echo "<div>";
					echo $author['last_name']." ".$author['first_name']; 
					echo "</div>";
				} 
			?>
			</div>
		</div>
	</div>
	<div class="well well-sm">
		<div class="row">
			<div class="col-sm-2">Žanras</div>
			<div class="col-sm-10"><?php echo $genre['name'] ?></div>
		</div>
	</div>
</div>
<?php
include('footer.php');
