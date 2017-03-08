<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="container">
    <div class="row">
        <div class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
                        <span class="sr-only">Open navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div href="#" class="navbar-brand ">
                        <i class="fa fa-user-circle" aria-hidden="true">
                            <span class="visible-xs">Curriculum Vitae</span>
                        </i>
                    </div>
                </div>
                <div class="collapse navbar-collapse" id="responsive-menu">
                    <ul class="nav navbar-nav" id="top-menu">
                        <li id="home" class="active"><a href="javascript:void(0)">HOME</a></li>
                        <li id="experience"><a href="javascript:void(0)">EXPERIENCE</a></li>
                        <li id="knowledge"><a href="javascript:void(0)">KNOWLEDGE AND SKILLS</a></li>
                        <li id="education"><a href="javascript:void(0)">EDUCATION</a></li>
                        <li id="qualities"><a href="javascript:void(0)">PERSONAL QUALITIES</a></li>
                        <li id="interests"><a href="javascript:void(0)">INTERESTS</a></li>
                        <li id="contacts" class="visible-xs visible-sm visible-md"><a href="javascript:void(0)">CONTACTS</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row" id="ajax-container">
        <!--        <h1>Here will be AJAX</h1>-->
    </div>
</div>

<!--Show everywhere except for small devices-->
<div class="container hidden-xs hidden-sm hidden-md hidden-lg">
    <div class="navbar navbar-default navbar-fixed-bottom">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div href="#" class="navbar-brand">
                    <i class="fa fa-user-circle" aria-hidden="true">
                        <span class="visible-xs">Curriculum Vitae</span>
                    </i>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="responsive-menu">
                <ul class="nav navbar-nav" id="top-menu">
                    <li id="home" class="active"><a href="javascript:void(0)">HOME</a></li>
                    <li id="experience"><a href="javascript:void(0)">EXPERIENCE</a></li>
                    <li id="education"><a href="javascript:void(0)">EDUCATION</a></li>
                    <li id="knowledge"><a href="javascript:void(0)">KNOWLEDGE AND SKILLS</a></li>
                    <li id="qualities"><a href="javascript:void(0)">PERSONAL QUALITIES</a></li>
                    <li id="interests"><a href="javascript:void(0)">INTERESTS</a></li>
                </ul>
            </div>
        </div>
    </div>
    </div>
</div>
<!--Hide when small device-->
<div class="container hidden-xs hidden-sm hidden-md">
    <div class="navbar navbar-default navbar-fixed-bottom">
        <div class="container">
            <div class="collapse navbar-collapse" id="responsive-menu">
                <ul class="nav navbar-nav" id="bottom-menu">
                    <li>
                        <a class="btn" href="#">
                            <i class="fa fa-vk fa-2x">&nbsp;VK</i>
                        </a>
                    </li>
                    <li>
                        <a class="btn" href="#">
                            <i class="fa fa-facebook-square fa-2x">&nbsp;Facebook</i>
                        </a>
                    </li>
                    <li>
                        <a class="btn" href="#">
                            <i class="fa fa-linkedin-square fa-2x">&nbsp;Linkedin</i>
                        </a>
                    </li>
                    <li>
                        <a class="btn" href="#">
                            <i class="fa fa-github-square fa-2x">&nbsp;Github</i>
                        </a>
                    </li>
                    <li>
                        <a class="btn" href="skype:bdnchk?chat">
                            <i class="fa fa-skype fa-2x">&nbsp;bdnchk</i>
                        </a>
                    </li>
                    <li>
                        <a class="btn" href="mailto:bakalov.bogdan@gmail.com">
                            <i class="fa fa-envelope fa-2x fa-fw">&nbsp;bakalov.bogdan@gmail.com</i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
<script src="js/jquery_1_12_4.min.js"></script>
<script src="js/main.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>