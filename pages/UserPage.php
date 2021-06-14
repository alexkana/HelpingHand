<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="icon" href="../images/logo.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
            crossorigin="anonymous"></script>




    <link rel="stylesheet" type="text/css" href="../styles/UserPage.css">
    <link rel="icon" href="../images/logo.png">
    <script type="text/javascript" src="../scripts/script.js"></script>
    <script type="text/javascript" src="../scripts/UserPage.js"></script>


    <meta charset="UTF-8">

    <title>Title</title>

</head>
<body>

<?php include('../phpScripts/navbar.php')?>

<script>
    document.getElementById("item6").className = "nav-link active";
    sessionStorage.setItem("showProfile","true");
    document.getElementById("item6").style.display = "block";
    document.getElementById("item5").style.display = "none";
</script>

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
                        <?php
                          echo '<form method="post" action="../phpScripts/updateUser.php?id='.$_SESSION["id"].'" id="edit_user">'
                                                ?>
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
                                <button onclick="editInputField()" type=button class="btn btn-success" id="edit">Επεξεργασία</button>
                               <button type="submit" class="btn btn-success" id="savebtn" disabled>Αποθήκευση Αλλαγών</button>
                            </div>
                        </div>
                      <?php
                       echo '</form>'
                        ?>
                    </div>
                </div>

            </div>
            <div class="col-md-8">
                <h4>Περιγραφή</h4>
                <label id="text1" for="exampleFormControlTextarea1" class="form-label"></label>
                <div id="description">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"
                          name="message"><?php echo $_SESSION['about'] ?></textarea>
                </div>
            </div>
             <div class="col-md-12">
                            <button type=button class="btn btn-danger"  >Αποσύνδεση</button>
                            <button type=button class="btn btn-danger" >Διαγραφή Λογαριασμού</button>
                        </div>

            </div>

        </div>
    </div>
</div>
</body>
<br><br>

<?php include('../phpScripts/footer.php'); ?>
<script>trans_navbar()</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>
<script>trans_navbar();</script>

</body>
</html>
</body>
</html>
