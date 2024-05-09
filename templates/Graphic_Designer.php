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
                        <!-- <li><a href="main.php">Home</a></li> -->
                        <li><a href="blog.php">Knowledge Network</a></li>
                        <li>Graphic Designer</li>
                    </ul>
                    <h1 class="white-text">Graphic Designer</h1>
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
                        <p style="font-size:16px;">Graphic Designers are creative professionals who use various visual elements to communicate ideas, messages, and concepts. They design graphics for use in various media such as advertisements, websites, and print publications.</p>
                        <p style="font-size:16px;">Graphic Designers create visual concepts using computer software or by hand, to communicate ideas that inspire, inform, and captivate consumers. They develop the overall layout and production design for advertisements, brochures, magazines, and corporate reports.</p>
                    </div>
                    <!-- /row -->

                    <!-- row -->
                    <div class="row">
                        <h2>Skills Required</h2>
                        <p style="font-size:16px;">To succeed as a Graphic Designer, the following skills are essential:</p>
                        <ol style="font-size:16px;">
                            <li><b>1.</b> Proficiency in graphic design software like Adobe Creative Suite (Photoshop, Illustrator, InDesign).</li>
                            <li><b>2.</b> Creativity and artistic ability to create visually appealing designs.</li>
                            <li><b>3.</b> Understanding of design principles, typography, and color theory.</li>
                            <li><b>4.</b> Ability to work on multiple projects simultaneously and meet deadlines.</li>
                            <li><b>5.</b> Strong communication and collaboration skills to work with clients and team members.</li>
                            <li><b>6.</b> Attention to detail and accuracy in design work.</li>
                        </ol>
                    </div>
                    <!-- /row -->

                    <!-- row -->
                    <div class="row">
                        <h2>Educational Requirements</h2>
                        <p style="font-size:16px;">A degree in graphic design or a related field is typically required for a Graphic Designer role. Employers may also consider candidates with a strong portfolio of design work demonstrating their skills and creativity.</p>
                    </div>
                    <!-- /row -->

                    <!-- row -->
                    <div class="row">
                        <h2>Duties and Responsibilities</h2>
                        <p style="font-size:16px;">Graphic Designers perform various tasks including:</p>
                        <ol style="font-size:16px;">
                            <li><b>1.</b> Creating visual concepts using computer software or by hand.</li>
                            <li><b>2.</b> Designing layouts for advertisements, brochures, websites, and other media.</li>
                            <li><b>3.</b> Collaborating with clients or art directors to understand their needs and preferences.</li>
                            <li><b>4.</b> Selecting colors, images, and typography to create visually appealing designs.</li>
                            <li><b>5.</b> Presenting design concepts to clients and making revisions based on feedback.</li>
                            <li><b>6.</b> Ensuring final designs are visually appealing, on-brand, and meet quality standards.</li>
                        </ol>
                    </div>
                    <!-- /row -->

                    <!-- row -->
                    <div class="row">
                        <h2>Salary</h2>
                        <p style="font-size:16px;">In Nigeria, Graphic Designers can expect an average salary ranging from NGN 500,000 to NGN 2,000,000 per year, depending on experience, skills, and location.</p>
                    </div>
                    <!-- /row -->

                    <!-- row -->
                    <div class="row">
                        <h2>Companies Hiring Graphic Designers</h2>
                        <ol style="font-size:16px;">
                            <li><b>1.</b> GTBank</li>
                            <li><b>2.</b> PwC Nigeria</li>
                            <li><b>3.</b> Andela</li>
                            <li><b>4.</b> Flutterwave</li>
                            <li><b>5.</b> Interswitch</li>
                            <li><b>6.</b> Access Bank</li>
                            <li><b>7.</b> Jumia Group</li>
                            <li><b>8.</b> Konga</li>
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
