<?php
	session_start();
	session_destroy();
	Header('Location: http://techzone.ru');
?>