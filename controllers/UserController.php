<?php 

class UserController
{
	public function actionIndex() 
	{
        $email = false;
        $password = false;
        
        if (isset($_POST['submit'])) {
            $email = $_POST['name'];
            $password = $_POST['password'];

            $errors = false;

            if (!User::checkEmail($email)) {
                $errors[] = 'Неправильный email';
            }

            $userId = User::checkUserData($email, $password);

            if ($userId == false) {
                $errors[] = 'Неправильные данные для входа на сайт';
            } else {
                User::auth($userId);

                header("Location: /cabinet");
            }
        }

        require_once (ROOT . '/views/site/index.php');
        return true;
	}
}