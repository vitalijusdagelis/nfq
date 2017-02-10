<?php
include('header.php');
?>
<table class="table table-striped">
<?php
foreach ($books as $book) {
	?>
	<tr>
		<td><a href="index.php?id=<?php echo $book['id']; ?>"><?php echo $book['name']; ?></a></td>
		<td><?php echo $book['year']; ?></td>
		<!-- isvesti author i genre -->
	</tr>
	<?php
}
?>
</table>
<?php
include('footer.php');