<div class="order-summary p-2 ps-3 bg-white rounded">
    <h5>Hello, Jhianne Jose</h5>
    <p class="text-muted">Cashier - in charge</p>
</div>
<div class="container mt-4 bg-white p-3">
    <h4 class="fw-bold">Current Order</h4>
    <div class="row justify-content-center scrollable bg-white" style="height: 400px; overflow-y: auto;">
        <div class="col-xl-10 col-sm-12">
            <div class="card p-3 ms-xl-3  shadow-sm border border-secondary mb-2">
                <div class="row align-items-center">
                    <!-- Image Section -->
                    <div class="col-6 text-center">
                        <img src="assets/matcha.jpg" alt="Latte" class="rounded" style="width: 100px; height: 100px;">
                    </div>

                    <!-- Text Content -->
                    <div class="col-6 text-center text-sm-start">
                        <h5 class="fw-bold mb-1">Latte</h5>
                        <p class="mb-1">Price: ₱105.00</p>
                        <p class="mb-1">Quantity: <span id="quantity">2</span></p>
                    </div>

                    <div class="col-6 d-flex justify-content-center mt-2">
                        <div class="d-flex align-items-center">
                            <button class="btn btn-outline-dark btn-sm me-2">−</button>
                            <span class="fw-bold">2</span>
                            <button class="btn btn-outline-dark btn-sm ms-2">+</button>
                        </div>
                    </div>

                    <!-- Text Content -->
                    <div class="col-6 text-end text-sm-start">
                        <div><strong>Total: ₱210.00</strong></div>
                    </div>
                </div>
            </div>
            <!-- Add more .card elements here to see the scroll effect -->
        </div>
    </div>
</div>
<div class="container mt-3 bg-white">
    <div class="row">
        <!-- Amount Details -->
        <div class="col-12 p-4">
            <p class="mb-1">Subtotal <span class="float-end">₱0.00</span></p>
            <p class="mb-1">Discount - PWD <span class="float-end">₱0.00</span></p>
            <h5 class="fw-bold">TOTAL AMOUNT <span class="float-end">₱0.00</span></h5>
        </div>

        <!-- Buttons -->
        <div class="col-12 d-flex justify-content-between mt-2 mb-3">
            <button class="btn btn-danger w-50 me-2">
                <i class="bi bi-x-circle me-1"></i> Cancel
            </button>
            <button class="btn btn-success w-50 ms-2">
                Proceed <i class="bi bi-arrow-right ms-1"></i>
            </button>
        </div>
    </div>
</div>