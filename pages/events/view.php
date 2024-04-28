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
                <div class="fw-bold text-decoration-underline col-3">Evénement: </div>
                <div class="col-7">Yoga class</div>
            </div>
            <div class="fs-5 row m-auto mb-3">
                <div class=" text-decoration-underline fw-bold col-3">Date: </div>
                <div class="col-7">01/02/2025</div>
            </div>
            <div class="fs-5 row m-auto mb-3">
                <div class=" col-3 text-decoration-underline fw-bold">Lieu: </div>
                <div class="col-7"> Salle de yoga</div>
            </div>  
            <div class="fs-5 row m-auto mb-3">
                <div class=" text-decoration-underline fw-bold col-3">Heure : </div>
                <div class="col-7"> 13:00 GMT</div>
            </div>
            <div class="fs-5 row m-auto">
                <div class=" col-3 text-decoration-underline fw-bold mb-3">Description : </div>
                <div class="col-7 "> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
            </div>
            
            
        </main>
        </div>
 <script src="../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>