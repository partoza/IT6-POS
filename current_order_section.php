<div class="order-summary p-1 ps-3 bg-white rounded">
    <h5>Hello, Jhianne Jose</h5>
    <p class="text-muted">Cashier - In charge</p>
</div>
<div class="container mt-3 bg-white p-3">
    <h4 class="fw-bold pb-3">Current Order</h4>
    <div class="row justify-content-center scrollable bg-white currentOrder">
        <div class="col-xl-10 col-sm-12">
            <?php
            for ($i = 0; $i < 1; $i++) {
                ?>
                <div id="orderLineContainer">
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>
<div class="container mt-3 bg-white">
    <div class="row">

        <div class="col-12 p-4">
            <div class="row">
                <div class="col-6">
                    <p class="mb-1">Subtotal</p>
                </div>
                <div class="col-6 text-end">
                    <p id="subtotalAmount" class="mb-1 totalPrice">₱0.00</p>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <p class="mb-1">Discount - PWD</p>
                </div>
                <div class="col-6 text-end">
                    <p id="discountAmount" class="mb-1 totalPrice">₱0.00</p>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <h5 class="fw-bold">TOTAL AMOUNT</h5>
                </div>
                <div class="col-6 text-end">
                    <h5 id="totalAmount" class="fw-bold">₱0.00</h5>
                </div>
            </div>
        </div>


        <div class="col-12 d-flex justify-content-between pb-3">
            <button class="col-lg-6 col-md-12 btn btn-danger me-1 w-50 p-lg-2 p-md-1">
                <i class="bi bi-x-circle me-1"></i> Cancel
            </button>
            <button class="col-lg-6 col-md-12 btn btn-success w-50 ms-1 p-lg-2 p-md-1" data-bs-toggle="modal"
                data-bs-target="#paymentSelectionModal">
                Proceed <i class="bi bi-arrow-right ms-1"></i>
            </button>
        </div>
    </div>
</div>

<div class="modal fade" id="paymentSelectionModal" tabindex="-1" aria-labelledby="paymentSelectionModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="paymentSelectionModalLabel">Select Payment Method</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <button class="btn btn-primary w-100 mb-2" data-bs-dismiss="modal" data-bs-toggle="modal"
                    data-bs-target="#cashierPaymentModal">Pay on Cashier</button>
                <button class="btn btn-success w-100" data-bs-dismiss="modal" data-bs-toggle="modal"
                    data-bs-target="#grabPaymentModal">Grab</button>
            </div>
        </div>
    </div>
</div>

<!-- Cashier Payment Modal -->
<div class="modal fade" id="cashierPaymentModal" tabindex="-1" aria-labelledby="cashierPaymentModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cashierPaymentModalLabel">Cashier Payment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p><strong>Total Amount:</strong> <span id="totalAmount">₱250.00</span></p>

                <!-- GCash Payment Checkbox -->
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="gcashPaymentCheckbox"
                        onchange="togglePaymentMethod()">
                    <label class="form-check-label" for="gcashPaymentCheckbox">
                        Pay with GCash
                    </label>
                </div>

                <!-- Paid Amount Input -->
                <div class="mb-3">
                    <label for="paidAmount" class="form-label">Paid Amount</label>
                    <input type="number" class="form-control" id="paidAmount" oninput="calculateChange()"
                        placeholder="Enter Paid Amount">
                </div>

                <!-- Reference Number Input (GCash) -->
                <div class="mb-3">
                    <label for="gcashReference" class="form-label">GCash Reference Number</label>
                    <input type="text" class="form-control" id="gcashReference"
                        placeholder="Enter GCash reference number" disabled>
                </div>

                <p><strong>Change:</strong> <span id="changeAmount">₱0.00</span></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" onclick="confirmPayment()">Confirm Payment</button>
            </div>
        </div>
    </div>
</div>

<!-- Grab Payment Modal -->
<div class="modal fade" id="grabPaymentModal" tabindex="-1" aria-labelledby="grabPaymentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <!-- Grab Logo and Title -->
                <h5 class="modal-title d-flex align-items-center" id="grabPaymentModalLabel">
                    <img src="assets/images/grab-logo.png" alt="Grab Logo" width="30" height="30" class="me-2">
                    Grab Payment
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p><strong>Total Amount:</strong> ₱0.00</p>

                <!-- Reference Number Input -->
                <div class="mb-3">
                    <label for="grabReferenceInput" class="form-label">Enter Reference Number</label>
                    <input type="text" class="form-control" id="grabReferenceInput"
                        placeholder="Enter Grab reference number">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" onclick="confirmGrabPayment()">Confirm</button>
            </div>
        </div>
    </div>
</div>



<script>
    document.addEventListener("DOMContentLoaded", function () {
        const totalElement = document.getElementById("total");
        const quantityDisplay = document.getElementById("qtySelector");
        const priceElement = document.getElementById("price");
        const decrementButton = document.querySelector(".btn-outline-dark.me-2");
        const incrementButton = document.querySelector(".btn-outline-dark.ms-2");

        let quantity = 1;

        function getPrice() {
            return parseFloat(priceElement.textContent.replace("Price: ₱", "")) || 0;
        }

        function updateTotal() {
            const pricePerItem = getPrice();
            quantityDisplay.textContent = quantity;
            totalElement.textContent = `₱${(quantity * pricePerItem).toFixed(2)}`;
            updateOverallTotal();
        }

        incrementButton.addEventListener("click", function () {
            quantity++;
            updateTotal();
        });

        decrementButton.addEventListener("click", function () {
            if (quantity > 1) {
                quantity--;
                updateTotal();
            }
        });

        updateTotal();
    });

    // Toggle Payment Method (GCash or Cash)
    function togglePaymentMethod() {
        const isGCashChecked = document.getElementById("gcashPaymentCheckbox").checked;
        const paidAmount = document.getElementById("paidAmount");
        const gcashReference = document.getElementById("gcashReference");

        if (isGCashChecked) {
            paidAmount.setAttribute("readonly", true);
            paidAmount.classList.add("border-secondary", "bg-light");
            gcashReference.removeAttribute("disabled");
            gcashReference.classList.remove("border-secondary");
        } else {
            paidAmount.removeAttribute("readonly");
            paidAmount.classList.remove("border-secondary", "bg-light");
            gcashReference.setAttribute("disabled", true);
            gcashReference.classList.add("border-secondary");
        }
    }

    // Calculate change amount for cash payments
    function calculateChange() {
        const totalAmount = parseFloat(document.getElementById("totalAmount").innerText.replace("₱", "")) || 0;
        const paidAmount = parseFloat(document.getElementById("paidAmount").value) || 0;
        const changeAmount = Math.max(paidAmount - totalAmount, 0);

        document.getElementById("changeAmount").innerText = `₱${changeAmount.toFixed(2)}`;
    }

    // Close modal after confirming payment
    function confirmPayment() {
        alert("Payment confirmed. Thank you!");
        closeModal("cashierPaymentModal");
    }

    function confirmGrabPayment() {
        alert("Grab payment confirmed. Thank you!");
        closeModal("grabPaymentModal");
    }

    // Helper function to close modals
    function closeModal(modalId) {
        const modal = document.getElementById(modalId);
        if (modal) {
            modal.classList.remove("show");
            document.body.classList.remove("modal-open");
            document.querySelectorAll(".modal-backdrop").forEach(el => el.remove());
        }
    }

    // Add an item to the order list
    function addToOrder(itemId, itemName, itemPrice) {
        let orderContainer = document.getElementById("orderLineContainer");

        // Check if the item already exists
        let existingOrder = document.getElementById(`order-item-${itemId}`);
        if (existingOrder) {
            let qtySpan = existingOrder.querySelector(".qtySelector");
            let totalSpan = existingOrder.querySelector(".totalPrice");

            let newQuantity = parseInt(qtySpan.innerText) + 1;
            qtySpan.innerText = newQuantity;
            totalSpan.innerText = `₱${(newQuantity * itemPrice).toFixed(2)}`;
            updateOverallTotal();
            return;
        }

        // Create a new order item
        let orderItem = document.createElement("div");
        orderItem.classList.add("card", "p-3", "ms-xl-3", "shadow-sm", "border", "mb-2");
        orderItem.setAttribute("id", `order-item-${itemId}`);

        orderItem.innerHTML = `
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 text-center">
                <img src="./assets/menuitems/${itemId}.png" alt="${itemName}" class="rounded image-fluid"
                    style="width: 100px; height: 100px;">
            </div>
            <div class="col-lg-6 col-md-12 text-center text-sm-start">
                <h5 class="fw-bold mb-1">${itemName}</h5>
                <p class="mb-1">Price: ₱${itemPrice.toFixed(2)}</p>
                <p class="mb-1">Quantity:<span class="quantity">1</span></p>
            </div>
            <div class="col-lg-6 col-md-12 d-flex justify-content-center mt-2">
                <div class="d-flex align-items-center">
                    <button class="btn btn-outline-dark btn-sm me-2" onclick="updateQuantity(${itemId}, ${itemPrice}, -1)">−</button>
                     <span class="qtySelector">1</span></p>
                    <button class="btn btn-outline-dark btn-sm ms-2" onclick="updateQuantity(${itemId}, ${itemPrice}, 1)">+</button>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 pt-md-3 text-end text-sm-start">
                <div><strong>Total: ₱<span class="totalPrice">${itemPrice.toFixed(2)}</span></strong></div>
            </div>
            <div class="col-12 text-end mt-2">
                <button class="btn btn-danger btn-sm" onclick="removeOrderItem(${itemId})">Remove</button>
            </div>
        </div>
    `;

        orderContainer.appendChild(orderItem);
        updateOverallTotal();
    }

    // Update the quantity of an item in the order
    function updateQuantity(itemId, itemPrice, change) {
        let orderItem = document.getElementById(`order-item-${itemId}`);
        if (!orderItem) return;

        let qtySpan = orderItem.querySelector(".qtySelector");
        let qtySpan1 = orderItem.querySelector(".quantity");
        let totalSpan = orderItem.querySelector(".totalPrice");

        let newQuantity = parseInt(qtySpan.innerText) + change;
        if (newQuantity <= 0) {
            removeOrderItem(itemId);
            return;
        }

        qtySpan.innerText = newQuantity;
        qtySpan1.innerText = newQuantity;
        totalSpan.innerText = `${(newQuantity * itemPrice).toFixed(2)}`;
        updateOverallTotal();
    }

    // Remove an item from the order list
    function removeOrderItem(itemId) {
        let orderItem = document.getElementById(`order-item-${itemId}`);
        if (orderItem) {
            orderItem.remove();
        }
        updateOverallTotal();
    }

    // Update overall total amount
    function updateOverallTotal() {
        let total = 0;
        document.querySelectorAll(".totalPrice").forEach(item => {
            total += parseFloat(item.innerText.replace("₱", "")) || 0;
        });

        document.getElementById("totalAmount").innerText = `₱${total.toFixed(2)}`;
    }




</script>
<style>
    .bounceClick {
        border-color: #9F6828;
        transition: all 0.2s ease-in-out;
    }

    .bounceClick:hover {
        background-color: #9F6828 !important;
        border-color: #9F6828 !important;
        color: white !important;
        transform: scale(1.05) !important;
    }

    .bounceClick:active {
        transform: scale(0.95) !important;
        transition: transform 0.1s ease-in-out !important;
    }


    .currentOrder {
        overflow-y: auto;
    }

    @media (max-width: 576px) {
        .currentOrder {
            height: 100px;
        }
    }

    @media (min-width: 576px) and (max-width: 768px) {
        .currentOrder {
            height: 150px;
        }
    }

    @media (min-width: 768px) and (max-width: 1200px) {
        .currentOrder {
            height: 200px;

        }
    }

    @media (min-width: 1200px) {
        .currentOrder {
            height: 420px;
        }
    }
</style>