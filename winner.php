<!DOCTYPE html>
<html>
<head>
	<title>Winners with Minimum and Unique Bid for Each Category</title>
</head>
<body>
	<style>
		table, th, td {
			border: 1px solid;
			padding: 10px;
		}
	</style>
	<h1>Winners with Minimum and Unique Bid for Each Category</h1>
	<table>
		<thead>
			<tr>
				<th>Category</th>
				<th>Product Name</th>
				<th>Minimum Bid</th>
				<th>Bidding Date</th>
			</tr>
		</thead>
		<tbody>
			<?php
				// Connect to MySQL database
				$host = 'localhost';
				$user = 'root';
				$pass = '';
				$dbname = 'food_order2';
				$conn = mysqli_connect($host, $user, $pass, $dbname);
				if (!$conn) {
					die('Could not connect: ' . mysqli_error($conn));
				}

				// Query for winners with minimum and unique bid for each category
				$sql = "SELECT o.food, o.qty, o.price
						FROM food_order2 o
						WHERE o.qty = (
							SELECT MIN(qty)
							FROM food_order2 o2
							WHERE o.food = o2.food
							GROUP BY o2.food
							HAVING COUNT(*) = 1
						)";
				$result = mysqli_query($conn, $sql);
				if (!$result) {
					die('Query failed: ' . mysqli_error($conn));
				}

				// Output winners in table
				while ($row = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$row['food']."</td>";
					echo "<td>".$row['price']."</td>";
					echo "<td>".$row['qty']."</td>";
					//echo "<td>".$row['bidding_date']."</td>";
					echo "</tr>";
				}

				// Close database connection
				mysqli_close($conn);
			?>
		</tbody>
	</table>
</body>
</html>
