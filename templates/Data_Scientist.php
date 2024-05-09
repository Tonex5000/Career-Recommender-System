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
    <!-- Add your CSS links here -->
</head>
<body>
    <?php include 'header.php'; ?>
    
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
                        <li>Data Scientist</li>
                    </ul>
                    <h1 class="white-text">Data Scientist</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- /Hero-area -->

    <!-- Blog -->
    <div id="blog" class="section">
        <div class="container">
            <div class="row">
                <div id="main" class="col-md-9">
                    <div class="blog-post" style="text-align:justify;">
                        <h2>Job Description</h2>
                        <div class="row">
                            <p style="font-size:16px;">A data scientist in Nigeria is someone who extracts insights from data. They proactively gather information from various sources and analyze it to improve business understanding and create AI tools that automate processes.</p>
                        </div>

                        <div class="row">
                            <h2>Skills required</h2>
                            <p style="font-size:16px;">Key skills for data scientists in Nigeria include:</p>
                            <ol style="font-size:16px;">
                                <li><b>1. </b>Strong analytical and problem-solving skills</li>
                                <li><b>2. </b>Experience with database tools like Hadoop, SQL, and SAS</li>
                                <li><b>3. </b>Excellent communication and presentation skills</li>
                                <li><b>4. </b>Effective time management and organizational skills</li>
                                <li><b>5. </b>Ability to work in teams and collaborate effectively</li>
                            </ol>
                        </div>

                        <div class="row">
                            <h2>Educational Requirements</h2>
                            <ol style="font-size:16px;">
                                <li><b>1. </b>BSc/BA in Computer Science, Engineering, or related field; a graduate degree in Data Science is preferred.</li>
                                <li><b>2. </b>Proficiency in programming languages like Python, R, SQL, or Java</li>
                                <li><b>3. </b>Postgraduate qualifications such as Masters or PhD are beneficial</li>
                                <li><b>4. </b>Strong math and statistical skills are essential</li>
                            </ol>
                        </div>

                        <div class="row">
                            <h2>Duties and Responsibilities</h2>
                            <ol style="font-size:16px;">
                                <li><b>1. </b>Identify and gather valuable data sources</li>
                                <li><b>2. </b>Preprocess structured and unstructured data</li>
                                <li><b>3. </b>Analyze data to discover trends and patterns</li>
                                <li><b>4. </b>Build machine-learning models and algorithms</li>
                                <li><b>5. </b>Present insights using data visualization techniques</li>
                                <li><b>6. </b>Collaborate with teams to implement solutions</li>
                            </ol>
                        </div>

                        <div class="row">
                            <h2>Salary</h2>
                            <p style="font-size:16px;">Data scientists in Nigeria can expect varying salaries based on experience. An entry-level data scientist earns an average total compensation of NGN 1,000,000, while mid-career professionals with 5-9 years of experience earn around NGN 4,000,000. Experienced data scientists with over 10 years of experience can earn up to NGN 8,000,000.</p>
                        </div>

                        <div class="row">
                            <h2>Companies offering Data Scientist roles</h2>
                            <ol style="font-size:16px;">
                                <li><b>1. </b>Andela</li>
                                <li><b>2. </b>Interswitch</li>
                                <li><b>3. </b>Flutterwave</li>
                                <li><b>4. </b>PiggyVest</li>
                                <li><b>5. </b>Paystack</li>
                                <li><b>6. </b>MTN Nigeria</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Blog -->

    <?php include 'footer.php'; ?>
</body>
</html>
