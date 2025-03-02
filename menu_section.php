<div class="content-section">
    <div class="ms-2">
        <!-- Menu Tabs (All, Coffee, Pastry, Beverages) -->
        <div class="container-fluid">
            <div
                class="d-flex flex-wrap flex-md-nowrap justify-content-center justify-content-md-start bg-white p-2 rounded mt-3 tabs">
                <button class="btn tab-button active me-2 mb-2 mb-md-0" data-tab="all">All</button>
                <button class="btn tab-button me-2 mb-2 mb-md-0" data-tab="coffee">Coffee</button>
                <button class="btn tab-button me-2 mb-2 mb-md-0" data-tab="pastry">Pastry</button>
                <button class="btn tab-button me-2 mb-2 mb-md-0" data-tab="beverages">Beverages</button>
                <!-- Push "Customer" to the end only on larger screens -->
                <button class="btn tab-button ms-md-auto mt-2 mt-md-0 d-flex" data-tab="customer">
                    <i class="bi bi-person-fill"></i>&nbsp;<span class="d-md-none d-lg-block">Customer</span>
                </button>
            </div>
        </div>

        <!-- Tab Content -->
        <div class="tab-content mt-3 text-center">
            <div class="tab-pane show active" id="all">
                <?php include 'menu_navigation/all_menu.php'?>
            </div>
            <div class="tab-pane" id="coffee">Coffee Items</div>
            <div class="tab-pane" id="pastry">Pastry Items</div>
            <div class="tab-pane" id="beverages">Beverage Items</div>
            <div class="tab-pane" id="customer"><?php include 'customer_section.php'; ?></div>
        </div>
    </div>
</div>

<style>
    .floatButton {
        width: 30px;
        height: 30px;
        font-size: 16px;
        border: none;
        background-color: #9F6828;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        line-height: 1;
        text-align: center;
        transition: 0.2s ease-in-out;
    }

    .floatButton:hover {
        background-color: #9F6828;
        color: white;
        transition: 0.2s ease-in-out;
    }



</style>