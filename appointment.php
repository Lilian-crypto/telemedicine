<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book an Appointment</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f7f9;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color:rgb(64, 138, 195);
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
        }
        input[type="text"],
        input[type="email"],
        input[type="datetime-local"],
        select,
        textarea {
            width: calc(100% - 18px);
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }
        textarea {
            resize: vertical;
        }
        button {
            background-color:rgb(0, 1, 2);
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
            display: block;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color:rgb(54, 145, 219);
        }
        .home-button {
            background-color:rgb(1, 7, 10);
            color:rgb(247, 249, 251);
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            float: right;
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        .home-button:hover {
            background-color: #d0e7ff;
            color: #0056b3;
        }
        .top-bar {
            background-color: #e6f7ff;
            padding: 10px 20px;
            overflow: hidden;
        }
        .error-message {
            color: red;
            margin-top: 5px;
            display: none;
        }
    </style>
</head>
<body>
    <div class="top-bar">
        <a href="index.php" class="home-button">Home</a>
    </div>
    <div class="container">
        <h1>Book Online Consultation</h1>
        <form id="consultationForm" action="process_consultation.php" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="text" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="Department">Select Department:</label>
                <select id="Department" name="Department" required>
                    <option value="">Select a Department</option>
                    <option value="Cardiology">Cardiology</option>
                    <option value="Dermatology">Dermatology</option>
                    <option value="Pharmaceuticals">Pharmaceuticals</option>
                    <option value="Surgery">Surgical operations</option>
                    <option value="Neurology">Neurology</option>
                    <option value="Oncology">Oncology</option>
                    <option value="Orthopedics">Orthopedics</option>
                    <option value="Pediatrics">Pediatrics</option>
                    <option value="Urology">Urology</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="datetime">Preferred Date and Time:</label>
                <input type="datetime-local" id="datetime" name="datetime" required>
            </div>
            <div class="form-group">
                <label for="reason">Reason for Consultation:</label>
                <textarea id="reason" name="reason" rows="4" required></textarea>
            </div>
            <button type="submit">Request Consultation</button>
        </form>
    </div>

    <script>
        document.getElementById('consultationForm').addEventListener('submit', function() {
        alert("Appointment request submitted successfully!");
    });
    </script>
</body>
</html>
