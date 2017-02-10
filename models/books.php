<?php
class ModelsBooks
{
	public function getPageBooks($pageNumber) {
		if ($pageNumber <=0) {
			return false;
		}
		$booksPerPage = Config::$booksPerPage;
		$sql = 'SELECT * FROM books LIMIT '.(($pageNumber - 1) * $booksPerPage + 1).','.$booksPerPage;
		$books = Db::select($sql);
		$modelBook = new ModelsBook();
		foreach ($books as $key => $value) {
			$authors = $modelBook->getAuthors($books[$key]['id']);
			$books[$key]['authors'] = $authors;
		}
		return $books;
	}

	public function countAll() {
		$sql = 'SELECT COUNT(id) AS cnt FROM books';
		$count = Db::selectOne($sql);
		return intval($count['cnt']);
	}

	public function getPageCount() {
		$pageCount = ceil($this->countAll()/Config::$booksPerPage);
		return $pageCount;
	}
}