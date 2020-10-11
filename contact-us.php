<?php

include_once "includes/contactus.php";

$response = null;
if (isset($_POST['email']) && !empty($_POST['email'])){
    // User info (DO NOT EDIT!)
    $name = stripslashes(htmlentities($_REQUEST['name'])); // sender's name
    $email 	= stripslashes($_REQUEST['email']); // sender's email
    $phone = stripslashes($_REQUEST['phone']);
    $message = stripslashes($_REQUEST['message']);
    $subject = stripslashes($_REQUEST['subject']);


    $response = send($email,$name,$phone,$subject,$message);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>SEO Marketing - Responsive Website Template</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!-- header-section start -->
    <?php include('includes/header.php'); ?>
    <!-- header-section close -->

    <!--pageheader start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="page-section">
                    <div class="col-md-6">
                        <div class="page-description">
                            <h1 class="page-title">Contact Us</h1>
                            <p>Get in touch with us</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li><a href="#">Home</a></li>
                                <li>Contact us</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--pageheader close -->
    <!-- contact start -->
    <div class="space-medium">
        <div class="container">
            <div class="row">
                <div class=" col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <h1>Send us a Message</h1>
                    <p>Send us message to get in touch with us.</p>
                    <?php if ($response != null): ?>
                        <?php foreach ($response as $key=>$value): ?>
                            <p class="alert alert-<?= $key ?>"><?= $value ?></p>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    <!-- contact form start -->
                    <div class="row">
                        <form method="post" action="">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="name">Name</label>
                                    <input id="name" name="name" type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="email">Email</label>
                                    <input id="email" name="email" type="email" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="phone">Phone</label>
                                    <input id="phone" name="phone" type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="subject">Subject</label>
                                    <input id="subject" name="subject" type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="textarea">Message</label>
                                    <textarea class="form-control" id="textarea" name="message" rows="6" required></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- contact form close -->
                <!-- contact info start -->
                <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="widget">
                        <h1>Contact info</h1>
                        <p>Get in touch with us through the contact info below the given.</p>
                        <div class="contact-info">
                            <ul>
                                <li>
                                    <div class=""> <i class="fa fa-map-marker"></i> Nairobi Kenya </div>
                                </li>
                                <li>
                                    <div> <i class="fa fa-phone"></i>+254 701 780 411<br> +254 701 780 411 </div>
                                </li>
                                <li>
                                    <div><i class="fa fa-envelope"></i>motech@gmail.com.com</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- contact info close -->
            </div>
        </div>
    </div>
    <!-- footer start -->
    <?php include('includes/footer.php');?>
    <!-- footer close -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/menumaker.js" type="text/javascript"></script>
    <script src="js/navigation.js" type="text/javascript"></script>
</body>

</html>