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
    <link rel="stylesheet" type="text/css" href="{{ url_for('static', filename='css/s.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url_for('static', filename='css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url_for('static', filename='css/font-awesome.min.css') }}">
</head>
<body>
    <?php include 'header.php'?>

    <!-- Hero-area -->
    <div class="hero-area section">
        <!-- Backgound Image -->
        <div class="bg-image bg-parallax overlay" style="background-image:url(static/img/bgc2.jpg);"></div>
        <!-- /Backgound Image -->

        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 text-center">
                    <ul class="hero-area-tree">
                        <!-- <li><a href="main.php">Home</a></li> -->
                        <li><a href="blog.php">Knowledge Network</a></li>
                        <li>Penetration Tester</li>
                    </ul>
                    <h1 class="white-text">Penetration Tester</h1>
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
                            <p style="font-size:16px;">Penetration testers, also known as “ethical hackers,” are highly skilled security specialists that spend their days attempting to breach computer and network security systems. These testers work in the information technology (IT) field to ensure that those without authorization cannot access an organization’s data. They do this by trying to hack into networks to identify potential vulnerabilities in the system.</p>
                            <p style="font-size:16px;">Penetration testers help businesses and organizations identify and resolve security vulnerabilities and weaknesses affecting their digital assets and computer networks. Some hold in-house positions with permanent employers, functioning as part of internal cybersecurity or information technology (IT) teams. Others work for specialized firms that provide penetration-testing services to end clients.</p>
                        </div>
                        <!-- /row -->

                        <!-- row -->
                        <div class="row">
                            <h2>Skills required</h2>
                            <ol style="font-size:16px;">
                                <li><b>1. </b>Coding skill required to infiltrate any system.</li>
                                <li><b>2. </b>Comprehensive knowledge of computer security, including forensics, systems analysis, and more.</li>
                                <li><b>3. </b>Insight into how hackers exploit the human element to gain unauthorized access to secure systems.</li>
                                <li><b>4. </b>Clear understanding of how computer security breaches can disrupt business, including the financial and managerial implications.</li>
                                <li><b>5. </b>Exceptional problem-solving skills.</li>
                                <li><b>6. </b>Communications skills to document and share your findings.</li>
                            </ol>
                        </div>
                        <!-- /row -->

                        <!-- row -->
                        <div class="row">
                            <h2>Educational Requirements</h2>
                            <p style="font-size:16px;"> Bachelor’s or Master’s degree in computer science, IT, cybersecurity, or a related specialization. Knowledge of SQL, C++, JavaScript, Ruby, and Python</p>
                        </div>
                        <!-- /row -->

                        <!-- row -->
                        <div class="row">
                            <h2>Duties and Responsibilities</h2>
                            <p style="font-size:16px;">Penetration Tester job will likely also involve planning and executing tests, documenting your methodologies, creating detailed reports about your findings and perhaps also being involved in designing fixes and improving security protocols.</p>
                            <ol style="font-size:16px;">
                                <li><b>1. </b>Perform penetration tests on computer systems, networks, and applications.</li>
                                <li><b>2. </b>Create new testing methods to identify vulnerabilities.</li>
                                <li><b>3. </b>Perform physical security assessments of systems, servers, and other network devices to identify areas that require physical protection.</li>
                                <li><b>4. </b>Pinpoint methods and entry points that attackers may use to exploit vulnerabilities or weaknesses.</li>
                                <li><b>5. </b>Search for weaknesses in common software, web applications, and proprietary systems.</li>
                                <li><b>6. </b>Research, evaluate, document, and discuss findings with IT teams and management.</li>
                                <li><b>7. </b>Review and provide feedback for information security fixes.</li>
                                <li><b>8. </b>Establish improvements for existing security services, including hardware, software, policies, and procedures.</li>
                                <li><b>9. </b>Identify areas where improvement is needed in security education and awareness for users.</li>
                            </ol>
                        </div>
                        <!-- /row -->

                        <!-- row -->
                        <div class="row">
                            <h2>Salary</h2>
                            <p style="font-size:16px;">The average salary for a Penetration Tester in Nigeria is NGN 2,500,000 per annum.</p>
                        </div>
                        <!-- /row -->

                        <!-- row -->
                        <div class="row">
                            <h2>Companies offering Penetration Tester roles</h2>
                            <ol style="font-size:16px;">
                                <li><b>1. </b>Interswitch Group</li>
                                <li><b>2. </b>Andela</li>
                                <li><b>3. </b>Flutterwave</li>
                                <li><b>4. </b>Cellulant</li>
                                <li><b>5. </b>Paystack</li>
                                <li><b>6. </b>Softcom</li>
                                <li><b>7. </b>Cyberdyne Technologies</li>
                                <li><b>8. </b>SystemSpecs</li>
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
