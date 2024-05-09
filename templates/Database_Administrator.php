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
    <!-- CSS -->
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
        <!-- /Background Image -->
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 text-center">
                    <ul class="hero-area-tree">
                        <!-- <li><a href="main.php">Home</a></li> -->
                        <li><a href="blog.php">Knowledge Network</a></li>
                        <li>Database Administrator</li>
                    </ul>
                    <h1 class="white-text">Database Administrator</h1>
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
                        <!-- row -->
                        <div class="row">
                            <p style="font-size:16px;">Database administrators (DBAs) design, write, and maintain computer database systems to ensure that the right person can access the necessary information at the right time.</p>
                            <p style="font-size:16px;">Database administrators or managers create and maintain databases that are compatible with their companies’ needs. These information technology (IT) professionals oversee database updates, storage, security, and troubleshooting.</p>
                            <p style="font-size:16px;">Database administrators also handle backups, restoration, and troubleshooting of database sets and system access. They update and integrate old programs to implement the latest technology. Database administrators typically need at least a bachelor’s degree in information science or computer science for most entry-level positions. Depending on the size and complexity of their company or governing body, these professionals may need a master’s degree in database administration or information technology. All database administrators need fundamental knowledge of structured query language (SQL) and software vendor certifications.</p>
                        </div>
                        <!-- /row -->
                        <!-- row -->
                        <div class="row">
                            <h2>Skills Required</h2>
                            <ol style="font-size:16px;">
                                <li><b>1. </b>Good communication, teamwork, and negotiation skills</li>
                                <li><b>2. </b>Familiarity with the main data manipulation languages and principles of database design</li>
                                <li><b>3. </b>The ability to work under tight deadlines and pressure</li>
                                <li><b>4. </b>Basic understanding of disaster recovery and database backup procedures</li>
                                <li><b>5. </b>Willingness to stay updated with developments in new technology</li>
                                <li><b>6. </b>Understanding of information legislation, such as the Data Protection Act</li>
                            </ol>
                        </div>
                        <!-- /row -->
                        <!-- row -->
                        <div class="row">
                            <h2>Educational Requirements</h2>
                            <ol style="font-size:16px;">
                                <li><b>1. </b>Bachelor’s Degree in Computer Science or Computer Engineering</li>
                                <li><b>2. </b>Advanced knowledge of database structure and theory</li>
                                <li><b>3. </b>Experience with MySQL and MSSQL</li>
                                <li><b>4. </b>Fundamental knowledge of structured query language (SQL) and software vendor certifications</li>
                            </ol>
                        </div>
                        <!-- /row -->
                        <!-- row -->
                        <div class="row">
                            <h2>Duties and Responsibilities</h2>
                            <ol style="font-size:16px;">
                                <li><b>1. </b>Establish the needs of users and monitor user access and security</li>
                                <li><b>2. </b>Monitor performance and manage parameters to provide fast responses to front-end users</li>
                                <li><b>3. </b>Map out the conceptual design for a planned database</li>
                                <li><b>4. </b>Consider both back-end organization of data and front-end accessibility for end-users</li>
                                <li><b>5. </b>Refine the physical design to meet system storage requirements</li>
                                <li><b>6. </b>Install and test new versions of the database management system (DBMS)</li>
                                <li><b>7. </b>Develop, manage, and test backup and recovery plans</li>
                                <li><b>8. </b>Collaborate closely with IT project managers, database programmers, and multimedia programmers</li>
                            </ol>
                        </div>
                        <!-- /row -->
                        <!-- row -->
                        <div class="row">
                            <h2>Salary</h2>
                            <p style="font-size:16px;">An entry-level Database Administrator (DBA) in Nigeria with less than 1 year of experience can expect to earn an average total compensation of ₦290,248 based on 65 salaries. An early career Database Administrator (DBA) with 1-4 years of experience earns an average total compensation of ₦415,224 based on 628 salaries. A mid-career Database Administrator (DBA) with 5-9 years of experience earns an average total compensation of ₦837,670 based on 313 salaries. An experienced Database Administrator (DBA) with 10-19 years of experience earns an average total compensation of ₦1,350,361 based on 91 salaries. In their late career (20 years and higher), employees earn an average total compensation of ₦1,084,793.</p>
                        </div>
                        <!-- /row -->
                        <!-- row -->
                        <div class="row">
                            <h2>Companies Offering Database Administrator Roles</h2>
                            <ol style="font-size:16px;">
                                <li><b>1. </b>IBM</li>
                                <li><b>2. </b>Dell Technologies</li>
                                <li><b>3. </b>Intel Corporation</li>
                                <li><b>4. </b>Tata Consultancy Services</li>
                                <li><b>5. </b>Accenture</li>
                                <li><b>6. </b>Amazon</li>
                                <li><b>7. </b>Capgemini</li>
                                <li><b>8. </b>Oracle</li>
                            </ol>
                        </div>
                        <!-- /row -->
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
