<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Confirmation</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            text-align: center;
            background-color: #f4f4f4;
            padding: 50px;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            display: inline-block;
            max-width: 450px;
            width: 100%;
            animation: fadeIn 0.8s ease-in-out;
        }
        .message {
            font-size: 22px;
            font-weight: bold;
            color: #155724;
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .icon {
            font-size: 40px;
            display: block;
            margin-bottom: 10px;
        }
        .details {
            font-size: 18px;
            text-align: left;
            margin-top: 10px;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
        .button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: 0.3s ease-in-out;
        }
        .button:hover {
            background: #0056b3;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>

<div class="container">
    <div class="message">
        <span class="icon">✅</span> 
        <span>Appointment Booked Successfully!</span>
    </div>

    <div class="details">
        <?php
        if (isset($_SESSION['appointment'])) {
            echo "<strong>Appointment Details:</strong><br>";
            echo "📅 <strong>Date:</strong> " . $_SESSION['appointment']['date'] . "<br>";
            echo "⏰ <strong>Time:</strong> " . $_SESSION['appointment']['time'] . "<br>";
            echo "👨‍⚕️ <strong>Doctor:</strong> " . $_SESSION['appointment']['doctor'] . "<br>";
            unset($_SESSION['appointment']); // Clear data after displaying
        } else {
            echo "<strong>We have received your appointment request.</strong><br>";
            echo "If you do not receive confirmation shortly, please contact support.";
        }
        ?>
    </div>

    <a href="appointment.php" class="button">Book Another Appointment</a>
</div>

</body>
</html>
