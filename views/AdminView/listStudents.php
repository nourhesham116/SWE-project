<?php
require_once(__DIR__ . '/../../model/StudentModel.php');
$studentModel = new StudentModel();

// Get all students
$students = $studentModel->getStudents();
   
?>
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
<div class="row">
<div class="col-sm-12">
<div class="page-sub-header">
<h3 class="page-title">Students</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="students.html">Student</a></li>
<li class="breadcrumb-item active">All Students</li>
</ul>
</div>
</div>
</div>
</div>

<div class="student-group-form">
<div class="row">
<div class="col-lg-3 col-md-6">
<div class="form-group">
<input type="text" class="form-control" placeholder="Search by ID ...">
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="form-group">
<input type="text" class="form-control" placeholder="Search by Name ...">
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="form-group">
<input type="text" class="form-control" placeholder="Search by Phone ...">
</div>
</div>
<div class="col-lg-2">
<div class="search-student-btn">
<button type="btn" class="btn btn-primary">Search</button>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<div class="card card-table comman-shadow">
<div class="card-body">

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Students</h3>
</div>
<div class="col-auto text-end float-end ms-auto download-grp">
<a href="students.html" class="btn btn-outline-gray me-2 active"><i class="feather-list"></i></a>
<a href="students-grid.html" class="btn btn-outline-gray me-2"><i class="feather-grid"></i></a>
<a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> Download</a>
<a href="add-student.html" class="btn btn-primary"><i class="fas fa-plus"></i></a>
</div>
</div>
</div>

<div class="table-responsive">
<table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
<thead class="student-thread">
<tr>
<th>
<div class="form-check check-tables">
<input class="form-check-input" type="checkbox" value="something">
</div>
</th>
<th>ID</th>
<th>Name</th>
<th>Class</th>
<th>DOB</th>
<th>Parent Name</th>
<th>Mobile Number</th>

<th class="text-end">Action</th>
</tr>
</thead>
<tbody>
<?php foreach ($students as $student) : ?>
 <tr>
<td>
<div class="form-check check-tables">
<input class="form-check-input" type="checkbox" value="something">
</div>
</td>
<td><?php echo $student['AdmissionID']; ?></td>
<td>
<h2 class="table-avatar">
<a href="student-details.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-01.jpg" alt="User Image"></a>
<a href="student-details.html"><?php echo $student['FirstName']; ?></a>
</h2>
</td>
<td><?php echo $student['ClassID']; ?></td>
<td><?php echo $student['DateOfBirth']; ?></td>
<td><?php echo $student['ParentID']; ?></td>
<td><?php echo $student['PhoneNumber']; ?></td>
<td class="text-end">
<div class="actions ">
<a href="javascript:;" class="btn btn-sm bg-success-light me-2 ">
<i class="feather-eye"></i>
</a>
<a href="edit-student.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>

<footer>
<p>Copyright © 2022 Dreamguys.</p>
</footer>

</div>

</div>


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/plugins/datatables/datatables.min.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>
