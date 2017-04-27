<?php
$_SESSION['username'] = "sou";
try {
	$bdd = new PDO('mysql:host=localhost;dbname=github;charset=utf8', 'ID', 'PASSWORD');
} catch (Exception $e) {
	die('Erreur : ' . $e->getMessage());
}
$rep = $bdd->query('UPDATE `chat` SET `recd` = 2 WHERE `from` = "'.$_GET['m'].'" AND `to` = "'.$_SESSION['username'].'"');
$data = $rep->fetch();
$rep1 = $bdd->query('SELECT * FROM `chat` WHERE (`to` = "'.$_SESSION['username'].'" AND `from` = "'.$_GET['m'].'") OR (`to` = "'.$_GET['m'].'" AND `from` = "'.$_SESSION['username'].'") ORDER BY sent');
while ($data1 = $rep1->fetch())
{
	if ($data1['to'] == $_SESSION['username']) {
		echo '<div style="border:1px solid #e2e4e3;
		border-radius: 30px;
		margin:5px;
		padding:10px;
		float: left;
		width: 50%;"
		>'.$data1['message'].'</div>';
	}
	else {
		echo '<div style="border:1px solid #e2e4e3;
		border-radius: 30px;
		margin:5px;
		background-color: #26C4EC;
		color: white;
		padding:10px;
		float: right;
		width: 50%;"
		>'.$data1['message'].'</div>';
	}
}
?>