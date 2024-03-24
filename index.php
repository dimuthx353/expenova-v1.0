<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Expenova - Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="./css/reset.css">
  <link rel="stylesheet" href="./css/navigation.css">
  <link rel="stylesheet" href="./css/index.css">


</head>

<body class="d-flex flex-column">
  <div class="container-fluid p-0">
    <?php include_once './includes/navigation.php' ?>
  </div>
  <div class="container-fluid bg-dark h-100 ">
    <div class="container my-content bg-dark d-flex  flex-wrap ">
      <div class="col-lg-6 col-12  h-100 d-flex justify-content-center align-items-center ">
        <div class="my-div d-flex justify-content-center align-items-center">
          <div class="d-flex my-h-200 flex-column justify-content-around">
            <h1 class="text-white"><span class="text-primary expenova-custom">LOGIN</span> <span class="expenova-custom letter-spacing-2"> - EXPENOVA</span></h1>
            <p class="text-white w-80 text-center letter letter-spacing-2 ">"Unlock Your World: Expenova Login, Your Gateway to Efficiency!"</p>
            <button type="button" class="btn btn-outline-primary btn-sm">Login</button>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-12 h-100 d-flex justify-content-center align-items-center ">
        <div id="card-two" class="my-div d-flex justify-content-center align-items-center">
          <div class="d-flex front">
            <img src="./img/sign-up.png" alt="" class="d-block m-auto">
          </div>
          <div class="d-flex back my-h-200 flex-column justify-content-around">
            <h1 class="text-white"><span class="text-primary expenova-custom">SIGNUP</span> <span class=" expenova-custom"> - EXPENOVA</span> </h1>
            <p class="text-white w-80 text-center letter letter-spacing-2">"Empower Your Journey: Join Expenova, Where Growth Begins!"</p>
            <button type="button" class="btn btn-outline-primary btn-sm">SignUp</button>
          </div>
        </div>
        <div class="my-div justify-content-center align-items-center mobile-card">
          <div class="d-flex back my-h-200 flex-column justify-content-around">
            <h1 class="text-white"><span class="text-primary expenova-custom">SIGNUP</span> <span class=" expenova-custom"> - EXPENOVA</span> </h1>
            <p class="text-white w-80 text-center letter letter-spacing-2">"Empower Your Journey: Join Expenova, Where Growth Begins!"</p>
            <button type="button" class="btn btn-outline-primary btn-sm">SignUp</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ! Scripts -->
  <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
  <script src="https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="./js/index.js"></script>
</body>

</html>