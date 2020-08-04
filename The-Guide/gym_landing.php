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



$sql_pg = "SELECT gym_name FROM $table_name WHERE gym_name = 'PureGym'";

$sql_tg = "SELECT gym_name FROM $table_name WHERE gym_name = 'The Gym'";

$sql_tc = "SELECT gym_name FROM $table_name WHERE gym_name = 'Train CrossFit'";

$sql_p1 = "SELECT gym_name FROM $table_name WHERE gym_name = 'P1 Fitness Studio'";

$sql_fo = "SELECT gym_name FROM $table_name WHERE gym_name = 'FORM'";

$sql_gj = "SELECT gym_name FROM $table_name WHERE gym_name = 'Gym & Juice'";

$sql_prg = "SELECT gym_name FROM $table_name WHERE gym_name = 'Proper Gym'";

$sql_ff = "SELECT gym_name FROM $table_name WHERE gym_name = 'Fight Factory'";



$result_pg = mysqli_query($conn, $sql_pg);

$result_tg = mysqli_query($conn, $sql_tg);

$result_tc = mysqli_query($conn, $sql_tc);

$result_p1 = mysqli_query($conn, $sql_p1);

$result_fo = mysqli_query($conn, $sql_fo);

$result_gj = mysqli_query($conn, $sql_gj);

$result_prg = mysqli_query($conn, $sql_prg);

$result_ff = mysqli_query($conn, $sql_ff);

?>

<!DOCTYPE HTML>

<!--

	Bee Healthy by Group C

-->

<html lang="en">

	<head>

		<title>Bee Healthy - Gym</title>

		<meta charset="utf-8" />

		<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="description" content="List of different types of highly rated in gyms in Manchester.">

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



			<!-- Banner -->

				<section id="banner" class="banner-gym" aria-label="Person using gym facilities">

					<header>

						<h2>Workout Plans: <em>Get some tips on how to get the best out of your workout</em></h2>

						<a href="blog_page1.html" class="button">Read More</a>

					</header>

				</section>



			<!-- Posts -->

<section class="wrapper style2">
            <div class="container">
                <header class="major">
                    <h2>Gyms</h2>
                    <br>
                </header>
            </div>
        </section>

				<section class="wrapper style1">
            <div class="container">
                <div class="row-gym">
                    								

                            <section class="col-6 col-12-narrower">

								<div class="box post">

									<a href="puregym.php" class="image left"><img src="images/puregym.JPG" alt="Pure Gym" /></a>

									<div class="inner">

										<h3><?php while($row_pg = mysqli_fetch_assoc($result_pg)) { echo $row_pg['gym_name']; } ?></h3>

										<p>The perfect modernised gym for those who like to gym at the most extreme times. This gym to perfect for many different reasons for going to the gym. Fitted with the latest technology and open 24 hours for those who prefer the gym when nobody is around.</p>

                                        <div class="read_more">

                                         <a href="puregym.php"> Find Out More</a>

                                          </div>

									</div>

								</div>

							</section>

							<section class="col-6 col-12-narrower">

								<div class="box post">

									<a href="thegym.php" class="image left"><img src="images/thegym.JPG" alt="The Gym" /></a>

									<div class="inner">

										<h3><?php while($row_tg = mysqli_fetch_assoc($result_tg)) { echo $row_tg['gym_name']; } ?></h3>

										<p>The classic gym for those who like to gym at the most extreme times. This gym to perfect for many different reasons for going to the gym, and open 24 hours for those who prefer the gym when nobody is around.</p>

                                        <div class="read_more">

                                         <a href="thegym.php"> Find Out More</a>

                                          </div>

									</div>

								</div>

							</section>

						</div>

						<div class="row-gym">

							<section class="col-6 col-12-narrower">

								<div class="box post">

									<a href="traincrossfit.php" class="image left"><img src="images/traincrossfit.JPG" alt="Traincross Fitness gym" /></a>

									<div class="inner">

										<h3><?php while($row_tc = mysqli_fetch_assoc($result_tc)) { echo $row_tc['gym_name']; } ?></h3>

										<p>Love cross bikes? Then this is the gym for you. Fitted with the latest technology for cross fit, with multiple types of classes to suit beginners through to avid cyclists.</p>

                                        <div class="read_more">

                                         <a href="traincrossfit.php"> Find Out More</a>

                                          </div>

									</div>

								</div>

							</section>

							<section class="col-6 col-12-narrower">

								<div class="box post">

									<a href="p1fitness.php" class="image left"><img src="images/p1fitness.JPG" alt="P1 Fitness gym" /></a>

									<div class="inner">

										<h3><?php while($row_p1 = mysqli_fetch_assoc($result_p1)) { echo $row_p1['gym_name']; } ?></h3>

										<p>From boot camps to 1 on 1 PT. P1 ensures you are coached into your ideal self no matter what. Need guidance, support and motivation, this is your best option!</p>

                                        <div class="read_more">

                                         <a href="p1fitness.php"> Find Out More</a>

                                          </div>

									</div>

								</div>

							</section>

						</div>

                        <div class="row-gym">

							<section class="col-6 col-12-narrower">

								<div class="box post">

									<a href="form.php" class="image left"><img src="images/form.JPG" alt="Form gym" /></a>

									<div class="inner">

										<h3><?php while($row_fo = mysqli_fetch_assoc($result_fo)) { echo $row_fo['gym_name']; } ?></h3>

										<p>Groups, 1 on 1 and online, FORM has it all. With a wide array of equipment, this location ensures you have the motivation you need no matter where you are or what you are doing.</p>

                                        <div class="read_more">

                                         <a href="form.php"> Find Out More</a>

                                          </div>

									</div>

								</div>

							</section>

							<section class="col-6 col-12-narrower" style="
    width: 1400px">

								<div class="box post">

									<a href="gymjuice.php" class="image left"><img src="images/gymjuice.JPG" alt="Gym and Juice" /></a>

									<div class="inner">

										<h3><?php while($row_gj = mysqli_fetch_assoc($result_gj)) { echo $row_gj['gym_name']; } ?></h3>

										<p> Like the social side of keeping fit? Then this is place for you.</p>

                                        <div class="read_more">

                                         <a href="gymjuice.php"> Find Out More</a>

                                          </div>

									</div>

								</div>

							</section>

						</div>

                        <div class="row-gym">

							<section class="col-6 col-12-narrower" style="
    width: 1400px">

								<div class="box post">

									<a href="propergym.php" class="image left"><img src="images/propergym.JPG" alt="Proper Gym" /></a>

									<div class="inner">

										<h3><?php while($row_prg = mysqli_fetch_assoc($result_prg)) { echo $row_prg['gym_name']; } ?></h3>

										<p>Like luxury? then this is the location for you. With everything you could want from a gym and more..</p>

                                        <div class="read_more">

                                         <a href="propergym.php"> Find Out More</a>

                                          </div>

									</div>

								</div>

							</section>

							<section class="col-6 col-12-narrower">

								<div class="box post">

									<a href="fightfactory.php" class="image left"><img src="images/fightfactory.JPG" alt="Fight Factory" /></a>

									<div class="inner">

										<h3><?php while($row_ff = mysqli_fetch_assoc($result_ff)) { echo $row_ff['gym_name']; } ?></h3>

										<p>Need to let off some steam? Whether your new or experienced in boxing, fight factory is the right place for you. From 1 on 1, to basics classes and bespoke fitness programs to get you in shape or ready for fight night. If you are boxer or want to take up boxing then this is the place for you.</p>

                                        <div class="read_more">

                                         <a href="fightfactory.php"> Find Out More</a>

                                          </div>

									</div>

								</div>

							</section>

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
                        <li>&copy; Group C. All rights reserved</li>
                        <li>Design: <a href="#">Group C</a></li>

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
                            <li>&copy; Group C. All rights reserved</li>
                            <li>Design: <a href="#">Group C</a></li>
                        </ul>
                    </div>
                </div>
            </section>




        </footer>

		</div>

	</body>

</html>