<?php
class ViewsBooks
{
	public function display($books, $pageCount, $currentPage) {
		include('templates/'.Config::$templateName.'/books.php');
	}
}