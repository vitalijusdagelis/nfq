<?php
include('header.php');
if (!$books) {
	echo "Knygų nėra.";
} else {
?>
<div class="col-sm-4">
	<form action="index.php" method="get">
	  <div class="input-group">
	    <input type="text" class="form-control" name="search">
	    <div class="input-group-btn">
	      <button class="btn btn-default" type="submit">
	        <i class="glyphicon glyphicon-search"></i>
	      </button>
	    </div>
	  </div>
	</form>
</div>
<table class="table table-striped">
    <thead>
      <tr>
        <th>Pavadinimas</th>
        <th>Autorius (-iai)</th>
        <th>Leidimo metai</th>
      </tr>
    </thead>
    <tbody>
		<?php foreach ($books as $book) { ?>
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
		<?php } ?>
	</tbody>
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