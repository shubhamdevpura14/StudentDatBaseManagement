<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>GITS | STUDENT MANAGEMENT SYSTEM</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
	
	<link href="css/style.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand static-top shadow">

      <a class="navbar-brand mr-1" href="index.php" style="color:#000">GITS STUDENTS</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars" style="color:#000"></i>
      </button>
    </nav>
  <!-- Sidebar -->
    <div id="wrapper">
      <ul class="sidebar navbar-nav bg shadow">
        <li class="nav-item active-list">
          <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
		
		 <li class="nav-item">
          <a class="nav-link" href="information.php">
             <i class="fas fa-fw fa-user"></i>
            <span>Add Student</span></a>
        </li>
		
        <li class="nav-item">
          <a class="nav-link" href="tables.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Student Data</span></a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">
		 <div class="card shadow">
          <div class="card-body">
          <h4 class="text-center">Dashboard</h4>
		  </div>					 
        </div><br>

         <div class="container">
		 	
           <!--Project Review-->
		
		<div class="row">
		 <div class="col-8">
		 	
		<div class="card hover">
		<div class="card-body">
		<h4 class="text-center">STUDENT RECORD MANAGEMENT SYSTEM</h4><hr>
		</div>
		<p class="container"> 
		 This only use by Faculty Members.
		 It  help the college to store the information about students.
         It shows all the records of students like his <b>branch,year,personal infromation, parents detail</b> also etc.		 
		</p>
		 <h6 class="container"><b>In this we use certain type of TECHNOLOGY:</b></h6>
		 <ul>
		 <li>HTML-CSS</li>
		 <li>JAVA SCRIPT</li>
		 <li>PROCEDURE PHP</li>
		 <li>MYSQL</li>
		 <li>BOOTSTRAP</li>
         </ul>
		<ol>
		<li><h6>Personal Information</h6></li>
		<li><h6>Contact Details</h6></li>
		<li><h6>Parent's Information</h6></li>
		<li><h6>Course & Branch Name</h6></li>
		<li><h6>Year of Enrollment</h6></li>	
		</ol>
		</div>
		
		<br>
		<div class="row">
		 <div class="col-4">
		 <div class="card shadow">
		 <div class="card-body">
		  <h5>Rhythm Biwani</h5>
		  <p>BackEnd & Database Developer</p>
		 </div>
		</div>
		 </div>
		 <div class="col-4">
		  <div class="card shadow">
		 <div class="card-body">
		  <h5>Pradeep Suthar</h5>
		  <p>FrontEnd Developer</p>
		 </div>
		</div>
		 </div>
		 <div class="col-4">
		  <div class="card shadow">
		 <div class="card-body">
		  <h5>Shubham Devpura</h5>
		  <p>FrontEnd & Content Developer</p>
		 </div>
		</div>
		 </div>
		</div><br><br>		
		 </div>
		 <?php
		 $servername="localhost";
              $username="root";
              $password="";
              $dbname="stdmgmtsystem";
              $conn=new mysqli($servername,$username,$password,$dbname);
              if ($conn->connect_error) {
               die("connection failed:".$conn->connect_error);
              }
              else
			  {
				  $sql1 = "select * from student";
				  $sql2 = "select * from student where branch='CSE'";
				  $sql3 = "select * from student where branch='ME'";
				  $sql4 = "select * from student where branch='CE'";
				  $sql5 = "select * from student where branch='AE'";
				  $result1 = $conn->query($sql1);
				  $result2 = $conn->query($sql2);
				  $result3 = $conn->query($sql3);
				  $result4 = $conn->query($sql4);
				  $result5 = $conn->query($sql5);
		 echo "<div class='col-4'>
		  <div class='card card1 shadow'>
		   <div class='card-body'>
		     <h5>Total Students <span class='rating'>".$result1->num_rows."</span></h5>
		   </div>
          </div><br>
         <div class='card card2 shadow'>
		   <div class='card-body'>
		     <h5>CSE Students <span class='rating'>".$result2->num_rows."</span></h5>
		   </div>
          </div><br>
          <div class='card card3 shadow'>
		   <div class='card-body'>
		     <h5>ME Students<span class='rating'>".$result3->num_rows."</span></h5>
		   </div>
          </div><br>
           <div class='card card4 shadow'>
		   <div class='card-body'>
		     <h5>CE Students<span class='rating'>".$result4->num_rows."</span></h5>
		   </div>
          </div><br>
          <div class='card card5 shadow'>
		   <div class='card-body'>
		     <h5>AE Students<span class='rating'>".$result5->num_rows."</span></h5>
		   </div>
          </div><br>		  
		  
		 </div>
		</div>";
		
			  }
		?>
		   <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
            <span>Copyright © Gits student managments system 2018</span>
            </div>
          </div>
        </footer>
      </div>
      <!-- /.content-wrapper -->
    </div>
    <!-- /#wrapper -->
	</div>
	</div>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>
  </body>
</html>