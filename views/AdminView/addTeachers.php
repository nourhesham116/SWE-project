
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Admin Dashboard</title>
    <link rel="shortcut icon" href="..\views\AdminView\assets\img\favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap"rel="stylesheet">
    <link rel="stylesheet" href="assets\plugins\bootstrap\css\bootstrap.min.css">
    <link rel="stylesheet" href="assets\plugins\feather\feather.css">
    <link rel="stylesheet" href="assets\plugins\icons\flags\flags.css">
    <link rel="stylesheet" href="assets\plugins\fontawesome\css\fontawesome.min.css">
    <link rel="stylesheet" href="assets\plugins\fontawesome\css\all.min.css">
    <link rel="stylesheet" href="assets\css\style.css">
    
</head>

<body>

<?php
include "adminNav.php";
?>
<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Add Teachers</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="teachers.html">Teachers</a></li>
<li class="breadcrumb-item active">Add Teachers</li>
</ul>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-body">
<form>
<div class="row">
<div class="col-12">
<h5 class="form-title"><span>Basic Details</span></h5>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Teacher ID <span class="login-danger">*</span></label>
<input type="text" class="form-control" placeholder="Teacher ID">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Name <span class="login-danger">*</span></label>
<input type="text" class="form-control" placeholder="Enter Name">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Gender <span class="login-danger">*</span></label>
<select class="form-control select">
<option>Male</option>
<option>Female</option>
<option>Others</option>
</select>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms calendar-icon">
<label>Date Of Birth <span class="login-danger">*</span></label>
<input class="form-control datetimepicker" type="text" placeholder="DD-MM-YYYY">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Mobile <span class="login-danger">*</span></label>
<input type="text" class="form-control" placeholder="Enter Phone">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms calendar-icon">
<label>Joining Date <span class="login-danger">*</span></label>
<input class="form-control datetimepicker" type="text" placeholder="DD-MM-YYYY">
</div>
</div>
<div class="col-12 col-sm-4 local-forms">
<div class="form-group">
<label>Qualification <span class="login-danger">*</span></label>
<input class="form-control" type="text" placeholder="Enter Joining Date">
</div>
</div>
 <div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Experience <span class="login-danger">*</span></label>
<input class="form-control" type="text" placeholder="Enter Experience">
</div>
</div>
<div class="col-12">
<h5 class="form-title"><span>Login Details</span></h5>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Username <span class="login-danger">*</span></label>
<input type="text" class="form-control" placeholder="Enter Username">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Email ID <span class="login-danger">*</span></label>
<input type="email" class="form-control" placeholder="Enter Mail Id">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Password <span class="login-danger">*</span></label>
<input type="text" class="form-control" placeholder="Enter Password">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Repeat Password <span class="login-danger">*</span></label>
<input type="text" class="form-control" placeholder="Repeat Password">
</div>
</div>
<div class="col-12">
<h5 class="form-title"><span>Address</span></h5>
</div>
<div class="col-12">
<div class="form-group local-forms">
<label>Address <span class="login-danger">*</span></label>
<input type="text" class="form-control" placeholder="Enter address">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>City <span class="login-danger">*</span></label>
<input type="text" class="form-control" placeholder="Enter City">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>State <span class="login-danger">*</span></label>
<input type="text" class="form-control" placeholder="Enter State">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Zip Code <span class="login-danger">*</span></label>
<input type="text" class="form-control" placeholder="Enter Zip">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Country <span class="login-danger">*</span></label>
<input type="text" class="form-control" placeholder="Enter Country">
</div>
</div>
<div class="col-12">
<div class="student-submit">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>

</div>


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/plugins/select2/js/select2.min.js"></script>

<script src="assets/plugins/moment/moment.min.js"></script>
<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>