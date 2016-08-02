<?php

class SiteControllers
{
	public function actionIndex() {
		require_once (ROOT . '/views/site/index.php');
		return true;
	}
	public function actionFeedback()
	{
		$errors = false;

		if (isset($_POST['submit'])) {

			if (!user::checkName($_POST['name'])) {
				$errors[] = 'Некоректное имя';
			}
			if (!user::checkText($_POST['text'])) {
				$errors[] = 'Некоректный коментарий';
			}
			if ($errors == false) {
				feedback::addPost($_POST);
			}
		}
				
		$reviews = feedback::getReviews();

		require_once (ROOT . '/views/site/feedback.php');
		return true;
	}

	public function actionPreview()
	{
		if (isset($_POST)) {
			echo feedback::previewByAjax($_POST);
		}
		return true;
	}

}