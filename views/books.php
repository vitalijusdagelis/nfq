<?php
class ViewsBooks
{
	public function display($books, $author, $genre) {
		include('templates/'.Config::$templateName.'/books.php');
	}
}