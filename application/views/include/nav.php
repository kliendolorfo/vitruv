<body data-spy="scroll" data-target="#header-navbar" data-offset="51">
    <!-- begin #page-container -->
    <div id="page-container" class="fade">
        <!-- begin #header -->
        <div id="header" class="header navbar navbar-transparent navbar-fixed-top">
            <!-- begin container -->
            <div class="container">
                <!-- begin navbar-header -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.html" class="navbar-brand">
                        <span class="brand-text">
                            <img src="<?php echo base_url('assets/img/logo.png');?>" style="height: 70px;" alt="homepage" class="dark-logo" />
                        </span>
                    </a>
                    <!-- <img src="<?php echo base_url('assets/img/logo.png');?>" alt="homepage" class="dark-logo" /> -->
                </div>
                <!-- end navbar-header -->
                <!-- begin navbar-collapse -->
                <div class="collapse navbar-collapse" id="header-navbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="<?=(current_url() == base_url('home'))? 'active':''?>"><a href="<?=base_url('home')?>">Product </a></li>
                        <li class="<?=(current_url() == base_url('about'))? 'active':''?>"><a href="<?= base_url('about') ?>">Demo</a></li>
                        <li class="<?= (current_url() == base_url('team')) ? 'active' : '' ?>"><a href="<?= base_url('team') ?>">Pricing</a></li>
                        <li class="<?= (current_url() == base_url('service')) ? 'active' : '' ?>"><a href="<?= base_url('service') ?>">Services</a></li>
                        <li class="dropdown">
                            <a href="#" data-click="scroll-to-target" data-toggle="dropdown">Support <b class="caret"></b></a>
                            <ul class="dropdown-menu dropdown-menu-left animated fadeInDown">
                                <li><a href="index.html">FAQs</a></li>
                                <li><a href="index_inverse_header.html">About us</a></li>
                                <li><a href="index_default_header.html">Contact us</a></li>
                            </ul>
                        </li>
                        <button type="button" class="btn btn-inverse">BOOK A DEMO</button>
                    </ul>
                </div>
                <!-- end navbar-collapse -->
            </div>
            <!-- end container -->
        </div>
        <!-- end #header -->
        
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="<?php echo base_url('assets/img/slider/slider-1-cover.jpg');?>" alt="Chania">
                    <div class="carousel-caption">
                        <h3 style="font-size: 60px; font-weight: 600;text-align: left; font-family: 'Poppins';">The best customer experiences are built with Vitruv</h3>
                        <p style="font-size: 14px;text-align: left;font-family: 'Poppins' !important;">Lorem ipsum dolor sit amet, ceteros constituto definiebas et vel, rebum iudicabit mel in, his alii magna corpora ut. Eos ei quaestio rationibus, affert iudico accusamus cu sed, vero legendos explicari pro ad. Vis an oratio partem. Mel quando meliore id, vim id fabulas insolens phaedrum. Mel sonet mollis ne, in quo solum iuvaret feugiat.</p>
                        <div class="btnalign"><a href="#" class="btn btn-primary">BOOK A DEMO</a> <a href="#" class="btn btn-default">GET PRODUCT</a></div><br />
                    </div>
                </div>

                <div class="item">
                    <img src="<?php echo base_url('assets/img/slider/slider-1-cover.jpg');?>" alt="Chicago">
                    <div class="carousel-caption">
                        <h3 style="font-size: 60px; font-weight: 600;text-align: left; font-family: 'Poppins';">The best customer experiences are built with Vitruv</h3>
                        <p style="font-size: 14px;text-align: left;font-family: 'Poppins' !important;">Lorem ipsum dolor sit amet, ceteros constituto definiebas et vel, rebum iudicabit mel in, his alii magna corpora ut. Eos ei quaestio rationibus, affert iudico accusamus cu sed, vero legendos explicari pro ad. Vis an oratio partem. Mel quando meliore id, vim id fabulas insolens phaedrum. Mel sonet mollis ne, in quo solum iuvaret feugiat.</p>
                        <div class="btnalign"><a href="#" class="btn btn-primary">BOOK A DEMO</a> <a href="#" class="btn btn-default">GET PRODUCT</a></div><br />
                    </div>
                </div>

                <div class="item">
                    <img src="<?php echo base_url('assets/img/slider/slider-1-cover.jpg');?>" alt="New York">
                    <div class="carousel-caption">
                        <h3 style="font-size: 60px; font-weight: 600;text-align: left; font-family: 'Poppins';">The best customer experiences are built with Vitruv</h3>
                        <p style="font-size: 14px;text-align: left;font-family: 'Poppins' !important;">Lorem ipsum dolor sit amet, ceteros constituto definiebas et vel, rebum iudicabit mel in, his alii magna corpora ut. Eos ei quaestio rationibus, affert iudico accusamus cu sed, vero legendos explicari pro ad. Vis an oratio partem. Mel quando meliore id, vim id fabulas insolens phaedrum. Mel sonet mollis ne, in quo solum iuvaret feugiat.</p>
                        <div class="btnalign"><a href="#" class="btn btn-primary">BOOK A DEMO</a> <a href="#" class="btn btn-default">GET PRODUCT</a></div><br />
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <!--<a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a> -->
        </div>