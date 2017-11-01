<html>

<head><meta charset="UTF-8">
<title>PDO Practice</title>
<?php 
include 'db.php';
include 'select.php';
//$row_id = '1';
//$getRow = new get_row();
//$getRow-> set_rows($row_id);
	?></head>

<body>
<h1>Practicing PHP/SQL within HTML connecting with PDO</h1>
<?php $totalRows = count($row);
	echo "There are " . $totalRows . " records returned from my query.<br>" ;
	//$num_rows = mysql_num_rows($row);
	//echo $num_rows;
	?>
<table><tr>
	<th>ID</th>
	<th>Email</th>
	<th>First Name</th>
	<th>Last Name</th>
	<th>Phone</th>
	<th>Birthday</th>
	<th>Gender</th>
	<th>Password</th>
</tr>
	<?php foreach ($row as $singleRow) { ?>
	
	<tr>
	    <td style="border:solid 1px #333;"><?php echo $singleRow['id']; ?> </td>
		<td style="border:solid 1px #333;"><?php echo $singleRow['email']; ?> </td>
		<td style="border:solid 1px #333;"><?php echo $singleRow['fname']; ?> </td>
		<td style="border:solid 1px #333;"><?php echo $singleRow['lname']; ?> </td>
		<td style="border:solid 1px #333;"><?php echo $singleRow['phone']; ?> </td>
		<td style="border:solid 1px #333;"><?php echo $singleRow['birthday']; ?> </td>
		<td style="border:solid 1px #333;"><?php echo $singleRow['gender']; ?> </td>
		<td style="border:solid 1px #333;"><?php echo $singleRow['password']; ?> </td>
	</tr>
    <?php } ?>  
	</table>  


</body>
</html>