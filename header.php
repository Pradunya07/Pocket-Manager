<?php
 
// Starting the session, to use and
// store data in session variable
//session_start();
  
// If the session variable is empty, this
// means the user is yet to login
// User will be sent to 'login.php' page
// to allow the user to login

// Logout button will destroy the session, and
// will unset the session variables
// User will be headed to 'login.php'
// after loggin out

if (isset($_GET['logout'])) {
    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['userName']);
        header("location: indeX_.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Pocket Manager</title>
        

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    
        <style type="text/css">
            #page-top{
                background-color:#F3E9E9;
            }
            #errorMessage{
                    color:red;
                    background-color:#F5928E;
                    border:1px solid red;
                    display:none;
            }
            
            
        </style>
    

    
    </head>

    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-dark text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">PocketManager</a>
                <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-dark text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav  ml-auto">
                        <li class="nav-item mx-0 mx-lg-1 "><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger text-white" href="#portfolio">Functions</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger text-white" href="#about">About</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger text-white" href="#contact">Contact</a></li>
                        <?php  if (isset($_SESSION['userName'])) : ?>
                            <!--<li class="nav-item dropdown mx-0 mx-lg-1">
                                <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger text-white nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"></a>

                                <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                                </ul>

                                
                            </li>-->
                            <div class="dropdown">
                                <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger text-white nav-link dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $_SESSION["userName"];?></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">            
                                    <li><a href="indeX_.php?logout='1'" class="dropdown-item" href="#">Log Out</a></li>
                                    
                                </ul>
                            </div>   
                                
                                
                        <?php   else : ?>   
                            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger text-white" data-toggle="modal" data-target="#signIn" id="uname">Sign Up</a></li>
                               
                        <?php endif ?>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead bg-#F3E9E9 text-black text-center">
            <div class="container d-flex align-items-center flex-column">
                <div>
                    Hi! It's Team 7's
                </div>
                <h1 class="masthead-heading text-uppercase mb-0">Pocket Manager</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">Modify data - Secure data - Store data</p>
            </div>
        </header>
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Functionalities</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    <!-- Portfolio Item 1-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img1/fileZipper.jpg" alt="" />
                        </div>
                    </div>
                    <!-- Portfolio Item 2-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img1/imageCompressed.jpg" alt="" />
                        </div>
                    </div>
                    <!-- Portfolio Item 3-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <?php  if (isset($_SESSION['userName'])) : ?>
                            
                            <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
                        <?php   else : ?>   
                            <div class="portfolio-item mx-auto"  data-toggle="popover" title="Functionality Unavailable" data-content="Please Sign Up to use this functionality">
                            
                            <?php endif ?>
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img1/encrypt.jpg" alt="" />
                        </div>
                    </div>
                    <!-- Portfolio Item 4-->
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal4" >
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img1/qrCodeGenerator.jpg" alt="" />
                        </div>
                    </div>
                    <!-- Portfolio Item 5-->
                    <div class="col-md-6 col-lg-4">
                        <?php  if (isset($_SESSION['userName'])) : ?>        
                            <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal5" >
                            <?php   else : ?>   
                            <div class="portfolio-item mx-auto"  data-toggle="popover" title="Functionality Unavailable" data-content="Please Sign Up to use this functionality">    
                            <?php endif ?>
                                <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                    <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/safe.png" alt="" />
                        </div>
                    </div>
                    <!-- Portfolio Item 6-->
                    <div class="col-md-6 col-lg-4">
                        <?php  if (isset($_SESSION['userName'])) : ?>    
                            <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal6" >
                            <?php   else : ?>   
                            <div class="portfolio-item mx-auto"  data-toggle="popover" title="Functionality Unavailable" data-content="Please Sign Up to use this functionality">
                            <?php endif ?>
                                <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                    <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                            <img class="img-fluid" src="assets/img/portfolio/submarine.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Section-->
        <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">About</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-4 ml-auto"><p class="lead">We provide you a platform where you can freely operate on your files as you wish without any restrain. So dive in and start your File Operation now!</p></div>
                    <div class="col-lg-4 mr-auto"><p class="lead">All the funtionalities are free to use. Few specifics require users to login. Last 2 functionalites will be updated soon.</p></div>
                </div>

            </div>
        </section>
        <!-- Contact Section-->
        <section class="page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Me</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
                        <form id="contactForm" name="sentMessage" novalidate="novalidate">
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Name</label>
                                    <input class="form-control" id="name" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name." />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Email Address</label>
                                    <input class="form-control" id="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address." />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Phone Number</label>
                                    <input class="form-control" id="phone" type="tel" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number." />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Message</label>
                                    <textarea class="form-control" id="message" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <br />
                            <div id="success"></div>
                            <div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit">Send</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Location</h4>
                        <p class="lead mb-0">
                            abcd Pune
                            <br />
                            Bibwewadi
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Around the Web</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">About Team 7</h4>
                        <p class="lead mb-0">
                            Team 7 is a group of 5 with a vision and mission.
                          
                            
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright ?? Your Website 2020</small></div>
        </div>
        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
        <div class="scroll-to-top d-lg-none position-fixed">
            <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
        </div>
        <!-- Portfolio Modals-->
        <!-- Portfolio Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal1Label">Zip Files</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img1/fileZipper.jpg" alt="" />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">File Compression. Please choose the file/folder to compress.
                                        <form action="operation.php" method="post" enctype="multipart/form-data">
                                            <input type="file" name="files[]" id="files" multiple="" directory="" webkitdirectory="" mozdirectory=""><br>
                                            Folder Name: <input type="text" name="dirName" id="dir">
                                        <!-- <input class="button" name="upload" type="submit" value="fcompress" > -->
                                        <button class="btn btn-primary" name="upload" type="submit" value="fcompress">Compress</button>
                                        </form><br>
                                    </p>
                                        <button class="btn btn-primary" data-dismiss="modal">
                                            <i class="fas fa-times fa-fw"></i>
                                            Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-labelledby="portfolioModal2Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal2Label">Image Compression</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img1/imageCompressed.jpg" alt="" />
                                    <!-- Portfolio Modal - Text-->
                                    
                                    
                                    <p class="mb-5">Image Compression. Please choose the image to compress.
                                        <form action="operation.php" method="post" enctype="multipart/form-data">
                                            <input type="file" name="file"><br>
                                            Comression Ratio 
                                            <input type="radio" id="less" name="cRatio" value="1">
                                            <label for="less">Less</label>
                                            <input type="radio" id="medium" name="cRatio" value="2">
                                            <label for="medium">Medium</label>
                                            <input type="radio" id="high" name="cRatio" value="3">
                                            <label for="other">High</label>
                                        <!-- <input class="button" name="upload" type="submit" value="fcompress" > -->
                                        <button class="btn btn-primary" name="upload" type="submit" value="imgcompress">Compress</button>
                                        </form><br>
                                    </p>
                                    <button class="btn btn-primary" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 3-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-labelledby="portfolioModal3Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal3Label">Encryption</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img1/encrypt.jpg" alt="" />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">Text Encyption</p>
                                    

                                    <form action="operation.php" name="encryptionFunction" method="post" >
                                       <!-- <select class="form-select form-select-lg mb-3" name="enc_for" aria-label=".form-select-lg example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">File Encryption</option>
                                            <option value="2">Text Encryption</option>
                                        </select>-->
                                        <div class="form-check">
                                            <input class="form-check-input" value="1" type="radio" name="flexRadioDefault" id="encButton1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                File Encryption
                                            </label>
                                            </div>
                                            <div class="form-check">
                                            <input class="form-check-input" value="2" type="radio" name="flexRadioDefault" id="encButton2">
                                                Text Encryption
                                            </label>
                                        </div>
                                        
                                        <div  style="display:none;"  id="enc2" class="input-group" name="textEncrypt">
                                            <span class="input-group-text">Text to Encrypt</span><br>
                                            <textarea rows="5" cols="50" name="Description" id="Description" style="font-family: 'Noto Sans HK', sans-serif; padding:10px;margin-left:50px; width:400px; height:200px;border:1px black solid;border-radius: 3px;"></textarea> 
 
                                        </div><br>
                                        <div style="display:none;" id="enc1" class="input-group" name="fileEncrypt">
                                            <span class="input-group-text">File to Encrypt</span>
                                            <input type="file" name="file" id="file" >
                                        </div><br>
                                        
                                        <button class="btn btn-primary " name="upload" type="submit" value="encrypt">Encrypt</button>
                                    </form>                       
                                    
                                    <br>                 
                                    <button class="btn btn-primary" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 4-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-labelledby="portfolioModal4Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal3Label">QR Code</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img1/qrCodeGenerator.jpg" alt="" />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">Text Encyption</p>
                                    
                                    <!-- Portfolio Modal - Title-->
                                    <div><input id="qr-text" type="text" placeholder="Text to generate QR code"/></div>
                                    <br/>
                                    <div>
                                        <button class="qr-btn" onclick="generateQRCode()">Create QR Code</button>
                                    </div>
                                    <br/>
                                    <p id="qr-result">This is deault QR code:</p>
                                    <canvas id="qr-code"></canvas>
                                    
                                    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrious/4.0.2/qrious.min.js"></script>
                                    <script>
                                        /* JS comes here */
                                        var qr;

                                        function encrypt(text){

                                            var text1= "12345"+text+"6789"
                                            return text1
                                        }

                                        function decrypt(text){

                                            var txt;
                                            txt=text[5]
                                            for(i=6;i<text.length-4;i++){
                                                txt+=text[i]
                                            }
                                            return txt
                                        }

                                        (function() {
                                                qr = new QRious({
                                                element: document.getElementById('qr-code'),
                                                size: 200,
                                                value: 'https://studytonight.com'
                                            });
                                        })();
                                        
            // function encrypt(string){


            // }


                                        function generateQRCode() {
                                            var qrtext = document.getElementById("qr-text").value;
                                            var qrtext1 = encrypt(qrtext)
                                            var qrtext2= decrypt(qrtext1)
                                            document.getElementById("qr-result").innerHTML = "QR code for " + qrtext1 +":"+"\n Actual Text: "+ qrtext2;
                                          //  alert(qrtext1);
                                            qr.set({
                                                foreground: 'black',
                                                size: 200,
                                                value: qrtext1
                                            });
                                        }

                                    </script>
                                    <br><br>
                                    <button class="btn btn-primary" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 5-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-labelledby="portfolioModal5Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal5Label">Locked Safe</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/safe.png" alt="" />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">The Users can store their important files here. Currently The functionality is under work.</p>
                                    <button class="btn btn-primary" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 6-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-labelledby="portfolioModal6Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal6Label">Submarine</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/submarine.png" alt="" />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">This is a free functionality slot which will be updated soon.</p>
                                    <button class="btn btn-primary" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 7 SignUp-->
        <div class="portfolio-modal modal fade" id="signIn" tabindex="-1" role="dialog" aria-labelledby="signInLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body ">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    
                                    
                                    <!-- Portfolio Modal - Text-->
                                    <div id="usersignup">
                                        <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="signIn3Label">Sign Up</h2><br>
                                        <p  class="mb-5">Enter your details to create account
                                            <form action="login.php" method="POST" name="registrationForm" onsubmit="validateMyForm1();" enctype="multipart/form-data">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">First Name</span>
                                                    <input type="text" id="fname" class="form-control" name="fname" placeholder="First Name" aria-label="fname" aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">Last Name</span>
                                                    <input type="text" id="lname" class="form-control" name="lname" placeholder="Last Name" aria-label="lname" aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">Email Id  </span>
                                                    <input type="text" class="form-control" id="suEmail" type="email" name="semail" placeholder="@example.com" aria-label="email" aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">Password</span>
                                                    <input type="text" class="form-control" id="suPass" type="password" name="spassword" aria-label="password" aria-describedby="basic-addon1">
                                                </div>
                                                
                                                <div class="d-grid gap-2 col-4 mx-auto">
                                                    <button class="btn btn-primary" id="suBt" name="sg" value="userSignup" type="submit">Submit</button>   
                                                </div>
                                            </form>
                                            <p class="mb-5">
                                                <h5>
                                                    <small class="text-muted">Already have Account?</small>
                                                    <span id="loginAccess">Click Here to Login</span>
                                                </h5>
                                            </p>
                                        </p>

                                    </div>
                                    
                                    <div id="userlogin"  style="display:none">
                                        <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="signIn3Label">Log In</h2><br>
                                        <p  class="mb-5">Enter your details to Login
                                            <form action="login.php" method="POST" onsubmit="validateMyForm2();" name="LogIn" enctype="multipart/form-data">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">Email Id  </span>
                                                    <input type="text" class="form-control" id="lgEmail" type="email" name="lemail" placeholder="@example.com" aria-label="email" aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">Password</span>
                                                    <input type="text" class="form-control" id="lgPass" type="password" name="lpassword" aria-label="password" aria-describedby="basic-addon1">
                                                </div>
                                                
                                                <div class="d-grid gap-2 col-4 mx-auto">
                                                    <button class="btn btn-primary" id="lgBt" name="sg" value="userLogin" type="submit">Submit</button>   
                                                </div>
                                            </form>
                                            
                                            <p class="mb-5">
                                                <h5>
                                                    <small class="text-muted">Don't have have Account?</small>
                                                    <span id="signupAccess">Click Here to Sign Up</span>
                                                </h5>
                                            </p>
                                            
                                        </p>
                                    </div>
                                    <div id="errorMessage"> 

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        
    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
  
        <!-- Third party plugin JS-->
      
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        
    <script type="text/javascript">
        var fname=document.registrationForm.fname;
        var lname=document.registrationForm.lname;
        var semail=document.registrationForm.semail;
        var spass=document.registrationForm.spassword;
        var lemail=document.LogIn.lemail;
        var lpass=document.LogIn.lpassword;


        $(document).ready(function(){
                $('[data-toggle="popover"]').popover();
            });

        function isEmail(email) {
            const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(email);
		}

            document.getElementById("loginAccess").onclick=function(){
                document.getElementById("userlogin").style.display="block";
                document.getElementById("usersignup").style.display="none";
            }
            document.getElementById("signupAccess").onclick=function(){
                document.getElementById("userlogin").style.display="none";
                document.getElementById("usersignup").style.display="block";
            }
           
           document.getElementById('encButton1').onclick=function(){
                document.getElementById("enc1").style.display="block";
                document.getElementById("enc2").style.display="none";
           } 
           document.getElementById('encButton2').onclick=function(){
                document.getElementById("enc2").style.display="block";
                document.getElementById("enc1").style.display="none";
           } 
            

           
            function isEmail(email) {
            const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                return re.test(email);
            }

            function validateMyForm2()
            {
                var errorMessage="";
                
                    var missingField="";
                   
                    var emiss=0;

                    
                    if(lemail.value==""){
                        missingField+="<br>- Missing Email.";
                        emiss=1;
                    }
            
                    if(lpass.value==""){
                        missingField+="<br>- Missing password.";
                    }

                
                    if(!isEmail(lemail.value) && emiss==0){
                        errorMessage+="<br>- Your email address is invalid.";
                    }
                    
                    if(missingField!="")
                            errorMessage+="<p>The following field(s) are missing:"+ missingField;		

                    if(errorMessage!=""){
                        $("#errorMessage").show();
                        $("#errorMessage").html(errorMessage);
                    
                        emiss=0;
                    }
                
                if (errorMessage!="") { 
                        //alert("Please check a checkbox");
                        event.preventDefault();
                } else {
                    $("#errorMessage").hide();
                    }
                
            }

            

            function validateMyForm1()
            {
                
                    var errorMessage="";
                    var missingField="";
                    
                    var emiss=0; 
                   
                    if(fname.value==""){
                        missingField+="<br>- Missing First name.";
                    }
                    if(lname.value==""){
                        missingField+="<br>- Missing Last name.";
                    }
                    if(semail.value==""){
                        missingField+="<br>- Missing Email.";
                        emiss=1;
                    }
                        
                    if(spass.value==""){
                        missingField+="<br>- Missing password.";
                    }
                    if(!isEmail(semail.value) && emiss==0){
                        errorMessage+="<br>- Your email address is invalid.";
                    }
                    
                    if(missingField!="")
                            errorMessage+="<p>The following field(s) are missing:"+ missingField;		

                     if(errorMessage!=""){
                        $("#errorMessage").show();
                        $("#errorMessage").html(errorMessage);
                    
                        emiss=0;
                    }
                    
                    //alert("Inside");

                if (errorMessage!="") { 
                        //alert("Please check a checkbox");
                        event.preventDefault();
                } else {
                    $("#errorMessage").hide();
                    }
            }
            
            /*function displayRadioValue() {
                var ele = document.getElementsByName('encFormat');
                if(ele[0].checked){
                    document.getElementById("enc1").style.display="block";
                    document.getElementById("enc2").style.display="none";
                }
                else if(ele[1].checked){
                    document.getElementById("enc2").style.display="block";
                    document.getElementById("enc1").style.display="none";
                }

            
            }
            displayRadioValue();*/
           
    </script>

    </body>
</html>
