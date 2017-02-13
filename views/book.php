<?php
class ViewsBook
{
	public function display($book, $authors, $genre) {
		include('templates/'.Config::$templateName.'/book.php');
	}
}