<?php
$mysqli = new mysqli(	
	"mysql.jaybuch.com", 
	"jatanbuch", 
	"Aston1987", 
	"twitter_clone"
);
$post_enter = $_POST["post_enter"];
$result = $mysqli->query("INSERT INTO twitter_clone (post_enter) VALUES ('{$post_enter}')");
header("Location: index.php");
?>