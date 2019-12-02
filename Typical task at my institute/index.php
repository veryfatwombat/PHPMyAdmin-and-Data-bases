<html>
	<table>
		<tr>
			<td>Name</td>
			<td>Age</td>
		</tr>
				<?php
				$username = root;
				$password = root;
				// Create database connection using PHP Data Object (PDO)
				$db = new PDO("mysql:host=localhost;dbname=test", $username, $password);
				// Identify name of table within database
				$table = 'age';
				// Create the query - here we grab everything from the table
				$stmt = $db->query('SELECT * from '.$table);
				// Close connection to database
				$db = NULL;
				while($rows = $stmt->fetch()){
				echo "<tr><td>". $rows['Name'] . "</td><td>" . $rows['Age'] . "</td></tr>";
				};
				?>
	</table>
</html>