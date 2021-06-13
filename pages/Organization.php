<!DOCTYPE html>
<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Font-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="//fonts.googleapis.com/css2?family=Varela&display=swap" rel="stylesheet" type="text/css"> -->

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <!--Javascript File-->
    <script type="text/javascript" src="../scripts/script.js"></script>
    <link rel="icon" href="../images/logo.png">

    <!-- CSS file -->
    <link rel="stylesheet" type="text/css" href="../styles/style.css">
    <link rel="stylesheet" type="text/css" href="../styles/Organization.css">


    <title>A Helping Hand</title>
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
                            <a id="item1" class="nav-link" aria-current="page" href="mainpage.html">Αρχική
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
                            <a id="item5" class="nav-link" href="LoginPage.php">Εγγραφή/Σύνδεση</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="lang_selector" class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a onclick="sessionStorage.setItem('language','el');location.reload(); ;trans_navbar()"
                                   href="#" class="dropdown-item">
                                    <img class="flag_icon" src="../images/flag-icons/greece.png" alt="">&nbsp Ελληνικά
                                </a>
                                <a onclick="sessionStorage.setItem('language','en');location.reload();; trans_navbar()"
                                   href="#"
                                   class="dropdown-item">
                                    <img class="flag_icon" src="../images/flag-icons/united-states.png" alt="">&nbsp
                                    English
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <script>
            document.getElementById("item3").className = "nav-link active";
        </script>
    </div>

</section>




<?php
$host = "localhost";
$db = "database_structure";
$user = "root";
$password = "";
$charset = 'utf8mb4';

$conn = new mysqli($host, $user, $password, $db);
if ($conn->connect_error) {
    echo '<p>Error connecting to the database <br>';
    echo 'Please try again.</p>';
    exit();
}else{
    $sql = "SELECT * FROM organizationdata";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $id =  $row["id"];
            $title =  $row["title"];
            $imgSource = $row['imagePath'];
            $description_Greek  = $row['description_GR'];
            $description_English  = $row['description_EN'];
            $url = $row['url'];
            $lan = 0;

            echo ' <hr class="my-4">
 
 
 

    <div class="container-fluid padding">
        <div class="row padding">
            <div class="col-md-6  text-md-left text-center">
                <a target="_blank" href="'.$url.'">
                    <img alt="Qries" src="'.$imgSource.'"
                         style="width: 0.1vw; min-width: 330px;"
                         class="img-fluid">
                </a>
            </div>
            <div class="col-md-6 text-md-right text-center ">
                <div class="text">

                    <h1>
                        <a target="_blank" href="'.$url.'" style="color: #eb3349">'.$title.'</a>
                    </h1>
                    
              
                    <script >



                        if (sessionStorage.getItem("language") === "en") {                   
                           document.write( "'.$description_English.'");
                        }else{
                          document.write( "'.$description_Greek.'");   
                        }
                    </script>
                    
                </div>
            </div>
        </div>
    </div>';


        }
    } else {
        echo "0 results";
    }
}


?>


<!-- Footer -->
<footer class="bg-dark text-center text-lg-start">
    <!-- Grid container -->
    <div class="container p-4">
        <!--Grid row-->
        <div class="row">
            <!--Grid column-->
            <div class="col-lg-6 col-md-4 mb-4 mb-md-0">
                <p id="footer_msg" style="color: whitesmoke"></p>
                <p class="fa fa-phone d-inline"> (+30) 6947483***</p>
            </div>
            <!--Grid column-->
            <!--Grid column-->
            <div class="col-lg-3 col-md-4 mb-4 mb-md-0">
                <center>
                    <ul class="list-unstyled">
                        <li class="footerlinks">
                            <p id="list_title" style="color:whitesmoke">Πλοήγηση</p>
                        </li>
                        <li class="footerlinks">
                            <a id="footer1" style="color:whitesmoke" href="mainpage.html">Αρχική Σελίδα</a>
                        </li>
                        <li class="footerlinks">
                            <a id="footer2" style="color:whitesmoke" href="AboutUs.html">Σχετικά με εμάς</a>
                        </li>

                        <li class="footerlinks">
                            <a id="footer3" style="color:whitesmoke" href="Organization.php">Οργανισμοί</a>
                        </li>
                        <li class="footerlinks">
                            <a id="footer4" style="color:whitesmoke" href="contact.html">Επικοινωνία</a>
                        </li>
                        <li class="footerlinks">
                            <a id="footer5" class="footerlinks" style="color:whitesmoke" href="LoginPage.php">Εγγραφή/Σύνδεση</a>
                        </li>

                    </ul>
                </center>
            </div>

            <!--Grid column-->
            <div class="col-lg-3 col-md-4 mb-4 mb-md-0">
                <center>
                    <ul class="list-unstyled mb-0">
                        <li>
                            <p id="social" style="color: whitesmoke">Κοινωνικά Δίκτυα</p>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/Helping-Hand-110377947861394" target="_blank"
                               class="fa fa-facebook"></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/Helping86441471" target="_blank" class="fa fa-twitter"></a>
                        </li>
                        <li>
                            <a href="https://gr.pinterest.com/helpinghandauth/_saved/" target="_blank"
                               class="fa fa-pinterest"></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/helping_hand.auth/" target="_blank"
                               class="fa fa-instagram"></a>
                        </li>


                    </ul>
                </center>
            </div>
            <!--Grid column-->
            <!--Grid column-->
        </div>
        <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2); color: whitesmoke">
        © 2021 Copyright:
        <a class="text-white" href="">helpingHand.com</a>
    </div>
    <!-- Copyright -->
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>
<script>trans_navbar();</script>

</body>
</html>