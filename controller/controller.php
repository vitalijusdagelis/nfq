<?php
class Controller 
{
	public function __construct() {
		if (isset($_GET['id'])) {
			$this->book($_GET['id']);
		} else {
			$this->books();
		}
	}
	
	public function books() {
		$booksModel = new ModelsBooks();
		if (isset($_GET['page'])) {
			$page = intval($_GET['page']);
		} else {
			$page = 1;
		}
		$pageCount = $booksModel->getPageCount();
		$books = $booksModel->getPageBooks($page);
		$view = new ViewsBooks();
		$view->display($books, $pageCount, $page);
	}

	public function book($id) {
		$bookModel = new ModelsBook();
		$book = $bookModel->get($id);
		$authors = $bookModel->getAuthors($id);
		$genre = $bookModel->getGenre($id);
		$view = new ViewsBook();
		$view->display($book, $authors, $genre);
	}
}