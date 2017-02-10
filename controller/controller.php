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
		$books = $booksModel->getAll();
		$view = new ViewsBooks();
		$view->display($books, $author, $genre);
	}

	public function book($id) {
		$bookModel = new ModelsBook();
		$book = $bookModel->get($id);
		$author = $bookModel->getAuthors($id);
		$genre = $bookModel->getGenre($id);
		$view = new ViewsBook();
		$view->display($book, $author, $genre);
	}
}