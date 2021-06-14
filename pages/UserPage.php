<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
            crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="../styles/UserPage.css">
    <script type="text/javascript" src="../scripts/UserPage.js"></script>

    <meta charset="UTF-8">

    <title>Title</title>

</head>
<body>
<section id="nav">
    <div id="navigation">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="../images/logo.png" heigth="90px" width="90px"
                                                      class="d-inline-block align-top"
                                                      onclick="window.location = 'mainpage.html'" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown"
                        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a id="item1" class="nav-link" href="mainpage.html">Αρχική
                                Σελίδα</a>
                        </li>
                        <li class="nav-item">
                            <a id="item2" class="nav-link" href="AboutUs.html">Σχετικά με εμάς</a>
                        </li>
                        <li class="nav-item">
                            <a id="item3" class="nav-link" href="Organization.php">Οργανώσεις</a>
                        </li>
                        <li class="nav-item">
                            <a id="item4" class="nav-link" href="contact.html">Επικοινωνία</a>
                        </li>
                        <li class="nav-item">
                            <a id="item5"  aria-current="page" class="nav-link" href="UserPage.php">Το προφίλ μου</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

    </div>

</section>


<div class="container">
    <div class="main-body">
        <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="..\images\avatar-1577909_1280 (1).png" alt="Admin"
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
                        <!--<form method="post" action='' id="edit_user"> -->
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
                                <button onclick="editInputField()" type=submit class="btn btn-success" id="edit">Επεξεργασία</button>
                            </div>
                        </div>
                       <!-- </form> -->
                    </div>
                </div>

            </div>
            <div class="col-md-8">
                <h4>Περιγραφή</h4>
                <label id="text1" for="exampleFormControlTextarea1" class="form-label"></label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" required
                          name="message"><?php echo $_SESSION['about'] ?></textarea>
            </div>

            </div>

        </div>
    </div>
</div>
<br><br>
</body>
</html>
