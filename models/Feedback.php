<?php

class Feedback 
{
	public static function addPost(array $post)
	{
		$db = Db::getInstance();

		$result = $db->connection->prepare("INSERT INTO reviews (name, email, text) 
			VALUES (?, ?, ?)");

		$result->bind_param('sss', 
			trim($post['name']), 
			trim($post['email']), 
			trim($post['text'])
		);
		$result->execute();

		

		header('location: ' . $_SERVER['REDIRECT_URL']);
		exit();
	}

	public static function getReviews()
	{
		$db = Db::getInstance();
		$reviews = $db->connection->query("SELECT name, text FROM reviews ");

		while ($row = mysqli_fetch_array($reviews, MYSQL_ASSOC)) {
			$allReviews[] = $row;
		}
		return $allReviews;
	}
	
	public static function getTotalReviews()
	{
		$db = Db::getInstance();

		$result = $db->connection->query('SELECT COUNT(*) FROM reviews');
		$total = mysqli_fetch_array($result); 
		return $total[0];
	}

	public static function previewByAjax(array $post)
	{
		$text = str_replace(
			array("%name%", "%text%"), 
			array($post['name'], $post['text']), 
			file_get_contents(ROOT . '/tamplate/tmp/preview.tpl')
		);
		return $text;
	}


	
}