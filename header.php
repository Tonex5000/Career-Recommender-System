<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CareerSage.ng</title>
    <style>
        /* Header Styles */
        header {
            background-color: #6F49AE;
            color: #fff;
            padding: 10px 0;
        }

        header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        header .logo a {
            color: #fff;
            text-decoration: none;
            font-size: 24px;
        }

        header nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        header nav ul li {
            margin-right: 20px;
        }

        header nav ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <!-- Logo -->
                <div>
                    <a href="main.php">CareerSage.ng</a>
                </div>
                <!-- /Logo -->
            </div>
            <nav>
                <ul>
                    <li><a href="main.php">Home</a></li>
                    <li><a href="courses.php">Online Courses</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="login.php">Logout</a></li>
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </header><!-- #header -->
</body>
</html>
