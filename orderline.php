<div class="text-center py-1 pb-1 bg-white rounded">
    <h4 class="fw-bold">Order No. 103</h4>
    <p class="mb-1">15, February 2025, 12:45 AM</p>
    <p class="text-muted">Cashier In Charge: John Rex Partoza</p>
</div>
<div class="container mt-3 bg-white p-3">
    <h5 class="fw-bold">Order Line</h5>
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
        <div class="col-12 p-4 pb-2 ">
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

        <div class="col-12 p-3 pt-1">
            <button class="col-12 btn btn-success me-1 w-100 p-lg-2 p-md-1">
                Print Invoice <i class="bi bi-printer me-1"></i>
            </button>
        </div>
    </div>
</div>