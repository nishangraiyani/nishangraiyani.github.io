<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['detsuid']==0)) {
  header('location:logout.php');
  } else{

if(isset($_POST['submit']))
  {
  	$userid=$_SESSION['detsuid'];
    $dateexpense=$_POST['dateexpense'];
     $item=$_POST['item'];
     $costitem=$_POST['costitem'];
    $query=mysqli_query($con, "insert into tblexpense(UserId,ExpenseDate,ExpenseItem,ExpenseCost) value('$userid','$dateexpense','$item','$costitem')");
if($query){
echo "<script>alert('Expense has been added');</script>";
echo "<script>window.location.href='manage-expense.php'</script>";
} else {
echo "<script>alert('Something went wrong. Please try again');</script>";

}
  
}
  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Daily Expense Tracker || Add Expense</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
		<style>
		.btn-change3{
    height: 50px;
    width: 100px;
    background: lightskyblue;
    margin: 20px;
    align-items: center;
    float: left;
    border:0px;
    color:#fff;
    box-shadow: 0 0 1px #ccc;
    -webkit-transition-duration: 0.3s;
    -webkit-transition-timing-function: ease-out;
    -webkit-box-shadow: 0px 0px 0 0 #164ed0 inset , 0px 0px 0 #31708f inset;
}
.btn-change3:hover{
    -webkit-box-shadow: 0px 50px 0 0px #164ed0 inset , 0px -50px 0 0px #31708f inset; 
}
	</style>
</head>
<body style="background-color: #4f6ded">
	<?php include_once('includes/header.php');?>
	<?php include_once('includes/sidebar.php');?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row" >
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Expense </li>
			</ol>
		</div><!--/.row-->
		
		
				
		
		<div class="row">
			<div class="col-lg-12" style="padding-top: 20px;">
			
				
				
				<div class="panel panel-default" style="background-color: rgba(255, 255, 255, .15);
		padding-top: 20px;
    backdrop-filter: blur(25px) saturate(200%);
    -webkit-backdrop-filter: blur(25px) saturate(200%);
    background-color: rgba(1, 19, 19, 0.6);
    border-radius: 12px;
    border: 1px solid rgba(209, 213, 219, 0.3);
    display: grid;
    border-radius: 55px;
    backdrop-filter: blur(11px);
">
					<div class="panel-heading" style="background-color: white;
    backdrop-filter: blur(25px) saturate(200%);
    -webkit-backdrop-filter: blur(25px) saturate(200%);
   margin-left: 10px;
   margin-right: 10px;
    border-radius: 12px;
    border: 1px solid rgba(209, 213, 219, 0.3);
    display: grid;
    border-radius: 55px;
    backdrop-filter: blur(11px);
    text-align: center;
     margin-left: 35px;
   margin-right: 30px;
">Add Expense</div>
					<div class="panel-body">
						<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
						<div class="col-md-12" >
							
							<form role="form" method="post" action="">
								<div class="form-group" >
									<label style="color: white;">Date of Expense</label>
									<input class="form-control" type="date" value="" name="dateexpense" required="true"style="background-color: white;
   
   margin-left: 10px;
   margin-right: 10px;
    border-radius: 12px;
    border: 1px solid rgba(209, 213, 219, 0.3);
   
    border-radius: 55px;
    backdrop-filter: blur(11px);
" >
								</div>
								<div class="form-group">
									<label style="color: white;">Item</label>
									<input type="text" class="form-control" name="item" value="" required="true" style="background-color: white;
    backdrop-filter: blur(25px) saturate(200%);
    -webkit-backdrop-filter: blur(25px) saturate(200%);
   margin-left: 10px;
   margin-right: 10px;
    border-radius: 12px;
    border: 1px solid rgba(209, 213, 219, 0.3);
    display: grid;
    border-radius: 55px;
    backdrop-filter: blur(11px);
">
								</div>
								
								<div class="form-group">
									<label style="color: white;">Cost of Item</label>
									<input class="form-control" type="text" value="" required="true" name="costitem" style="background-color: white;
    backdrop-filter: blur(25px) saturate(200%);
    -webkit-backdrop-filter: blur(25px) saturate(200%);
   margin-left: 10px;
   margin-right: 10px;
    border-radius: 12px;
    border: 1px solid rgba(209, 213, 219, 0.3);
    display: grid;
    border-radius: 55px;
    backdrop-filter: blur(11px);
">
								</div>
																
								<div class="form-group has-success">
									<button type="submit" class="btn-change3" name="submit" style="padding-left: 40px; padding-right: 40px; height: 50px; align-self: center; ">Add</button>
								</div>
								
								
								</div>
								
							</form>
						</div>
					</div>
				</div><!-- /.panel-->
			</div><!-- /.col-->
			
		</div><!-- /.row -->

	</div><!--/.main-->
	
<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	
</body>
</html>
<?php }  ?>