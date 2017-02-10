<?php
include('header.php');
if (!$books) {
	echo "Knygų nėra.";
} else {
?>
<form action="index.php" method="get">
	<input type="text" name="search">
	<input type="submit" value="Ieškoti">
</form>
<table class="table table-striped">
<?php
foreach ($books as $book) {
	?>
	<tr>
		<td><a href="index.php?id=<?php echo $book['id']; ?>"><?php echo $book['name']; ?></a></td>
		<td>
			<?php 
				foreach ($book['authors'] as $author) {
					echo "<div>";
					echo $author['first_name']." ".$author['last_name'];
					echo "</div>";
				}
			?>
		</td>
		<td><?php echo $book['year']; ?></td>
	</tr>
	<?php
}
?>
</table>
<ul class="pagination">
<?php 
	for($i = 1; $i <= $pageCount; $i++) {
		if ($currentPage == $i) {
			echo '<li class="active">';
		} else {
			echo '<li>';
		}
		echo '<a href="index.php?page='.$i.'">'.$i.'</a></li>';
	}
?>
</ul>
<?php
} //if 
include('footer.php');