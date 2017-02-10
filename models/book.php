<?php
class ModelsBook
{
	public function get($id) {
		$sql = 'SELECT a.id AS book_id, a.name AS book_name, a.year AS book_year
				FROM books AS a 
				WHERE id = '.intval($id);
		$book = Db::selectOne($sql);
		return $book;
	}

	public function getAuthors($id) {
		$sql = 'SELECT author_id FROM book_author WHERE book_id ='.intval($id);
		$authorId = Db::selectOne($sql);
		$modelsAuthor = new ModelsAuthor();
		$author = $modelsAuthor->get($authorId['author_id']);
		// $sql = 'SELECT id, fisrt_name, last_name FROM authors WHERE id='.intval($id);
		return $author;
	}

	public function getGenre($id) {
		$sql = 'SELECT genre_id FROM book_genre WHERE genre_id ='.intval($id);
		$genreId = Db::selectOne($sql);
		$modelsGenre = new ModelsGenre();
		$genre = $modelsGenre->get($genreId['genre_id']);
		return $genre;
	}
}