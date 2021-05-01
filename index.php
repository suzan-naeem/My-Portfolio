<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $user       = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    $mail       = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $phone      = filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);
    $msg        = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

    $formError = array();

    if (strlen($user) < '3') {

        $formError[] = 'Your Name Is Not Correct';
    }

    if (strlen($mail) == '') {

        $formError[] = 'Do Not Leave This Field Blank';
    }

    if (strlen($phone) < 10) {

        $formError[] = 'Type The Correct Phone Number';
    }

    if (strlen($msg) < 100) {

        $formError[] = 'Write The Letter With More Clarification';
    }

    $myEmail    = 'suzannaim7@gmail.com';

    if (empty($formError)) {

        mail($myEmail, $mail, $phone, $msg);

        $user   = '';
        $mail   = '';
        $phone  = '';
        $msg    = '';

        $success  = '<div class="alert alert-success">We Received The Message Successfully</div>';
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" />
    <title>Eng: Suzan Naeem</title>
    <link rel="shortcut icon" href="img/am.png" />
    <link rel="stylesheet" href="css/all.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/media.css" />
    <link rel="stylesheet" href="css/animate.css" />
</head>

<body>
    <!-- Start Main -->
    <div id="home" class="main text-center">
        <div class="container">
            <img src="img/am.png" alt="MyImage" class="rounded-circle" />
        </div>
    </div>
    <!-- End Main -->
    <!-- Start Header -->
    <div class="header">
        <div class="overlay"></div>
        <div class="container">
            <div class="info text-center animate__animated animate__backInLeft">
                <h4>Hi There! <i class="fas fa-handshake fa-fw"></i></h4>
                <h2>I'm <span>Suzan_Naeem</span></h2>
                <p>Full-Stack Developer</p>
                <ul class="list-unstyled social">
                    <li>
                        <a href="https://www.linkedin.com/in/suzan-naeem-23192b141/" target="_blank" title="linkedin">
                            <i class="fab fa-linkedin fa-fw"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://github.com/suzan-naeem" target="_blank" title="github">
                            <i class="fab fa-github fa-fw"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://wa.me/0201022711703" target="_blank" title="WhatsApp">
                            <i class="fab fa-whatsapp fa-fw"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Start Navbar -->
            <div class="navbar">
                <div class="container">
                    <div class="icon">
                        <i class="fas fa-bars fa-fw"></i>
                    </div>
                    <ul class="list-unstyled links">
                        <li><a href="#" class="active" data-section="home"><i class="fas fa-home fa-fw"></i>Home</a>
                        </li>
                        <li><a href="#" data-section="about"><i class="fas fa-address-card fa-fw"></i>About</a></li>
                        <li><a href="#" data-section="skills"><i class="fas fa-cog fa-fw"></i>Skills</a></li>
                        <li><a href="#" data-section="servcies"><i class="fab fa-servicestack fa-fw"></i>Servcies</a>
                        </li>
                        <li><a href="#" data-section="works"><i class="fas fa-laptop-code fa-fw"></i>Works</a></li>
                        <li><a href="#" data-section="contact"><i class="fas fa-envelope-open-text fa-fw"></i>Contact</a></li>
                        <span class="fas fa-times fa-fw"></span>
                    </ul>
                </div>
            </div>
            <!-- End Navbar -->
        </div>
    </div>
    <!-- End Header -->
    <!-- Start About -->
    <div id="about" class="about text-center">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                    <div class="img animate__animated animate__backInLeft">
                        <img src="img/about.png" />
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                    <div class="info animate__animated animate__backInRight">
                        <span>My Intro</span>
                        <h1>About Me</h1>
                        <p>I am a developer and web designer with very strong problem solving skills and proven
                            experience in creating a very good web application design using the 2021 method and dealing
                            with databases.</p>
                        <ul class="list-unstyled cv text-left">
                            <li><span>Name:</span>Suzan Mohamed Naeem</li>
                            <li><span>Birthday:</span>December 27,1996</li>
                            <li><span>Address:</span>Alexandria</li>
                            <li><span>Email:</span>suzannaim7@gmail.com</li>
                            <li><span>Phone:</span>(+2)01022711703</li>
                        </ul>
                        <a href="cv/">Download Cv</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->
    <!-- Start Skills -->
    <div id="skills" class="skills">
        <div class="container">
            <div class="info text-center animate__animated animate__backInUp">
                <h1>My Skills</h1>
                <p>These skills used in my country are more commonly used.</p>
            </div>
            <div class="boxs-skills">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="box animate__animated animate__backInLeft">
                            <label><i class="fab fa-html5"></i> Html</label>
                            <span>99%</span>
                            <div class="progress">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 99%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="box animate__animated animate__backInRight">
                            <label><i class="fas fa-dog"></i> Pug</label>
                            <span>80%</span>
                            <div class="progress">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="box animate__animated animate__backInRight">
                            <label><i class="fab fa-wordpress"></i> WordPress</label>
                            <span>80%</span>
                            <div class="progress">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="box animate__animated animate__backInRight">
                            <label><i class="fab fa-gulp"></i> Gulpjs</label>
                            <span>70%</span>
                            <div class="progress">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="box animate__animated animate__backInLeft">
                            <label><i class="fab fa-css3-alt"></i> Css</label>
                            <span>99%</span>
                            <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 99%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="box animate__animated animate__backInRight">
                            <label><i class="fab fa-sass"></i> Sass</label>
                            <span>80%</span>
                            <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="box animate__animated animate__backInLeft">
                            <label><i class="fab fa-bootstrap"></i> Bootstrap</label>
                            <span>99%</span>
                            <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 99%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="box animate__animated animate__backInLeft">
                            <label><i class="fab fa-php"></i> Php</label>
                            <span>99%</span>
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 99%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="box animate__animated animate__backInRight">
                            <label><i class="fab fa-laravel"></i> Laravel</label>
                            <span>80%</span>
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 80%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="box animate__animated animate__backInLeft">
                            <label><i class="fab fa-node"></i> Javascript</label>
                            <span>99%</span>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 99%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="box animate__animated animate__backInRight">
                            <label><i class="fab fa-react"></i> React</label>
                            <span>90%</span>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="box animate__animated animate__backInRight">
                            <label><i class="fab fa-angular"></i> Angular</label>
                            <span>90%</span>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="box animate__animated animate__backInRight">
                            <label><i class="fab fa-node"></i> Nodejs</label>
                            <span>70%</span>
                            <div class="progress">
                                <div class="progress-bar bg-secondary" role="progressbar" style="width: 70%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="box animate__animated animate__backInRight">
                            <label><i class="fab fa-express"></i> expressjs</label>
                            <span>70%</span>
                            <div class="progress">
                                <div class="progress-bar bg-secondary" role="progressbar" style="width: 70%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="box animate__animated animate__backInRight">
                            <label><i class="fas fa-database"></i> MySQL</label>
                            <span>99%</span>
                            <div class="progress">
                                <div class="progress-bar bg-pm" role="progressbar" style="width: 99%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="box animate__animated animate__backInRight">
                            <label><i class="fas fa-database"></i> Mongodb</label>
                            <span>70%</span>
                            <div class="progress">
                                <div class="progress-bar bg-pm" role="progressbar" style="width: 70%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Skills -->
    <!-- Start Servcies -->
    <div id="servcies" class="servcies text-center">
        <div class="container">
            <div class="info animate__animated animate__backInUp">
                <h1>My Servcies</h1>
                <p>I'm doing terrible services to my clients.</p>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="box animate__animated animate__backInLeft">
                        <i class="fas fa-paint-brush"></i>
                        <h3>Web Design</h3>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="box animate__animated animate__backInUp">
                        <i class="fas fa-magic"></i>
                        <h3>Web Development</h3>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="box animate__animated animate__backInRight">
                        <i class="fas fa-draw-polygon"></i>
                        <h3>Web Application</h3>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="box animate__animated animate__backInLeft">
                        <span>25</span>
                        <h3>Happy Client</h3>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="box animate__animated animate__backInUp">
                        <span>1</span>
                        <h3>Sad Client</h3>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="box animate__animated animate__backInRight">
                        <span>45</span>
                        <h3>All Works</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Servcies -->
    <!-- Start Works -->
    <div id="works" class="works">
        <div class="container">
            <div class="info text-center animate__animated animate__backInUp">
                <h1>My Works</h1>
                <p>A bunch of my side projects.</p>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="box animate__animated animate__backInLeft">
                        <h4>Burger Bun</h4>
                        <p>Portfolio Template</p>
                        <a href="https://loving-leavitt-076585.netlify.app/" target="_blank">SEE HERE</a>
                        <img src="img/work01.png" />
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="box animate__animated animate__backInUp">
                        <h4>Cookster</h4>
                        <p>Portfolio Template</p>
                        <a href="https://cookster.netlify.app/" target="_blank">SEE HERE</a>
                        <img src="img/work02.png" />
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="box animate__animated animate__backInRight">
                        <h4>Mogo Templete</h4>
                        <p>Portfolio Template</p>
                        <a href="https://mogo-templete.netlify.app/" target="_blank">SEE HERE</a>
                        <img src="img/work00.png" />
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="box animate__animated animate__backInLeft">
                        <h4>Construction</h4>
                        <p>Portfolio Template</p>
                        <a href="https://construction-suzan.netlify.app/" target="_blank">SEE HERE</a>
                        <img src="img/work04.png" />
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="box animate__animated animate__backInLeft">
                        <h4>Vex</h4>
                        <p>Portfolio Template</p>
                        <a href="https://vex-templete.netlify.app/" target="_blank">SEE HERE</a>
                        <img src="img/work05.png" />
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="box animate__animated animate__backInLeft">
                        <h4>Soft landing</h4>
                        <p>Portfolio Template</p>
                        <a href="https://compassionate-meitner-8c4e49.netlify.app/" target="_blank">SEE HERE</a>
                        <img src="img/w10.png" />
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="box animate__animated animate__backInLeft">
                        <h4>Fruit Market</h4>
                        <p>ecommerce with Angular</p>
                        <a href="https://market-3c99a.firebaseapp.com/" target="_blank">SEE HERE</a>
                        <img src="img/work09.png" />
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="box animate__animated animate__backInLeft">
                        <h4>Chat App</h4>
                        <p>chat applicaton with React and nodejs</p>
                        <a href="https://5ffc3c8720fc87ef1781ca22--chat-application-mernstack.netlify.app/" target="_blank">SEE HERE</a>
                        <img src="img/work07.png" />
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="box animate__animated animate__backInLeft">
                        <h4>To Do List</h4>
                        <p>todo list with React</p>
                        <a href="https://todolist-react-suzan.netlify.app/" target="_blank">SEE HERE</a>
                        <img src="img/work11.png" />
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="box animate__animated animate__backInLeft">
                        <h4>Electronics Market</h4>
                        <p>ecommerce with Angular</p>
                        <a href="https://electronics-market.netlify.app/" target="_blank">SEE HERE</a>
                        <img src="img/work12.png" />
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Works -->
    <!-- Start Contact Me -->
    <div id="contact" class="contact">
        <div class="container">
            <div class="info text-center animate__animated animate__backInUp">
                <h1>Contact Me</h1>
                <p>Send feedback or ask me something.</p>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                    <div class="cont-me animate__animated animate__backInLeft">
                        <ul class="list-unstyled details">
                            <li>
                                <i class="fas fa-map-marker-alt fa-fw"></i>
                                <h3>Address: </h3>
                                <p>Alexandria</p>
                            </li>
                            <li>
                                <i class="fas fa-envelope-open fa-fw"></i>
                                <h3>Email: </h3>
                                <p>suzannaim7@gmail.com</p>
                            </li>
                            <li>
                                <i class="fas fa-phone-volume fa-fw"></i>
                                <h3>Phone: </h3>
                                <p>(+2) 01022711703</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                    <form class="form animate__animated animate__backInRight" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                        <?php if (!empty($formError)) { ?>
                            <div class="error">
                                <?php
                                foreach ($formError as $error) {
                                    echo '- ' . $error . '<br/>';
                                }
                                ?>
                            </div>
                        <?php } ?>
                        <?php if (isset($success)) {
                            echo $success;
                        } ?>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <input type="text" name="username" class="form-control focus" placeholder="Type Name" autocomplete="off" value="<?php if (isset($userName)) {
                                                                                                                                                    echo $userName;
                                                                                                                                                } ?>" />
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <input type="email" name="email" class="form-control" placeholder="Type Email" autocomplete="off" value="<?php if (isset($mail)) {
                                                                                                                                                echo $mail;
                                                                                                                                            } ?>" />
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <input type="phone" name="phone" class="form-control" placeholder="Type Phone" maxlength="15" autocomplete="off" value="<?php if (isset($cell)) {
                                                                                                                                                            echo $cell;
                                                                                                                                                        } ?>" />
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <textarea class="form-control" name="message" placeholder="Type Message" value="<?php if (isset($msg)) {
                                                                                                                    echo $msg;
                                                                                                                } ?>"></textarea>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <input type="submit" value="Send" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Me -->
    <!-- Start Footer -->
    <div class="footer">
        <div class="container">
            <div class="copyright text-center">
                <span>Copyright ©2021 All Rights Reserved | This Template Is Made With <i class="fas fa-heart fa-fw"></i> By <strong>Suzan Naeem</strong></span>
            </div>
        </div>
    </div>
    <!-- End Footer -->
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/javascript.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
</body>

</html>