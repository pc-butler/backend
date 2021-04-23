<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>eHealth-calendar | <?= esc($title); ?></title>

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="/css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="/css/animate.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">

</head>

<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="img/pfp2.png" style="max-width: 25%" />
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?= esc($user_name); ?></strong>
                             </span> 
                                <span class="text-muted text-xs block">Patient <b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li class="divider"></li>
                                <li><a href="/login/logout">Logout</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            RW
                        </div>
                    </li>
                    <li class="active">
                        <a href="/"><i class="fa fa-th-large"></i> <span class="nav-label">Home</span></a>
                    </li>
                    <li>
                    <li>
                        <a href="/heatmap"><i class="fa fa-th-large"></i> <span class="nav-label">Heatmap</span></a>
                    </li>
                </ul>

            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" action="search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                </div>
            </form>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Welcome <?= esc($user_name); ?>.</span>
                </li>
                
                
                <?php
                    if($user_name){
                        ?>
                            <li>
                                <a href="/login/logout">
                                    <i class="fa fa-sign-out"></i> Log out
                                </a>
                            </li>
                        <?php
                    }
                    if(!$user_name){
                        ?>
                            <li>
                                <a href="/login">
                                    <i class="fa fa-sign-in"></i> Log in
                                </a>
                            </li>
                        <?php
                    }
                ?>

               
            </ul>

        </nav>
        </div>


        <?php if (isset($hideTitle) && ($hideTitle === 'true')): ?>

        <!-- No Title -->

        <?php else: ?>

        <h1><?= esc($title); ?></h1>

        <?php endif; ?>
