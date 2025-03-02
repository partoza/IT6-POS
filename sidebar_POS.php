<style>
    .sidebar-item {
        transition: all 0.3s ease;
    }


    .sidebar-item:hover {
        color: #9F6828 !important;
        font-weight: bold;
        cursor: pointer;
        transform: scale(1.1);
    }

    .sidebar-item.active {
        background-color: #E3D2BF;
        border: 2px solid #9F6828 !important;
        color: #9F6828 !important;
        font-weight: bold;
        border-radius: 5px;
        transform: scale(1.1);
    }

    @media (max-width: 1024px) {

        /* Medium screens (md) */
        .sidebar-width {
            font-size: 9px;
            ;
            width: 60px !important;
        }
    }

    @media (min-width: 1025px) {

        /* Large screens (lg) */
        .sidebar-width {
            width: 100px !important;
        }
    }
</style>
<div class="d-flex">
    <div class="d-flex flex-column align-items-center bg-light shadow p-2 mt-3 sidebar-width position-fixed"
        style="height: 80vh; border-radius: 15px;">

        <div class="menu mt-4 w-100 text-center text-secondary sidebar-item active text-primary"
             data-page="menu">
            <i class="bi bi-list fs-4"></i>
            <div>Menu</div>
        </div>

        <div class="order w-100 mt-4 text-center text-secondary sidebar-item"
            data-page="order">
            <i class="bi bi-cart fs-4"></i>
            <div>Orders</div>
        </div>


        <div class="mt-auto w-100 mb-3 text-center text-secondary sidebar-item">
            <i class="bi bi-box-arrow-right fs-4"></i>
            <div>Logout</div>
        </div>
    </div>
</div>
<script>
    document.querySelectorAll('.sidebar-item').forEach(item => {
        item.addEventListener('click', function () {
            document.querySelectorAll('.sidebar-item').forEach(i => i.classList.remove('active'));
            this.classList.add('active');
        });
    });
</script>