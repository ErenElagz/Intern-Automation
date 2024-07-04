<?php
include "./php/dbcon.php";

session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: ./index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!--Meta-->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>InternHub</title>
    <link rel="icon" type="image/x-icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhOOn89h2oC2mX4CubFI1t2B2ftiUldDH5sHC9BFxd9g&s" />

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <?php include './components/header.php'; ?>

    <!--Form-->
    <section class="container mt-3 row m-auto p-0">
        <form method="post" action="./php/add.php"  class=" p-0 col d-flex flex-column align-items-center justify-content-center">
            <div class="w-100 bg-light -10 rounded-4 p-4">
                <h2 class="fw-bold opacity-75">Add New Internship Entry</h2>
                <!--Student Information-->
                <h4 class=" mt-4">Student Information</h4>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">ID Number</div>
                    </div>
                    <input type="numeric" maxlength="11" class="form-control" name="id_number" required />
                </div>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Name</div>
                    </div>
                    <input type="text" class="form-control" name="name" required />
                </div>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Surname</div>
                    </div>
                    <input type="text" class="form-control" name="surname" required />
                </div>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">School Number</div>
                    </div>
                    <input type="numeric" maxlength="9" class="form-control" name="school_number" required />
                </div>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Department</div>
                    </div>
                    <select class="form-control" name="department" required>
                        <option hidden selected disabled></option>
                        <option value="Computer Engineering">Computer Engineering</option>
                        <option value="Mechanical Engineering">Mechanical Engineering</option>
                        <option value="Electrical Engineering">Electrical Engineering</option>
                        <option value="Civil Engineering">Civil Engineering</option>
                        <option value="Chemical Engineering">Chemical Engineering</option>
                    </select>
                </div>

                <!--Contact Information-->
                <h4 class=" mt-4">Contact Information</h4>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Phone Number</div>
                    </div>
                    <input type="phone" class="form-control" name="contact_phone_number" maxlength="12" name="phone" required placeholder="Start with 90" />
                </div>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">E-mail</div>
                    </div>
                    <input type="email" class="form-control" name="contact_email" required />
                </div>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Residence Address</div>
                    </div>
                    <textarea class="form-control" name="contact_residence_address" rows="1"></textarea>
                </div>

                <!--Company Information-->
                <h4 class=" mt-4">Company Information</h4>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Company Name</div>
                    </div>
                    <input type="numeric" class="form-control" name="company_name" required />
                </div>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Company Industry</div>
                    </div>
                    <select class="form-control"  name="company_industry" required>
                        <option disabled selected hidden></option>
                        <option>Artificial Intelligence</option>
                        <option>Cybersecurity</option>
                        <option>Data Science</option>
                        <option>Software Development</option>
                        <option>Web Development</option>
                        <option>Mobile App Development</option>
                        <option>Cloud Computing</option>
                        <option>IT Consulting</option>
                        <option>Network Administration</option>
                        <option>Database Management</option>
                        <option>Machine Learning</option>
                        <option>Internet of Things (IoT)</option>
                        <option>Blockchain Technology</option>
                        <option>Virtual Reality (VR)</option>
                        <option>Augmented Reality (AR)</option>
                        <option>Robotics</option>
                        <option>Fintech</option>
                        <option>Edtech</option>
                        <option>Health Informatics</option>
                        <option>Biotech</option>
                        <option>Gaming</option>
                        <option>E-commerce</option>
                        <option>Telecommunications</option>
                        <option>Automotive IT</option>
                        <option>Geographic Information Systems (GIS)</option>
                        <option>Digital Marketing</option>
                        <option>Enterprise Software</option>
                        <option>Smart Home Technology</option>
                        <option>Industrial Automation</option>
                    </select>
                </div>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Phone Number</div>
                    </div>
                    <input type="number" class="form-control" maxlength="12" name="company_phone_number" required />
                </div>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">E-mail</div>
                    </div>
                    <input type="email" class="form-control" name="company_email" required />
                </div>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">City</div>
                    </div>
                    <select class="form-control"  name="company_city" required>
                        <option hidden selected disabled></option>
                        <option value="Istanbul">Istanbul</option>
                        <option value="Ankara">Ankara</option>
                        <option value="İzmir">İzmir</option>
                        <option value="Adana">Adana</option>
                        <option value="Adıyaman">Adıyaman</option>
                        <option value="Afyonkarahisar">Afyonkarahisar</option>
                        <option value="Ağrı">Ağrı</option>
                        <option value="Aksaray">Aksaray</option>
                        <option value="Amasya">Amasya</option>
                        <option value="Antalya">Antalya</option>
                        <option value="Ardahan">Ardahan</option>
                        <option value="Artvin">Artvin</option>
                        <option value="Aydın">Aydın</option>
                        <option value="Balıkesir">Balıkesir</option>
                        <option value="Bartın">Bartın</option>
                        <option value="Batman">Batman</option>
                        <option value="Bayburt">Bayburt</option>
                        <option value="Bilecik">Bilecik</option>
                        <option value="Bingöl">Bingöl</option>
                        <option value="Bitlis">Bitlis</option>
                        <option value="Bolu">Bolu</option>
                        <option value="Burdur">Burdur</option>
                        <option value="Bursa">Bursa</option>
                        <option value="Çanakkale">Çanakkale</option>
                        <option value="Çankırı">Çankırı</option>
                        <option value="Çorum">Çorum</option>
                        <option value="Denizli">Denizli</option>
                        <option value="Diyarbakır">Diyarbakır</option>
                        <option value="Düzce">Düzce</option>
                        <option value="Edirne">Edirne</option>
                        <option value="Elazığ">Elazığ</option>
                        <option value="Erzincan">Erzincan</option>
                        <option value="Erzurum">Erzurum</option>
                        <option value="Eskişehir">Eskişehir</option>
                        <option value="Gaziantep">Gaziantep</option>
                        <option value="Giresun">Giresun</option>
                        <option value="Gümüşhane">Gümüşhane</option>
                        <option value="Hakkâri">Hakkâri</option>
                        <option value="Hatay">Hatay</option>
                        <option value="Iğdır">Iğdır</option>
                        <option value="Isparta">Isparta</option>
                        <option value="Kahramanmaraş">Kahramanmaraş</option>
                        <option value="Karabük">Karabük</option>
                        <option value="Karaman">Karaman</option>
                        <option value="Kars">Kars</option>
                        <option value="Kastamonu">Kastamonu</option>
                        <option value="Kayseri">Kayseri</option>
                        <option value="Kırıkkale">Kırıkkale</option>
                        <option value="Kırklareli">Kırklareli</option>
                        <option value="Kırşehir">Kırşehir</option>
                        <option value="Kilis">Kilis</option>
                        <option value="Kocaeli">Kocaeli</option>
                        <option value="Konya">Konya</option>
                        <option value="Kütahya">Kütahya</option>
                        <option value="Malatya">Malatya</option>
                        <option value="Manisa">Manisa</option>
                        <option value="Mardin">Mardin</option>
                        <option value="Mersin">Mersin</option>
                        <option value="Muğla">Muğla</option>
                        <option value="Muş">Muş</option>
                        <option value="Nevşehir">Nevşehir</option>
                        <option value="Niğde">Niğde</option>
                        <option value="Ordu">Ordu</option>
                        <option value="Osmaniye">Osmaniye</option>
                        <option value="Rize">Rize</option>
                        <option value="Sakarya">Sakarya</option>
                        <option value="Samsun">Samsun</option>
                        <option value="Siirt">Siirt</option>
                        <option value="Sinop">Sinop</option>
                        <option value="Sivas">Sivas</option>
                        <option value="Şırnak">Şırnak</option>
                        <option value="Tekirdağ">Tekirdağ</option>
                        <option value="Tokat">Tokat</option>
                        <option value="Trabzon">Trabzon</option>
                        <option value="Tunceli">Tunceli</option>
                        <option value="Şanlıurfa">Şanlıurfa</option>
                        <option value="Uşak">Uşak</option>
                        <option value="Van">Van</option>
                        <option value="Yalova">Yalova</option>
                        <option value="Yozgat">Yozgat</option>
                        <option value="Zonguldak">Zonguldak</option>
                    </select>
                </div>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Residence Address</div>
                    </div>
                    <textarea class="form-control" name="company_address" rows="1"></textarea>
                </div>

                <!--Internship Program Information-->
                <h4 class=" mt-4">Internship Program Information</h4>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Authhorized Person Name</div>
                    </div>
                    <input type="numeric" class="form-control" name="internship_authorized_person_name" required />
                </div>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Authhorized Person Title</div>
                    </div>
                    <input type="text" class="form-control" name="internship_authorized_person_title" required />

                </div>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Department</div>
                    </div>
                    <input type="text" class="form-control" name="internship_department" required />
                </div>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">How many days?</div>
                    </div>
                    <input type="number" class="form-control" name="internship_days" required />
                </div>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Start Date</div>
                    </div>
                    <input type="date" class="form-control" name="internship_start_date" required />
                </div>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">End Date</div>
                    </div>
                    <input type="date" class="form-control" name="internship_end_date" required />
                </div>

                <!--Button-->
                <div class="d-flex gap-2 mt-3">
                    <button class="btn btn-danger w-100 rounded-3 " type="reset">Clear the Form</button>
                    <button class="btn btn-success w-100 rounded-3 text-light" name="submit" type="submit">Save</button>
                </div>
            </div>
        </form>
    </section>

    <!--JS-->
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>

</body>

</html>