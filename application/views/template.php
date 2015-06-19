<?php 
ini_set('display_errors',"On");

$this->load->view('templates/head');
$this->load->view('templates/header');
$this->load->view($v);
$this->load->view('templates/footer');
 ?>