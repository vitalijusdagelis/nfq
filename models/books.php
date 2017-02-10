<?php
class ModelsBooks
{
	public function getAll() {
		$sql = 'SELECT * FROM books';
		$books = Db::select($sql);
		return $books;
	}
}