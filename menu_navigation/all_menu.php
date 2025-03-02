<div class="container-fluid rounded bg-white pb-4">
    <h5 class="p-3 pb-2 text-start">All Items</h5>
    <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-6 g-3 pb-5" id="menu-items"
        style="margin: 0 15px; height: 65vh; overflow-y: auto; padding-right: 5px;">

        <?php for ($i = 1; $i <= 24; $i++):
            $price = rand(50, 200); // Generate price once
            ?>
            <div class="card text-center shadow-sm m-2  position-relative"
                style="border-radius: 12px; overflow: hidden; width: 160px;">

                <!-- Product Image -->
                <img src="assets/matcha.jpg" class="card-img-top" alt="Matcha" style="height: 120px; object-fit: cover;">

                <!-- Floating "+" Button (Add Item) -->
                <button
                    class="btn rounded-circle fw-bold shadow-sm position-absolute end-0 me-2 mt-2 d-flex align-items-center justify-content-center floatButton"
                    aria-label="Add Item">
                    +
                </button>


                <!-- Card Body -->
                <div class="card-body p-2">
                    <h6 class="card-title mb-1">Matcha</h6>
                    <p class="fw-bold mb-1">₱ 105.00</p>
                </div>

            </div>

        <?php endfor; ?>
    </div>
</div>