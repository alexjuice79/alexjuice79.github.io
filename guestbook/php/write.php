<?php
	if (isset($_POST['write'])
	&& isset($_POST['gname'])
	&& isset($_POST['gmessage'])
	&& !empty($_POST['gname'])
	&& !empty($_POST['gmessage'])) {
		require_once '../../db/connection.php';
		$conn->prepare('INSERT INTO guestbook (name, content) VALUES (?,?)')->execute(array($_POST['gname'], $_POST['gmessage']));
	}

	header('location:..')
?>