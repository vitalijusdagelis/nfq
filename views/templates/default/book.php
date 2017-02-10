<?php
include('header.php');
var_dump($author);
?>
<table class="table table-striped">
	
	<tr>
		<td>Pavadinimas</td>
		<td>Leidimo metai</td>
		<td>Autorius</td>
		<td>Žanras</td>
	</tr>
	<tr>
		<td><?php echo $book['book_name']; ?></td>
		<td><?php echo $book['book_year']; ?></td>
		<!-- ar gerai taip daryti tarpa? -->
		<td><?php echo $author['last_name']." ".$author['first_name']; ?></td>
		<td><?php echo $genre['name'] ?></td>
	</tr>
</table>
<?php
include('footer.php');
