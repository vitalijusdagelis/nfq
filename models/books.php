<?php
class ModelsBooks
{
	public function getPageBooks($pageNumber, $search) {
		if ($pageNumber <=0) {
			return false;
		}
		$booksPerPage = Config::$booksPerPage;
		$sql = 'SELECT * FROM books';
		if ($search) {
			$sql.= " WHERE name LIKE '%".$search."%'";
		}
		$sql.= ' LIMIT '.(($pageNumber - 1) * $booksPerPage + 1).','.$booksPerPage;
		$books = Db::select($sql);
		$modelBook = new ModelsBook();
		foreach ($books as $key => $value) {
			$authors = $modelBook->getAuthors($books[$key]['id']);
			$books[$key]['authors'] = $authors;
		}
		return $books;
	}

	public function countAll($search) {
		$sql = 'SELECT COUNT(id) AS cnt FROM books';
		if ($search) {
			$sql.= " WHERE name LIKE '%".$search."%'";
		}

		$count = Db::selectOne($sql);
		return intval($count['cnt']);
	}

	public function getPageCount($search) {
		$pageCount = ceil($this->countAll($search)/Config::$booksPerPage);
		return $pageCount;
	}
}