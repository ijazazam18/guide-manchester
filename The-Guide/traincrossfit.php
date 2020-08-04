<?php

// This code must go at the top of each page that uses database content

// your connection information goes here

$server_name = "80.82.117.62"; // the IP address, which is the third item in the 34sp phpMyAdmin login form
$user_name = "groups"; // the username you specified when you created the database
$password = "root"; // the password you specified when you created the database
$db_name = "guide_table"; // the database name you specified when you created the database
$table_name ="schema_excel2"; // the table name you specified when you created the SQL in SQLizer

// Create connection
$conn = mysqli_connect($server_name, $user_name, $password, $db_name);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// To get all the information from the database

$sql = "SELECT * FROM $table_name WHERE gym_name = 'Train CrossFit';";

$result = mysqli_query($conn, $sql);

 while($row = mysqli_fetch_assoc($result)) {
     $name = $row['gym_name'];
     $location = $row['gym_location'];
     $price = $row['gym_price'];
     $rating = $row['gym_rating'];
     $hours = $row['gym_hours'];
     $hours = str_replace('|', ' - ', $hours);
     $hours = str_replace('/', '<br>', $hours);
     $facilities = $row['gym_facilities'];
     $facilities = str_replace('/', '<br>', $facilities);
     $website = $row['gym_website'];
     $number = $row['gym_number'];
     $email = $row['gym_email'];
 }

?>
<!DOCTYPE HTML>
<!--
	Bee Healthy by Ijaz Azam
-->
<html lang="en">
	<head>
		<title>Bee Healthy - Train Crossfit</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="description" content="Details about Train Crossfit in Manchester.">
		<link rel="stylesheet" href="css/main.css" />
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
	</head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">
					<!-- Logo -->
                    <a href="index.html" ><img class="logo" id="logo" src="images/logo.png"  alt="logo"></a>
                    <h1><a href="index.html" >Bee Healthy</a></h1>
					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="gym_landing.php">Gym</a></li>
                                <li><a href="nutrition_landing.html">Nutrition</a></li>
								<li><a href="fitness_landing.html">Fitness</a></li>
								<li><a href="blog_landing.html">Blog</a></li>
							</ul>
						</nav>
				</div>

			<!-- Posts -->
            
                <section id="banner" class="banner-about" aria-label="People training at a gym"></section>
            
				<section class="content-column">
					<div class="content-column__content">
                        <div class="box highlight">
										<h3><?php echo $name ?></h3>
                                        <p><?php echo $location ?></p><br>

<p>The monthly subscription amounts to <strong>£<?php echo $price ?></strong></p><br>
                            
<p>The overall gym rating is <strong><?php echo $rating ?>/5</strong></p><br>
                            
<p>The gyms opening times are as follows:<?php echo $hours ?></p><br>
                            
<p>The gyms facilites include and are not limited to:</p>
    <?php echo $facilities ?>
<br>

<p>The gyms contact information:</p>
<ul>
    <li><strong>Website:</strong> <?php echo $website ?></li>
    <li><strong>Email:</strong> <?php echo $email ?></li>
</ul><br>
                            
                            <div class="read_more">
                                         <a href="gym_landing.php"> Back to Gyms</a>
                              </div>
									</div>
								</div>
							</section>

			<!-- Footer -->
				<footer>

            <div id="footer">
                <div class="content-column-footer">
                    <div class="content-column__content-footer">


                        <table>
                            <tr>
                                <th>Contact</th>
                                <th>More Links</th>
                                <th>Social Media</th>


                            </tr>

                            <tr>
                                <td><a href="mailto:contact@beehealthy.com">contact@beehealthy.com</a>
                                </td>
                                <td><a href="gym_landing.php">Gym</a></td>
                                <td><a href="http://twitter.com/beehealthy" class="icon brands fa-twitter"><span class="label">Twitter</span></a></td>
                            </tr>

                            <tr>
                                <td>
                                </td>
                                <td><a href="nutrition_landing.html">Nutrition</a></td>
                                <td><a href="http://facebook.com/behealthy" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></td>
                            </tr>

                            <tr>
                                <td>
                                </td>
                                <td><a href="fitness_landing.html">Fitness</a></td>
                                <td><a href="http://instagram.com/beehealthy" class="icon brands fa-instagram-f"><span class="label">Instagram</span></a></td>
                            </tr>

                            <tr>
                                <td>
                                </td>
                                <td><a href="blog_landing.html">Blog</a></td>
                                <td><a href="http://youtube.com/behealthy" class="icon brands fa-youtube-f"><span class="label">Youtube</span></a></td>
                            </tr>

                            <tr>
                                <td>
                                </td>

                                <td><a href="about_us.html">About Us</a></td>
                                <td>
                                </td>
                            </tr>



                            <tr>
                                <td>
                                </td>
                                <td><a href="contact_us.html">Contact Us</a></td>
                                <td>
                                </td>
                            </tr>



                        </table>
                    </div>
                </div>


                <div class="copyright">
                    <ul class="menu">

                        <li><img src="images/logo.png" alt="logo" style="width: 30px"></li>
                        <li>&copy; Ijaz Azam. All rights reserved</li>
                        <li>Design: <a href="#">Ijaz Azam</a></li>

                    </ul>
                </div>

            </div>



            <section class="content-column-mobile">
                <div class="content-column__content-mobile">
                    <h3>More Links</h3>
                    <ul class="links">
                        <li><a href="gym_landing.php">Gym</a></li>
                        <li><a href="nutrition_landing.html">Nutrition</a></li>
                        <li><a href="fitness_landing.html">Fitness</a></li>
                        <li><a href="blog_landing.html">Blog</a></li>
                        <li><a href="about_us.html">About Us</a></li>
                        <li><a href="contact_us.html">Contact Us</a></li>
                    </ul>
                    <br>
                    <ul class="icons">
                        <li><a href="http://twitter.com/beehealthy" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                        <li><a href="http://facebook.com/behealthy" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                        <li><a href="http://instagram.com/beehealthy" class="icon brands fa-instagram-f"><span class="label">Instagram</span></a></li>
                        <li><a href="http://youtube.com/behealthy" class="icon brands fa-youtube-f"><span class="label">Youtube</span></a></li>
                    </ul>
                    <br>

                    <div class="copyright">
                        <ul class="menu">
                            <li><img src="images/logo.png" alt="logo" style="width: 30px"></li>
                            <li>&copy; Ijaz Azam. All rights reserved</li>
                            <li>Design: <a href="#">Ijaz Azam</a></li>
                        </ul>
                    </div>
                </div>
            </section>




        </footer>
		</div>
	</body>
</html>