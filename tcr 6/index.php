<?php
 include('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- CSS LINK  -->
        <link rel="stylesheet" href="style.css" />

        <!-- bootstrap -->
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

        <!--  font awesome link -->
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
            integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />

        <title>TRC ONLINE WEBSITE</title>
    </head>

    <body>
        <!-- nav bar section start here -->
        <section id="navbar">
            <nav class="navbar">
                <div class="logo">
                    <img src="images/logo1.png" alt="" />
                </div>
                <div class="container-buttons">
                    <a href="signUp.php" class="button">Signup</a>
                    <a href="register.php" class="button">Register</a>
                </div>
            </nav>
        </section>

        <section class="banner-row banner-row-white">
            <img class="banner-img" src="images/banner1.png" alt="" srcset="" />
            <div class="banner-text">
                <h1 class="main-title">ADMISSIONS OPEN</h1>
                <p>
                    Join Us Today!<br />
                    Don't miss this chance to embark on a fulfilling academic
                    journey at ED-360 We invite you to join our welcoming
                    community of learners and innovators. Start your application
                    today and let your aspirations take flight. we pride
                    ourselves on providing an exceptional education that fosters
                    critical thinking, creativity, and innovation. Our dedicated
                    faculty and state-of-the-art facilities ensure that students
                    receive a top-tier learning experience.
                    <span class="padding-line"
                        >“Let's make great things happen together!”</span
                    >
                </p>
            </div>
        </section>

        <section class="banner-row banner-row-blue">
            <div class="banner-text">
                <h1 class="main-title">WHY CHOOSE US</h1>

                <p>
                    At ED-360, we take pride in offering top-notch online
                    classes for O/A Levels, ensuring a seamless and enriching
                    learning experience for students across the globe. Choosing
                    us means embarking on a transformative journey towards
                    academic excellence and personal growth. Here's why we stand
                    out from the rest:
                    <br />Expert Faculty | Comprehensive Curriculum |
                    Interactive Learning Environment | Flexible Learning
                </p>
            </div>

            <img src="images/11.png" alt="" class="banner-img-1" />
        </section>

        <section class="banner-row banner-row-blue">
            <img
                src="images/22.png"
                alt=""
                class="banner-img"
                style="width: 200px"
            />
            <div class="banner-text">
                <h1 class="main-title">WE ARE OFFERING</h1>
                <p>
                    Welcome to
                    <span class="color-yellow">ED-360 </span>, where education
                    meets innovation. We are delighted to introduce our
                    comprehensive and dynamic
                    <span class="color-yellow">
                        O/A Levels Online Classes
                    </span>
                    , designed to empower students with the knowledge, skills,
                    and confidence to excel in their academic pursuits and
                    beyond. With cutting-edge technology and experienced
                    educators, ED-360 offers an unparalleled virtual learning
                    experience.
                </p>
            </div>
        </section>

        <!-- our team starts here -->
        <section>
            <div class="row">
                <h1>Our Team</h1>
            </div>
            <div class="row">
                <!-- Column 1-->
                <div class="column">
                    <div class="card">
                        <div class="img-container">
                            <img src="images/ss.png" />
                        </div>
                        <h3>Saeed Surti</h3>
                        <p>Business Studies</p>
                        <h5>
                            <b
                                >"Saeed surti teaches business studies to O and
                                A levels for past seven years. There is no
                                replacement of hardwork and consistency.<br />
                                If you follow the discipline things will fall
                                right."</b
                            >
                        </h5>
                        <div class="icons">
                            <a
                                href="https://api.whatsapp.com/send?phone=%2B923212459926&text=Hello%2C%20I%27m%20interested%20in%20your%20products"
                            >
                                <i class="fab fa-whatsapp"></i>
                            </a>
                            <a
                                href="https://instagram.com/saeedsurti?igshid=NTc4MTIwNjQ2YQ=="
                            >
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a
                                href="https://www.facebook.com/saeed90.ahmed?mibextid=ZbWKwL"
                            >
                                <i class="fab fa-facebook"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Column 2-->
                <div class="column">
                    <div class="card">
                        <div class="img-container">
                            <img src="images/ja.png" />
                        </div>
                        <h3>Jameel Ansari</h3>
                        <p>Urdu</p>
                        <h5>
                            <b
                                >"Jameel Ansari teaches Urdu language &
                                literature to O and A levels for past 14 years.
                                We need a better words to express our thoughts
                                beyond.<br />
                                We are surrounded by content and language!"</b
                            >
                        </h5>
                        <div class="icons">
                            <a
                                href="https://api.whatsapp.com/send?phone=%2B923352335730&text=Hello%2C%20I%27m%20interested%20in%20your%20products"
                            >
                                <i class="fab fa-whatsapp"></i>
                            </a>
                            <a
                                href="https://instagram.com/jameelansari089?igshid=NTc4MTIwNjQ2YQ=="
                            >
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a
                                href="https://www.facebook.com/ansari.sahab1989?mibextid=ZbWKwL"
                            >
                                <i class="fab fa-facebook"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Column 3-->
                <div class="column">
                    <div class="card">
                        <div class="img-container">
                            <img src="images/gh.png" />
                        </div>
                        <h3>Ghazi Hassan</h3>
                        <p>Chemistry</p>
                        <h5>
                            <b
                                >Sir Ghazi Hassan - a well known teacher for
                                Chemistry. He is teaching from past 10 years.</b
                            >
                        </h5>
                        <div class="icons">
                            <a
                                href="https://api.whatsapp.com/send?phone=%2B923363338360&text=Hello%2C%20I%27m%20interested%20in%20your%20products"
                            >
                                <i class="fab fa-whatsapp"></i>
                            </a>
                            <a
                                href="https://instagram.com/ghazi_hassan007?igshid=NTc4MTIwNjQ2YQ=="
                            >
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a
                                href="https://www.facebook.com/ghazi.hasan.18?mibextid=ZbWKwL"
                            >
                                <i class="fab fa-facebook"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- <section class="section__team">
            <h1 class="main-title">Our Team</h1>
            <div class="card-container">
                <div class="card">
                    <img src="" alt="" />
                    <h2>Saeed Surti</h2>
                    <h3>BUSINESS STUDIES</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Voluptas ad consequatur voluptate temporibus cumque est
                        voluptatem consequuntur ducimus accusamus quo.
                    </p>
                    <div class="card_social">
                        <span class="card_social_icon"
                            ><img src="" alt=""
                        /></span>
                    </div>
                </div>
                <div class="card">
                    <img src="" alt="" />
                    <h2>Jameel Ansari</h2>
                    <h3>URDU</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Voluptas ad consequatur voluptate temporibus cumque est
                        voluptatem consequuntur ducimus accusamus quo.
                    </p>
                    <div class="card_social">
                        <span class="card_social_icon"
                            ><img src="" alt=""
                        /></span>
                    </div>
                </div>
                <div class="card">
                    <img src="" alt="" />
                    <h2>Ghazi Hasan</h2>
                    <h3>Chemistry</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Voluptas ad consequatur voluptate temporibus cumque est
                        voluptatem consequuntur ducimus accusamus quo.
                    </p>
                    <div class="card_social">
                        <span class="card_social_icon"
                            ><img src="" alt=""
                        /></span>
                    </div>
                </div>
            </div>
        </section>
        <div>
            <div class="collapsible">
                <div class="collapsible-header">
					<h1 class="collapsible-title">Test 123</h1>
					<span class="collapsible-handle">></span>
				</div>
                <div class="collapsible-content">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Blanditiis, tempora ipsum odit reiciendis vitae fugit
                        accusamus optio facilis enim iure.
                    </p>
                </div>
            </div>
			<br>
			<br>
			<br>
			<br>
		<style>
			.collapsible-header {
				display: flex;
			}
			.collapsible-content {
				max-height: 100vh;
				overflow: hidden;
			}
			.collapsible-content.collapsible-content--collapsed {
				max-height: 0;
			}
		</style>
		<script>
			const collapsibles = document.querySelectorAll(".collapsible-header");
			for (let i = 0; i < collapsibles.length; i++) {
				const element = collapsibles[i];
				element.addEventListener("click", function () {
					this.parentElement.querySelector(".collapsible-content").classList.toggle("collapsible-content--collapsed")
				})
				
			}
		</script> -->
    </body>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"
    ></script>
</html>
