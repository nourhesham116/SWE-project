<!DOCTYPE html>
<html lang="en">
<?php
session_start();
// Check if the user is a teacher and the type is headteacher
if ($_SESSION['user_type'] !== 'Teacher' || $_SESSION['teacher_type'] !== 'Head') {
    echo "User type: {$_SESSION['user_type']}, Teacher type: {$_SESSION['teacher_type']}";
    
    exit();
}
// The rest of your page content goes here
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Admin Dashboard</title>
    <link rel="shortcut icon" href="..\views\AdminView\assets\img\favicon.png">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="assets\plugins\bootstrap\css\bootstrap.min.css">
    <link rel="stylesheet" href="assets\plugins\feather\feather.css">
    <link rel="stylesheet" href="assets\plugins\icons\flags\flags.css">
    <link rel="stylesheet" href="assets\plugins\fontawesome\css\fontawesome.min.css">
    <link rel="stylesheet" href="assets\plugins\fontawesome\css\all.min.css">
    <link rel="stylesheet" href="assets\css\style.css">
</head>

<body>

    <?php
    // Include the common header or navigation
    include "adminNav.php";
    ?>

    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col-sm-12">
                        <div class="page-sub-header">
                            <h3 class="page-title">Add Students</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="../AdminView/listStudents.php">Student</a></li>
                                <li class="breadcrumb-item active">Add Students</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card comman-shadow">
                        <div class="card-body">
                            <form method="post" action="../../controller/StudentsController.php?action=addStudent"> <!-- Change the action attribute accordingly -->

                            <div class="row">
    <div class="col-12">
        <h5 class="form-title student-info">Student Information <span><a
                    href="javascript:;"><i class="feather-more-vertical"></i></a></span>
        </h5>
    </div>
    <div class="col-12 col-sm-4">
        <div class="form-group local-forms">
            <label for="first_name">First Name <span class="login-danger">*</span></label>
            <input class="form-control" type="text" id="first_name" name="first_name" placeholder="Enter First Name">
        </div>
    </div>
    <div class="col-12 col-sm-4">
        <div class="form-group local-forms">
            <label for="last_name">Last Name <span class="login-danger">*</span></label>
            <input class="form-control" type="text" id="last_name" name="last_name" placeholder="Enter Last Name">
        </div>
    </div>
    <div class="col-12 col-sm-4">
        <div class="form-group local-forms">
            <label for="gender">Gender <span class="login-danger">*</span></label>
            <select class="form-control select" id="gender" name="gender">
                <option>Select Gender</option>
                <option value="Female">Female</option>
                <option value="Male">Male</option>
                <option value="Others">Others</option>
            </select>
        </div>
    </div>
    <div class="col-12 col-sm-4">
        <div class="form-group local-forms calendar-icon">
            <label for="dob">Date Of Birth <span class="login-danger">*</span></label>
            <input class="form-control datetimepicker" type="text" id="dob" name="dob" placeholder="DD-MM-YYYY">
        </div>
    </div>
    <div class="col-12 col-sm-4">
        <div class="form-group local-forms">
            <label for="religion">Religion <span class="login-danger">*</span></label>
            <select class="form-control select" id="religion" name="religion">
                <option>Please Select Religion</option>
                <option value="Muslim">Muslim</option>
                <option value="Christian">Christian</option>
                <option value="Others">Others</option>
            </select>
        </div>
    </div>
    <div class="col-12 col-sm-4">
        <div class="form-group local-forms">
            <label for="grade">Class <span class="login-danger">*</span></label>
            <select class="form-control select" id="grade" name="grade">
                <option>Please Select Grade</option>
                <option value="12">12</option>
                <option value="11">11</option>
                <option value="10">10</option>
            </select>
        </div>
    </div>
    <div class="col-12 col-sm-4">
        <div class="form-group local-forms">
            <label for="class">Section <span class="login-danger">*</span></label>
            <select class="form-control select" id="class" name="class">
                <option>Please Select a Class</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
            </select>
        </div>
    </div>
    <div class="col-12 col-sm-4">
        <div class="form-group local-forms">
            <label for="admission_id">Admission ID</label>
            <input class="form-control" type="text" id="admission_id" name="admission_id"
                placeholder="Enter Admission ID">
        </div>
    </div>
    <div class="col-12 col-sm-4">
        <div class="form-group local-forms">
            <label for="parent_name">Parent's Name</label>
            <input class="form-control" type="text" id="parent_name" name="parent_name"
                placeholder="Enter The Name">
        </div>
    </div>
    <div class="col-12 col-sm-4">
        <div class="form-group local-forms">
            <label for="parent_id">Parent ID</label>
            <input class="form-control" type="text" id="parent_id" name="parent_id" placeholder="Enter Parent ID">
        </div>
    </div>
    <div class="col-12 col-sm-4">
        <div class="form-group local-forms">
            <label for="parent_phone">Parent's Phone</label>
            <input class="form-control" type="text" id="parent_phone" name="parent_phone"
                placeholder="Enter Phone Number">
        </div>
    </div>

    <div class="col-12">
        <h5 class="form-title"><span>Login Details</span></h5>
        <div class="col-12 col-sm-4">
            <div class="form-group local-forms">
                <label for="email">Student Email ID <span class="login-danger">*</span></label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter Mail Id">
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="form-group local-forms">
                <label for="password">Student Password <span class="login-danger">*</span></label>
                <input type="text" class="form-control" id="password" name="password" placeholder="Enter Password">
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="form-group local-forms">
                <label for="parent_email">Parent Email ID <span class="login-danger">*</span></label>
                <input type="email" class="form-control" id="parent_email" name="parent_email"
                    placeholder="Enter Parent Mail Id">
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="form-group local-forms">
                <label for="parent_password">Parent Password <span class="login-danger">*</span></label>
                <input type="text" class="form-control" id="parent_password" name="parent_password"
                    placeholder="Enter Parent Password">
            </div>
        </div>
    </div>

    <div class="col-12">
        <div class="student-submit">
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
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

    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/feather.min.js"></script>
    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="assets/plugins/select2/js/select2.min.js"></script>
    <script src="assets/plugins/moment/moment.min.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assets/js/script.js"></script>
    
</body>
<script>
    let counter = 0;

    function generateID(prefix) {
        const validCharacters = '0123456789';
        const randomIDArray = new Uint32Array(5);
        crypto.getRandomValues(randomIDArray);

        let generatedID = prefix;
        for (let i = 0; i < randomIDArray.length; i++) {
            const randomNum = randomIDArray[i] % validCharacters.length;
            generatedID += validCharacters.charAt(randomNum);
        }

        // Ensure the generated ID has exactly 5 digits
        generatedID = generatedID.slice(0, 5);

        return generatedID;
    
    }

    function generateAdmissionID() {
    let admissionID = generateID('10');

    // Check if the admission ID is taken, generate a new one until it's unique
    while (isAdmissionIDTaken(admissionID)) {
        admissionID = generateID('10');
    }

    document.getElementById('admission_id').value = admissionID;
    }

    function generateParentID() {
        const parentID = generateID('20');
        document.getElementById('parent_id').value = parentID;
    }
    

    function isAdmissionIDTaken(admissionID) {
    let isTaken = false;

    $.ajax({
        type: "POST",
        url: "../../controller/StudentsController.php?action=checkAdmissionID",
        data: { admissionID: admissionID },
        async: false,
        success: function(response) {
            isTaken = response === 'taken';

            // Log the result to the console
            console.log('Admission ID ' + admissionID + ' is ' + (isTaken ? 'taken' : 'available'));
        }
    });

    return isTaken;

}
function generateStudentEmail() {
        // Get the values from the form
        const firstName = document.getElementById('first_name').value;
        const admissionID = document.getElementById('admission_id').value;

        // Check if both first name and admission ID are not empty
        if (firstName && admissionID) {
            // Generate the student email
            const studentEmail = `${firstName.toLowerCase()}${admissionID}@nefertari.com`;

            // Set the generated email to the corresponding input field
            document.getElementById('email').value = studentEmail;
        }
    }

    // Function to generate parent email
    function generateParentEmail() {
        // Get the values from the form
        const parentName = document.getElementById('parent_name').value;
        const parentID = document.getElementById('parent_id').value;

        // Check if both parent name and parent ID are not empty
        if (parentName && parentID) {
            // Generate the parent email
            const parentEmail = `${parentName.toLowerCase()}${parentID}@nefertari.com`;

            // Set the generated email to the corresponding input field
            document.getElementById('parent_email').value = parentEmail;
        }
    }

    // Attach event listeners to the name fields to trigger email generation
    document.getElementById('first_name').addEventListener('input', generateStudentEmail);
    document.getElementById('parent_name').addEventListener('input', generateParentEmail);

   
        generateStudentEmail();
        generateParentEmail();
    generateAdmissionID();
    generateParentID();
</script>

</body>
</html>

