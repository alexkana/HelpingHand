<!DOCTYPE html>
<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Font-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <link rel="icon" href="../images/logo.png">
    <!--Javascript File-->
    <script type="text/javascript" src="../scripts/script.js"></script>
    <script src="../scripts/Contact.js"></script>

    <!-- CSS file -->
    <link rel="stylesheet" type="text/css" href="../styles/style.css">

    <title>A Helping Hand</title>
</head>
<body>

<?php include('../phpScripts/navbar.php')?>

<script>
    document.getElementById("item4").className = "nav-link active";
</script>
<div class="container">
    <section id="form">
        <form action="../phpScripts/send_email.php5" method=post>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email :</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required name="user_email">
        </div>
        <div class="mb-3">
            <label id="text1" for="exampleFormControlTextarea1" class="form-label"></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required name="message"></textarea>
        </div>
        <div class="mb-3">
            <button type=submit class="btn btn-primary btn-lg" id="text2"></button>
        </div>
        </form>
    </section>



    <script>
        checkLanguageText();
    </script>
</div>

<!-- Footer -->
<?php include('../phpScripts/footer.php')?>

<script>checkLanguageText();
trans_navbar()</script>

<!-- Optional JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>
</body>
</html>