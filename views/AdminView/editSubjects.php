
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
if (!isset($_SESSION['user_type'])) {
    // Redirect to the login page if not logged in
    header("Location: ../../views/login.php");
    exit();
}

// Check if the user is a teacher and the type is headteacher
if ($_SESSION['user_type'] !== 'Teacher' || $_SESSION['teacher_type'] !== 'Head') {
    header("Location: ../../views/unauthorized.php");
    exit();
}
include "adminNav.php";
?>
<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Edit Subject</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="listSubjects.php">Subject</a></li>
<li class="breadcrumb-item active">Edit Subject</li>
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
<h5 class="form-title"><span>Subject Information</span></h5>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Subject ID <span class="login-danger">*</span></label>
<input type="text" class="form-control" value="PRE1534">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Subject Name <span class="login-danger">*</span></label>
<input type="text" class="form-control" value="Botony">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Class <span class="login-danger">*</span></label>
<input type="text" class="form-control" value="9">
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

<script src="assets/js/script.js"></script>
</body>
</html>
