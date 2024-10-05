<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style.css"> <!-- root styles -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css"> <!-- bootstrap -->
    <link rel="stylesheet" href="../assets/css/all.min.css"> <!-- fontawesome -->
    <link rel="stylesheet" href="../assets/webfonts/fa-solid-900.ttf"> <!-- fontawesome -->
    <link rel="stylesheet" href="../assets/webfonts/fa-brands-400.ttf"> <!-- fontawesome -->
    <link rel="stylesheet" href="../assets/alertify/css/alertify.min.css"> <!-- alertify for notification -->
    <link rel="stylesheet" href="../assets/alertify/css/bootstrap.min.css"> <!-- alertify for notification -->
    <script src="../assets/js/bootstrap.min.js"></script> <!-- bootstrap js -->
    <script src="../assets/alertify/js/alertify.min.js"></script> <!-- alertify js -->
    <link rel="icon" href="../assets/images/tibag_seal.png"> <!-- website icon -->
    <title>Tibag Baliuag, Bulacan</title>
</head>
<style>
    body {
        background-color: var(--white);
    }

    p {
        font-family: var(--tnr);
    }

    @media only screen and (max-width: 600px) {
        p {
            font-size: 10px;
        }

        label,
        option {
            font-size: 14px;
        }
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg" style="background-image: linear-gradient(var(--blue), rgba(255,0,0,0));"> <!-- navbar here -->
        <div class="container-fluid">
            <a href="" class="navbar-brand">
                <img src="../assets/images/tibag_seal.png" style="width: 30px; height: 30px;"> Tibag Baliuag, Bulacan
            </a>
        </div>
    </nav> <!-- navbar here -->
    <div class="container container-fluid my-3"> <!-- main container -->
        <div class="shadow shadow-lg rounded p-2 p-lg-3">
            <h2 class="mb-0">Sign Up</h2>
            <p class="mt-0 mb-0">Create an account for Barangay Tibag Baliuag, Bulacan Website</p>
            <div class="border-bottom my-1 px-3"></div>

            <form action="../function/function.php" method="post"> <!-- sign up form -->
                <div class="row g-1 mt-2 mb-1 mb-lg-0"> <!-- first to last name row -->
                    <div class="form-floating mb-1 mb-md-1 mb-lg-2 col-12 col-md-4">
                        <input type="text" class="form-control" placeholder="firstname" name="userFname" id="name" required>
                        <label for="floatingLabel" class="fw-bold">Firstname</label>
                        <span id="errorText" class="text-danger" style="display:none;">Numbers are not allowed</span>
                    </div>
                    <div class="form-floating mb-1 mb-md-1 mb-lg-2 col-12 col-md-4">
                        <input type="text" class="form-control" placeholder="firstname" name="userMname" id="m_name" required>
                        <label for="floatingLabel" class="fw-bold">Middlename</label>
                        <span id="errorText" class="text-danger" style="display:none;">Numbers are not allowed</span>
                    </div>
                    <div class="form-floating mb-1 mb-md-1 mb-lg-2 col-12 col-md-4">
                        <input type="text" class="form-control" placeholder="firstname" name="userLname" id="l_name" required>
                        <label for="floatingLabel" class="fw-bold">Lastname</label>
                        <span id="errorText" class="text-danger" style="display:none;">Numbers are not allowed</span>
                    </div>
                </div> <!-- first to last name row -->

                <div class="row g-1 mb-1 mb-lg-0"> <!-- suffix / birthday / age row -->
                    <div class="form-floating mb-1 mb-lg-2 mb-md-2 col-12 col-md-4">
                        <select name="" id="" class="form-select fw-bold" name="userSuffix" required>
                            <option value="">Open this to select</option>
                            <option value=""></option>
                            <option value="N/A">N/A</option>
                            <option value="Sr">Sr</option>
                            <option value="Jr">Jr</option>
                            <option value="I">I</option>
                        </select>
                        <label for="" class="fw-bold">Suffix</label>
                    </div>
                    <div class="form-floating mb-1 mb-lg-2 mb-md-2 col-8 col-md-4">
                        <input type="date" class="form-control" placeholder="firstname" name="userBirthday" required>
                        <label for="floatingLabel" class="fw-bold">Birthday</label>
                    </div>
                    <div class="form-floating mb-1 mb-lg-2 mb-md-2 col-4 col-md-4">
                        <input type="number" class="form-control" placeholder="firstname" name="userAge" required>
                        <label for="floatingLabel" class="fw-bold">Age</label>
                    </div>
                </div> <!-- suffix / birthday / age row -->

                <div class="row g-1"> <!-- sex row -->
                    <div class="form-floating mb-1 mb-md-3 col-12 col-md-4">
                        <select name="" id="" class="form-select fw-bold" name="userSex" required>
                            <option value="">Open this to select</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        <label for="" class="fw-bold">Sex</label>
                    </div>
                </div> <!-- sex row -->
                
                <div class="border-bottom my-2" style="font-family: var(--tnr);">Account Information</div>

                <div class="row g-1 mt-1 mt-md-2"> <!-- account credential row -->
                    <div class="form-floating mb-1 mb-md-2 col-12 col-md-4">
                        <input type="email" class="form-control" placeholder="firstname" name="emailAddress" autocomplete="off" required>
                        <label for="floatingLabel" class="fw-bold">Email Address</label>
                    </div>
                    <div class="form-floating mb-1 mb-md-2 col-12 col-md-4">
                        <input type="password" class="form-control" placeholder="firstname" id="password" name="userPassword" oninput="validatePassword()" required>
                        <label for="floatingLabel" class="fw-bold">Password</label>
                        <span class="text-danger" id="passwordErr"></span>
                    </div>
                    <div class="form-floating mb-1 mb-md-2 col-12 col-md-4">
                        <input type="password" class="form-control" placeholder="firstname" name="confirmPassword" id="confirm_password" oninput="validateConfirmPassword()" required>
                        <label for="floatingLabel" class="fw-bold">Confirm Password</label>
                        <span class="text-danger" id="confirmPasswordErr"></span>
                    </div>
                </div> <!-- account credential row -->
                <div class="row">
                    <div class="col text-end align-items-end justify-contne">
                        <button class="btn btn-outline-success fw-bold text-center" style="border-radius: 0px;" name="registerAccountBtn">
                            Sign Up
                        </button>
                        <a href="../index.php" class="btn btn-secondary fw-bold" style="border-radius: 0px;">Cancel</a>
                    </div>
                </div>
            </form> <!-- sign up form -->

        </div>
    </div> <!-- main container -->

    <script>
        /* no numbers on first, middle and last name script */
        document.getElementById('name').addEventListener('input', function(event) {
            var input = event.target.value;
            var errorText = document.getElementById('errorText');
            if (/\d/.test(input)) {
                errorText.style.display = 'inline';
                event.target.value = input.replace(/\d/g, ''); // Remove the numeric characters
            } else {
                errorText.style.display = 'none';
            }
        });
        document.getElementById('m_name').addEventListener('input', function(event) {
            var input = event.target.value;
            var errorText = document.getElementById('errorText');
            if (/\d/.test(input)) {
                errorText.style.display = 'inline';
                event.target.value = input.replace(/\d/g, ''); // Remove the numeric characters
            } else {
                errorText.style.display = 'none';
            }
        });
        document.getElementById('l_name').addEventListener('input', function(event) {
            var input = event.target.value;
            var errorText = document.getElementById('errorText');
            if (/\d/.test(input)) {
                errorText.style.display = 'inline';
                event.target.value = input.replace(/\d/g, ''); // Remove the numeric characters
            } else {
                errorText.style.display = 'none';
            }
        });
        /* no numbers on first, middle and last name script */

        /* validate password */
        function validatePassword() {
            let password = document.getElementById('password').value;
            let passwordErr = document.getElementById('passwordErr');
            if (password.length < 6) {
                passwordErr.textContent = 'Password must have at least 6 characters.';
            } else {
                passwordErr.textContent = '';
            }
            validateConfirmPassword(); // Call confirm password validation to ensure consistency
        }

        function validateConfirmPassword() {
            let password = document.getElementById('password').value;
            let confirmPassword = document.getElementById('confirm_password').value;
            let confirmPasswordErr = document.getElementById('confirmPasswordErr');
            if (confirmPassword !== password) {
                confirmPasswordErr.textContent = 'Passwords did not match.';
            } else {
                confirmPasswordErr.textContent = '';
            }
        }
        /* validate password */
    </script>

</body>

</html>