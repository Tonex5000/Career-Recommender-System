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
    <?php include 'header.php'; ?>
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
                        <li>Software Tester</li>
                    </ul>
                    <h1 class="white-text">Software Tester</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- /Hero-area -->

    <!-- Blog -->
    <div id="blog" class="section">
        <!-- Container -->
        <div class="container">
            <!-- Row -->
            <div class="row">
                <!-- Main blog -->
                <div id="main" class="col-md-9">
                    <!-- Blog post -->
                    <div class="blog-post" style="text-align:justify;">
                        <h2>Job Description</h2>
                        <!-- Row -->
                        <div class="row">
                            <p style="font-size:16px;">Software Testers are responsible for the quality of software development and deployment. They are involved in performing automated and manual tests to ensure the software created by developers is fit for purpose. Some of the duties include analysis of software and systems, mitigating risk, and preventing software issues.</p>
                            <p style="font-size:16px;">A software tester is responsible for designing test scenarios for software usability, running these tests, and preparing reports on the effectiveness and defects for the production team. A software tester is also known as a software test engineer or a quality assurance (QA) tester.</p>
                        </div>
                        <!-- /Row -->

                        <!-- Row -->
                        <div class="row">
                            <h2>Skills required</h2>
                            <p style="font-size:16px;">To be successful as a software tester, one should have a working knowledge of software and test design, the capability to run through tests, and the ability to analyze the results. Ultimately, the software tester should be result-driven, have good communication skills, and stay updated with software programming and software test design.</p>
                            <ol style="font-size:16px;">
                                <li><b>1. </b>Up-to-date knowledge of software test design and testing methodologies.</li>
                                <li><b>2. </b>Working knowledge of test techniques and compatibility with various software programs.</li>
                                <li><b>3. </b>Working knowledge of programming.</li>
                                <li><b>4. </b>Excellent communication and critical thinking skills.</li>
                                <li><b>5. </b>Good organizational skills and a detail-oriented mindset.</li>
                                <li><b>6. </b>A passion for working with technology.</li>
                            </ol>
                        </div>
                        <!-- /Row -->

                        <!-- Row -->
                        <div class="row">
                            <h2>Educational Requirements</h2>
                            <p style="font-size:16px;">The academic background of a software tester should be in Computer Science. Degrees such as BTech/ B.E., MCA, BCA, BSc-Computers can help secure a job quickly. If a person does not hold any of these degrees, they can complete a software testing certification like ISTQB and CSTE, which help in learning Software Development/Test Life Cycle and other testing methodologies.</p>
                        </div>
                        <!-- /Row -->

                        <!-- Row -->
                        <div class="row">
                            <h2>Duties and Responsibilities</h2>
                            <ol style="font-size:16px;">
                                <li><b>1. </b>Reviewing software requirements and preparing test scenarios.</li>
                                <li><b>2. </b>Executing tests on software usability.</li>
                                <li><b>3. </b>Analyzing test results on database impacts, errors or bugs, and usability.</li>
                                <li><b>4. </b>Preparing reports on all aspects related to the software testing carried out and reporting to the design team.</li>
                                <li><b>5. </b>Interacting with clients to understand product requirements.</li>
                                <li><b>6. </b>Participating in design reviews and providing input on requirements, product design, and potential problems.</li>
                                <li><b>7. </b>Executing all levels of testing (System, Integration, and Regression).</li>
                                <li><b>8. </b>Providing timely solutions.</li>
                            </ol>
                        </div>
                        <!-- /Row -->

                        <!-- Row -->
                        <div class="row">
                            <h2>Salary</h2>
                            <p style="font-size:16px;">Compensation for a software tester varies from company to company. The average software testing career package in Nigeria is N500,000 - N1,000,000 annually.</p>
                        </div>
                        <!-- /Row -->

                        <!-- Row -->
                        <div class="row">
                            <h2>Companies offering Software Tester roles</h2>
                            <ol style="font-size:16px;">
                                <li><b>1. </b>Interswitch Group</li>
                                <li><b>2. </b>Andela</li>
                                <li><b>3. </b>Paga</li>
                                <li><b>4. </b>Flutterwave</li>
                                <li><b>5. </b>Konga</li>
                                <li><b>6. </b>Paystack</li>
                            </ol>
                        </div>
                        <!-- /Row -->
                    </div>
                    <!-- /blog post -->
                </div>
                <!-- /main blog -->
            </div>
            <!-- /Row -->
        </div>
        <!-- /Container -->
    </div>
    <!-- /Blog -->

    <?php include 'footer.php'; ?>
</body>
</html>
