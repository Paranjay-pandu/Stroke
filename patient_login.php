<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $patient_name = $_POST['patient_name'];
    $patient_phone_number = $_POST['patient_phone_number'];

    if (strlen($phone) !== 10) {
        echo "<script>alert('Error: Invalid Phone Number.');</script>";
        exit;
        $sql = "INSERT INTO `patient`(`patient_name`, `ptient_phon_number`) VALUES ($patient_name,'$patient_phone_number')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

    }
   
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
    <script>
        function generateOTP() {
            var otp = Math.floor(1000 + Math.random() * 9000);
            document.getElementById("otp-display").innerText = "OTP: " + otp;
        }
    </script>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <button onclick="generateOTP()">Get OTP</button>
        <form action="#" method="post">
            <div class="input-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="patient_name" required>
            </div>
            <div class="input-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="patient_phone_number" required>
            </div>
            <div class="input-group">
                <label for="otp">OTP</label>
                <input type="text" id="otp" name="otp" required>
            </div>
            <div id="otp-display"></div>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>