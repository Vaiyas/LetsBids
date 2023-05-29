 <?php
    session_start();
    $dbcon = mysqli_connect("localhost", "root", "", "food_order2");
    if (isset($_POST['save-data'])) {
        $name = $_POST['Name'];
        $email = $_POST['email'];
        $service = $_POST['service'];
        $quality = $_POST['quality'];
        $satisfy = $_POST['satisfy'];
        $benefit = $_POST['benefit'];
        $security = $_POST['security'];
        $sanction = $_POST['sanction'];

        $query = "INSERT INTO feedbackdb(name,email,service,quality,satisfy,benefit,security,sanction) Values ('$name','$email','$service','$quality','$satisfy','$benefit','$security','$sanction') ";
        $query_run = mysqli_query($dbcon, $query);
        // $conn->close();
    }
    ?>
 <!-- <?php
        // Assuming you have a MySQL database set up with a table called "answers"
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "foor-";

        // Create a new connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check the connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Get the answer from the form submission
        $answer = $_POST['answer'];

        // Insert the answer into the database
        $sql = "INSERT INTO answers (answer) VALUES ('$answer')";

        if ($conn->query($sql) === TRUE) {
            // Data saved successfully
            echo "Data stored successfully.";
        } else {
            // Failed to save data
            echo "Error storing data: " . $conn->error;
        }

        $conn->close();
        ?> -->