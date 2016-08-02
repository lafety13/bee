<?php 

class User 
{
    public static function checkUserData($email, $password)
    {
        $db = Db::getInstance();

        $result = $db->connection->prepare('SELECT * FROM user WHERE name = ? AND password = ?');
        $result->bind_param('ss', $email, $password);
        $result->execute();

        while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
            $user[] = $row;
        }

        if ($user) {
            return $user['id'];
        }
        return false;
    }

    public static function auth($userId)
    {
        $_SESSION['user'] = $userId;
    }


    public static function isGuest()
    {
        if (isset($_SESSION['user'])) {
            return false;
        }
        return true;
    }

	public static function checkEmail($email)
	{
		if (preg_match("|^[-0-9a-z_\.]+@[-0-9a-z_^\.]+\.[a-z]{2,6}$|i", $email)) {
			return true;
		}
	}

	public static function checkName($name)
	{
        if (strlen($name) >= 2) {
            return true;
        }
        return false;
	}

	public static function checkText($text)
	{
        if (strlen($text) >= 2) {
            return true;
        }
        return false;
	}

    public static function checkPassword($password)
    {
        if (strlen($password) >= 6) {
            return true;
        }
        return false;
    }
}