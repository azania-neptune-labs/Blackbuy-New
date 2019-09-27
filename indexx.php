<!-- <php
	//include('server.php');
	require_once('connection.php');
	
	//Delete Item
	if (isset($_GET["delete"]) && isset($_GET["id"])){
	 $id = $_GET["id"];
	 $query="DELETE FROM `tblproduct` WHERE productId = '$id' ";
	 if(mysqli_query($con, $query)){
		 header('location: product_list.php');
	 }
	}
?> -->
<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>BlackBuy || Products</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->
    <link rel="icon" href="../files/assets/images/BBS.jpg" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="../files/bower_components/bootstrap/css/bootstrap.min.css">
    <!-- Font awesome star css -->
    <link rel="stylesheet" type="text/css" href="../files/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Font awesome star css -->
    <link rel="stylesheet" type="text/css" href="../files/bower_components/jquery-bar-rating/css/fontawesome-stars.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="../files/assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="../files/assets/icon/icofont/css/icofont.css">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="../files/assets/icon/feather/css/feather.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="../files/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../files/assets/css/jquery.mCustomScrollbar.css">
</head>

<body>
<!-- Pre-loader start -->
<div class="theme-loader">
    <div class="ball-scale">
        <div class='contain'>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
        </div>
    </div>
</div>
<!-- Pre-loader end -->
<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">

        <nav class="navbar header-navbar pcoded-header">
            <div class="navbar-wrapper">

                <div class="navbar-logo">
                    <a class="mobile-menu" id="mobile-collapse" href="#!">
                        <i class="feather icon-menu"></i>
                    </a>
                    <a href="index.php">
                        <img class="img-fluid" src="../files/assets/images/BBS.jpg" alt="BlackBuy-Logo" />
                    </a>
                    <a class="mobile-options">
                        <i class="feather icon-more-horizontal"></i>
                    </a>
                </div>

                <div class="navbar-container container-fluid">
                    <ul class="nav-left">
                        <li class="header-search">
                            <div class="main-search morphsearch-search">
                                <div class="input-group">
                                    <span class="input-group-addon search-close"><i class="feather icon-x"></i></span>
                                    <input type="text" class="form-control">
                                    <span class="input-group-addon search-btn"><i class="feather icon-search"></i></span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#!" onclick="javascript:toggleFullScreen()">
                                <i class="feather icon-maximize full-screen"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav-right">
                        <li class="user-profile header-notification">
<!-- 						
                                    <php
																			$GetProductQuery = "SELECT `companyId`  FROM `tblcompany` WHERE 3";
																			
																			$Presults = mysqli_query($con, $GetProductQuery);
																			while($row=mysqli_fetch_array($Presults))
																			{
																		?> -->
                           <div class="dropdown-primary dropdown">
                                <div class="dropdown-toggle" data-toggle="dropdown">
                                  <!--  <img src="../files/assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">-->
                                    <span>Guest User</span>
                                    <i class="feather icon-chevron-down"></i>
                                </div>
																		<!-- <php 
																		} ?> -->
                                <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                        <a href="product_cart.php">
                                            <i class="feather icon-log-out"></i> View Cart
                                        </a>
										</li>
                                 <li>
                                        <a href="#">
                                            <i class="feather icon-log-out"></i> Profile
                                        </a>
										</li>
                               <li>
                                        <a href="#">
                                            <i class="feather icon-log-out"></i> Setting
                                        </a>
										</li>
                                 
										<li ><a class="btn btn-danger" href="index.php?logout='1'" align="right"><i class="fa fa-sign-in"> Sign Out </i></a></li>	
										</li>
                                
                    </ul>
                </div>
            </div>
        </nav>

   
        <!-- Sidebar inner chat end-->
        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                <nav class="pcoded-navbar">
                    <div class="pcoded-inner-navbar main-menu">
                        <div class="pcoded-navigatio-lavel">BlackBuy Shelf</div>
                           <ul class="pcoded-item pcoded-left-item">
                             <li class="pcoded-hasmenu active pcoded-trigger">
                                 <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                    <span class="pcoded-mtext">Shelf</span>
                                </a>
                               <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="index.php">
                                                    <span class="pcoded-mtext" >Food Court</span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="index.php">
                                                    <span class="pcoded-mtext" >Events</span>
                                                </a>
                                            </li>
                                           <li class=" ">
                                        <a href="index.php">
                                            <span class="pcoded-mtext" >Fashion</span>
                                        </a>
                                    </li>
                                   <li class=" ">
                                        <a href="index.php">
                                            <span class="pcoded-mtext" >Equipment</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="index.php" target="">
                                            <span class="pcoded-mtext">Bulk Buy</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="index.php" target="">
                                            <span class="pcoded-mtext">Hair & Skin care</span>
                                        </a>
                                    </li> 
									 <li class=" ">
                                        <a href="index.php" target="">
                                            <span class="pcoded-mtext">Art's & Crafts</span>
                                        </a>
                                    </li>
                                      <li class=" ">
                                        <a href="index.php" target="">
                                            <span class="pcoded-mtext">Policies</span>
                                        </a>
                                    </li>
									<li class=" ">
                                        <a href="index.php" target="">
                                            <span class="pcoded-mtext">Manufacture</span>
                                        </a>
                                    </li>
                                        
                           </ul>
                            </li>
							<div class="pcoded-navigatio-lavel">BlackBuy Vetting</div>
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-layers"></i></span>
                                    <span class="pcoded-mtext" >Vetting System</span>
                                </a>
                                <ul class="pcoded-submenu">
                                  <li class="">
                                        <a href="product_edit.php">
                                            <span class="pcoded-mtext" >Vet my Item</span>
                                        </a>
                                    </li>
                                   <li class="">
                                        <a href="product_list.php">
                                            <span class="pcoded-mtext" >Vetted Items</span>
                                        </a>
                                    </li> 

                                </ul>
                            </li>
                        </ul>
                 
                    </div>
                </nav>
				
				
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <!-- Main-body start -->
                        <div class="main-body">
                            <div class="page-wrapper">
                                <!-- Page-header start -->
                                <div class="page-header">
                                    <div class="row align-items-end">
                                        <div class="col-lg-8">
                                            <div class="page-header-title">
                                                <div class="d-inline">
                                                    <h4>BlackBuy Shelf</h4>
                                                    <span><b>Buy Your own<br />Upload Your own<br /> and Sell Your Own</b></span>
                                                </div>
                                            </div>
                                        </div>
									<!--	<script type="text/javascript" src="https://form.myjotform.com/jsform/91917536932567"></script>-->
                                        <div class="col-lg-4">
                                            <div class="page-header-breadcrumb">
                                                <ul class="breadcrumb-title">
                                                    <li class="breadcrumb-item">
                                                        <a href="index.php"> <i class="feather icon-home"></i> </a>
                                                    </li>
                                                    <li class="breadcrumb-item"><a href="index.php">Shelf</a>
                                                    </li>
                                                    <li class="breadcrumb-item"><a href="produvyy-detail.com">Product  detail</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Page-header end -->
                                    <!-- Page body start -->
                                    <div class="page-body">
                                        <!-- Product list start -->
                                        <div class="row">
                                             <div class="col-xl-4 col-md-4 col-sm-4 col-xs-8">
                                                <div class="card prod-view">
                                                    <div class="prod-item text-center">
                                                        <div class="prod-img">
                                                            <div class="option-hover">
                                                                <button type="button" class="btn btn-success btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                                   <a class="icofont icofont-cart-alt f-20" href="product_cart.php"></a>
                                                                </button>
                                                                <button type="button" class="btn btn-primary btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                                    <i class="icofont icofont-eye-alt f-20"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-danger btn-icon waves-effect waves-light hvr-bounce-in option-icon">
                                                                    <i class="icofont icofont-heart-alt f-20"></i>
                                                                </button>
                                                            </div>
                                                            <a href="http://127.0.0.1:8081/detail/ladies_outerwear/Ziyanda+Electric+Kettle" class="hvr-shrink">
                                                                <img src="https://ipfs.io/ipfs/QmWzETfm6Hcg2A24cpvDdXaZmdw5UDRphh4C5F6U2HYRiu/p2.jpg" class="img-fluid o-hidden" alt="prod1.jpg">
                                                            </a>
                                                            <div class="p-sale">SALE</div>
                                                        </div>
                                                        <div class="prod-info">
                                                            <h4>Appliances & Electronics</h4>
                                                            <div class="m-b-10">
                                                                <label class="label label-success">3.5 <i class="fa fa-star"></i></label><a class="text-muted f-w-600">14 Ratings &amp;  3 Reviews</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                  <div class="col-xl-4 col-md-4 col-sm-4 col-xs-8">
                                                <div class="card prod-view">
                                                    <div class="prod-item text-center">
                                                        <div class="prod-img">
                                                            <div class="option-hover">
                                                                <button type="button" class="btn btn-success btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                                    <a class="icofont icofont-cart-alt f-20" href="product_cart.php"></a>
                                                                </button>
                                                                <button type="button" class="btn btn-primary btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                                    <i class="icofont icofont-eye-alt f-20"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-danger btn-icon waves-effect waves-light hvr-bounce-in option-icon">
                                                                    <i class="icofont icofont-heart-alt f-20"></i>
                                                                </button>
                                                            </div>
                                                            <a href="http://127.0.0.1:8081/detail/ladies_outerwear/Ladies+High+Heels" class="hvr-shrink">
                                                                <img src="https://ipfs.io/ipfs/QmWzETfm6Hcg2A24cpvDdXaZmdw5UDRphh4C5F6U2HYRiu/p1.jpg" class="img-fluid o-hidden" alt="prod1.jpg">
                                                            </a>
                                                        </div>
                                                        <div class="prod-info">
                                                            <a href="#!" class="txt-muted"><h4>Fashion - Footwear</h4></a>
                                                            <div class="m-b-10">
                                                                <label class="label label-success">3.5 <i class="fa fa-star"></i></label><a class="text-muted f-w-600">14 Ratings &amp;  3 Reviews</a>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                               <div class="col-xl-4 col-md-4 col-sm-4 col-xs-8">
                                                <div class="card prod-view">
                                                    <div class="prod-item text-center">
                                                        <div class="prod-img">
                                                            <div class="option-hover">
                                                                <button type="button" class="btn btn-success btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                                  <a class="icofont icofont-cart-alt f-20" href="product_cart.php"></a>
                                                                </button>
                                                                <button type="button" class="btn btn-primary btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                                    <i class="icofont icofont-eye-alt f-20"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-danger btn-icon waves-effect waves-light hvr-bounce-in option-icon">
                                                                    <i class="icofont icofont-heart-alt f-20"></i>
                                                                </button>
                                                            </div>
                                                            <a href="http://127.0.0.1:8081/detail/ladies_outerwear/Mens+Designer+Socks" class="hvr-shrink">
                                                                <img src="https://ipfs.io/ipfs/QmWzETfm6Hcg2A24cpvDdXaZmdw5UDRphh4C5F6U2HYRiu/p8.jpg" class="img-fluid o-hidden" alt="prod1.jpg">
                                                            </a>
                                                        </div>
                                                        <div class="prod-info">
                                                            <a href="#!" class="txt-muted"><h4>Fashion - Socks</h4></a>
                                                            <div class="m-b-10">
                                                                <label class="label label-success">3.5 <i class="fa fa-star"></i></label><a class="text-muted f-w-600">14 Ratings &amp;  3 Reviews</a>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                
                                               <div class="col-xl-4 col-md-4 col-sm-4 col-xs-8">
                                                <div class="card prod-view">
                                                    <div class="prod-item text-center">
                                                        <div class="prod-img">
                                                            <div class="option-hover">
                                                                <button type="button" class="btn btn-success btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                                  <a class="icofont icofont-cart-alt f-20" href="product_cart.php"></a>
                                                                </button>
                                                                <button type="button" class="btn btn-primary btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                                    <i class="icofont icofont-eye-alt f-20"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-danger btn-icon waves-effect waves-light hvr-bounce-in option-icon">
                                                                    <i class="icofont icofont-heart-alt f-20"></i>
                                                                </button>
                                                            </div>
                                                            <a href="http://127.0.0.1:8081/detail/ladies_outerwear/Mens+Watch" class="hvr-shrink">
                                                                <img src="https://ipfs.io/ipfs/QmWzETfm6Hcg2A24cpvDdXaZmdw5UDRphh4C5F6U2HYRiu/p29.jpg" class="img-fluid o-hidden" alt="prod1.jpg">
                                                            </a>
                                                        </div>
                                                        <div class="prod-info">
                                                            <a href="#!" class="txt-muted"><h4>Mens Watch</h4></a>
                                                            <div class="m-b-10">
                                                                <label class="label label-success">3.5 <i class="fa fa-star"></i></label><a class="text-muted f-w-600">14 Ratings &amp;  3 Reviews</a>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                <div class="col-xl-4 col-md-4 col-sm-4 col-xs-8">
                                                <div class="card prod-view">
                                                    <div class="prod-item text-center">
                                                        <div class="prod-img">
                                                            <div class="option-hover">
                                                                <button type="button" class="btn btn-success btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                                   <a class="icofont icofont-cart-alt f-20" href="product_cart.php"></a>
                                                                </button>
                                                                <button type="button" class="btn btn-primary btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                                    <i class="icofont icofont-eye-alt f-20"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-danger btn-icon waves-effect waves-light hvr-bounce-in option-icon">
                                                                    <i class="icofont icofont-heart-alt f-20"></i>
                                                                </button>
                                                            </div>
                                                            <a href="http://127.0.0.1:8081/detail/mens_outerwear/Men+s+Tech+Shell+Full-Zip">
                                                                <img src="https://ipfs.io/ipfs/QmWzETfm6Hcg2A24cpvDdXaZmdw5UDRphh4C5F6U2HYRiu/p7.jpg" class="img-fluid o-hidden" alt="prod1.jpg">
                                                            </a>
                                                        </div>
                                                        <div class="prod-info">
                                                            <h4>Hair Food</h4>
                                                            <div class="m-b-10">
                                                                <label class="label label-success">3.5 <i class="fa fa-star"></i></label><a class="text-muted f-w-600">14 Ratings &amp;  3 Reviews</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                  <div class="col-xl-4 col-md-4 col-sm-4 col-xs-8">
                                                <div class="card prod-view">
                                                    <div class="prod-item text-center">
                                                        <div class="prod-img">
                                                            <div class="option-hover">
                                                                <button type="button" class="btn btn-success btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                                    <a class="icofont icofont-cart-alt f-20" href="product_cart.php"></a>
                                                                </button>
                                                                <button type="button" class="btn btn-primary btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                                    <i class="icofont icofont-eye-alt f-20"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-danger btn-icon waves-effect waves-light hvr-bounce-in option-icon">
                                                                    <i class="icofont icofont-heart-alt f-20"></i>
                                                                </button>
                                                            </div>
                                                            <a href="http://127.0.0.1:8081/detail/ladies_outerwear/Ladies+Sonoma+Hybrid+Knit+Jacket" class="hvr-shrink">
                                                                <img src="https://ipfs.io/ipfs/QmWzETfm6Hcg2A24cpvDdXaZmdw5UDRphh4C5F6U2HYRiu/p16.jpg" class="img-fluid o-hidden" alt="prod1.jpg">
                                                            </a>
                                                            <div class="p-sale">SALE</div>
                                                        </div>
                                                        <div class="prod-info">
                                                            <a href="#!" class="txt-muted"><h4>Food Court - Drinks</h4></a>
                                                            <div class="m-b-10">
                                                                <label class="label label-success">3.5 <i class="fa fa-star"></i></label><a class="text-muted f-w-600">14 Ratings &amp;  3 Reviews</a>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="col-xl-4 col-md-4 col-sm-4 col-xs-8">
                                                <div class="card prod-view">
                                                    <div class="prod-item text-center">
                                                        <div class="prod-img">
                                                            <div class="option-hover">
                                                                <button type="button" class="btn btn-success btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                                   <a class="icofont icofont-cart-alt f-20" href="product_cart.php"></a>
                                                                </button>
                                                                <button type="button" class="btn btn-primary btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                                    <i class="icofont icofont-eye-alt f-20"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-danger btn-icon waves-effect waves-light hvr-bounce-in option-icon">
                                                                    <i class="icofont icofont-heart-alt f-20"></i>
                                                                </button>
                                                            </div>
                                                            <a href="http://127.0.0.1:8081/detail/ladies_outerwear/Ladies+Yerba+Knit+Quarter+Zip" class="hvr-shrink">
                                                                <img src="https://ipfs.io/ipfs/QmWzETfm6Hcg2A24cpvDdXaZmdw5UDRphh4C5F6U2HYRiu/p12.jpg" class="img-fluid o-hidden" alt="prod1.jpg">
                                                            </a>
                                                        </div>
                                                        <div class="prod-info">
                                                            <a href="#!" class="txt-muted"><h4>Table designs</h4></a>
                                                            <div class="m-b-10">
                                                                <label class="label label-success">3.5 <i class="fa fa-star"></i></label><a class="text-muted f-w-600">14 Ratings &amp;  3 Reviews</a>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                              <div class="col-xl-4 col-md-4 col-sm-4 col-xs-8">
                                                <div class="card prod-view">
                                                    <div class="prod-item text-center">
                                                        <div class="prod-img">
                                                            <div class="option-hover">
                                                                <button type="button" class="btn btn-success btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                                 <a class="icofont icofont-cart-alt f-20" href="product_cart.php"></a>
                                                                </button>
                                                                <button type="button" class="btn btn-primary btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                                    <i class="icofont icofont-eye-alt f-20"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-danger btn-icon waves-effect waves-light hvr-bounce-in option-icon">
                                                                    <i class="icofont icofont-heart-alt f-20"></i>
                                                                </button>
                                                            </div>
                                                            <a href="http://127.0.0.1:8081/detail/mens_outerwear/Green+Flex+Fleece+Zip+Hoodie" class="hvr-shrink">
                                                                <img src="https://ipfs.io/ipfs/QmWzETfm6Hcg2A24cpvDdXaZmdw5UDRphh4C5F6U2HYRiu/p18.jpg" class="img-fluid o-hidden" alt="prod1.jpg">
                                                            </a>
                                                            <div class="p-new"><a href="#"> New </a></div>
                                                        </div>
                                                        <div class="prod-info">
                                                            <a href="#" class="txt-muted"><h4>Men's Tech Shell Full-Zip</h4></a>
                                                            <div class="m-b-10">
                                                                <label class="label label-success">3.5 <i class="fa fa-star"></i></label><a class="text-muted f-w-600">14 Ratings &amp;  3 Reviews</a>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-4 col-sm-4 col-xs-8">
                                                <div class="card prod-view">
                                                    <div class="prod-item text-center">
                                                        <div class="prod-img">
                                                            <div class="option-hover">
                                                                <button type="button" class="btn btn-success btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                                    <a class="icofont icofont-cart-alt f-20" href="product_cart.php"></a>
                                                                </button>
                                                                <button type="button" class="btn btn-primary btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                                    <i class="icofont icofont-eye-alt f-20"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-danger btn-icon waves-effect waves-light hvr-bounce-in option-icon">
                                                                    <i class="icofont icofont-heart-alt f-20"></i>
                                                                </button>
                                                            </div>
                                                            <a href="http://127.0.0.1:8081/detail/mens_outerwear/Anvil+L+S+Crew+Neck+-+Grey" class="hvr-shrink">
                                                                <img src="https://ipfs.io/ipfs/QmWzETfm6Hcg2A24cpvDdXaZmdw5UDRphh4C5F6U2HYRiu/p17.jpg" class="img-fluid o-hidden" alt="prod1.jpg">
                                                            </a>
                                                        </div>
                                                        <div class="prod-info">
                                                            <a href="#!" class="txt-muted"><h4>Anvil L/S Crew Neck - Grey</h4></a>
                                                            <div class="m-b-10">
                                                                <label class="label label-success">3.5 <i class="fa fa-star"></i></label><a class="text-muted f-w-600">14 Ratings &amp;  3 Reviews</a>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-4 col-sm-4 col-xs-8">
                                                <div class="card prod-view">
                                                    <div class="prod-item text-center">
                                                        <div class="prod-img">
                                                            <div class="option-hover">
                                                                <button type="button" class="btn btn-success btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                                   <a class="icofont icofont-cart-alt f-20" href="product_cart.php"></a>
                                                                </button>
                                                                <button type="button" class="btn btn-primary btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                                    <i class="icofont icofont-eye-alt f-20"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-danger btn-icon waves-effect waves-light hvr-bounce-in option-icon">
                                                                    <i class="icofont icofont-heart-alt f-20"></i>
                                                                </button>
                                                            </div>
                                                            <a href="http://127.0.0.1:8081/detail/mens_outerwear/Grey+Heather+Fleece+Zip+Hoodie" class="hvr-shrink">
                                                                <img src="https://ipfs.io/ipfs/QmWzETfm6Hcg2A24cpvDdXaZmdw5UDRphh4C5F6U2HYRiu/p31.jpg" class="img-fluid o-hidden" height="300px" alt="prod1.jpg">
                                                            </a>
                                                            <div class="p-sale">SALE</div>
                                                        </div>
                                                        <div class="prod-info">
                                                            <a href="#!" class="txt-muted"><h4>Green Food</h4></a>
                                                            <div class="m-b-10">
                                                                <label class="label label-success">3.5 <i class="fa fa-star"></i></label><a class="text-muted f-w-600">14 Ratings &amp;  3 Reviews</a>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="col-xl-4 col-md-4 col-sm-4 col-xs-8">
                                                <div class="card prod-view">
                                                    <div class="prod-item text-center">
                                                        <div class="prod-img">
                                                            <div class="option-hover">
                                                                <button type="button" class="btn btn-success btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                                   <a class="icofont icofont-cart-alt f-20" href="product_cart.php"></a>
                                                                </button>
                                                                <button type="button" class="btn btn-primary btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                                    <i class="icofont icofont-eye-alt f-20"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-danger btn-icon waves-effect waves-light hvr-bounce-in option-icon">
                                                                    <i class="icofont icofont-heart-alt f-20"></i>
                                                                </button>
                                                            </div>
                                                            <a href="http://127.0.0.1:8081/detail/mens_outerwear/Android+Nylon+Packable+Jacket" class="hvr-shrink">
                                                                <img src="https://ipfs.io/ipfs/QmWzETfm6Hcg2A24cpvDdXaZmdw5UDRphh4C5F6U2HYRiu/p19.jpg" class="img-fluid o-hidden" height="300px" alt="prod1.jpg">
                                                            </a>
                                                            <div class="p-new"><a href="#"> New </a></div>
                                                        </div>
                                                        <div class="prod-info">
                                                            <a href="#!" class="txt-muted"><h4>Android Nylon Packable Jacket</h4></a>
                                                            <div class="m-b-10">
                                                                <label class="label label-success">3.5 <i class="fa fa-star"></i></label><a class="text-muted f-w-600">14 Ratings &amp;  3 Reviews</a>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                               <div class="col-xl-4 col-md-4 col-sm-4 col-xs-8">
                                                <div class="card prod-view">
                                                    <div class="prod-item text-center">
                                                        <div class="prod-img" height="20px">
                                                            <div class="option-hover">
                                                                <button type="button" class="btn btn-success btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                                   <a class="icofont icofont-cart-alt f-20" href="product_cart.php"></a>
                                                                </button>
                                                                <button type="button" class="btn btn-primary btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                                    <i class="icofont icofont-eye-alt f-20"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-danger btn-icon waves-effect waves-light hvr-bounce-in option-icon">
                                                                    <i class="icofont icofont-heart-alt f-20"></i>
                                                                </button>
                                                            </div>
                                                            <a href="http://127.0.0.1:8081/detail/mens_outerwear/Android+Colorblock+Hooded+Pullover"  class="hvr-shrink">
                                                                <img src="https://ipfs.io/ipfs/QmWzETfm6Hcg2A24cpvDdXaZmdw5UDRphh4C5F6U2HYRiu/p14.jpg" class="img-fluid o-hidden" height="300px" width="100%" alt="prod1.jpg">
                                                            </a>
                                                        </div>
                                                        <div class="prod-info">
                                                            <a href="#!" class="txt-muted"><h4>Hooded Sweatshirt</h4></a>
                                                            <div class="m-b-10">
                                                                <label class="label label-success">3.5 <i class="fa fa-star"></i></label><a class="text-muted f-w-600">14 Ratings &amp;  3 Reviews</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    
<div class="col-xl-4 col-md-4 col-sm-4 col-xs-8">
                                                <div class="card prod-view">
                                                    <div class="prod-item text-center">
                                                        <div class="prod-img" height="20px">
                                                            <div class="option-hover">
                                                                <button type="button" class="btn btn-success btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                                   <a class="icofont icofont-cart-alt f-20" href="product_cart.php"></a>
                                                                </button>
                                                                <button type="button" class="btn btn-primary btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                                    <i class="icofont icofont-eye-alt f-20"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-danger btn-icon waves-effect waves-light hvr-bounce-in option-icon">
                                                                    <i class="icofont icofont-heart-alt f-20"></i>
                                                                </button>
                                                            </div>
                                                            <a href="http://127.0.0.1:8081/detail/mens_outerwear/Rowan+Pullover+Hood"  class="hvr-shrink">
                                                                <img src="https://ipfs.io/ipfs/QmWzETfm6Hcg2A24cpvDdXaZmdw5UDRphh4C5F6U2HYRiu/p9.jpg" class="img-fluid o-hidden" height="300px" width="100%" alt="prod1.jpg">
                                                            </a>
                                                        </div>
                                                        <div class="prod-info">
                                                            <a href="#!" class="txt-muted"><h4>Food Court</h4></a>
                                                            <div class="m-b-10">
                                                                <label class="label label-success">3.5 <i class="fa fa-star"></i></label><a class="text-muted f-w-600">14 Ratings &amp;  3 Reviews</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                              <div class="col-xl-4 col-md-4 col-sm-4 col-xs-8">
                                                <div class="card prod-view">
                                                    <div class="prod-item text-center">
                                                        <div class="prod-img">
                                                            <div class="option-hover">
                                                                <button type="button" class="btn btn-success btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                                   <a class="icofont icofont-cart-alt f-20" href="product_cart.php"></a>
                                                                </button>
                                                                <button type="button" class="btn btn-primary btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                                    <i class="icofont icofont-eye-alt f-20"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-danger btn-icon waves-effect waves-light hvr-bounce-in option-icon">
                                                                    <i class="icofont icofont-heart-alt f-20"></i>
                                                                </button>
                                                            </div>
                                                            <a href="http://127.0.0.1:8081/detail/mens_outerwear/Jacquard-Knit+Full-Zip+Fleece" class="hvr-shrink">
                                                                <img src="https://ipfs.io/ipfs/QmWzETfm6Hcg2A24cpvDdXaZmdw5UDRphh4C5F6U2HYRiu/p27.jpg" class="img-fluid o-hidden" height="300px" alt="prod1.jpg">
                                                            </a>
                                                            <div class="p-sale">SALE</div>
                                                        </div>
                                                        <div class="prod-info">
                                                            <a href="#!" class="txt-muted"><h4>Bulk Buy Supplies</h4></a>
                                                            <div class="m-b-10">
                                                                <label class="label label-success">3.5 <i class="fa fa-star"></i></label><a class="text-muted f-w-600">14 Ratings &amp;  3 Reviews</a>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                              <div class="col-xl-4 col-md-4 col-sm-4 col-xs-8">
                                                <div class="card prod-view">
                                                    <div class="prod-item text-center">
                                                        <div class="prod-img">
                                                            <div class="option-hover">
                                                                <button type="button" class="btn btn-success btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                                   <a class="icofont icofont-cart-alt f-20" href="product_cart.php"></a>
                                                                </button>
                                                                <button type="button" class="btn btn-primary btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                                    <i class="icofont icofont-eye-alt f-20"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-danger btn-icon waves-effect waves-light hvr-bounce-in option-icon">
                                                                    <i class="icofont icofont-heart-alt f-20"></i>
                                                                </button>
                                                            </div>
                                                            <a href="http://127.0.0.1:8081/detail/mens_outerwear/Recycled+Plastic+Bottle+Hoodie+-+Green" class="hvr-shrink">
                                                                <img src="https://ipfs.io/ipfs/QmWzETfm6Hcg2A24cpvDdXaZmdw5UDRphh4C5F6U2HYRiu/p12.jpg" class="img-fluid o-hidden" height="300px" alt="prod1.jpg">
                                                            </a>
                                                        </div>
                                                        <div class="prod-info">
                                                            <a href="#!" class="txt-muted"><h4>Fashion - Clothing</h4></a>
                                                            <div class="m-b-10">
                                                                <label class="label label-success">3.5 <i class="fa fa-star"></i></label><a class="text-muted f-w-600">14 Ratings &amp;  3 Reviews</a>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                              <div class="col-xl-4 col-md-4 col-sm-4 col-xs-8">
                                                <div class="card prod-view">
                                                    <div class="prod-item text-center">
                                                        <div class="prod-img">
                                                            <div class="option-hover">
                                                                <button type="button" class="btn btn-success btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                                   <a class="icofont icofont-cart-alt f-20" href="product_cart.php"></a>
                                                                </button>
                                                                <button type="button" class="btn btn-primary btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                                    <i class="icofont icofont-eye-alt f-20"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-danger btn-icon waves-effect waves-light hvr-bounce-in option-icon">
                                                                    <i class="icofont icofont-heart-alt f-20"></i>
                                                                </button>
                                                            </div>
                                                            <a href="http://127.0.0.1:8081/detail/mens_outerwear/Men+s+Voyage+Fleece+Jacket" class="hvr-shrink">
                                                                <img src="https://ipfs.io/ipfs/QmWzETfm6Hcg2A24cpvDdXaZmdw5UDRphh4C5F6U2HYRiu/p34.jpg" class="img-fluid o-hidden" height="300px" alt="prod1.jpg">
                                                            </a>
                                                        </div>
                                                        <div class="prod-info">
                                                            <a href="#!" class="txt-muted"><h4>Livestock Farming</h4></a>
                                                            <div class="m-b-10">
                                                                <label class="label label-success">3.5 <i class="fa fa-star"></i></label><a class="text-muted f-w-600">14 Ratings &amp;  3 Reviews</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                              <div class="col-xl-4 col-md-4 col-sm-4 col-xs-8">
                                                <div class="card prod-view">
                                                    <div class="prod-item text-center">
                                                        <div class="prod-img">
                                                            <div class="option-hover">
                                                                <button type="button" class="btn btn-success btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                                    <a class="icofont icofont-cart-alt f-20" href="product_cart.php"></a>
                                                                </button>
                                                                <button type="button" class="btn btn-primary btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                                    <i class="icofont icofont-eye-alt f-20"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-danger btn-icon waves-effect waves-light hvr-bounce-in option-icon">
                                                                    <i class="icofont icofont-heart-alt f-20"></i>
                                                                </button>
                                                            </div>
                                                            <a href="http://127.0.0.1:8081/detail/mens_outerwear/Eco-Jersey+Chrome+Zip+Up+Hoodie" class="hvr-shrink">
                                                                <img src="https://ipfs.io/ipfs/QmWzETfm6Hcg2A24cpvDdXaZmdw5UDRphh4C5F6U2HYRiu/p5.jpg" class="img-fluid o-hidden" height="300px" alt="prod1.jpg">
                                                            </a>
                                                            <div class="p-sale">SALE</div>
                                                        </div>
                                                        <div class="prod-info">
                                                            <a href="#!" class="txt-muted"><h4> Traditional Clothes</h4></a>
                                                            <div class="m-b-10">
                                                                <label class="label label-success">3.5 <i class="fa fa-star"></i></label><a class="text-muted f-w-600">14 Ratings &amp;  3 Reviews</a>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="col-xl-4 col-md-4 col-sm-4 col-xs-8">
                                                <div class="card prod-view">
                                                    <div class="prod-item text-center">
                                                        <div class="prod-img">
                                                            <div class="option-hover">
                                                                <button type="button" class="btn btn-success btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                                  <a class="icofont icofont-cart-alt f-20" href="product_cart.php"></a>
                                                                </button>
                                                                <button type="button" class="btn btn-primary btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                                    <i class="icofont icofont-eye-alt f-20"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-danger btn-icon waves-effect waves-light hvr-bounce-in option-icon">
                                                                    <i class="icofont icofont-heart-alt f-20"></i>
                                                                </button>
                                                            </div>
                                                            <a href="http://127.0.0.1:8081/detail/mens_outerwear/YouTube+Ultimate+Hooded+Sweatshirt" class="hvr-shrink">
                                                                <img src="https://ipfs.io/ipfs/QmWzETfm6Hcg2A24cpvDdXaZmdw5UDRphh4C5F6U2HYRiu/p20.jpg" class="img-fluid o-hidden" height="300px" alt="prod1.jpg">
                                                            </a>
                                                        </div>
                                                        <div class="prod-info">
                                                            <a href="#!" class="txt-muted"><h4>Fashion - Clothing</h4></a>
                                                            <div class="m-b-10">
                                                                <label class="label label-success">3.5 <i class="fa fa-star"></i></label><a class="text-muted f-w-600">14 Ratings &amp;  3 Reviews</a>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-4 col-sm-4 col-xs-8">
                                                <div class="card prod-view">
                                                    <div class="prod-item text-center">
                                                        <div class="prod-img">
                                                            <div class="option-hover">
                                                                <button type="button" class="btn btn-success btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                                   <a class="icofont icofont-cart-alt f-20" href="product_cart.php"></a>
                                                                </button>
                                                                <button type="button" class="btn btn-primary btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                                    <i class="icofont icofont-eye-alt f-20"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-danger btn-icon waves-effect waves-light hvr-bounce-in option-icon">
                                                                    <i class="icofont icofont-heart-alt f-20"></i>
                                                                </button>
                                                            </div>
                                                            <a href="http://127.0.0.1:8081/detail/mens_outerwear/Tri-blend+Full-Zip+Hoodie" class="hvr-shrink">
                                                                <img src="https://ipfs.io/ipfs/QmWzETfm6Hcg2A24cpvDdXaZmdw5UDRphh4C5F6U2HYRiu/p26.jpg" class="img-fluid o-hidden" height="300px" alt="prod1.jpg">
                                                            </a>
                                                            <div class="p-new"><a href="#"> New </a></div>
                                                        </div>
                                                        <div class="prod-info">
                                                            <a href="#!" class="txt-muted"><h4>Good Drinks</h4></a>
                                                            <div class="m-b-10">
                                                                <label class="label label-success">3.5 <i class="fa fa-star"></i></label><a class="text-muted f-w-600">14 Ratings &amp;  3 Reviews</a>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                               <div class="col-xl-4 col-md-4 col-sm-4 col-xs-8">
                                                <div class="card prod-view">
                                                    <div class="prod-item text-center">
                                                        <div class="prod-img">
                                                            <div class="option-hover">
                                                                <button type="button" class="btn btn-success btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                                    <a class="icofont icofont-cart-alt f-20" href="product_cart.php"></a>
                                                                </button>
                                                                <button type="button" class="btn btn-primary btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                                    <i class="icofont icofont-eye-alt f-20"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-danger btn-icon waves-effect waves-light hvr-bounce-in option-icon">
                                                                    <i class="icofont icofont-heart-alt f-20"></i>
                                                                </button>
                                                            </div>
                                                            <a href="http://127.0.0.1:8081/detail/mens_outerwear/Fleece+Full-Zip+Hoodie" class="hvr-shrink">
                                                                <img src="https://ipfs.io/ipfs/QmWzETfm6Hcg2A24cpvDdXaZmdw5UDRphh4C5F6U2HYRiu/p32.jpg" class="img-fluid o-hidden" height="300px" alt="prod1.jpg">
                                                            </a>
                                                        </div>
                                                        <div class="prod-info">
                                                            <a href="#!" class="txt-muted"><h4>Books</h4></a>
                                                            <div class="m-b-10">
                                                                <label class="label label-success">3.5 <i class="fa fa-star"></i></label><a class="text-muted f-w-600">14 Ratings &amp;  3 Reviews</a>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    <div class="col-xl-4 col-md-4 col-sm-4 col-xs-8">
                                                <div class="card prod-view">
                                                    <div class="prod-item text-center">
                                                        <div class="prod-img">
                                                            <div class="option-hover">
                                                                <button type="button" class="btn btn-success btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                                   <a class="icofont icofont-cart-alt f-20" href="product_cart.php"></a>
                                                                </button>
                                                                <button type="button" class="btn btn-primary btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                                    <i class="icofont icofont-eye-alt f-20"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-danger btn-icon waves-effect waves-light hvr-bounce-in option-icon">
                                                                    <i class="icofont icofont-heart-alt f-20"></i>
                                                                </button>
                                                            </div>
                                                            <a href="http://127.0.0.1:8081/detail/mens_outerwear/Vastrm+Hoodie" class="hvr-shrink">
                                                                <img src="https://ipfs.io/ipfs/QmWzETfm6Hcg2A24cpvDdXaZmdw5UDRphh4C5F6U2HYRiu/p25.jpg" class="img-fluid o-hidden" height="300px" alt="prod1.jpg">
                                                            </a>
                                                            <div class="p-sale">SALE</div>
                                                        </div>
                                                        <div class="prod-info">
                                                            <a href="#!" class="txt-muted"><h4>Bulks of Drinks</h4></a>
                                                            <div class="m-b-10">
                                                                <label class="label label-success">3.5 <i class="fa fa-star"></i></label><a class="text-muted f-w-600">14 Ratings &amp;  3 Reviews</a>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                              <div class="col-xl-4 col-md-5 col-sm-4 col-xs-8">
                                                <div class="card prod-view">
                                                    <div class="prod-item text-center">
                                                        <div class="prod-img">
                                                            <div class="option-hover">
                                                                <button type="button" class="btn btn-success btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                                    <a class="icofont icofont-cart-alt f-20" href="product_cart.php"></a>
                                                                </button>
                                                                <button type="button" class="btn btn-primary btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                                    <i class="icofont icofont-eye-alt f-20"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-danger btn-icon waves-effect waves-light hvr-bounce-in option-icon">
                                                                    <i class="icofont icofont-heart-alt f-20"></i>
                                                                </button>
                                                            </div>
                                                            <a href="http://127.0.0.1:8081/detail/mens_outerwear/Recycled+Plastic+Bottle+Hoodie+-+Green" class="hvr-shrink">
                                                                <img src="https://ipfs.io/ipfs/QmWzETfm6Hcg2A24cpvDdXaZmdw5UDRphh4C5F6U2HYRiu/p11.jpg" class="img-fluid o-hidden" height="300px" width="90%" alt="prod1.jpg">
                                                            </a>
                                                            <div class="p-new"><a href="#"> New </a></div>
                                                        </div>
                                                        <div class="prod-info">
                                                            <a href="#!" class="txt-muted"><h4>Hoodies Clothes</h4></a>
                                                            <div class="m-b-10">
                                                                <label class="label label-success">3.5 <i class="fa fa-star"></i></label><a class="text-muted f-w-600">14 Ratings &amp;  3 Reviews</a>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
     <!--                                         <div class="col-xl-4 col-md-4 col-sm-4 col-xs-8">
                                                <div class="card prod-view">
                                                    <div class="prod-item text-center">
                                                        <div class="prod-img">
                                                            <div class="option-hover">
                                                                <button type="button" class="btn btn-success btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                                    <a class="icofont icofont-cart-alt f-20" href="product_cart.php"></a>
                                                                </button>
                                                                <button type="button" class="btn btn-primary btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                                    <i class="icofont icofont-eye-alt f-20"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-danger btn-icon waves-effect waves-light hvr-bounce-in option-icon">
                                                                    <i class="icofont icofont-heart-alt f-20"></i>
                                                                </button>
                                                            </div>
                                                            <a href="product_detail.php" class="hvr-shrink">
                                                                <img src="https://ipfs.io/ipfs/QmWzETfm6Hcg2A24cpvDdXaZmdw5UDRphh4C5F6U2HYRiu/p32.jpg" class="img-fluid o-hidden" height="300px" alt="prod1.jpg">
                                                            </a>
                                                        </div>
                                                        <div class="prod-info">
                                                            <a href="#!" class="txt-muted"><h4>Arts & Crafts</h4></a>
                                                            <div class="m-b-10">
                                                                <label class="label label-success">3.5 <i class="fa fa-star"></i></label><a class="text-muted f-w-600">14 Ratings &amp;  3 Reviews</a>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                         <div class="col-xl-4 col-md-4 col-sm-4 col-xs-8">
                                                <div class="card prod-view">
                                                    <div class="prod-item text-center">
                                                        <div class="prod-img">
                                                            <div class="option-hover">
                                                                <button type="button" class="btn btn-success btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                                    <a class="icofont icofont-cart-alt f-20" href="product_cart.php"></a>
                                                                </button>
                                                                <button type="button" class="btn btn-primary btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                                    <i class="icofont icofont-eye-alt f-20"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-danger btn-icon waves-effect waves-light hvr-bounce-in option-icon">
                                                                    <i class="icofont icofont-heart-alt f-20"></i>
                                                                </button>
                                                            </div>
                                                            <a href="product_detail.php" class="hvr-shrink">
                                                                <img src="https://ipfs.io/ipfs/QmWzETfm6Hcg2A24cpvDdXaZmdw5UDRphh4C5F6U2HYRiu/p24.jpg" class="img-fluid o-hidden" height="300px" alt="prod1.jpg">
                                                            </a>
                                                        </div>
                                                        <div class="prod-info">
                                                            <a href="#!" class="txt-muted"><h4>Fashion - Footwear</h4></a>
                                                            <div class="m-b-10">
                                                                <label class="label label-success">3.5 <i class="fa fa-star"></i></label><a class="text-muted f-w-600">14 Ratings &amp;  3 Reviews</a>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                         <div class="col-xl-4 col-md-4 col-sm-4 col-xs-8">
                                                <div class="card prod-view">
                                                    <div class="prod-item text-center">
                                                        <div class="prod-img">
                                                            <div class="option-hover">
                                                                <button type="button" class="btn btn-success btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                                    <a class="icofont icofont-cart-alt f-20" href="product_cart.php"></a>
                                                                </button>
                                                                <button type="button" class="btn btn-primary btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                                    <i class="icofont icofont-eye-alt f-20"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-danger btn-icon waves-effect waves-light hvr-bounce-in option-icon">
                                                                    <i class="icofont icofont-heart-alt f-20"></i>
                                                                </button>
                                                            </div>
                                                            <a href="product_detail.php" class="hvr-shrink">
                                                                <img src="https://ipfs.io/ipfs/QmWzETfm6Hcg2A24cpvDdXaZmdw5UDRphh4C5F6U2HYRiu/p23.jpg" class="img-fluid o-hidden" height="300px" alt="prod1.jpg">
                                                            </a>
                                                        </div>
                                                        <div class="prod-info">
                                                            <a href="#!" class="txt-muted"><h4>Food Court - Vegetables</h4></a>
                                                            <div class="m-b-10">
                                                                <label class="label label-success">3.5 <i class="fa fa-star"></i></label><a class="text-muted f-w-600">14 Ratings &amp;  3 Reviews</a>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                         <div class="col-xl-4 col-md-4 col-sm-4 col-xs-8">
                                                <div class="card prod-view">
                                                    <div class="prod-item text-center">
                                                        <div class="prod-img">
                                                            <div class="option-hover">
                                                                <button type="button" class="btn btn-success btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                                    <a class="icofont icofont-cart-alt f-20" href="product_cart.php"></a>
                                                                </button>
                                                                <button type="button" class="btn btn-primary btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                                    <i class="icofont icofont-eye-alt f-20"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-danger btn-icon waves-effect waves-light hvr-bounce-in option-icon">
                                                                    <i class="icofont icofont-heart-alt f-20"></i>
                                                                </button>
                                                            </div>
                                                            <a href="product_detail.php" class="hvr-shrink">
                                                                <img src="https://ipfs.io/ipfs/QmWzETfm6Hcg2A24cpvDdXaZmdw5UDRphh4C5F6U2HYRiu/p10.jpg" class="img-fluid o-hidden" height="300px" alt="prod1.jpg">
                                                            </a>
                                                        </div>
                                                        <div class="prod-info">
                                                            <a href="#!" class="txt-muted"><h4>Hair & Skincare</h4></a>
                                                            <div class="m-b-10">
                                                                <label class="label label-success">3.5 <i class="fa fa-star"></i></label><a class="text-muted f-w-600">14 Ratings &amp;  3 Reviews</a>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>

                                        <!-- Product list end -->
										
										
                                    </div>
                                    <!-- Page body end -->
                                </div>
                            </div>
                            <!-- Main-body end -->
                            <div id="styleSelector">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="../files/assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="../files/assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="../files/assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="../files/assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="../files/assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script type="text/javascript" src="../files/bower_components/jquery/js/jquery.min.js"></script>
    <script type="text/javascript" src="../files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="../files/bower_components/popper.js/js/popper.min.js"></script>
    <script type="text/javascript" src="../files/bower_components/bootstrap/js/bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="../files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="../files/bower_components/modernizr/js/modernizr.js"></script>
    <script type="text/javascript" src="../files/bower_components/modernizr/js/css-scrollbars.js"></script>

    <!-- i18next.min.js -->
    <script type="text/javascript" src="../files/bower_components/i18next/js/i18next.min.js"></script>
    <script type="text/javascript" src="../files/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
    <script type="text/javascript" src="../files/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
    <script type="text/javascript" src="../files/bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>
    <script src="../files/assets/js/pcoded.min.js"></script>
    <script src="../files/assets/js/vartical-layout.min.js"></script>
    <script src="../files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<!-- Custom js -->
<script type="text/javascript" src="../files/assets/js/script.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
</body>
</html>
