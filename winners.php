<!-- <!DOCTYPE html>
<html>
<head>
	<title>Winners with Minimum Bid and Minimum Time</title>
</head>
<body> -->
<style>
table {
    width: 100%;
    background-color: #fff;
    margin: 30px;
    padding: 30px;
}

th,
td {
    text-align: center;
    border-bottom: 1px solid #ddd;

}

tr:hover {
    /* background-color: #87cefa; */
    background-color: #a1caf1;
}

table,
th,
td {
    /* border: 1px solid; */
    padding: 25px;
    /* border-color */
}

th {
    /* background-color: #04AA6D; */
    background-color: #00008b;
    color: white;
    font-size: 30px;
}

/* tr:nth-child(even) {background-color: #f28c9f;} */
td {
    color: black;
}

body {

    margin: 0px;
    padding: 0px;
    width: 100%;
    height: 100%;
    /* align-items: center; */
    background-position: top center;
    position: relative;
    background-image: url(./images/bg5.png);
    background-size: cover;
    opacity: 1;
    z-index: .75;
}

.center {
    margin-left: auto;
    margin-right: auto;
    margin-top: 21px;
}

h1 {
    color: white;
    text-align: center;
}
</style>
<h1 style=" padding:30px;background-color:#a1caf1;">Winners With Minimum And
    Unique Bid </h1>
<table class="center">
    <thead>
        <tr>

            <th>Product Name </th>
            <th>Bid </th>
            <th>Starting Bid </th>
            <th>Bidding Date </th>
            <th>Customer name </th>
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
        // $sql = "SELECT food, qty, price, order_date 
        //         FROM tbl_order
        // 		GROUP BY food 
        //         WHERE (qty) IN 
        //             (SELECT DISTINCT qty as qty
        //              FROM tbl_order 
        //             )";


        // $sql="SELECT food, qty, price, order_date
        // FROM (
        //     SELECT DISTINCT qty AS qty, food, price, order_date
        //     FROM tbl_order
        // ) AS unique_numbers
        // WHERE qty = (
        //     SELECT MIN(qty)
        //     FROM (
        //         SELECT DISTINCT qty AS qty
        //         FROM tbl_order
        //     ) AS unique_numbers
        // )";

        // $sql="SELECT food, qty, price, order_date
        // FROM (
        //     SELECT qty, food, price, order_date
        //     FROM tbl_order
        // 	GROUP BY food
        // ) AS unique_numbers
        // WHERE qty = (
        //     SELECT DISTINCT qty AS qty
        //     FROM (
        //         SELECT MIN(qty)
        //         FROM tbl_order
        //     ) AS unique_numbers
        // )";



        // $sql="SELECT food,price,order_date, MIN(qty) AS min_number
        // FROM (
        //     SELECT DISTINCT qty as qty,food,price,order_date
        //     FROM tbl_order
        //     GROUP BY qty
        // ) AS unique_numbers
        // GROUP BY food";

        $sql = "SELECT food, price,order_date,customer_name,MIN(qty) AS min_number
FROM (
    SELECT food,price,order_date, customer_name,qty, COUNT(*) AS count
    FROM tbl_order
    -- WHERE qty > price
    GROUP BY food,qty
    
    HAVING count = 1
   
) AS unique_numbers
GROUP BY food";



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
            echo "<td>" . $row['food'] . "</td>";
            echo "<td>" . $row['min_number'] . "</td>";
            echo "<td>" . $row['price'] . "</td>";
            echo "<td>" . $row['order_date'] . "</td>";
            echo "<td>" . $row['customer_name'] . "</td>";

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