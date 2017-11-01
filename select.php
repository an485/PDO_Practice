<?php


$row_id = '6';

$query = "SELECT * FROM accounts WHERE id < :ID";	
			$statement = $db->prepare($query);
			$statement->bindValue(':ID', $row_id);
			$statement->execute();
			$row = $statement->fetchAll();
			$statement->closeCursor();
            $rowArray[] = $row;