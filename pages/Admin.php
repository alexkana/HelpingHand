<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

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
                                              class="d-inline-block align-top"
                                              onclick="window.location = 'mainpage.html'" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a id="item1" class="nav-link" aria-current="page" href="mainpage.html"></a>
            </li>
            <li class="nav-item">
              <button type="button" class="btn btn-danger">Αποσύνδεση</button>
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
              <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
              <div class="mt-3">
                <p></p>
                  <?php
                  echo '<h4>'.$_SESSION['username'].'</h4>';
                  ?>
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
              <div class="col-sm-9 text-secondary">
                  <?php
                  echo $_SESSION['username'];
                  ?>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Email</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                  <?php
                  echo $_SESSION['email'];
                  ?>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 type="password" class="mb-0">Κωδικός Πρόσβασης</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                  <?php
                  echo $_SESSION['password'];
                  ?>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-12">
                <button type=submit class="btn btn-success" id="text2">Επεξεργασία</button>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="col-md-8">
        <h4>Περιγραφή</h4>
        <label id="text1" for="exampleFormControlTextarea1" class="form-label"></label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" required name="message"><?php echo $_SESSION['about'];?></textarea>
      </div>
      <div class="col-md-12">
        <h3>Χρήστες</h3>
        <div class="table-wrapper-scroll-y my-custom-scrollbar">

          <table class="table table-bordered table-striped mb-0">
            <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Όνομα Χρήστη</th>
              <th scope="col">Email</th>
              <th scope="col">κωδικός</th>
             <th> scope="col"></th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td><button type="button" class="btn btn-danger">Διαγραφή</button></td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
              <td><button type="button" class="btn btn-danger">Διαγραφή</button></td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Larry</td>
              <td>the Bird</td>
              <td>@twitter</td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">6</th>
              <td>Larry</td>
              <td>the Bird</td>
              <td>@twitter</td>
            </tr>
            </tbody>
          </table>

        </div>
        <button type="button" class="btn btn-primary">Προσθήκη Χρήστη</button>
      </div>
      <div class="col-md-12">
        <h3>Οργανισμοί</h3>
        <div class="table-wrapper-scroll-y my-custom-scrollbar">

          <table class="table table-bordered table-striped mb-0">
            <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Όργανισμός</th>
              <th scope="col">Email</th>
              <th scope="col">Λειτουργίες</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td><button type="button" class="btn btn-danger">Διαγραφή</button></td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td><button type="button" class="btn btn-danger">Διαγραφή</button></td>
            </tr>

            </tbody>
          </table>

        </div>
        <button type="button" class="btn btn-primary">Προσθήκη Οργανισμού</button>
      </div>

  </div>
</div>
<br><br>


</div>
</body>
</html>