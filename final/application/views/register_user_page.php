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
                <a href="#" class="nav-link active">
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
  <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Registeration Form</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" id="user_name" placeholder="Enter User Name...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Sponser ID</label>
                        <input type="text" class="form-control" id="user_sid" placeholder="Enter Sponser ID...">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" id="user_email" placeholder="Enter Your Email...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Mobile Number</label>
                        <input type="text" class="form-control" id="user_mno" placeholder="Enter Mobile Number...">
                      </div>
                    </div>
                  </div>


                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Country</label>
                        <select id="countries" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                            
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Position</label>
                        <input type="text" id="user_pos" class="form-control" placeholder="Enter Position...">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                      <!-- radio -->
                      <div class="form-group">
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio1" name="left/right" value="left">
                          <label for="customRadio1" class="custom-control-label">Left</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio2" name="left/right" value="right">
                          <label for="customRadio2" class="custom-control-label">Rigth</label>
                        </div>
                      </div>
                  </div>

                  <div class="row">
                    <div class="col-12">
                      <div class="form-group">
                        <label>Amount</label>
                        <input type="text" id="amount" class="form-control" placeholder="Enter Amount...">
                      </div>
                    </div>
                  </div>
                  <!-- input states -->
                  

                  <div class="row">
                    <div class="col-sm-12">
                        <button type="button" onclick="validate_form()" class="btn btn-primary col-sm-12">Register</button>
                    </div>
                  </div>
                </form>
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
    let tree = {};
    let country_list = "";
    let parent_id,side,child_id;
    window.onload = function() {
        get_country();
        get_tree();
        console.log('Tree : ');
        console.log(tree);
    };

    function get_country(){
        country_list = "";
        $.ajax({
        type: "POST",
        url: "<?php echo base_url(); ?>index.php/ajax_post_controller/get_country",
        cache:false,
        data: {},
        success: function(res) {
            let info = JSON.parse(res);
            info.forEach(make_country);
            document.getElementById("countries").innerHTML = country_list;
        }
                                
        });
    }

    function make_country(country){
        country = JSON.parse(country);
        if(country.valid == 'y')
            country_list = country_list + "<option>"+country.name+"</option>";
    }

    let name,email,sid,mno,country,pos,dir,pass,id,amount;

    function validate_form(){
        console.log("Ran validate_form");
        name = document.getElementById("user_name").value;
        email = document.getElementById("user_email").value;
        sid = document.getElementById("user_sid").value;
        mno = document.getElementById("user_mno").value;
        country = document.getElementById("countries").value;
        pos = document.getElementById("user_pos").value;
        pass = generate_password();
        dir = "";
        amount = document.getElementById("amount").value;
        let ele = document.getElementsByName('left/right'); 
        for(i = 0; i < ele.length; i++) {
            if(ele[i].checked) 
                dir = ele[i].value;
        }
        if(name==""||email==""||sid==""||mno==""||country==""||pos==""||pass==""||dir==""||amount==""){
            alert("None of the fields can be empty");
            return false;
        }
        else{
          let email_val = email_validate();
          if(email_val == false){
            alert("Invalid Email Id");
            return;
          }
          let num_val = num_validate();
          if(num_val == false){
            alert("Mobile Number not valid!");
            return;
          }
          let amount_val = amount_validate();
          if(amount_val == false){
            return;
          }
            check_email();
        }
        
    }

    function amount_validate(){
      amount = Number(amount);
      if(amount%100 == 0){
        return true;
      }
      else{
        return confirm("Amount not a multiple of 100, Submit?");
      }
    }

    function  email_validate(){
      var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
      if(reg.test(email) == false){
        return false;
      }
      else
        return true;
    }

    function  num_validate(){
      if(Number(mno) && mno.length==10){
        return true;
      }
      else
        return false;
    }


    function create_id(){
        console.log("Ran create_id");
        let alpha = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
        let ran1 = Math.random();
        let ran2 = Math.random();
        let ran3 = Math.random();
        let ran_alpha1 = Math.floor(ran1*25);
        let ran_alpha2 = Math.floor(ran2*25);
        ran_alpha1 = alpha[ran_alpha1];
        ran_alpha2 = alpha[ran_alpha2];
        ran_num = Math.floor(ran3*9999);
        final = ran_alpha1+ran_alpha2+ran_num.toString();
        check_id(final);
    }

    function check_email(){
        console.log("Ran check_email");
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>index.php/ajax_post_controller/validate_form",
            cache:false,
            data: {field:'email',value:email},
            success: function(res) {
                if(res=="no"){
                    alert("User with same Mail ID already present.");
                }
                else{
                    create_id();
                }
            }
        });
    }

    function check_id(final){
        console.log("Ran check_id");
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>index.php/ajax_post_controller/validate_form",
            cache:false,
            data: {field:'id',value:final},
            success: function(res) {
                if(res=="no"){
                    create_id();
                }
                else{
                    id = final;
                    alert("ID Succesfuuly Creted. Your ID is : "+id+" and Password is : "+pass);
                    add_user();
                }
            }
        });
    }

    function add_user(){
        console.log("Ran add_user");
        if(tree[sid]){
          $.ajax({
              type: "POST",
              url: "<?php echo base_url(); ?>index.php/ajax_post_controller/register_user",
              cache:false,
              data: {name:name,email:email,sid:sid,mno:mno,country:country,pos:pos,dir:dir,pass:pass,id:id},
              success: function(res) {
                  if(res=="ok"){
                      alert("User Added Partially! In process...");
                      let flag = insert_in_tree();
                      if(flag==true){
                        update_child_db();
                      }
                      else{
                        alert("Please try again!");
                      }
                  }
                  else{
                      alert("Please try later");
                  }
              }
          });
        }
        else{
          alert("Invalid Sponser ID");
        }
    }

    function generate_password(){
        let ran = Math.random();
        let temp = Math.floor(ran*999999);
        return temp;
    }

    function get_tree(){
      console.log("Ran get_tree");
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>index.php/ajax_post_controller/get_user",
            cache:false,
            data: {},
            success: function(res) {
                let temp_tree = JSON.parse(res);
                temp_tree.forEach(make_tree);
            }
        });
    }

    function make_tree(node){
      let temp_node = JSON.parse(node);
      let node_id = temp_node['id'];
      tree[node_id] = temp_node;
      //alert(node_id + '  ' +node_id.length);
    }

    function insert_in_tree(){
      alert('registered under : ' + tree[sid].name);
      console.log(tree[sid]);
      console.log(tree[sid].id);

      

      let queue = [];

      if(dir == 'left'){
        if(tree[sid].left_child == "-1"){
          tree[sid].left_child = id;
          parent_id=sid;
          side='left_child';
          child_id=id;

          return true;
        }
        else{
          queue.push(tree[sid].left_child);
        }
      }
      if(dir == 'right'){
        if(tree[sid].right_child == "-1"){
          tree[sid].right_child = id;
          parent_id=sid;
          side='right_child';
          child_id=id;
          return true;
        }
        else{
          queue.push(tree[sid].right_child);
        }
      }

      while(queue.length>0){
        let temp_id = queue.shift();
        if(tree[temp_id].left_child == "-1"){
          tree[temp_id].left_child = id;
          parent_id=temp_id;
          side='left_child';
          child_id=id;
          return true;
        }
        else{
          queue.push(tree[temp_id].left_child);
        }

        if(tree[temp_id].right_child == "-1"){
          tree[temp_id].right_child = id;
          parent_id=temp_id;
          side='right_child';
          child_id=id;
          return true;
        }
        else{
          queue.push(tree[temp_id].right_child);
        }

      }

    }

    function update_child_db(){
      $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>index.php/ajax_post_controller/update_child",
            cache:false,
            data: {parent_id:parent_id, side:side, child_id:child_id},
            success: function(res) {
                if(res == "ok"){
                  alert("Process Completed");
                  tree = {};
                  get_tree();
                  }
                else
                  alert("Please try again");
            }
        });
    }

</script>
</body>
</html>
 