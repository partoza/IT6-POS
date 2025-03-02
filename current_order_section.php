<div class="order-summary p-1 ps-3 bg-white rounded">
    <h5>Hello, Jhianne Jose</h5>
    <p class="text-muted">Cashier - In charge</p>
</div>
<div class="container mt-3 bg-white p-3">
    <h4 class="fw-bold pb-3">Current Order</h4>
    <div class="row justify-content-center scrollable bg-white currentOrder">
        <div class="col-xl-10 col-sm-12">
            <?php
            for ($i = 0; $i < 3; $i++) {
                ?>
                <div class="card p-3 ms-xl-3 shadow-sm border mb-2">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12 text-center">
                            <img src="assets/matcha.jpg" alt="Latte" class="rounded image-fluid"
                                style="width: 100px; height: 100px;">
                        </div>
                        <div class="col-lg-6 col-md-12 text-center text-sm-start">
                            <h5 class="fw-bold mb-1">Latte</h5>
                            <p class="mb-1" id="price">Price: ₱105.00</p>
                            <p class="mb-1">Quantity: <span id="quantity">0</span></p>
                        </div>

                        <div class="col-lg-6 col-md-12 d-flex justify-content-center mt-2">
                            <div class="d-flex align-items-center">
                                <button class="btn btn-outline-dark btn-sm me-2 bounceClick">−</button>
                                <span class="fw-bold" id="qtySelector">0</span>
                                <button class="btn btn-outline-dark btn-sm ms-2 bounceClick">+</button>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 pt-md-3 text-end text-sm-start">
                            <div><strong>Total: ₱ <span id="total">0</span></strong></div>
                        </div>
                    </div>
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
                    <p class="mb-1">₱0.00</p>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <p class="mb-1">Discount - PWD</p>
                </div>
                <div class="col-6 text-end">
                    <p class="mb-1">₱0.00</p>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <h5 class="fw-bold">TOTAL AMOUNT</h5>
                </div>
                <div class="col-6 text-end">
                    <h5 class="fw-bold">₱0.00</h5>
                </div>
            </div>
        </div>

        <div class="col-12 d-flex justify-content-between pb-3">
            <button class="col-lg-6 col-md-12 btn btn-danger me-1 w-50 p-lg-2 p-md-1">
                <i class="bi bi-x-circle me-1"></i> Cancel
            </button>
            <button class="col-lg-6 col-md-12 btn btn-success w-50 ms-1 p-lg-2 p-md-1">
                Proceed <i class="bi bi-arrow-right ms-1"></i>
            </button>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const quantityElement = document.getElementById("quantity");
        const totalElement = document.getElementById("total");
        const decrementButton = document.querySelector(".btn-outline-dark.me-2");
        const incrementButton = document.querySelector(".btn-outline-dark.ms-2");
        const quantityDisplay = document.getElementById("qtySelector");
        const priceElement = document.getElementById("price");

        let quantity = 0;

        function getPrice() {
            return parseFloat(priceElement.textContent.replace("Price: ₱", "")) || 0;
        }

        function updateTotal() {
            const pricePerItem = getPrice();
            quantityElement.textContent = quantity;
            quantityDisplay.textContent = quantity;
            totalElement.textContent = (quantity * pricePerItem).toFixed(2);
        }

        incrementButton.addEventListener("click", function () {
            quantity++;
            updateTotal();
        });

        decrementButton.addEventListener("click", function () {
            if (quantity > 0) {
                quantity--;
                updateTotal();
            }
        });

        updateTotal();
    });
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