<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url();?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url();?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url();?>plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url();?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url();?>plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <style type="text/css">
			.select{
                float:left;
                margin-left:20px;
            }

            .inp_h{
                height:33px;
            }

            .inp{
                font-size:20px;
                float:left;
                margin-left:20px;
            }
		</style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="<?php echo base_url();?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Administrator</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url();?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Home</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=".#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Empty</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Packages
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url();?>index.php/welcome/add_package" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Package</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link  active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Packages</p>
                </a>
              </li>
              
            </ul> 
            <li class="nav-item">
                <a href="<?php echo base_url();?>index.php/welcome/register_page" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                    Register
                    <i class="fas  right"></i>
                </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo base_url();?>index.php/welcome/manage_country" class="nav-link">
                <i class="nav-icon fas fa-file"></i>
                <p>
                    Manage Country
                    <i class="fas  right"></i>
                </p>
                </a>
            </li>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url();?>index.php/welcome/display" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Display
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <div class="content-wrapper" >
    <div class="card">
              <div class="card-header">
                <h3 class="card-title">List of Packages</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th style="width: 10px">Package</th>
                      <th style="width: 10px">Value</th>
                      <th style="width: 10px">Edit Name</th>
                      <th style="width: 10px">Edit Value</th>
                      <th style="width: 10px">Update</th>
                      <th style="width: 10px">Delete</th>
                    </tr>
                  </thead>
                  <tbody id="table_val">
                    
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
        </div>
  </div>
</div>
<!-- ./wrapper -->
            
<!-- jQuery -->
<script src="<?php echo base_url();?>plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url();?>plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url();?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url();?>plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url();?>plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo base_url();?>plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url();?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url();?>plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url();?>plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url();?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url();?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo base_url();?>plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url();?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url();?>dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>dist/js/demo.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script>

    let list_str = "";

    window.onload = function() {
        get_package();
    };
  

    function get_package(){
        $.ajax({
        type: "POST",
        url: "<?php echo base_url(); ?>index.php/ajax_post_controller/get_packages",
        cache:false,
        data: {},
        success: function(res) {
            if(res=="no"){
                document.getElementById("table_val").innerHTML = "";
            }
            else{
                let info = JSON.parse(res);
                show_info(info);
            }
        }
                                
        });
    }

    function show_info(info){
        list_str = "";
        info.forEach(display_item);
        document.getElementById("table_val").innerHTML = list_str;
    } 

    function display_item(each_item, index){
        each_item = JSON.parse(each_item);
        list_str = list_str + "<tr><td>"+each_item.id+"</td><td><b>"+each_item.name+"</b></td><td><b>"+each_item.val+"</b></td><td><input id='"+each_item.id+"_name' type='text' value='"+each_item.name+"'></td><td><input id='"+each_item.id+"_val' type='text' value='"+each_item.val+"'></td><td><button onclick='update_it("+each_item.id+")' type='button'>Update</button></td><td><button onclick='delete_it("+each_item.id+")' type='button'>Delete</button></td></tr>";

    }

    function update_it(id){
        let new_name = document.getElementById(id+'_name').value;
        let new_val = document.getElementById(id+'_val').value;
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>index.php/ajax_post_controller/update_package",
            cache:false,
            data: {id:id, value:new_val, name:new_name},
            success: function(res) {
                if(res=="ok"){
                    alert("updated Succesfully");
                    get_package();
                }
                else{
                    alert("Please try later");
                }
            }   
        });
    }

    function delete_it(id){
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>index.php/ajax_post_controller/delete_package",
            cache:false,
            data: {id:id},
            success: function(res) {
                if(res=="ok"){
                    alert("Deleted Succesfully");
                    get_package();
                }
                else{
                    alert("Please try later");
                }
            }   
        });
    }
</script>
</body>
</html>
