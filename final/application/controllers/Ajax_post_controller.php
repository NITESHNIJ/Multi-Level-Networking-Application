<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax_post_controller extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		  $this->load->helper('url_helper');
	}

    
    public function user_data_check() {
        $name = $this->input->post('name_s');
        $field = $this->input->post('field_s');

        $hostname="localhost";
        $userid="nitesh";
        $password="nitesh@123";
        $database="care";
        $con=mysqli_connect($hostname,$userid,$password,$database);
        if(!$con)
        {
            die("Can not connect to server");
        }

        $q = "select * from $field where name='$name'";
        $r = mysqli_query($con,$q);
        if(mysqli_num_rows($r)>0){
            echo "no";
        }
        else{
            echo "yes";
        }

        //print_r($data);
        exit;
    }



    public function user_data_add() {
        $val = $this->input->post('val_s');
        $field = $this->input->post('field_s');
        $name = $this->input->post('name_s');

        $hostname="localhost";
        $userid="nitesh";
        $password="nitesh@123";
        $database="care";
        $con=mysqli_connect($hostname,$userid,$password,$database);
        if(!$con)
        {
            die("Can not connect to server");
        }

        $q = "insert into $field(val,name) values('$val','$name')";
        $r = mysqli_query($con,$q);
        if($r){
            echo "ok";
        }
        else{
            echo "no";
        }
    }


    public function get_packages() {

        $hostname="localhost";
        $userid="nitesh";
        $password="nitesh@123";
        $database="care";
        $con=mysqli_connect($hostname,$userid,$password,$database);
        if(!$con)
        {
            die("Can not connect to server");
        }

        $q = "select * from package";
        $r = mysqli_query($con,$q);
        if(mysqli_num_rows($r)>0){
            while($row = mysqli_fetch_assoc($r)){
                $net[] = json_encode($row);
            }																																																																		
            echo json_encode($net);
        }
        else{
            echo "no";
        }

        //print_r($data);
        exit;
    }


    public function update_package() {
        $value = $this->input->post('value');
        $name = $this->input->post('name');
        $id = $this->input->post('id');

        $hostname="localhost";
        $userid="nitesh";
        $password="nitesh@123";
        $database="care";
        $con=mysqli_connect($hostname,$userid,$password,$database);
        if(!$con)
        {
            die("Can not connect to server");
        }

        $q = "update package set val='$value',name='$name'  where id='$id'";
        $r = mysqli_query($con,$q);
        if($r){
            echo "ok";
        }
        else{
            echo "no";
        }
    }

    public function delete_package() {
        $id = $this->input->post('id');

        $hostname="localhost";
        $userid="nitesh";
        $password="nitesh@123";
        $database="care";
        $con=mysqli_connect($hostname,$userid,$password,$database);
        if(!$con)
        {
            die("Can not connect to server");
        }

        $q = "delete from package where id='$id'";
        $r = mysqli_query($con,$q);
        if($r){
            echo "ok";
        }
        else{
            echo "no";
        }
    }
    
    
    public function validate_form() {

        $hostname="localhost";
        $userid="nitesh";
        $password="nitesh@123";
        $database="care";
        $con=mysqli_connect($hostname,$userid,$password,$database);
        if(!$con)
        {
            die("Can not connect to server");
        }

        $field = $this->input->post('field');
        $value = $this->input->post('value');

        $q = "select * from users where $field='$value'";
        $r = mysqli_query($con,$q);
        
        if(mysqli_num_rows($r)>0)
            echo "no";
        else
            echo "yes";
    }

    public function register_user() {
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $sid = $this->input->post('sid');
        $mno = $this->input->post('mno');
        $country = $this->input->post('country');
        $pos = $this->input->post('pos');
        $dir = $this->input->post('dir');
        $pass = md5($this->input->post('pass'));
        $id = $this->input->post('id');

        $hostname="localhost";
        $userid="nitesh";
        $password="nitesh@123";
        $database="care";
        $con=mysqli_connect($hostname,$userid,$password,$database);
        if(!$con)
        {
            die("Can not connect to server");
        }

        $q = "insert into users(name,sponser_id,id,email,mobile,country,position,direction,password,left_child,right_child) values('$name','$sid','$id','$email','$mno','$country','$pos','$dir','$pass',-1,-1)";
        $r = mysqli_query($con,$q);
        
        if($r){
            echo "ok";
        }
        else{
            echo "no";
        }
    }

    public function change_state() {
        $country = $this->input->post('country');
        $state = $this->input->post('state');

        $hostname="localhost";
        $userid="nitesh";
        $password="nitesh@123";
        $database="care";
        $con=mysqli_connect($hostname,$userid,$password,$database);
        if(!$con)
        {
            die("Can not connect to server");
        }

        $q = "update country set valid='$state' where name='$country'";
        $r = mysqli_query($con,$q);
        if($r){
            echo "ok";
        }
        else{
            echo "no";
        }
    }



    public function get_country() {

        $hostname="localhost";
        $userid="nitesh";
        $password="nitesh@123";
        $database="care";
        $con=mysqli_connect($hostname,$userid,$password,$database);
        if(!$con)
        {
            die("Can not connect to server");
        }

        $q = "select * from country";
        $r = mysqli_query($con,$q);
        while($row = mysqli_fetch_assoc($r)){
            $net[] = json_encode($row);
        }																																																																		
        echo json_encode($net);
    }


    public function check_user() {
        $email = $this->input->post('user_email');
        $passcode = $this->input->post('user_password');

        $hostname="localhost";
        $userid="nitesh";
        $password="nitesh@123";
        $database="care";
        $con=mysqli_connect($hostname,$userid,$password,$database);
        if(!$con)
        {
            die("Can not connect to server");
        }

        $q = "select * from users where email='$email' and password='$passcode'";
        $r = mysqli_query($con,$q);
        if(mysqli_num_rows($r)>0){
            echo json_encode($r);
        }
        else{
            echo "no";
        }
    }

    public function get_user() {

        $hostname="localhost";
        $userid="nitesh";
        $password="nitesh@123";
        $database="care";
        $con=mysqli_connect($hostname,$userid,$password,$database);
        if(!$con)
        {
            die("Can not connect to server");
        }

        $q = "select * from users";
        $r = mysqli_query($con,$q);
        while($row = mysqli_fetch_assoc($r)){
            $net[] = json_encode($row);
        }																																																																		
        echo json_encode($net);
    }


    public function update_child() {
        $parent = $this->input->post('parent_id');
        $side = $this->input->post('side');
        $child = $this->input->post('child_id');

        $hostname="localhost";
        $userid="nitesh";
        $password="nitesh@123";
        $database="care";
        $con=mysqli_connect($hostname,$userid,$password,$database);
        if(!$con)
        {
            die("Can not connect to server");
        }

        $q = "update users set $side='$child' where id='$parent'";
        $r = mysqli_query($con,$q);
        if($r){
            echo "ok";
        }
        else{
            echo "no";
        }
    }
}
