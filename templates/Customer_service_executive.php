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
                    <li>Customer Service Executive</li>
                </ul>
                <h1 class="white-text">Customer Service Executive</h1>
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
                <div class="blog-post" style="text-align:justify; ">
                    <h2>Job Description</h2>
                    <!-- row -->
                    <div class="row">

                        <p style="font-size:16px;">Customer Service Executive manages a team of representatives who will offer excellent customer service and after-sales support. Customer Service Execute creates policies and procedures and oversees the customer service provided by the team. The Customer Service Executive will be responsible for the selection of staff in the hiring process and ensure that a standardized level of service is maintained for all customers.</p>

                        <p style="font-size:16px;">A Customer Service Executive displays excellent interpersonal and communication skills as well as a professional appearance. An outstanding Customer Service Executive should possess a proven track record of successful customer service and management skills.</p>

                    </div>
                    <!-- /row -->

                    <!-- row -->
                    <div class="row">
                        <h2>Skills required</h2>


                        <ol style="font-size:16px;">
                            <li><b>1. </b>Excellent interpersonal and written and oral communication skills.</li>
                            <li><b>2. </b>Knowledge of CRM systems.</li>
                            <li><b>3. </b>Computer skills.</li>
                            <li><b>4. </b>The ability to run diagnostic tests and determine the causes of errors or problems.</li>
                            <li><b>5. </b>Keeping track of common issues and maintaining accurate reports are important abilities for these professionals</li>
                        </ol>
                    </div>
                    <!-- /row -->

                    <!-- row -->
                    <div class="row">
                        <h2>Educational Requirements</h2>
                        <p style="font-size:16px;">A Bachelor's degree in business administration or a relevant field is required. An MBA or any other master's degree in management will help candidates apply for higher-level positions.</p>
                    </div>
                    <!-- /row -->

                    <!-- row -->
                    <div class="row">
                        <h2>Duties and Responsibilities</h2>

                        <ol style="font-size:16px;">
                            <li><b>1. </b>Managing a team of representatives offering customer support.</li>
                            <li><b>2. </b>Resolving customer complaints brought to your attention.</li>
                            <li><b>3. </b>Creating policies and procedures.</li>
                            <li><b>4. </b>Planning the training and standardization of service delivery.</li>
                            <li><b>5. </b>Conducting quality assurance surveys with customers and providing feedback to the staff.</li>
                            <li><b>6. </b>Possessing excellent product knowledge to enhance customer support.</li>
                            <li><b>7. </b>Maintaining a pleasant working environment for your team.</li>
                        </ol>
                    </div>
                    <!-- /row -->

                    <!-- row -->
                    <div class="row">
                        <h2>Salary</h2>
                        <p style="font-size:16px;">The average salary for a Customer Care Executive in Nigeria is around ₦2,000,000 per year. For a fresher, the salary will be starting from ₦1,500,000. With experience, Customer Service Executive salary can range from ₦2,200,000 to ₦2,700,000 depending on the company and level of experience.</p>
                    </div>
                    <!-- /row -->

                    <!-- row -->
                    <div class="row">
                        <h2>Companies offering Customer Service executive roles in Nigeria</h2>

                        <ol style="font-size:16px;">
                            <li><b>1. </b>MTN Nigeria</li>
                            <li><b>2. </b>Airtel Nigeria</li>
                            <li><b>3. </b>Guaranty Trust Bank (GTBank)</li>
                            <li><b>4. </b>Dangote Group</li>
                            <li><b>5. </b>Zenith Bank</li>
                            <li><b>6. </b>Access Bank</li>
                            <li><b>7. </b>United Bank for Africa (UBA)</li>
                            <li><b>8. </b>First Bank of Nigeria</li>
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
</html>
