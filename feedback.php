<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Feedback Form</title>
    <link rel="stylesheet" href="feedback2.css" />
</head>

<body>

    <div class="wrapper">
        <h2>Feedback Form</h2>
        <div id="error_message"></div>
        <form id="myform" action="feedbackk.php" method="POST" onsubmit="return validate();">
            <div class="input_field">
                <input type="text" placeholder="Name" name="Name" id="name">
            </div>
            <div class="input_field">
                <input type="text" placeholder="Email" name="email" required>
            </div><br>
            <h3>RATE US</h3> <br>
            <div class="form-group blue-label">
                <label for="question">SERVICES</label><br><br>
                <input type="radio" name="service" value="20"> Can't Say
                <input type="radio" name="service" value="40" class="ml-5"> Unsatisfied
                <input type="radio" name="service" value="50" class="ml-5"> Satisfied
                <input type="radio" name="service" value="80" class="ml-5"> Very Satisfied
                <input type="radio" name="service" value="100" class="ml-5"> Excellent <br><br>
                <label for="question">PRODUCT QUALITY</label><br><br>
                <input type="radio" name="quality" value="20"> Can't Say
                <input type="radio" name="quality" value="40" class="ml-5"> Unsatisfied
                <input type="radio" name="quality" value="50" class="ml-5"> Satisfied
                <input type="radio" name="quality" value="80" class="ml-5"> Very Satisfied
                <input type="radio" name="quality" value="100" class="ml-5"> Excellent <br><br>
                <label for="question">CUSTOMER SATISFACTION</label><br><br>
                <input type="radio" name="satisfy" value="20"> Can't Say
                <input type="radio" name="satisfy" value="40" class="ml-5"> Unsatisfied
                <input type="radio" name="satisfy" value="50" class="ml-5"> Satisfied
                <input type="radio" name="satisfy" value="80" class="ml-5"> Very Satisfied
                <input type="radio" name="satisfy" value="100" class="ml-5"> Excellent <br><br>
                <label for="question">FINANCIAL BENEFITS</label><br><br>
                <input type="radio" name="benefit" value="20"> Can't Say
                <input type="radio" name="benefit" value="40" class="ml-5"> Unsatisfied
                <input type="radio" name="benefit" value="50" class="ml-5"> Satisfied
                <input type="radio" name="benefit" value="80" class="ml-5"> Very Satisfied
                <input type="radio" name="benefit" value="100" class="ml-5"> Excellent <br><br>
                <label for="question">SECURITY</label><br><br>
                <input type="radio" name="security" value="20"> Can't Say
                <input type="radio" name="security" value="40" class="ml-5"> Unsatisfied
                <input type="radio" name="security" value="50" class="ml-5"> Satisfied
                <input type="radio" name="security" value="80" class="ml-5"> Very Satisfied
                <input type="radio" name="security" value="100" class="ml-5"> Excellent <br><br>
                <label for="question">SANCTION</label><br><br>
                <input type="radio" name="sanction" value="20"> Can't Say
                <input type="radio" name="sanction" value="40" class="ml-5"> Unsatisfied
                <input type="radio" name="sanction" value="50" class="ml-5"> Satisfied
                <input type="radio" name="sanction" value="80" class="ml-5"> Very Satisfied
                <input type="radio" name="sanction" value="100" class="ml-5"> Excellent <br><br>


                <!-- <input type="radio" name="services" value="" required>Rate our services
                <input type="radio" name="sanction" value="Male" required>Rate our services -->

            </div>
            <!-- <div class="">
                <button type="submit" name="save-data">submit</button>
            </div> -->
            <!-- <div class="input_field">
                <textarea placeholder="Your Feedback" id="yourfeedback"></textarea>
            </div> -->
            <div class="btn">
                <input type="submit" name="save-data">
                <a href=""></a>
            </div>
            <!-- <div class="btn">
                <button type="submit" name="save-data"> submit </button>
            </div> -->
        </form>
    </div>
    <script src="feedback.js"></script>
</body>

</html>