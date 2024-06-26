<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ClubXtreme - Admin dashboard</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<?php include_once "../components/navbar.php";?>
      <div class="container-fluid m-0 p-0 ">
        <div class="row m-0 p-0">
        <?php include_once "../components/asidenav.php";?>
        <main class="col-lg-9 col-12     p-5   mt-0">
            <div class=" fs-5 row m-auto mb-3">
                <div class="fw-bold text-decoration-underline col-4">Id: </div>
                <div class="col-7">55</div>
            </div>
            <div class=" fs-5 row m-auto mb-3">
                <div class="fw-bold text-decoration-underline col-4">Coach: </div>
                <div class="col-7">Saad</div>
            </div>
            <div class="fs-5 row m-auto mb-3">
                <div class=" col-4 text-decoration-underline fw-bold">Exerices: </div>
                <div class="col-7">
                    <ul class="list-unstyled ">
                        <li>bench press </li>
                        <li>lat pull downs</li>
                        <li>lateral raises</li>
                    </ul>
                </div>
            </div> 
            <div class="fs-5 row m-auto mb-3">
                <div class=" text-decoration-underline fw-bold col-4">Date: </div>
                <div class="col-7">12/07/2024</div>
            </div>
            <div class="fs-5 row m-auto mb-3">
                <div class=" text-decoration-underline fw-bold col-4">Heure: </div>
                <div class="col-7">16h00 GMT</div>
            </div>
        </main>
        </div>
 <script src="../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>