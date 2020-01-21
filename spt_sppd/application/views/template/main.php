<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ATKP Makassar | Administrasi</title>
   
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css');?>" >
    <!-- Font Awesome -->
    <link href="<?php echo base_url('assets/css/font-awesome.min.css');?>" rel="stylesheet">
  
    <!-- Custom Theme Style -->
    <link href="<?php echo base_url('assets/css/custom.min.css');?>" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-plane"></i> <span>ATKP Makassar</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <!--div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div-->
              <div class="profile_info">
                <span>Selamat Datang,</span>
                <h2></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>OPERASIONAL</h3>
                <ul class="nav side-menu">
                  <!--li><a href="<?php echo base_url('dashboard');?>"><i class="fa fa-home"></i> Dashboard </a></li-->
                  <li><a href="<?php echo base_url('pegawai');?>"><i class="fa fa-group"></i> Pegawai </a></li>
                  <!--li><a href="<?php echo base_url('admin');?>"><i class="fa fa-user"></i> Admin </a></li-->
                  <li><a href="<?php echo base_url('spt');?>"><i class="fa fa-list-alt"></i> Perintah Tugas </a></li>
                  <li><a href="<?php echo base_url('sppd');?>"><i class="fa fa-calendar"></i> Perjalanan Dinas </a></li>
                  <!--li><a href="http://localhost/spt_sppd/laporan/laporan.php"><i class="fa fa-print"></i> Cetak Laporan </a></li-->
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

          </div>
        </div>


        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">ATKP Makassar
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <!--li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>   
                    </li>
                  </ul>
                </li-->
              </ul>
            </nav>
          </div>
        </div>

        
        <!-- /top navigation -->

        <!-- content -->
        	<div class="right_col" role="main">
    				<div class="">
    					<?=$contents;?>
    				</div>
    			</div>
        <!-- /content -->


      <br />
 </div>
        <!-- footer content -->
       	<footer>
    			<div class="pull-right">
    				Sistem Informasi oleh <a href="http://friendstech.co.id"> &copy; <span style="color: darkred">ikhlas</span></a>
    			</div>
    			<div class="clearfix"></div>
    		</footer>
        <!-- /footer content -->
      </div>
   


    
    <!-- jQuery -->
    <script src="<?=base_url('assets/js/jquery.min.js')?>"></script>
    <!-- Bootstrap -->
    <script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
    <!-- FastClick -->
    <script src="<?=base_url('assets/fastclick/lib/fastclick.js')?>"></script>
    <!-- NProgress -->
    <script src="<?=base_url('assets/nprogress/nprogress.js')?>"></script>
    <!-- jQuery custom content scroller -->
    <script src="<?=base_url('assets/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')?>"></script>

    
    <!-- Custom Theme Scripts -->
    <script src="<?=base_url('assets/js/custom.min.js')?>"></script>

  </body>
</html>