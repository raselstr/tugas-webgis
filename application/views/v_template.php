
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tugas WebGis</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="<?= base_url('binary-admin/'); ?>assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?= base_url('binary-admin/'); ?>assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="<?= base_url('binary-admin/'); ?>assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    <!-- TABLE STYLES-->
    <link href="<?= base_url('binary-admin/'); ?>assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    
    <!-- JQUERY SCRIPTS -->
    <script src="<?= base_url('binary-admin/'); ?>assets/js/jquery-1.10.2.js"></script>
    
   
    
   
   <!-- Library Leaflet Template -->
   <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
   <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">GIS Leaflet</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 03 Agustus 2023 &nbsp; <a href="#" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="<?= base_url('binary-admin/'); ?>assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a  href="<?= base_url('gis/index'); ?>"><i class="fa fa-dashboard"></i> Home</a>
                    </li>
                      <li>
                        <a  href="<?= base_url('gis/viewmap'); ?>"><i class="fa fa-desktop"></i> View</a>
                    </li>
                    <li>
                        <a  href="<?= base_url('gis/viewbasemap'); ?>"><i class="fa fa-qrcode"></i> View Base Map</a>
                    </li>
						   <li  >
                        <a  href="<?= base_url('gis/viewmarker'); ?>"><i class="fa fa-bar-chart-o"></i> Marker</a>
                    </li>	
                      <li  >
                        <a  href="<?= base_url('gis/viewcircle'); ?>"><i class="fa fa-table"></i> Circle</a>
                    </li>
                    <li  >
                        <a  href="<?= base_url('gis/viewpolyline'); ?>"><i class="fa fa-edit"></i> Polyline </a>
                    </li>
                    <li  >
                        <a  href="<?= base_url('gis/viewpolygon'); ?>"><i class="fa fa-edit"></i> Polygon </a>
                    </li>
                    
                    <li  >
                        <a  href="<?= base_url('gis/viewgeojson'); ?>"><i class="fa fa-edit"></i> GeoJSON </a>
                    </li>

                    <li  >
                        <a  href="<?= base_url('gis/viewgetcoordinat'); ?>"><i class="fa fa-edit"></i> Get Coordinat </a>
                    </li>

                    
                    
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i> Lokasi<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?= base_url('Lokasi/input'); ?>">Input Lokasi</a>
                            </li>
                            <li>
                                <a href="<?= base_url('Lokasi/index'); ?>">Pemetaan Lokasi</a>
                            </li>
                            <li>
                                <a href="<?= base_url('Lokasi/listlokasi'); ?>">List Lokasi</a>
                            </li>
                        </ul>
                    </li>
                      
                    <li  >
                        <a class="active-menu"  href="<?= base_url('gis/viewinfo'); ?>"><i class="fa fa-square-o"></i> Info</a>
                    </li>
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2><?= $judul ?></h2>   

                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
                 <!-- ini Konten -->
                 <?php 
                 if($page) {
                    $this->load->view($page);
                 }
                 
                 ?>
                 <!-- ini akhir konten -->
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?= base_url('binary-admin/'); ?>assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?= base_url('binary-admin/'); ?>assets/js/jquery.metisMenu.js"></script>
    <!-- DATA TABLE SCRIPTS -->
    <script src="<?= base_url('binary-admin/'); ?>assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="<?= base_url('binary-admin/'); ?>assets/js/dataTables/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
        </script>
   
    <!-- CUSTOM SCRIPTS -->
    <script src="<?= base_url('binary-admin/'); ?>assets/js/custom.js"></script>
</body>
</html>
