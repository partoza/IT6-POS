<div class="order-summary p-2 ps-3 bg-white rounded">
    <h5>Hello, Jhianne Jose</h5>
    <p class="text-muted">Cashier - in charge</p>
</div>
<div class="container mt-3 bg-white p-3">
    <h4 class="fw-bold pb-3">Current Order</h4>
    <div class="row justify-content-center scrollable bg-white currentOrder">
        <div class="col-xl-10 col-sm-12">
            <div class="card p-3 ms-xl-3 shadow-sm border border-secondary mb-2">
                <div class="row align-items-center">
                    <!-- Image Section -->
                    <div class="col-lg-6 col-md-12 text-center">
                        <img src="assets/matcha.jpg" alt="Latte" class="rounded image-fluid"
                            style="width: 100px; height: 100px;">
                    </div>

                    <!-- Text Content -->
                    <div class="col-lg-6 col-md-12 text-center text-sm-start">
                        <h5 class="fw-bold mb-1">Latte</h5>
                        <p class="mb-1">Price: ₱105.00</p>
                        <p class="mb-1">Quantity: <span id="quantity">2</span></p>
                    </div>

                    <div class="col-lg-6 col-md-12 d-flex justify-content-center mt-2">
                        <div class="d-flex align-items-center">
                            <button class="btn btn-outline-dark btn-sm me-2">−</button>
                            <span class="fw-bold">2</span>
                            <button class="btn btn-outline-dark btn-sm ms-2">+</button>
                        </div>
                    </div>

                    <!-- Text Content -->
                    <div class="col-lg-6 col-md-12 pt-md-3 text-end text-sm-start">
                        <div><strong>Total: ₱210.00</strong></div>
                    </div>
                </div>
            </div>
            <div class="card p-3 ms-xl-3 shadow-sm border border-secondary mb-2">
                <div class="row align-items-center">
                    <!-- Image Section -->
                    <div class="col-lg-6 col-md-12 text-center">
                        <img src="assets/matcha.jpg" alt="Latte" class="rounded image-fluid"
                            style="width: 100px; height: 100px;">
                    </div>

                    <!-- Text Content -->
                    <div class="col-lg-6 col-md-12 text-center text-sm-start">
                        <h5 class="fw-bold mb-1">Latte</h5>
                        <p class="mb-1">Price: ₱105.00</p>
                        <p class="mb-1">Quantity: <span id="quantity">2</span></p>
                    </div>

                    <div class="col-lg-6 col-md-12 d-flex justify-content-center mt-2">
                        <div class="d-flex align-items-center">
                            <button class="btn btn-outline-dark btn-sm me-2">−</button>
                            <span class="fw-bold">2</span>
                            <button class="btn btn-outline-dark btn-sm ms-2">+</button>
                        </div>
                    </div>

                    <!-- Text Content -->
                    <div class="col-lg-6 col-md-12 pt-md-3 text-end text-sm-start">
                        <div><strong>Total: ₱210.00</strong></div>
                    </div>
                </div>
            </div>
            <div class="card p-3 ms-xl-3 shadow-sm border border-secondary mb-2">
                <div class="row align-items-center">
                    <!-- Image Section -->
                    <div class="col-lg-6 col-md-12 text-center">
                        <img src="assets/matcha.jpg" alt="Latte" class="rounded image-fluid"
                            style="width: 100px; height: 100px;">
                    </div>

                    <!-- Text Content -->
                    <div class="col-lg-6 col-md-12 text-center text-sm-start">
                        <h5 class="fw-bold mb-1">Latte</h5>
                        <p class="mb-1">Price: ₱105.00</p>
                        <p class="mb-1">Quantity: <span id="quantity">2</span></p>
                    </div>

                    <div class="col-lg-6 col-md-12 d-flex justify-content-center mt-2">
                        <div class="d-flex align-items-center">
                            <button class="btn btn-outline-dark btn-sm me-2">−</button>
                            <span class="fw-bold">2</span>
                            <button class="btn btn-outline-dark btn-sm ms-2">+</button>
                        </div>
                    </div>

                    <!-- Text Content -->
                    <div class="col-lg-6 col-md-12 pt-md-3 text-end text-sm-start">
                        <div><strong>Total: ₱210.00</strong></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-3 bg-white">
    <div class="row">
        <!-- Amount Details -->
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

        <!-- Buttons -->
        <div class="col-12 d-flex justify-content-between mt-2 mb-3">
            <button class="col-lg-6 col-md-12 btn btn-danger me-1 w-50 p-lg-2 p-md-1">
                Cancel <i class="bi bi-x-circle me-1"></i>
            </button>
            <button class="col-lg-6 col-md-12 btn btn-success w-50 ms-1 p-lg-2 p-md-1">
                Proceed <i class="bi bi-arrow-right ms-1"></i>
            </button>
        </div>
    </div>
</div>

<style>
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
            height: 450px;
        }
    }
</style>