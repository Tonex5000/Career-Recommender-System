<?php
// Initialize the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <!-- Updated stylesheet links -->
    <link rel="stylesheet" type="text/css" href="{{ url_for('static', filename='css/s.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url_for('static', filename='css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url_for('static', filename='css/font-awesome.min.css') }}">
</head>
<body>
    <?php include 'header.php'?>

    <!-- Hero-area -->
    <div class="hero-area section">
        <!-- Background Image -->
        <div class="bg-image bg-parallax overlay" style="background-image:url(static/img/bgc2.jpg); "></div>

        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 text-center">
                    <ul class="hero-area-tree">
                        <!-- <li><a href="main.php">Home</a></li> -->
                        <li><a href="blog.php">Knowledge Network</a></li>
                        <li>Networking Engineer</li>
                    </ul>
                    <h1 class="white-text">Networking Engineer</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- /Hero-area -->

    <!-- Blog -->
    <div id="blog" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- main blog -->
                <div id="main" class="col-md-9">
                    <!-- blog post -->
                    <div class="blog-post" style="text-align:justify;">
                        <h2>Job Description</h2>
                        <div class="row">
                            <p style="font-size:16px;">
                                A Networking Engineer in Nigeria is responsible for maintaining and administering computer networks, hardware, software, and related systems. Duties include disaster recovery operations, network security, and hardware maintenance. Networking Engineers work closely with users to identify and resolve issues.
                            </p>
                        </div>

                        <div class="row">
                            <h2>Skills Required</h2>
                            <ol style="font-size:16px;">
                                <li><b>1. </b>Strong understanding of network infrastructure and hardware.</li>
                                <!-- Add more relevant skills based on current requirements -->
                            </ol>
                        </div>

                        <div class="row">
                            <h2>Educational Requirements</h2>
                            <p style="font-size:16px;">
                                A Network Engineer in Nigeria typically requires a bachelor’s degree in computer science, information technology, or related fields. Certifications such as CCIE, CCNP, Network+, among others, are valuable.
                            </p>
                        </div>

                        <div class="row">
                            <h2>Duties and Responsibilities</h2>
                            <ol style="font-size:16px;">
                                <li><b>1. </b>Maintaining and administering computer networks and related systems.</li>
                                <!-- Update or add more responsibilities as needed -->
                            </ol>
                        </div>

                        <div class="row">
                            <h2>Salary</h2>
                            <p style="font-size:16px;">The average salary for a Network Engineer in Nigeria varies depending on experience and company, ranging from ₦3,000,000 to ₦8,000,000 per year.</p>
                        </div>

                        <div class="row">
                            <h2>Companies Offering Networking Engineer Roles</h2>
                            <ol style="font-size:16px;">
                                <li><b>1. </b>Huawei Technologies</li>
                                <li><b>2. </b>MTN Nigeria</li>
																<li><b>3. </b>Cisco</li>
																<li><b>4. </b>United Bank for Africa</li>
																<li><b>5. </b>Bharti Airtel</li>
                                <!-- Add actual company names based on current trends -->
                            </ol>
                        </div>
                    </div>
                    <!-- /blog post -->
                </div>
                <!-- /main blog -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!-- /Blog -->

    <?php include 'footer.php'?>
</body>
</html>
