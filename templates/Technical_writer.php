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
        <!-- Background Image -->
        <div class="bg-image bg-parallax overlay" style="background-image:url(static/img/bgc2.jpg);"></div>
        <!-- /Background Image -->
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 text-center">
                    <ul class="hero-area-tree">
                       <!--  <li><a href="main.php">Home</a></li> -->
                        <li><a href="blog.php">Knowledge Network</a></li>
                        <li>Technical Writer</li>
                    </ul>
                    <h1 class="white-text">Technical Writer</h1>
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
                <!-- blog post -->
                <div class="blog-post" style="text-align: justify;">
                    <h2>Job Description</h2>
                    <!-- row -->
                    <div class="row">
                        <p style="font-size:16px;">Technical Writers have the expertise to understand and communicate the technical aspects of a digital product to both highly technical and non-technical users. They act as translators, providing users with information that resonates best based on their background.</p>
                        <p style="font-size:16px;">Technical Writers are responsible for preparing instruction manuals and articles with the main goal to communicate complex, technical information more easily. They also develop, gather, and disseminate technical information among customers, designers, and manufacturers. Technical Writers produce high-quality and understandable documentation to improve the success of products.</p>
                    </div>
                    <!-- /row -->

                    <!-- row -->
                    <div class="row">
                        <h2>Skills Required</h2>
                        <p style="font-size:16px;">Based on research, the following core skills are necessary for a Technical Writer:</p>
                        <ol style="font-size:16px;">
                            <li><b>1.</b> Ability to translate highly technical information into easily understandable content for customers.</li>
                            <li><b>2.</b> Creative skills in using visuals like photographs, drawings, diagrams, and charts to enhance user understanding.</li>
                            <li><b>3.</b> Excellent written English skills.</li>
                            <li><b>4.</b> Strong communication and teamwork skills, including consulting with subject matter experts.</li>
                            <li><b>5.</b> Enjoyment of collaborative work in a team environment.</li>
                            <li><b>6.</b> Attention to detail combined with a creative approach.</li>
                        </ol>
                    </div>
                    <!-- /row -->

                    <!-- row -->
                    <div class="row">
                        <h2>Educational Requirements</h2>
                        <p style="font-size:16px;">A college degree is usually required for a position as a technical writer. Additionally, knowledge or experience in a technical field such as science or engineering is beneficial. Employers often prefer candidates with a bachelor’s degree in English or a communications-related subject. Technical writing jobs may require both a degree and knowledge of a technical field like engineering or computer science.</p>
                    </div>
                    <!-- /row -->

                    <!-- row -->
                    <div class="row">
                        <h2>Duties and Responsibilities</h2>
                        <p style="font-size:16px;">Technical writers create paper-based and digital operating instructions, manuals, and FAQs to assist technical support staff, consumers, and other users. Responsibilities include:</p>
                        <ol style="font-size:16px;">
                            <li><b>1.</b> Writing for diverse audiences from non-technical users to programmers and system administrators.</li>
                            <li><b>2.</b> Preparing, reviewing, revising, and maintaining technical documents.</li>
                            <li><b>3.</b> Gathering and analyzing technical information for documentation.</li>
                            <li><b>4.</b> Testing product and documentation accuracy.</li>
                            <li><b>5.</b> Identifying and contributing to improvements in documentation and products.</li>
                            <li><b>6.</b> Updating existing documents to reflect changes.</li>
                        </ol>
                    </div>
                    <!-- /row -->

                    <!-- row -->
                    <div class="row">
                        <h2>Salary</h2>
                        <p style="font-size:16px;">According to online sources, the national average salary for a Technical Writer in Nigeria is around NGN 1,500,000 per year.</p>
                    </div>
                    <!-- /row -->

                    <!-- row -->
                    <div class="row">
                        <h2>Companies Offering Technical Writer Roles</h2>
                        <ol style="font-size:16px;">
                            <li><b>1.</b> Oracle</li>
                            <li><b>2.</b> Wipro</li>
                            <li><b>3.</b> Cognizant</li>
                            <li><b>4.</b> Tata Consultancy Services</li>
                            <li><b>5.</b> Cisco</li>
                            <li><b>6.</b> Cyient</li>
                            <li><b>7.</b> Capgemini</li>
                            <li><b>8.</b> HCL Technologies</li>
                        </ol>
                    </div>
                    <!-- /row -->
                </div>
                <!-- /blog post -->
            </div>
            <!-- /main blog -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->

    <?php include 'footer.php'?>
</body>
</html>
