<?php include('partials/menu.php'); ?>

<!-- Main Content Section Starts -->




<div class="main-content" style="margin-bottom:100px;">
    <div class="wrapper">
        <h1>Dashboard</h1>
        <br><br>
        <?php
        if (isset($_SESSION['login'])) {
            echo $_SESSION['login'];
            unset($_SESSION['login']);
        }
        ?>
        <br><br>

        <div class="col-4 text-center">

            <?php
            //Sql Query 
            $sql = "SELECT * FROM tbl_category";
            //Execute Query
            $res = mysqli_query($conn, $sql);
            //Count Rows
            $count = mysqli_num_rows($res);
            ?>

            <h1><?php echo $count; ?></h1>
            <br />
            Categories
        </div>

        <div class="col-4 text-center">

            <?php
            //Sql Query 
            $sql2 = "SELECT * FROM tbl_food";
            //Execute Query
            $res2 = mysqli_query($conn, $sql2);
            //Count Rows
            $count2 = mysqli_num_rows($res2);
            ?>

            <h1><?php echo $count2; ?></h1>
            <br />
            Events
        </div>

        <div class="col-4 text-center">

            <?php
            //Sql Query 
            $sql3 = "SELECT * FROM tbl_order";
            //Execute Query
            $res3 = mysqli_query($conn, $sql3);
            //Count Rows
            $count3 = mysqli_num_rows($res3);
            ?>

            <h1><?php echo $count3; ?></h1>
            <br />
            Total Bids
        </div>
    </div>
</div>
<br><br>


<div class="main-content">
    <div class="wrapper">
        <h1>FEEDBACK</h1>
        <br><br>
    </div>
</div>
<div class="chart-container">
    <canvas id="chart" style="width:100%; height:80%; "></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="node_modules/chart.js/dist/chart.js"></script>
<script src="chart.js"></script>


<!-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="chart.js"></script>
Include Chart.js library from a CDN 



<div class="main-content">
    <div class="wrapper">
        <h1>FEEDBACK</h1>
        <br><br>
    </div>
</div>
<div class="chart-container">
    <canvas id="chart" style="width:100%; height:80%; "></canvas>
</div>
<canvas id="chart"></canvas> 

<script>
// Fetch the chart data from the server
fetch("/admin/chart.js")
    .then((response) => response.json())
    .then((chartData) => {
        const {
            sum1,
            sum2,
            sum3,
            sum4,
            sum5,
            sum6
        } = chartData;

        // Set the data for the chart
        var data = {
            labels: [
                "Services",
                "Sanction",
                "Product Quality",
                "Customer Satisfaction",
                "Financial Benefits",
                "Security",
            ],
            datasets: [{
                label: "Skills",
                data: [sum1, sum2, sum3, sum4, sum5, sum6],
                backgroundColor: [
                    "#FF6384",
                    "#36A2EB",
                    "#FFCE56",
                    "#4BC0C0",
                    "#9966FF",
                    "#004961",
                ],
                hoverBackgroundColor: [
                    "#FF6384",
                    "#36A2EB",
                    "#FFCE56",
                    "#4BC0C0",
                    "#9966FF",
                    "#004961",
                ],
            }, ],
        };

        // Get the canvas element
        var ctx = document.getElementById("chart").getContext("2d");

        // Create the chart
        var myChart = new Chart(ctx, {
            type: "pie",
            data: data,
            options: {
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    position: "center",
                    labels: {
                        fontColor: "red",
                        fontSize: 26,
                        fontStyle: "bold",
                        boxWidth: 0,
                        usePointStyle: true,
                    },
                },
            },
        });
    });
</script>

 -->

<?php include('partials/footer.php') ?>
<!-- <div class="col-4 text-center">
                    
<?php
//Creat SQL Query to Get Total Revenue Generated
//Aggregate Function in SQL
$sql4 = "SELECT SUM(total) AS Total FROM tbl_order WHERE status='Delivered'";

//Execute the Query
$res4 = mysqli_query($conn, $sql4);

//Get the VAlue
$row4 = mysqli_fetch_assoc($res4);

//GEt the Total REvenue
$total_revenue = $row4['Total'];

?> -->

<!-- <h1>$<?php echo $total_revenue; ?></h1>
                    <br />
                    Revenue Generated -->
<!-- </div> -->



<!-- Main Content Setion Ends -->



<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FEEDBACK</title>
    <meta name="description" content="This is the page for feedback add by user" />

</head>

<body>
    <div class="main1">
        <h1 class="home-h1">FEEDBACK</h1>
    </div>

    <div class="chart-container">
        <canvas id="chart"></canvas>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script src="chart.js"></script>
</body>

</html>