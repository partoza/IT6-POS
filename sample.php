<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kiks Davao POS System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</head>

<style>
    .category-tabs {
        display: flex;
        gap: 20px;
        background-color: #F5F5F5;
        padding: 10px 20px;
        border-radius: 10px;
        width: fit-content;
        margin: auto;
    }

    .tab-button {
        background: transparent;
        border: none;
        padding: 8px 15px;
        font-size: 16px;
        font-weight: bold;
        color: black;
        cursor: pointer;
        border-radius: 5px;
    }

    .tab-button.active {
        background-color: #E3D2BF;
        border: 2px solid #9F6828;
        color: #9F6828;
    }
</style>

<body>
    <div class="category-tabs mt-3">
        <button class="tab-button active" data-tab="all">All</button>
        <button class="tab-button" data-tab="coffee">Coffee</button>
        <button class="tab-button" data-tab="pastry">Pastry</button>
        <button class="tab-button" data-tab="beverages">Beverages</button>
    </div>

    <div class="tab-content mt-3 text-center">
        <div class="tab-pane show active" id="all">All Items</div>
        <div class="tab-pane" id="coffee">Coffee Items</div>
        <div class="tab-pane" id="pastry">Pastry Items</div>
        <div class="tab-pane" id="beverages">Beverage Items</div>
    </div>

    <script>
        document.querySelectorAll('.tab-button').forEach(button => {
            button.addEventListener('click', function () {
                document.querySelectorAll('.tab-button').forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');

                document.querySelectorAll('.tab-pane').forEach(pane => pane.classList.remove('show', 'active'));
                document.getElementById(this.getAttribute('data-tab')).classList.add('show', 'active');
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
