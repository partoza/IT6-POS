<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sidebar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <style>
        .sidebar-item:hover {
            color: #9F6828 !important;
            font-weight: bold;
        }
        .sidebar-item.active {
            background-color: #E3D2BF;
            border: 2px solid #9F6828 !important;
            color: #9F6828 !important;
            font-weight: bold;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <div class="d-flex flex-column align-items-center bg-light shadow p-2 ms-4 mt-3"
            style="width: 100px; height: 80vh; border-radius: 15px;">
            <!-- Menu Button -->
            <div class="menu mt-4 w-100 text-center text-secondary sidebar-item">
                <i class="bi bi-list fs-4"></i>
                <div>Menu</div>
            </div>

            <!-- Sidebar Items -->
            <div class="customer w-100 mt-4 text-center text-secondary sidebar-item">
                <i class="bi bi-person fs-4"></i>
                <div>Customer</div>
            </div>

            <div class="order w-100 mt-4 text-center text-secondary sidebar-item">
                <i class="bi bi-cart fs-4"></i>
                <div>Orders</div>
            </div>

            <!-- Logout -->
            <div class="mt-auto mb-3 text-center text-secondary sidebar-item w-100">
                <i class="bi bi-box-arrow-right fs-4"></i>
                <div>Logout</div>
            </div>
        </div>
    </div>
    <script>
        document.querySelectorAll('.sidebar-item').forEach(item => {
            item.addEventListener('click', function() {
                document.querySelectorAll('.sidebar-item').forEach(i => i.classList.remove('active'));
                this.classList.add('active');
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>


</html>