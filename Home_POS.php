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

            <!-- Main Content (7 columns) -->
            <div class="col-7 mt-3">
                <div class="ms-3">
                    <div class="d-flex justify-content-start bg-white ps-5 p-2 rounded mt-3">
                        <button class="btn tab-button active me-3" data-tab="all">All</button>
                        <button class="btn tab-button me-3" data-tab="coffee">Coffee</button>
                        <button class="btn tab-button me-3" data-tab="pastry">Pastry</button>
                        <button class="btn tab-button" data-tab="beverages">Beverages</button>
                    </div>

                    <div class="tab-content mt-3 text-center">
                        <div class="tab-pane show active" id="all">All Items</div>
                        <div class="tab-pane" id="coffee">Coffee Items</div>
                        <div class="tab-pane" id="pastry">Pastry Items</div>
                        <div class="tab-pane" id="beverages">Beverage Items</div>
                    </div>
                </div>
            </div>

            <!-- Order Summary (3 columns) -->
            <div class="col-4 mt-3">
                <div class="order-summary p-2 ps-3 bg-white rounded">
                    <h5>Hello, Jhianne Jose</h5>
                    <p class="text-muted">Cashier - in charge</p>
                </div>
                <div class="mt-3 p-2 ps-3 bg-white rounded">
                    <h5>Current Order</h5>
                </div>
            </div>
        </div>
    </div>

    <script src="home_pos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>