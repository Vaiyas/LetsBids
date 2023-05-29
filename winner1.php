<!-- <!DOCTYPE html>
<html>
<head>
	<title>Winners with Minimum Bid and Minimum Time</title>
</head>
<body> -->
<style>
table,
th,
td {
    /* border: 1px solid; */
    padding: 25px;
    /* border-color */
}

th {
    background-color: #04AA6D;
    /* background-color: #f28c9f; */
    color: white;
}

/* tr:nth-child(even) {background-color: #f28c9f;} */
td {
    color: white;
}

body {

    margin: 0px;
    padding: 0px;
    width: 100%;
    height: 100%;
    background-position: top center;
    position: relative;
    background-image: url(./images/bg3.jpeg);
    background-size: cover;
    z-index: 1;
}
</style>
<h1>Winners with Minimum and </h1>
<table>
    <thead>
        <tr>

            <th>Product Name </th>
            <th>Bid </th>
            <th>Starting Bid </th>
            <th>Bidding Date </th>
        </tr>
    </thead>
    <tbody>
        <?php
// connect to database
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'food_order2';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) {
    die('Could not connect: ' . mysqli_error($conn));
}

// select winners with minimum bid and minimum time for each category
$sql = "SELECT food, qty, price, order_date 
        FROM tbl_order 
        WHERE (food, qty, order_date) IN 
            (SELECT food, MIN(qty), MIN(order_date) 
             FROM tbl_order 
             GROUP BY food)";
$result = mysqli_query($conn, $sql);
if (!$result) {
    die('Query failed: ' . mysqli_error($conn));
}

// output winners in table
// echo "<table>";
echo "<thead><tr></tr></thead>";
echo "<tbody>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>".$row['food']."</td>";
    echo "<td>".$row['qty']."</td>";
    echo "<td>".$row['price']."</td>";
    echo "<td>".$row['order_date']."</td>";
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";

// close database connection
mysqli_close($conn);
?>
    </tbody>
</table>
<!-- </body>
</html> -->