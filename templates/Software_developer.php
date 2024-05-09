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
						<li>Software developer</li>
					</ul>
					<h1 class="white-text">Software Developer</h1>
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
				<!-- Main Blog -->
				<div id="main" class="col-md-9">
					<!-- Blog Post -->
					<div class="blog-post" style="text-align:justify;">
						<h2>Job Description</h2>
						<!-- Row -->
						<div class="row">
							<p style="font-size:16px;">Software Developers design, develop, and test software and applications for computers. Their main duties include directing and participating in programming activities, monitoring and evaluating system performance, and designing and implementing new programs and features.</p>

							<p style="font-size:16px;">A Java, C#, .Net, C, Sybase, and Oracle Software Developer is generally responsible for the development, design, and implementation of new or modified software products or ongoing business projects. They typically work within the IT team of a business and collaborate with Business Analysts and Development Managers to ensure software projects meet requirements.</p>

							<p style="font-size:16px;">Duties of a Software Developer primarily revolve around building software by writing code, modifying software to fix errors or improve performance, and directing system testing and validation procedures. They also work with customers or departments on technical issues, including software system design and maintenance.</p>
						</div>
						<!-- /Row -->

						<!-- Row -->
						<div class="row">
							<h2>Skills Required</h2>
							<p style="font-size:16px;">To be successful in this role, extensive knowledge of programming languages and the software development life cycle is necessary.</p>

							<ol style="font-size:16px;">
								<li><b>1. </b>Ability to develop unit testing of code components or complete applications.</li>
								<li><b>2. </b>Full-stack development and understanding of software engineering concepts.</li>
								<li><b>3. </b>Experience working on a variety of software development projects.</li>
								<li><b>4. </b>Deep programming language knowledge.</li>
								<li><b>5. </b>Knowledge of the software development life cycle.</li>
								<li><b>6. </b>Experience developing software utilizing various coding languages including Java, C++, PHP, and more.</li>
								<li><b>7. </b>Analyze code for weaknesses and errors and present detailed plans to improve them.</li>
								<li><b>8. </b>Outstanding collaboration and communication skills are essential.</li>
							</ol>
						</div>
						<!-- /Row -->

						<!-- Row -->
						<div class="row">
							<h2>Educational Requirements</h2>
							<p style="font-size:16px;">A degree and technical background are typically required to gain a Software Developer role. Degrees in Computer Science, Computer Software Engineering, Software Programming and Development, or Engineering are particularly advantageous.</p>
						</div>
						<!-- /Row -->

						<!-- Row -->
						<div class="row">
							<h2>Duties and Responsibilities</h2>
							<ol style="font-size:16px;">
								<li><b>1. </b>Directing system testing and validation procedures.</li>
								<li><b>2. </b>Maintaining software professionally and creating updates regularly to address customer and company concerns.</li>
								<li><b>3. </b>Working with customers or departments on technical issues including software system design and maintenance.</li>
								<li><b>4. </b>Designing and developing software systems using scientific analysis and mathematical models.</li>
								<li><b>5. </b>Directing software programming and documentation development.</li>
								<li><b>6. </b>Consulting with departments or customers on project status and proposals.</li>
								<li><b>7. </b>Consulting with engineering staff to evaluate software hardware interfaces and develop specifications and performance requirements.</li>
								<li><b>8. </b>Preparing reports on programming project specifications, activities, or status.</li>
							</ol>
						</div>
						<!-- /Row -->

						<!-- Row -->
						<div class="row">
							<h2>Salary</h2>
							<p style="font-size:16px;">The average salary for a Software Developer in Nigeria ranges from NGN 3,000,000 to NGN 7,000,000 per year, depending on experience, skills, and the employing company.</p>
						</div>
						<!-- /Row -->

						<!-- Row -->
						<div class="row">
							<h2>Companies Offering Software Developer Roles</h2>
							<ol style="font-size:16px;">
								<li><b>1. </b>Interswitch Group</li>
								<li><b>2. </b>Andela</li>
								<li><b>3. </b>Flutterwave</li>
								<li><b>4. </b>Paga</li>
								<li><b>5. </b>Softcom</li>
								<li><b>6. </b>SystemSpecs</li>
								<li><b>7. </b>Swifta Systems and Services</li>
							</ol>
						</div>
						<!-- /Row -->
					</div>
					<!-- /Blog Post -->
				</div>
				<!-- /Main Blog -->
			</div>
			<!-- /Row -->
		</div>
		<!-- /Container -->
	</div>
	<!-- /Blog -->

	<?php include 'footer.php'; ?>
</body>
</html>
