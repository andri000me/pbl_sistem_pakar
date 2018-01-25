 <?php 


 if ($nama_halaman == 'home') {
 	$this->load->view('frontend/layout/header');
 }else{ 	
 	echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">'; 
 }

 if ($nama_halaman == 'home') {
 	$this->load->view('frontend/layout/navbar'); 
 }else{ 	
 	$this->load->view('frontend/layout/navbar1'); 
 }

 $this->load->view($page) ;
 $this->load->view('frontend/layout/footer'); 
 ?>