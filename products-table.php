<html>
	<head>
	<style type="text/css">
	table {
		border-collapse: collapse;
		width: 100%;
		color: #eb4034;
		font-family: monospace;
		font-size: 25px;
		text-align: left;
	}

	th {
	background-color: #eb4034;
	color: white;
	}

	tr:nth-child(even) {background-color: #ededed}
	</style>

	</head>
	<body>
		<table>
			<tr>
				<th>PRODUCT ID</th>
				<th>PRODUCT NAME</th>
				<th>PRODUCT PRICE</th>
			</tr>
			
			<?php
			$conn = mysqli_connect("localhost", "root", "", "products");
			$sql = "SELECT * FROM users";
			$result = $conn-> query($sql);
			
			if ($result->num_rows > 0) {
			while ($row = $result-> fetch_assoc()) {
				echo "<tr><td>" . $row["PRODUCT_ID"] . "</td><td>" . $row["PRODUCT_NAME"] . "</td><td>" . $row["PRODUCT_PRICE"] . "</td><td>";
				}
			}					
			else {
				echo "No Results";
			}
			$conn-> close();
			?>

		</table>
	</body>
</html>