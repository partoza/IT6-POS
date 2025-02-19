<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kiks Davao POS System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <style>
        .login-container {
            max-width: 1000px;
            width: 90%;
        }
    </style>
</head>

<body style="background: url('assets/Login Section.jpg') no-repeat center center; background-size: cover;"
    class="d-flex align-items-center justify-content-center vh-100">

    <div class="container text-center">
        <p class="text-white fw-bold mb-4 display-2">Kiks Davao POS System</p>
        <div class="login-container bg-white rounded shadow d-flex overflow-hidden mx-auto">

            <!-- Left Side - Logo -->
            <div class="logo-section d-flex align-items-center justify-content-center p-4 w-50">
                <img src="assets/Logo.jpg" alt="Kiks Davao Logo" class="img-fluid">
            </div>

            <!-- Right Side - Login Form -->
            <div class="d-flex align-items-center justify-content-center border-start w-50">
                <div class="form-section text-center p-5">
                    <h3 class="fw-bold fs-1">LOGIN</h3>
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Employee ID</label>
                            <input type="text" class="form-control text-center">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Pin Code</label>
                            <div class="d-flex justify-content-center">
                                <input type="password" class="form-control text-center mx-1" maxlength="1" style="width: 40px;">
                                <input type="password" class="form-control text-center mx-1" maxlength="1" style="width: 40px;">
                                <input type="password" class="form-control text-center mx-1" maxlength="1" style="width: 40px;">
                                <input type="password" class="form-control text-center mx-1" maxlength="1" style="width: 40px;">
                                <input type="password" class="form-control text-center mx-1" maxlength="1" style="width: 40px;">
                                <input type="password" class="form-control text-center mx-1" maxlength="1" style="width: 40px;">
                            </div>
                        </div>
                        <button type="submit" class="btn w-100 text-white" style="background-color: #9F6828">Login <i
                                class="bi bi-box-arrow-in-right text-white"></i></button>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
