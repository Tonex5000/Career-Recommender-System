<?php
// Initialize the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Manager Job Description</title>
    <link rel="stylesheet" type="text/css" href="{{ url_for('static', filename='css/s.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url_for('static', filename='css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url_for('static', filename='css/font-awesome.min.css') }}">
</head>
<body>
    <?php include 'header.php'?>

    <!-- Hero-area -->
    <div class="hero-area section">
        <!-- Background Image -->
        <div class="bg-image bg-parallax overlay" style="background-image:url(static/img/bgc2.jpg);"></div>
        <!-- /Background Image -->

        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 text-center">
                    <ul class="hero-area-tree">
                        <!-- <li><a href="main.php">Home</a></li> -->
                        <li><a href="blog.php">Knowledge Network</a></li>
                        <li>Project Manager</li>
                    </ul>
                    <h1 class="white-text">Project Manager</h1>
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
                            <p style="font-size:16px;">A Project Manager is responsible for planning, overseeing, and leading projects from ideation through to completion. This senior role involves interaction with various internal and external stakeholders, managing multiple project elements simultaneously. In Nigeria, Project Managers in information technology (IT) play a crucial role in planning and executing projects within companies, ensuring they meet goals and stay within budgets.</p>
                        </div>

                        <h2>Skills required</h2>
                        <div class="row">
                            <p style="font-size:16px;">Project Managers should possess high levels of the following skills:</p>
                            <ol style="font-size:16px;">
                                <li><b>1. </b>Written and verbal communication</li>
                                <li><b>2. </b>Stress management</li>
                                <li><b>3. </b>Multi-tasking</li>
                                <li><b>4. </b>Leadership</li>
                                <li><b>5. </b>Strategic thinking</li>
                                <li><b>6. </b>Attention to detail</li>
                            </ol>
                        </div>

                        <h2>Educational Requirements</h2>
                        <div class="row">
                            <p style="font-size:16px;">A Project Manager job description typically requires degrees in fields such as Engineering, IT/Computer Science, Business Administration, or Management.</p>
                        </div>

                        <h2>Duties and Responsibilities</h2>
                        <div class="row">
                            <p style="font-size:16px;">Duties of a Project Manager may include leading project planning sessions, coordinating resources, managing client relationships, overseeing project documentation, conducting reviews, and optimizing processes.</p>
                        </div>

                        <h2>Salary</h2>
                        <div class="row">
                            <p style="font-size:16px;">In Nigeria, Project Managers in IT can expect varying salaries based on experience, with senior roles earning significantly higher compensations.</p>
                        </div>

                        <h2>Companies offering Project Manager roles</h2>
                        <div class="row">
                            <ol style="font-size:16px;">
                                <li><b>1. </b>MTN Nigeria</li>
                                <li><b>2. </b>Airtel Nigeria</li>
                                <li><b>3. </b>Globacom</li>
                                <li><b>4. </b>Interswitch</li>
                                <li><b>5. </b>Andela</li>
                                <li><b>6. </b>Flutterwave</li>
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
