<?php
class ViewsBooks
{
	public function display($books, $pageCount, $currentPage, $search) {
		include('templates/'.Config::$templateName.'/books.php');
	}
}