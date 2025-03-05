<?php
include './database/database.php';
?>

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
                <?php fetchMenuItemsByCategory($conn, 'all', 'All'); ?>
            </div>
            <div class="tab-pane" id="coffee">
                <?php fetchMenuItemsByCategory($conn, 1, 'Coffee'); ?>
            </div>
            <div class="tab-pane" id="pastry">
                <?php fetchMenuItemsByCategory($conn, 2, 'Pastry'); ?>
            </div>
            <div class="tab-pane" id="beverages">
                <?php fetchMenuItemsByCategory($conn, 3, 'Beverage'); ?>
            </div>
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

<?php
function fetchMenuItemsByCategory($conn, $categoryId, $categoryName)
{
    // Adjust query for "All" category
// Prepare the stored procedure call
    $stmt = $conn->prepare("CALL GetMenuItems(?)");
    $stmt->bind_param("s", $categoryId);
    $stmt->execute();

    // Fetch the results
    $result = $stmt->get_result();

    ?>

    <div class="container-fluid rounded bg-white pb-4">
        <h5 class="p-3 pb-2 text-start"><?php echo $categoryName; ?> Items</h5>
        <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-6 g-3 pb-5" id="menu-items"
            style="margin: 0 15px; height: 65vh; overflow-y: auto; padding-right: 5px;">

            <?php if ($result && $result->num_rows > 0): ?>

                <?php while ($row = $result->fetch_assoc()): ?>
                    <div class="card text-center shadow-sm m-2 position-relative"
                        style="border-radius: 12px; overflow: hidden; width: 160px; height: 220px; display: flex; flex-direction: column; justify-content: space-between;">

                        <!-- Product Image -->
                        <img src="./assets/menuitems/<?php echo $row['item_id']; ?>.png" class="card-img-top"
                            alt="<?php echo htmlspecialchars($row['item_name']); ?>" style="height: 120px; object-fit: cover;">

                        <!-- Floating "+" Button (Add Item) -->
                        <button class="btn rounded-circle fw-bold shadow-sm position-absolute end-0 me-2 mt-2 
    d-flex align-items-center justify-content-center floatButton" aria-label="Add Item"
                            onclick="addToOrder(<?php echo $row['item_id']; ?>, '<?php echo htmlspecialchars($row['item_name']); ?>', <?php echo $row['item_price']; ?>)">
                            +
                        </button>

                        <!-- Card Body -->
                        <div class="card-body p-2"
                            style="flex-grow: 1; display: flex; flex-direction: column; justify-content: center;">
                            <h6 class="card-title mb-1 text-truncate" style="max-width: 100%;">
                                <?php echo htmlspecialchars($row['item_name']); ?>
                            </h6>
                            <p class="fw-bold mb-1">₱ <?php echo number_format($row['item_price'], 2); ?></p>
                        </div>

                    </div>
                <?php endwhile; ?>

            <?php else: ?>
                <p class="text-center">No <?php echo strtolower($categoryName); ?> items found.</p>
            <?php endif; ?>

        </div>
    </div>

    <?php
}