<?php
class ViewsBook
{
	public function display($book, $author, $genre) {
		include('templates/'.Config::$templateName.'/book.php');
	}
}