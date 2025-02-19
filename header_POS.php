<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>POS Header</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <style>

        body{
            background-color: #F5F5F5;
        }


        .header {
            background-color: #FFFFFF   ;
            padding: 10px 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .logo {
            height: 40px;
        }

        .search-bar {
            max-width: 400px;
        }

        .refresh-btn {
            font-size: 1.5rem;
            color: #333;
            cursor: pointer;
            transition: color 0.2s;
        }

        .refresh-btn:hover {
            color: #9F6828;
        }

        .btn:hover {
            background-color: #9F6828;
            color: #ffffff;
        }

        .search-bar .form-control:focus {
            border-color: #9F6828 !important;
            box-shadow: none !important;
            outline: none !important;
        }
    </style>
</head>

<body>
    <div class="header">
        <div class="row d-flex align-items-center">
            <div class="col-4 ps-5">
                <div class="row">
                    <img src="assets/logo.jpg" alt="KIKS DAVAO POS SYSTEM" class="logo col-5"
                        style="height: 80px; width:120px;">
                    <p class="fw-bold col-7" style="color: #9F6828;">Kiks Davao <br>Point of Sales <br>System </p>
                </div>
            </div>
            <div class="col-4">
                <div class="search-bar input-group">
                    <input type="text" class="form-control" placeholder="Search Menu ...">
                    <button class="btn" style="border: 1px solid rgb(209, 204, 204);"><i class="bi bi-search"></i></button>
                </div>
            </div>
            <div class="col-4 d-flex justify-content-end pe-5">
                <div>
                    <i class="bi bi-arrow-repeat refresh-btn"></i>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>