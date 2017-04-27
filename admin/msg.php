<?php
$_SESSION['username'] = "admin";
try{
	$bdd = new PDO('mysql:host=localhost;dbname=github;charset=utf8', 'ID', 'PASSWORD');
} catch (Exception $e){
	die('Erreur : ' . $e->getMessage());
}
$rep = $bdd->query('SELECT DISTINCT `from` FROM `chat` WHERE `to` = "'.$_SESSION['username'].'"');
while ($data = $rep->fetch())
{
	$rep2 = $bdd->query('SELECT * FROM `chat` WHERE `to` = "'.$_SESSION['username'].'" AND `from` = "'.$data['from'].'" ORDER BY `sent` DESC');
	$data2 = $rep2->fetch();
	if ($data2['recd'] != 2) {
		echo '<div style="
		border: 1px solid #DDD;
		box-shadow:0px 0px 10px #4183C4;

		position: relative;
		width: 100%;
		height: 40px;
		 margin-bottom:10px;"><a href="messagerie.php?m='.$data['from'].'">';
		echo '<div id="name" style="padding:10px;">';
		echo '<b>'.$data['from'].'</b>';
		echo '</div>
		</a></div>';
	}
	else {
		if ($_GET['m'] == $data['from']) {
			echo '<div style="background-color: #fb6b5b; position: relative; width: 100%; height: 40px; border: 1px solid #ccc; margin-bottom:10px;"><a href="messagerie.php?m='.$data['from'].'">';
			echo '<div id="name" style="padding:10px;">';
			echo '<b>'.$data['from'].'</b>';
			echo '</div></a></div>';
		}
		else {
			echo '<div style="position: relative; width: 100%; height: 40px; border: 1px solid #ccc; margin-bottom:10px;"><a href="messagerie.php?m='.$data['from'].'">';
			echo '<div id="name" style="padding:10px;">';
			echo '<b>'.$data['from'].'</b>';
			echo '</div></a></div>';
		}
	}
}
?>