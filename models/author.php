<?php
class ModelsAuthor
{
	public function get($id) {
		$sql = 'SELECT id, first_name, last_name
				FROM authors AS a 
				WHERE id = '.intval($id);
		$author = Db::selectOne($sql);
		return $author;
	}
}