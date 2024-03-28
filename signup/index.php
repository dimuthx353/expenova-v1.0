<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "Expenova";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $errors = [];
    $firstname = '';
    $lastname = '';
    $email = '';
    $password = '';

    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        $firstname = $_POST['firstName'];
        $lastname = $_POST['lastName'];
        $email = $_POST['email'];
        $password = $_POST['pwd'];

        if (!$firstname) {
            $errors[] = "First name is required";
        }

        if (!$lastname) {
            $errors[] = "Last name is required";
        }

        if (!$email) {
            $errors[] = "Email name is required";
        }

        if (!$password) {
            $errors[] = "Password name is required";
        }


        if (empty($errors)) {
            $stmt = $conn->prepare("INSERT INTO signup (firstname, lastname, email, pwd) VALUES (:firstname, :lastname, :email, :pwd)");
            $stmt->bindValue(':firstname', $firstname);
            $stmt->bindValue(':lastname', $lastname);
            $stmt->bindValue(':email', $email);
            $stmt->bindValue(':pwd', $password);
            $stmt->execute();

            header("Location: ./signupComplete.php");
        }
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Metadata -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Expenova - Sign Up</title>
    <!-- Favicon -->
    <link rel="icon" href="../img/logo.png" type="image/x-icon">
    <link rel="application/javascript" href="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <!-- Bootstrap Icon  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Font Awesome  -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.css' integrity='sha512-tx5+1LWHez1QiaXlAyDwzdBTfDjX07GMapQoFTS74wkcPMsI3So0KYmFe6EHZjI8+eSG0ljBlAQc3PQ5BTaZtQ==' crossorigin='anonymous' />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/navigation.css">
    <link rel="stylesheet" href="../css/signup.css">
</head>

<body class="d-flex flex-column bg-dark">
    <!-- Navigation -->
    <div class="container-fluid p-0">
        <?php include_once '../includes/navigation.php' ?>
    </div>
    <!-- Main Content -->
    <div class="container-fluid bg-dark text-white p-5 my-content h-100 d-flex justify-content-center align-items-center">
        <div class="container col-lg-4 col-sm-7 col-12 px-lg-5 p-0 ">
            <div class="">
                <?php
                if (empty(!$errors)) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?php
                        foreach ($errors as $error) { ?>

                            <?php echo $error . "<br>" ?>
                        <?php
                        } ?>
                    </div>
                <?php
                }
                ?>

            </div>
            <form id="signupForm" action="../signup/index.php" method="post">
                <div class="mb-3 border-bottom p-2">
                    <h1 class="text-white"><span class="text-info expenova-custom">SIGN UP</span> <span class=" expenova-custom"> - EXPENOVA</span> </h1>
                </div>
                <div class="d-flex">
                    <div class="mb-2 me-3 flex-fill">
                        <label for="exampleInputPassword1" class="form-label">First Name</label>
                        <input type="text" class="form-control" name="firstName" value="<?php echo $firstname ?>" oninput="validateInputs(event)">
                    </div>
                    <div class="mb-2 flex-fill">
                        <label for="exampleInputPassword1" class="form-label">Last Name</label>
                        <input type="text" class="form-control" value="<?php echo $lastname ?>" name="lastName" oninput="validateInputs(event)">
                    </div>
                </div>
                <div class="mb-2">
                    <label for="exampleInputPassword1" class="form-label">Full Name</label>
                    <input type="text" class="form-control" name="fullName" disabled>
                </div>
                <div class=" mb-2">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" aria-describedby="emailHelp" name="email" value="<?php echo $email ?>" oninput="validateEmail(event)">
                </div>
                <div class="mb-2">
                    <label for="exampleInputPassword1" class="form-label">Create Password</label>
                    <input type="password" class="form-control" value="<?php echo $email ?>" name="pwd" oninput="validatePasswords(event)">
                </div>
                <div class="">
                    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" name="pwd2" oninput="validatePasswords()">
                    <div id="pwdErrMsg" class="form-text text-danger opacity-0">Password Not Matching... Check Again!</div>
                </div>
                <button type="submit" class="btn btn-outline-info px-4 btn-lg" name="submit">Sign Up</button>
            </form>
        </div>
    </div>


    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="../js/signup.js"></script>
</body>

</html>