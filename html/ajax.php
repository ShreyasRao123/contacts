<?php
	include '../includes/pdo_db_conn.php';
	if($_POST['name']!='' && $_POST['mode']=='insert'){	
		$sql = 'INSERT INTO test.contacts VALUE(NULL,"'.$_POST['name'].'", "'.$_POST['phNo'].'", "'.$_POST['email'].'", "'.$_POST['add'].'")';
		$qu = $pdo->exec($sql);
	} elseif ($_POST['mode']=='get'){
		$sql1 = 'SELECT * FROM test.contacts';
		$qu1 = $pdo->query($sql1);
		$arr = $qu1->fetchAll(PDO::FETCH_ASSOC);
    	echo json_encode($arr);
	} elseif ($_POST['mode']=='delete') {
		$sql2 = 'DELETE FROM test.contacts WHERE id="'.$_POST['id'].'"';
		$qu2 = $pdo->exec($sql2);
	} elseif($_POST['name']!='' && $_POST['mode']=='update'){	
		$sql3 = 'UPDATE test.contacts SET name="'.$_POST['name'].'", phNo="'.$_POST['phNo'].'", email="'.$_POST['email'].'", address="'.$_POST['add'].'" WHERE id='.$_POST['id'];
		$qu3 = $pdo->exec($sql3);
		echo $qu3;
	} elseif ($_POST['mode']=='search'){
		$sql4 = 'SELECT * FROM test.contacts WHERE name LIKE "%'.$_POST['searchTxt'].'%" || address LIKE "%'.$_POST['searchTxt'].'%";';
		$qu4 = $pdo->query($sql4);
		$arr1 = $qu4->fetchAll(PDO::FETCH_ASSOC);
    	echo json_encode($arr1);
    }
?>