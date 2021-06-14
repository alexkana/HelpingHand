<!doctype html>
<html lang="en">
<head >
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <!--Font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <link rel="icon" href="../images/logo.png">
    <!--Javascript File-->
    <script type="text/javascript" src="../scripts/script.js"></script>
    <script type="text/javascript" src="../scripts/Mainpage.js"></script>

    <!-- CSS file -->
    <link rel="stylesheet" type="text/css" href="../styles/style.css">

    <title>A Helping Hand</title>
</head>
<body style="background-color:whitesmoke">

<?php include('../phpScripts/navbar.php'); ?>

<div id="slider">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../images/maxresdefault.jpg" class="d-block w-100" alt="..."
                     width="800" height="600">
            </div>
            <div class="carousel-item">
                <img src="../images/image1170x530cropped.jpg"
                     class="d-block w-100" alt="..." width="800" height="600">
            </div>
            <div class="carousel-item">
                <img src="../images/lancet-poverty-pollution-wikipedia-commons.jpg"
                     class="d-block w-100" alt="..." width="800" height="600">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

</div>

<div class="container-fluid">
    <div class="jumbotron">
        <h1 id="title_text" class="display-4"></h1>
        <p id="title_sub_text" class="lead"></p>
    </div>
</div>


<div class="container-fluid padding">
    <div class="row padding">
        <div class="col-lg-6">
            <img src="../images/photo-1488521787991-ed7bbaae773c.jpg" class="img-fluid">
        </div>
        <div class="col-md-12 col-lg-6">
            <h3 id="title1" class="rect header_font"  ></h3>
            <br><br><br><br><br><br><br>
            <div class="shadow p-3 mb-5 bg-white rounded">
                <p id="p11">
                </p>
                <p id="p12">
                </p>
            </div>
        </div>
    </div>
</div>

<hr class="my-4">

<div class="container-fluid padding">

    <div class="row padding">
        <div  class="col-lg-6">
            <img  src="../images/3a48223574be4d29dfa0bacb5707ee1b.jpg" class="img-fluid">
        </div>
        <div class="col-md-12 col-lg-6">
            <h3 id="title2" class="rect header_font"></h3>
            <br><br><br><br><br>
            <div class="shadow p-3 mb-5 bg-white rounded">
                <p id="p21">
                    </p>
                <p id="p22">
                </p>
            </div>
        </div>
    </div>
</div>

<hr class="my-4">

<div class="container-fluid padding">
    <div class="row padding">
        <div class="col-lg-6">
            <img src="../images/nigeria.jpg" class="img-fluid">
        </div>
        <div class="col-md-12 col-lg-6">

            <h3 id="title3" class="rect header_font" ></h3>
            <br><br><br><br><br><br><br>
            <div class="shadow p-3 mb-5 bg-white rounded">
                <p id="p31">


            </div>
        </div>
    </div>
</div>

<hr class="my-4">

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div style="text-align: center;">
            <h3 id="footer_title" style="font-weight:600"></h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
            <div style="text-align: center;">
            <img src="../images/mass-icon-15.jpg" width="100px" height="100px" class="img-fluid">
            <p id="note1">
            </p>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
            <div style="text-align: center;">
            <img src="../images/1-in-5-people.png" width="100px" height="100px" class="img-fluid">
            <p id="note2">
            </p>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
            <div style="text-align: center;">
            <img src="../images/no-money.jpg" width="100px" height="100px" class="img-fluid">
            <p id="note3">
            </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
            <div style="text-align: center;">
                <img src="../images/war.png" width="100px" height="100px" class="img-fluid">
                <p id="note4">
                </p>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
            <div style="text-align: center;">
                <img src="../images/kids2.png" width="100px" height="100px" class="img-fluid">
                <p id="note5">
                </p>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
            <div style="text-align: center;">
                <img src="../images/poverty.png" width="100px" height="100px" class="img-fluid">
                <p id="note6">

                </p>
            </div>
        </div>

        <div class="col-6"></div>
    </div>

</div>

<hr class="my-4">

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div style="text-align: center;">
                <h3 id="btn_sec_title" style="font-weight:600"></h3>
            </div>
        </div>
        <div class="col-lg-12 col-md-12">
            <div style="text-align: center;">
                <p id="btn_sec_p1"></p>
                <button id="btn_sec_1" onclick="location.href = 'Organization.html' " type="button" class="btn btn-3 btn-sep bi bi-heart"></button>
                <p id="btn_sec_p2"> </p>
                <button id="btn_sec_2" onclick="location.href = 'LoginPage.html' " type="button" class="btn btn-3 btn-sep bi bi-heart"></button>

            </div>
        </div>
    </div>
</div>


<!-- Footer -->
<?php include('../phpScripts/footer.php')?>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>
<script>checkLanguageText();
 trans_navbar();</script>
</body>

</html>

           