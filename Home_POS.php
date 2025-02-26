<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiks Davao POS System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="home_pos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</head>

<body>
    <div>
        <?php include 'header_POS.php'; ?>
    </div>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar (2 columns) -->
            <div class="col-md-1">
                <?php include 'sidebar_POS.php'; ?>
            </div>

            <div class="col-11" id="menu">
                <div class="row">
                    <div class="tab-content col-8 mt-3">
                        <?php include 'menu_section.php'; ?>
                    </div>
                    <div class="col-4 mt-3">
                        <?php include 'current_order_section.php'; ?>
                    </div>
                </div>
            </div>

            <div class="col-11" id="order">
                <div class="row">
                    <div class="tab-content col-8 mt-3">
                        <?php include 'order_section.php'; ?>
                    </div>
                    <div class="col-4 mt-3">
                        <?php include 'current_order_section.php'; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="home_pos.js"></script>
</body>

</html>