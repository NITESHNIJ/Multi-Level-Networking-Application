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
    .but_wid{
        width : 200px;
    }
    .shape{
        margin-top : 20px;
        width : 200px;
        height : 100px;
    }
    .gap{
        height : 10px;
    }
    .level2{
        margin-left : 120px;
        margin-right : 120px;
    }
    .level3{
        margin-left : 20px;
        margin-right : 20px;     
    }
    .hide{
      opacity:0;
    }
    .nit_btn{
      float:right;
      width:100px;
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
    <button onclick="popper()" class="btn btn-outline-success my-2 my-sm-0 nit_btn">Back</button>
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
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
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
                <a href="<?php echo base_url();?>index.php/welcome/view_package" class="nav-link">
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
            <a href="#" class="nav-link active">
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
        <div class="row h-100 d-flex justify-content-center align-items-center" id="level1">
            
        </div>
        <div class="row h-100 d-flex justify-content-center align-items-center">
            <div class="gap">
            </div>
        </div>
        <div class="row h-100 d-flex justify-content-center align-items-center" id="level2">
            
        </div>
        <div class="row h-100 d-flex justify-content-center align-items-center">
            <div class="gap">
            </div>
        </div>
        <div class="row h-100 d-flex justify-content-center align-items-center" id="level3">
            
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
    let tree = {};
    let once = 1;
    let val = {};
    let stack = [];

    window.onload = function() {
        get_tree();
    };

    function get_tree(){
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>index.php/ajax_post_controller/get_user",
            cache:false,
            data: {},
            success: function(res) {
                let temp_tree = JSON.parse(res);
                temp_tree.forEach(make_tree); 
                stack.push('0');
                build_tree('0');
            }
        });
    }

    
    function make_tree(node){
      let temp_node = JSON.parse(node);
      let node_id = temp_node['id'];
      tree[node_id] = temp_node;
    }

    function build_tree(root_id){
        document.getElementById('level1').innerHTML = "";
        document.getElementById('level2').innerHTML = "";
        document.getElementById('level3').innerHTML = "";

       let count = 0;
       let level = 'level1';
       let queue = [root_id];

      while(queue.length >0){
        temp_parent = queue.shift();

        if(count == 1)
          level = 'level2';
        if(count == 3)
          level = 'level3';
        if(count == 7)
          return;

        let box = "";
        if(temp_parent!='-1'){
          box = `
            <div class="small-box bg-info shape `+level+`">
              <div class="inner">
                <h3>ID : `+tree[temp_parent].id+`</h3>
                <p>Name : `+tree[temp_parent].name+`</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>`

          if(level == 'level3'){
            box = box + `<button class="small-box-footer but_wid" onclick="make_sense('`+temp_parent+`')">Further... <i class="fas fa-arrow-circle-right"></i></button>`;
          }
                
          box = box + '</div>';
          queue.push(tree[temp_parent].left_child);
          queue.push(tree[temp_parent].right_child);
        }
        else{
          box = `
            <div class="small-box bg-info shape hide `+level+`">
              <div class="inner">
                <h3>ID : </h3>
                <p>Name : </p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
            </div>`;
          queue.push('-1');
          queue.push('-1');
        }
        

        document.getElementById(level).innerHTML = document.getElementById(level).innerHTML + box;
        count = count + 1;

      }
       
    }

    function make_sense(val){
      stack.push(val);
      build_tree(val);
    }
    
    function popper(){
      if(stack.length > 1){
        stack.pop();
        build_tree(stack[stack.length-1]);
      }
      else{
        alert("nothing behind");
      }
    }
</script>
</body>
</html>
 