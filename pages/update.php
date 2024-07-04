<?php
include "../php/dbcon.php";

$id = $_GET["id"];
$sql = "SELECT `id`, `id_number`, `name`, `surname`, `school_number`, `department`, `contact_phone_number`, `contact_email`, `contact_residence_address`, `company_name`, `company_industry`, `company_phone_number`, `company_email`, `company_city`, `company_residence_address`, `internship_authorized_person_name`, `internship_authorized_person_title`, `internship_department`, `internship_days`, `internship_start_date`, `internship_end_date` FROM `interns` WHERE id=$id";
$result = mysqli_query($dbcon, $sql);
$row = mysqli_fetch_assoc($result);

$name = $row['name'];
$surname = $row['surname'];
$id_number = $row['id_number'];
$school_number = $row['school_number'];
$department = $row['department'];
$contact_phone_number = $row['contact_phone_number'];
$contact_email = $row['contact_email'];
$contact_residence_address = $row['contact_residence_address'];
$company_name = $row['company_name'];
$company_industry = $row['company_industry'];
$company_phone_number = $row['company_phone_number'];
$company_email = $row['company_email'];
$company_city = $row['company_city'];
$company_residence_address = $row['company_residence_address'];
$internship_authorized_person_name = $row['internship_authorized_person_name'];
$internship_authorized_person_title = $row['internship_authorized_person_title'];
$internship_department = $row['internship_department'];
$internship_days = $row['internship_days'];
$internship_start_date = $row['internship_start_date'];
$internship_end_date = $row['internship_end_date'];

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $id_number = $_POST['id_number'];
    $school_number = $_POST['school_number'];
    $department = $_POST['department'];
    $contact_phone_number = $_POST['contact_phone_number'];
    $contact_email = $_POST['contact_email'];
    $contact_residence_address = $_POST['contact_residence_address'];
    $company_name = $_POST['company_name'];
    $company_industry = $_POST['company_industry'];
    $company_phone_number = $_POST['company_phone_number'];
    $company_email = $_POST['company_email'];
    $company_city = $_POST['company_city'];
    $company_residence_address = $_POST['company_residence_address'];
    $internship_authorized_person_name = $_POST['internship_authorized_person_name'];
    $internship_authorized_person_title = $_POST['internship_authorized_person_title'];
    $internship_department = $_POST['internship_department'];
    $internship_days = $_POST['internship_days'];
    $internship_start_date = $_POST['internship_start_date'];
    $internship_end_date = $_POST['internship_end_date'];

    $sql_update = "UPDATE `interns` SET 
                    id_number='$id_number', 
                    name='$name', 
                    surname='$surname', 
                    school_number='$school_number', 
                    department='$department', 
                    contact_phone_number='$contact_phone_number', 
                    contact_email='$contact_email', 
                    contact_residence_address='$contact_residence_address', 
                    company_name='$company_name', 
                    company_industry='$company_industry', 
                    company_phone_number='$company_phone_number', 
                    company_email='$company_email', 
                    company_city='$company_city', 
                    company_residence_address='$company_residence_address', 
                    internship_authorized_person_name='$internship_authorized_person_name', 
                    internship_authorized_person_title='$internship_authorized_person_title', 
                    internship_department='$internship_department', 
                    internship_days='$internship_days', 
                    internship_start_date='$internship_start_date', 
                    internship_end_date='$internship_end_date' 
                    WHERE id=$id";

    mysqli_query($dbcon, $sql_update);
    header('Location: ./tables.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!--Meta-->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Update Internship Info</title>
    <link rel="icon" type="image/x-icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhOOn89h2oC2mX4CubFI1t2B2ftiUldDH5sHC9BFxd9g&s" />

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php include '../components/header.php'; ?>

    <!--Input-->
    <form method="post" class="container d-flex flex-column align-items-center justify-content-center gap-3 mt-3">
        <div class="w-100 bg-light rounded-3-4 p-4">
            <h4>Personal Information</h4>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">Name</div>
                </div>
                <input type="text" class="form-control" id="NameInput" name="name" required value="<?php echo $name; ?>" />
            </div>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">Surname</div>
                </div>
                <input type="text" class="form-control" id="SurnameInput" name="surname" required value="<?php echo $surname; ?>" />
            </div>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">ID Number</div>
                </div>
                <input type="text" class="form-control" id="IdInput" name="id_number" required value="<?php echo $id_number; ?>" />
            </div>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">School Number</div>
                </div>
                <input type="text" class="form-control" id="SchoolNumberInput" name="school_number" required value="<?php echo $school_number; ?>" />
            </div>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">Department</div>
                </div>
                <input type="text" class="form-control" id="DepartmentInput" name="department" required value="<?php echo $department; ?>" />
            </div>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">Contact Phone Number</div>
                </div>
                <input type="text" class="form-control" id="ContactPhoneNumberInput" name="contact_phone_number" required value="<?php echo $contact_phone_number; ?>" />
            </div>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">Contact Email</div>
                </div>
                <input type="email" class="form-control" id="ContactEmailInput" name="contact_email" required value="<?php echo $contact_email; ?>" />
            </div>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">Contact Residence Address</div>
                </div>
                <input type="text" class="form-control" id="ContactResidenceAddressInput" name="contact_residence_address" required value="<?php echo $contact_residence_address; ?>" />
            </div>

            <h4 class="mt-4">Company Information</h4>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">Company Name</div>
                </div>
                <input type="text" class="form-control" id="CompanyNameInput" name="company_name" required value="<?php echo $company_name; ?>" />
            </div>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">Company Industry</div>
                </div>
                <input type="text" class="form-control" id="CompanyIndustryInput" name="company_industry" required value="<?php echo $company_industry; ?>" />
            </div>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">Company Phone Number</div>
                </div>
                <input type="text" class="form-control" id="CompanyPhoneNumberInput" name="company_phone_number" required value="<?php echo $company_phone_number; ?>" />
            </div>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">Company Email</div>
                </div>
                <input type="email" class="form-control" id="CompanyEmailInput" name="company_email" required value="<?php echo $company_email; ?>" />
            </div>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">Company City</div>
                </div>
                <input type="text" class="form-control" id="CompanyCityInput" name="company_city" required value="<?php echo $company_city; ?>" />
            </div>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">Company Residence Address</div>
                </div>
                <input type="text" class="form-control" id="CompanyResidenceAddressInput" name="company_residence_address" required value="<?php echo $company_residence_address; ?>" />
            </div>

            <h4 class="mt-4">Internshio Information</h4>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">Authorized Person Name</div>
                </div>
                <input type="text" class="form-control" id="InternshipAuthorizedPersonNameInput" name="internship_authorized_person_name" required value="<?php echo $internship_authorized_person_name; ?>" />
            </div>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">Authorized Person Title</div>
                </div>
                <input type="text" class="form-control" id="InternshipAuthorizedPersonTitleInput" name="internship_authorized_person_title" required value="<?php echo $internship_authorized_person_title; ?>" />
            </div>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">Internship Department</div>
                </div>
                <input type="text" class="form-control" id="InternshipDepartmentInput" name="internship_department" required value="<?php echo $internship_department; ?>" />
            </div>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">Internship Days</div>
                </div>
                <input type="number" class="form-control" id="InternshipDaysInput" name="internship_days" required value="<?php echo $internship_days; ?>" />
            </div>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">Start Date</div>
                </div>
                <input type="date" class="form-control" id="InternshipStartDateInput" name="internship_start_date" required value="<?php echo $internship_start_date; ?>" />
            </div>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">End Date</div>
                </div>
                <input type="date" class="form-control" id="InternshipEndDateInput" name="internship_end_date" required value="<?php echo $internship_end_date; ?>" />
            </div>

            <!--Button-->
            <div class="d-flex gap-2 mt-3">
                <button class="btn btn-danger w-100 rounded-2 text-light" type="button">
                    <a href="./home.php" class="nav-link">Back to the MainPage</a>
                </button>
                <button class="btn btn-success w-100 rounded-2 text-light" id="BtnSubmit" name="submit" type="submit">
                    Update the Appointment
                </button>
            </div>
        </div>
    </form>

    <!--JS-->
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>

</body>

</html>