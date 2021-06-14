<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="icon" href="../images/logo.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
            crossorigin="anonymous"></script>
    <script src="../scripts/addBtnUserForm.js"></script>
    <script src="../scripts/addBtnOrgForm.js"></script>
    <script src="../scripts/UserPage.js"></script>

    <link rel="stylesheet" type="text/css" href="../styles/Admin.css">
    <meta charset="UTF-8">

    <title>Title</title>

</head>
<body>
<section id="nav">
    <div id="navigation">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="../images/logo.png" heigth="90px" width="90px"
                                                      class="d-inline-block align-top" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown"
                        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a id="item1" class="nav-link" aria-current="page" href="mainpage.php"></a>
                        </li>

                    </ul>

                </div>
            </div>
        </nav>

        </script>

    </div>

</section>


<div class="container">
    <div class="main-body">
        <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin"
                                 class="rounded-circle" width="150">
                            <div class="mt-3">
                                <p></p>
                                <?php echo '<h4>' . $_SESSION['username'] . '</h4>' ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Όνομα Χρήστη</h6>
                            </div>
                            <div id="user_field" class="col-sm-9 text-secondary">
                                <?php echo $_SESSION['username'] ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Email</h6>
                            </div>
                            <div id="email_field" class="col-sm-9 text-secondary">
                                <?php echo $_SESSION['email'] ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 type="password" class="mb-0">Κωδικός Πρόσβασης</h6>
                            </div>
                            <div id="pass_field" class="col-sm-9 text-secondary">
                                <?php echo $_SESSION['password'] ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-12">
                                <button onclick="editInputField()" type=submit class="btn btn-success" id="edit">
                                    Επεξεργασία
                                </button>
                                <button type="submit" class="btn btn-success" id="savebtn" form="edit_user" disabled>
                                    Αποθήκευση Αλλαγών
                                </button>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-8">
                <h4>Περιγραφή</h4>
                <label id="text1" for="exampleFormControlTextarea1" class="form-label"></label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" required
                          name="message"><?php echo $_SESSION['about'] ?></textarea>
            </div>
            <div class="col-md-12">
                <h3>Χρήστες</h3>
                <div class="table-wrapper-scroll-y my-custom-scrollbar">
                    <form method="post" action='../phpScripts/addbuttonUser.php' id="user_add_form"></form>
                    <table class="table table-bordered table-striped mb-0">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Όνομα Χρήστη</th>
                            <th scope="col">Email</th>
                            <th scope="col">Kωδικός</th>
                            <th scope="col">Διαγραφή</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $host = "localhost";
                        $db = "database_structure";
                        $user = "app";
                        $password = "1234";
                        $charset = 'utf8mb4';

                        $conn = new mysqli($host, $user, $password, $db);
                        if ($conn->connect_error) {
                            echo '<p>Error connecting to the database <br>';
                            echo 'Please try again.</p>';
                            exit();
                        } else {
                            $sql = "SELECT * FROM users";
                            $result = $conn->query($sql);
                            $counter = 0;

                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    $name = $row["name"];
                                    $password = $row["password"];
                                    $email = $row['email'];
                                    $counter += 1;
                                    $id = $row['id'];
                                    $form_id = $id . "form";
                                    echo '<tr>
                            <th scope="row">' . $counter . '</th>
                            <td>' . $name . '</td>
                            <td>' . $email . '</td>
                            <td>' . $password . '</td>
                            <td><form method="post" action="../phpScripts/delbutton.php?id=' . $id . '&table=users" id="' . $form_id . '"><button type="submit" form="' . $form_id . '" class="btn btn-danger">Διαγραφή</button></form></td>
                        </tr>';
                                }
                            } else {
                                echo "0 results";
                            }
                        }
                        $conn->close();
                        ?>
                        <tr id="add_row"></tr>
                        </tbody>
                    </table>

                </div>
                <?php
                if (isset($_SESSION['add_error'])) {
                    echo $_SESSION['add_error'];
                }
                unset($_SESSION['add_error']);
                ?>
                <button onclick="addUserForm()" type="button" class="btn btn-primary">Προσθήκη Χρήστη</button>
            </div>
            <div class="col-md-12">
                <h3>Οργανισμοί</h3>
                <div class="table-wrapper-scroll-y my-custom-scrollbar">
                    <form method="post" action='../phpScripts/addbuttonOrg.php' id="org_add_form"></form>
                    <table class="table table-bordered table-striped mb-0">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Όργανισμός</th>
                            <th scope="col">Ιστοσελίδα</th>
                            <th scope="col">Εικόνα</th>
                            <th scope="col" class="desc_Gr">Περιγραφή (Gr)</th>
                            <th scope="col" id="desc_En">Περιγραφή (En)</th>
                            <th scope="col">Διαγραφή</th>
                        </tr>
                        </thead>
                        <tbody>


                        <?php
                        $host = "localhost";
                        $db = "database_structure";
                        $user = "app";
                        $password = "1234";
                        $charset = 'utf8mb4';
                        $counter = 0;
                        $conn = new mysqli($host, $user, $password, $db);
                        if ($conn->connect_error) {
                            echo '<p>Error connecting to the database <br>';
                            echo 'Please try again.</p>';
                            exit();
                        } else {
                            $sql = "SELECT * FROM organizationdata";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    $id = $row["id"];
                                    $title = $row["title"];
                                    $url = $row['url'];
                                    $img_url = $row['imagePath'];
                                    $description_Greek = $row['description_GR'];
                                    $description_English = $row['description_EN'];
                                    $counter += 1;
                                    $form_id = $id . "orgform";
                                    echo '<tr>
                            <th scope="row">' . $counter . '</th>
                            <td>' . $title . '</td>
                            <td>' . $url . '</td>
                            <td>' . $img_url . '</td>
                            <td><div class = "crop">' . $description_Greek . '</div></td>
                            <td><div class="crop">' . $description_English . '</div></td>
                            <td><form method="post" action="../phpScripts/delbutton.php?id=' . $id . '&table=organizationdata" id="' . $form_id . '"><button type="submit" form="' . $form_id . '" class="btn btn-danger">Διαγραφή</button></form></td>
                        </tr>';
                                }
                            } else {
                                echo "0 results";
                            }
                        }
                        $conn->close();
                        ?>
                        <tr id="add_org_row"></tr>
                        </tbody>
                    </table>

                </div>
                <button onclick="addOrgForm()" type="button" class="btn btn-primary">Προσθήκη Οργανισμού</button>
            </div>
            <div class="col-md-12">
                <h3>Email</h3>
                <div class="table-wrapper-scroll-y my-custom-scrollbar">
                    <form method="post"></form>
                    <table class="table table-bordered table-striped mb-0">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Απο</th>
                            <th scope="col">Μήνυμα</th>
                            <th scope="col">Διαγραφή</th>
                            <th scope="col">Απάντηση</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $host = "localhost";
                        $db = "database_structure";
                        $user = "app";
                        $password = "1234";
                        $charset = 'utf8mb4';
                        $conn = new mysqli($host, $user, $password, $db);

                        if ($conn->connect_error) {
                            echo '<p>Error connecting to the database <br>';
                            echo 'Please try again.</p>';
                            exit();
                        } else {
                            $sql = "SELECT * FROM emails";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    $id = $row["id"];
                                    $from = $row["sender"];
                                    $content = $row['content'];
                                    $form_id = $id . "emailform";
                                    echo '<tr>
                            <th scope="row">' . $id . '</th>
                            <td>' . $from . '</td>
                            <td>' . $content . '</td>
                            <td><form method="post" action="../phpScripts/delbutton.php?id=' . $id . '&table=emails" id="' . $form_id . '"><button type="submit" form="' . $form_id . '" class="btn btn-danger">Διαγραφή</button></form></td>
                            <td><a target="_blank" class="btn btn-success" type="submit" href="https://mail.google.com/mail/u/0/?fs=1&tf=cm&to=' . $from . '">Απάντηση</a></td>
          
                        </tr>';
                                }
                            } else {
                                echo "0 results";
                            }
                        }
                        $conn->close();
                        ?>
                        </tbody>
                    </table>

                </div>
            </div>
            <div class="col-md-12">
                <button onclick="disconnect()" type="button" class="btn btn-danger">Αποσύνδεση</button>
            </div>

            <script>
                function disconnect() {
                    if (confirm('Are you sure you want to disconnect ?')) {
                       window.location = 'mainpage.php';
                    }
                }
            </script>

        </div>
    </div>
</div>
<br><br>
