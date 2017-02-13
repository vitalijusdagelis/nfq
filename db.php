<?php
require_once('config.php');

class Db {
	private static $dbh;

	public static function connect() {
		try {
			$db = new PDO("mysql:host=".Config::$dbServerName.";dbname=".Config::$dbName, Config::$dbUserName, Config::$dbPassword);
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
			self::$dbh = $db;
			
			$sql = 'SET NAMES utf8';
			$sth = self::$dbh->prepare($sql);
			$sth->execute();

			$sql = 'SET CHARACTER SET utf8';
			$sth = self::$dbh->prepare($sql);
			$sth->execute();
		
			// echo "Connected";
		}
		catch(PDOException $e) {
			echo "Neprijungta prie db: ".$e->getMessage(); 
		}

	}
	
	public static function select($sql, $bindParams = false) {
		if (!self::$dbh) self::connect();
		$sth = self::$dbh->prepare($sql);

		if ($bindParams) {
			foreach ($bindParams as $key=>$value) {
				$sth->bindParam($key, $value);
			}
		}
		$sth->execute(); 
		try {
			$results = $sth->fetchAll();
			return $results;
		} catch (Exception $e) {}
	}
	
	public static function selectOne($sql, $bindParams=false) {
		if (!self::$dbh) self::connect();
		$sth = self::$dbh->prepare($sql);
		
		if ($bindParams) {
			foreach ($bindParams as $key=>$value) {
				$sth->bindParam($key, $value);
			}
		}
		$sth->execute();
		$result = $sth->fetch();
		return $result;
	}
}

