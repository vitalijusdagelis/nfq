<?php
class ModelsGenre
{
	public function get($id) {
		$sql = 'SELECT id, name
				FROM genres AS a 
				WHERE id = '.intval($id);
		$genre = Db::selectOne($sql);
		return $genre;
	}
}