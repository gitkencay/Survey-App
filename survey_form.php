<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Survey-App</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->

        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-blue.css"/>
        <!-- EOF CSS INCLUDE -->                 
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">

            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="index.html">Survey-App</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-profile">
                        <a href="#" class="profile-mini">
                            <img src="assets/images/users/no-image.jpg" alt="John Doe"/>
                        </a>
                        <div class="profile">
                            <div class="profile-image">
                                <img src="assets/images/users/no-image.jpg" alt="John Doe"/>
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name">Kenneth Cayetano</div>
                                <div class="profile-data-title">Web Developer/ UI Designer</div>
                            </div>
                        </div>                                                                        
                    </li>
                    <li>
                        <a href="home.php"><span class="fa fa-search"></span> <span class="xn-text">View Survey Results</span></a>
                    </li>
                    <li>
                        <a href="survey_form.php"><span class="fa fa-plus"></span> <span class="xn-text">Add New Survey</span></a>
                    </li>
                    <li>
                        <a href="contact_form.php"><span class="fa fa-envelope"></span> <span class="xn-text">Contact</span></a>
                    </li>
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->

            <!-- PAGE CONTENT -->
            <div class="page-content">


                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <li class="xn-search">
                        <form role="form">
                            <input type="text" name="search" placeholder="Search..."/>
                        </form>
                    </li>   
                    <!-- END SEARCH -->
                    <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
                    </li> 
                    <!-- END SIGN OUT -->
                    <!-- MESSAGES -->

                </ul>
                <div class="page-title">                    
                    <h2><span class="fa fa-file-text"></span> Survey Form</h2>
                </div>
                <!-- END PAGE TITLE -->                

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">

                    <div class="row">
                        <div class="col-md-8">
                            <form role="form" class="form-horizontal" method="post">
                                <div class="panel panel-primary">

                                    <div class="panel-heading">
                                        <h3 class="panel-title"><strong> <span class="fa fa-info-circle"></span> Please fill-out the survey form</strong></h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="form-group ">
                                            <div class="col-md-12 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                    <input data-toggle="tooltip" data-placement="bottom" title="First name" type="text" class="form-control" name="firstname" placeholder="First name" required/>
                                                    <span class="input-group-addon"><span class="fa fa-info"></span></span>
                                                    <input data-toggle="tooltip" data-placement="bottom" title="Last name" type="text" class="form-control" name="lastname" placeholder="Last name" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-9">                                        
                                                <select class="form-control select">
                                                    <option>Gender</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="col-md-9">    
                                                <select class="form-control select" data-live-search="true">
                                                    <option value="">Country</option>
                                                    <option value="Philippines">Philippines</option>
                                                    <option value="Singapore">Singapore</option>
                                                    <option value="Thailand">Thailand</option>
                                                    <option value="China">China</option>
                                                    <option value="Japan">Japan</option>
                                                    <option xvalue="Russia">Russia</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h3>What is your issue related to?</h3>
                                                <div class="form-group">
                                                    <div class="col-md-5">                                    
                                                        <label class="check"><input type="radio" class="iradio" value="Yes" required/> Software Issue</label>
                                                        <label class="check"><input type="radio" class="iradio" value="No" required/> Hardware Issue </label>
                                                        <label class="check"><input type="radio" class="iradio" value="No" required/> Other </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <h3>How satisfied are you with our new products?</h3>
                                                <div class="form-group">
                                                    <div class="col-md-5">                                    
                                                        <label class="check"><input type="radio" class="iradio" value="Yes" required/> Not at all satisfied</label>
                                                        <label class="check"><input type="radio" class="iradio" value="No" required/> Satisfied </label>
                                                        <label class="check"><input type="radio" class="iradio" value="No" required/> Veriy Satisfied </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <h3>Please rate our products on a scale from 1 to 5:</h3>
                                        <br>
                                        <h5>Millenium Disk Professional Edition</h5>
                                        <div class="form-group">
                                            <div class="col-md-1">                               
                                                <label class="check"><input type="radio" class="iradio" name="iradio"/> 1</label>
                                            </div>
                                            <div class="col-md-1">                               
                                                <label class="check"><input type="radio" class="iradio" name="iradio"/> 2</label>
                                            </div>
                                            <div class="col-md-1">                               
                                                <label class="check"><input type="radio" class="iradio" name="iradio"/> 3</label>
                                            </div>
                                            <div class="col-md-1">                               
                                                <label class="check"><input type="radio" class="iradio" name="iradio"/> 4</label>
                                            </div>
                                            <div class="col-md-1">                               
                                                <label class="check"><input type="radio" class="iradio" name="iradio"/> 5</label>
                                            </div>
                                        </div>

                                        <h5>Clean up PC 2015 Office Edition</h5>
                                        <div class="form-group">
                                            <div class="col-md-1">                               
                                                <label class="check"><input type="radio" class="iradio" name="iradio"/> 1</label>
                                            </div>
                                            <div class="col-md-1">                               
                                                <label class="check"><input type="radio" class="iradio" name="iradio"/> 2</label>
                                            </div>
                                            <div class="col-md-1">                               
                                                <label class="check"><input type="radio" class="iradio" name="iradio"/> 3</label>
                                            </div>
                                            <div class="col-md-1">                               
                                                <label class="check"><input type="radio" class="iradio" name="iradio"/> 4</label>
                                            </div>
                                            <div class="col-md-1">                               
                                                <label class="check"><input type="radio" class="iradio" name="iradio"/> 5</label>
                                            </div>
                                        </div>

                                        <h5>Data SmartRescue 15</h5>
                                        <div class="form-group">
                                            <div class="col-md-1">                               
                                                <label class="check"><input type="radio" class="iradio" name="iradio"/> 1</label>
                                            </div>
                                            <div class="col-md-1">                               
                                                <label class="check"><input type="radio" class="iradio" name="iradio"/> 2</label>
                                            </div>
                                            <div class="col-md-1">                               
                                                <label class="check"><input type="radio" class="iradio" name="iradio"/> 3</label>
                                            </div>
                                            <div class="col-md-1">                               
                                                <label class="check"><input type="radio" class="iradio" name="iradio"/> 4</label>
                                            </div>
                                            <div class="col-md-1">                               
                                                <label class="check"><input type="radio" class="iradio" name="iradio"/> 5</label>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="panel-footer">
                                        <button type="submit" name="add_survey" class="btn btn-info pull-right"> Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>


                    </div>

                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="pages-login.html" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>                
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-timepicker.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-colorpicker.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-select.js"></script>
        <script type="text/javascript" src="js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>        
    </body>
</html>






