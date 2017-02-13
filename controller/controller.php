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
		if (isset($_GET['search'])) {
			$search = htmlspecialchars($_GET['search']);
		} else {
			$search = '';
		}

		$pageCount = $booksModel->getPageCount($search);
		$books = $booksModel->getPageBooks($page, $search);
		$view = new ViewsBooks();
		$view->display($books, $pageCount, $page, $search);
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