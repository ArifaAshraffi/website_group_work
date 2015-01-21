<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Blog | Corlate</title>
    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap1.min.css">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<body>
<header id="header">
    <?php

    include_once('header.php');

    ?>
</header>

<section class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="well well-lg">
                <form action="add_personal.php" method="post" class="form-horizontal">
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">FirstName</label><span style="color: red">*</span>
                        <div class="col-sm-10">
                            <input type="text" name="firstname" class="form-control" placeholder="first name" required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">LastName</label><span style="color: red">*</span>
                        <div class="col-sm-10">
                            <input type="text" name="lastname" class="form-control" placeholder="last name" required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Email</label><span style="color: red">*</span>
                        <div class="col-sm-10">
                            <input type="email" name="email" class="form-control" placeholder="Email" required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Password</label><span style="color: red">*</span>
                        <div class="col-sm-10">
                            <input type="password" name="password" class="form-control" placeholder="password" required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Gender</label><span style="color: red">*</span>
                        <div class="col-sm-10">
                            <label class="radio-inline">
                                <input type="radio" name="gender" id="inlineRadio1" value="Male"> Male
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="gender" id="inlineRadio2" value="Female"> Female
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="gender" id="inlineRadio3" value="Others"> Others
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Date of Birth</label><span style="color: red">*</span>
                        <div class="col-sm-10">
                            <select name="b_year" class="form-control" required="required">
                                <option value="">---Select year---</option>
                                <option value="2000">2000</option>
                                <option value="1999">1999</option>
                                <option value="1998">1998</option>
                                <option value="1997">1997</option>
                                <option value="1996">1996</option>
                                <option value="1995">1995</option>
                                <option value="1999">1994</option>
                                <option value="1998">1993</option>
                                <option value="1997">1992</option>
                                <option value="1996">1991</option>
                                <option value="1995">1990</option>
                            </select>

                            <select name="b_month" class="form-control" required="required">
                                <option value="">---Select Month---</option>
                                <option value="01">January</option>
                                <option value="02">February</option>
                                <option value="03">March</option>
                                <option value="04">April</option>
                                <option value="05">May</option>
                                <option value="06">June</option>
                                <option value="07">July</option>
                                <option value="08">August</option>
                                <option value="09">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                            </select>

                            <select name="b_day" class="form-control" required="required">
                                <option value="">---Select Day---</option>
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                                <option value="07">07</option>
                                <option value="08">08</option>
                                <option value="09">09</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Hobby</label>
                        <div class="col-sm-10">
                            <label class="checkbox-inline">
                                <input type="checkbox" name="hobby[]" id="inlineCheckbox1" value="Gardening"> Gardening
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="hobby[]" id="inlineCheckbox2" value="Travelling"> Travelling
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="hobby[]" id="inlineCheckbox3" value="Painting"> Painting
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="hobby[]" id="inlineCheckbox4" value="Fishing"> Fishing
                            </label>
                        </div>
                    </div>



                    <div class="form-group">
                        <label  class="col-sm-2 control-label">City</label><span style="color: red">*</span>
                        <div class="col-sm-10">
                            <select name="city[]" multiple="multiple" class="form-control" required="required">
                                <option value=""></option>
                                <option value="Dhaka">Dhaka</option>
                                <option value="Chittagong">Chittagong</option>
                                <option value="Sylhet">Sylhet</option>
                                <option value="Gajipur">Gajipur</option>
                                <option value="Rajshahi">Rajshahi</option>
                                <option value="Kushtia">Kushtia</option>
                                <option value="Khulna">Khulna</option>
                                <option value="Barisal">Barisal</option>
                                <option value="Dinajpur">Dinajpur</option>
                                <option value="Noakhali">Noakhali</option>
                                <option value="Feni">Feni</option>
                                <option value="Comilla">Comilla</option>
                                <option value="Khagrachori">Khagrachori</option>
                                <option value="Rangamati">Rangamati</option>
                                <option value="Jhinaidah">Jhinaidah</option>
                                <option value="Potuakhali">Potuakhali</option>
                                <option value="Moulovibazar">Moulovibazar</option>
                                <option value="Rongpur">Rongpur</option>
                                <option value="Laxmipur">Laxmipur</option>
                                <option value="Foridpur">Foridpur</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Comment</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="3" name="comment"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Submit</button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
</section>

<footer id="footer" class="midnight-blue">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                &copy;2015 Umme kulsum Sarker
            </div>
            <div class="col-sm-6">
                <ul class="pull-right">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Faq</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer><!--/#footer-->





<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>