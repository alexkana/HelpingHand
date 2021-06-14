<!DOCTYPE html>
<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Font-->

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <link rel="icon" href="../images/logo.png">
    <!--Javascript File-->
    <script type="text/javascript" src="../scripts/script.js"></script>
    <script src="../scripts/AboutUs.js"></script>

    <!-- CSS file -->
    <link rel="stylesheet" type="text/css" href="../styles/style.css">

    <title>A Helping Hand</title>
</head>
<body>

<?php include('../phpScripts/navbar.php'); ?>
<script>
    document.getElementById("item2").className = "nav-link active";
</script>

<div class="container-fluid padding">
    <div class="row padding">
        <div class="col-12">
            <div style="text-align: center;">
                <h3 id="title_text">Σχετικά με εμάς</h3>
                <br>
                <img src="../images/logo.png" class="img-fluid">
            </div>
            <br>
        </div>
        <div class="col-12">
            <p id="text1">
            <p>
            <p id="text2"></p>
            <p id="text3"></p>
            <p id="text4"></p>
            <p id="text5"></p>
            <p id="text6"></p>

        </div>
    </div>
</div>


<!-- Footer -->
<?php include('../phpScripts/footer.php');?>


<!-- Optional JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>
<script>checkLanguageText();
trans_navbar();</script>
</body>
</html>