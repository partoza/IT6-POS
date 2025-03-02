<div class="container-fluid">
    <div class="bg-white rounded mb-3 ">
        <h3 class="ps-3 p-2 text-center fw-bold">Order History</h3>
    </div>
</div>

<div class="container mt-4 p-4 bg-white rounded shadow" style="height: 75vh;">
    <h5 class="fw-bold">Date: </h5>
    <div class="m-2 input-group">
        <input type="text" class="form-control" placeholder="Search Customer Name...">
        <button class="btn search-button" style="border: 1px solid rgb(209, 204, 204);"><i
                class="bi bi-search"></i></button>
    </div>
    <div class="table-container" style="height: 57vh; overflow-y: auto;">
        <table class="table table">
            <thead class="table-light text-center" style="position: sticky; top: 0; z-index: 2;">
                <tr>
                    <th>Order ID</th>
                    <th>Date</th>
                    <th>Total Sales</th>
                    <th>Cashier</th>
                </tr>
            </thead>
            <tbody class="text-center p-3">
                <?php
                $orders = [
                    ["id" => "Order No. 103", "date" => "15, February 2025, 12:45 AM", "sales" => "₱160.00", "cashier" => "John Doe"],
                    ["id" => "Order No. 104", "date" => "15, February 2025, 11:10 PM", "sales" => "₱200.00", "cashier" => "Jane Smith"],
                    ["id" => "Order No. 105", "date" => "15, February 2025, 3:30 PM", "sales" => "₱180.00", "cashier" => "Mike Johnson"],
                    ["id" => "Order No. 106", "date" => "16, February 2025, 4:00 PM", "sales" => "₱250.00", "cashier" => "Sarah Lee"],
                    ["id" => "Order No. 106", "date" => "16, February 2025, 4:00 PM", "sales" => "₱250.00", "cashier" => "Sarah Lee"],
                    ["id" => "Order No. 106", "date" => "16, February 2025, 4:00 PM", "sales" => "₱250.00", "cashier" => "Sarah Lee"],
                    ["id" => "Order No. 106", "date" => "16, February 2025, 4:00 PM", "sales" => "₱250.00", "cashier" => "Sarah Lee"],
                    ["id" => "Order No. 106", "date" => "16, February 2025, 4:00 PM", "sales" => "₱250.00", "cashier" => "Sarah Lee"],
                    ["id" => "Order No. 106", "date" => "16, February 2025, 4:00 PM", "sales" => "₱250.00", "cashier" => "Sarah Lee"],
                    ["id" => "Order No. 106", "date" => "16, February 2025, 4:00 PM", "sales" => "₱250.00", "cashier" => "Sarah Lee"],
                    ["id" => "Order No. 106", "date" => "16, February 2025, 4:00 PM", "sales" => "₱250.00", "cashier" => "Sarah Lee"],
                    ["id" => "Order No. 106", "date" => "16, February 2025, 4:00 PM", "sales" => "₱250.00", "cashier" => "Sarah Lee"],
                    ["id" => "Order No. 106", "date" => "16, February 2025, 4:00 PM", "sales" => "₱250.00", "cashier" => "Sarah Lee"],
                    ["id" => "Order No. 106", "date" => "16, February 2025, 4:00 PM", "sales" => "₱250.00", "cashier" => "Sarah Lee"],
                    ["id" => "Order No. 106", "date" => "16, February 2025, 4:00 PM", "sales" => "₱250.00", "cashier" => "Sarah Lee"]
                ];
                foreach ($orders as $order) {
                    echo "<tr>";
                    echo "<td>{$order['id']}</td>";
                    echo "<td>{$order['date']}</td>";
                    echo "<td>{$order['sales']}</td>";
                    echo "<td>{$order['cashier']}</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <div class="fst-italic mt-4">
        <p><strong>Note:</strong> The order history displayed is only for transactions processed today.
            Use the search bar to find a specific customer.</p>
    </div>
</div>