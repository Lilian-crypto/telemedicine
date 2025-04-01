<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AFYA States Hospital Telemedicine</title>
    
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap">
    <link rel="stylesheet" href="assets/css/animate-3.7.0.css">
    <link rel="stylesheet" href="assets/css/font-awesome-4.7.0.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-4.1.3.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            color: #444;
        }

        .preloader {
            position: fixed;
            width: 100%;
            height: 100%;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }
        .spinner {
            border: 5px solid #f3f3f3;
            border-top: 5px solid #007bff;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 1s linear infinite;
        }
        @keyframes spin { 100% { transform: rotate(360deg); } }

        h1, h2, h3 {
            font-weight: 600;
            color:rgb(12, 12, 12);
        }
        p {
            font-size: 16px;
            color: #666;
        }
        .btn-primary {
            background: #007bff;
            border: none;
            padding: 12px 20px;
            transition: 0.3s;
        }
        .btn-primary:hover {
            background: #0056b3;
            transform: scale(1.05);
        }

        .service-box {
            border: 1px solid #ddd;
            padding: 20px;
            text-align: center;
            transition: 0.3s;
            border-radius: 5px;
            background: #f9f9f9;
        }
        .service-box:hover {
            background: #007bff;
            color: #fff;
            transform: translateY(-5px);
        }
        .service-box i {
            font-size: 3em;
            color: #007bff;
            transition: 0.3s;
        }
        .service-box:hover i {
            color: #fff;
            transform: rotate(10deg);
        }

        .telemedicine-area {
            background: #eef6ff;
            padding: 50px 0;
        }

        /* Image size increase */
        img {
            max-width: 100%;
            height: auto;
            width: 800px; /* Adjusted width for larger images */
        }

        /* Sidebar styling */
        .sidebar {
            position: fixed;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            background: #007bff;
            padding: 10px;
            border-radius: 10px 0 0 10px;
            box-shadow: -3px 0 5px rgba(0, 0, 0, 0.2);
        }

        .sidebar button {
            display: block;
            width: 120px;
            margin: 5px 0;
            padding: 10px;
            background: white;
            color: #007bff;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            font-weight: bold;
            text-align: center;
            transition: 0.3s;
        }

        .sidebar button:hover {
            background: #0056b3;
            color: white;
        }

        
    </style>
</head>

<body>
    
    </div>
<body>
    <div class="preloader">
        <div class="spinner"></div>
    </div>

    <header class="header-area">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div id="logo"><a href="index.php"></a></div>
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li class="menu-active"><a href="about.php">About</a></li>
                        <li><a href="backend/patient/register.php">Register</li>
                        <li><a href="backend/doc/index.php">Doctor's Login</a></li>
                        <li><a href="backend/admin/index.php">Administrator Login</a></li>
                        <li><a href="backend/patient/index.php">Patient Login</a></li>
                    </ul>
                </nav>
                
            </div>
        </div>

    </div>

        <h1 class="text-center mt-3">AFYA States Hospital Telemedicine</h1>
    </header>


    <section class="banner-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h4>Caring for better life</h4>
                    <h1>Leading the way in medical excellence</h1>
                    <p>AFYA States is awarded as one of the Top Hospital Management System, which can integrate all the HIS systems, processes and machines into an intelligent information system to derive operational efficiency and assist hospitals in decision making process through MIS and Analytics.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="services-area section-padding">
        <div class="container text-center">
            <h2>Our Services</h2>
            <p>Explore our wide range of healthcare services.</p>
            <div class="row">
                <div class="col-md-4">
                    <div class="service-box">
                        <i class="fa fa-heartbeat"></i>
                        <h3>Cardiology</h3>
                        <p>Heart health care.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-box">
                        <i class="fa fa-medkit"></i>
                        <h3>Oncology</h3>
                        <p>Cancer treatment.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-box">
                        <i class="fa fa-child"></i>
                        <h3>Pediatrics</h3>
                        <p>Child care.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-box">
                        <i class="fa fa-stethoscope"></i>
                        <h3>General Medicine</h3>
                        <p>Primary care.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-box">
                        <i class="fa fa-medkit"></i>
                        <h3>Pharmaceutical Care</h3>
                        <p>Medication management.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-box">
                        <i class="fa fa-video-camera"></i>
                        <h3>Telemedicine</h3>
                        <p>Remote doctor consultations.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="telemedicine-area text-center">
        <h2>Experience Telemedicine</h2>
        <p>Consult with doctors from anywhere.</p>
        <a href="appointment.php" class="btn btn-primary">Schedule an Appointment</a>
    </section>

    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <script>
        $(window).on("load", function () {
            $(".preloader").fadeOut();
        });
    </script>
</body>
</html>
