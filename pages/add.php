<?php
// Existing database connection
$dbcon = new mysqli("localhost", "root", "", "internship") or die("Connection failed: " . $dbcon->connect_error);

// Prepare and bind
$stmt = $dbcon->prepare("INSERT INTO interns (
    id_number, name, surname, school_number, department, 
    contact_phone_number, contact_email, contact_residence_address, 
    company_name, company_industry, company_phone_number, company_email, 
    company_city, company_residence_address, 
    internship_authorized_person_name, internship_authorized_person_title, 
    internship_department, internship_days, internship_start_date, 
    internship_end_date
) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

$stmt->bind_param("issssssssssssssssiss", 
    $id_number, 
    $name, 
    $surname, 
    $school_number, 
    $department, 
    $contact_phone_number, 
    $contact_email, 
    $contact_residence_address, 
    $company_name, 
    $company_industry, 
    $company_phone_number, 
    $company_email, 
    $company_city, 
    $company_residence_address, 
    $internship_authorized_person_name, 
    $internship_authorized_person_title, 
    $internship_department, 
    $internship_days, 
    $internship_start_date, 
    $internship_end_date
);

// Set parameters from POST data
$id_number = $_POST['id_number'];
$name = $_POST['name'];
$surname = $_POST['surname'];
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
$company_residence_address = $_POST['company_address'];
$internship_authorized_person_name = $_POST['internship_authorized_person_name'];
$internship_authorized_person_title = $_POST['internship_authorized_person_title'];
$internship_department = $_POST['internship_department'];
$internship_days = $_POST['internship_days'];
$internship_start_date = $_POST['internship_start_date'];
$internship_end_date = $_POST['internship_end_date'];

// Execute and check errors
if ($stmt->execute()) {
    header("Location: ../home.php");
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$dbcon->close();
?>
