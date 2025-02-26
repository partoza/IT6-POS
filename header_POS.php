
<style>
    body {
        background-color: #F5F5F5;
    }

    .header {
        background-color: #FFFFFF;
        padding: 10px 20px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .logo {
        height: 40px;
    }

    .search-bar {
        max-width: 400px;
    }

    .refresh-btn {
        font-size: 1.5rem;
        color: #333;
        cursor: pointer;
        transition: color 0.2s;
    }

    .refresh-btn:hover {
        color: #9F6828;
    }

    .search-button:hover {
        background-color: #9F6828;
        color: #ffffff;
    }

    .search-bar .form-control:focus {
        border-color: #9F6828 !important;
        box-shadow: none !important;
        outline: none !important;
    }
</style>

<div class="header">
    <div class="row d-flex align-items-center">
        <div class="col-4 ps-4">
            <div class="row">
                <img src="assets/logo.jpg" alt="KIKS DAVAO POS SYSTEM" class="logo col-5 img-fluid"
                    style="height: 60px; width:80px;">
                <p class="fw-bold col-7 d-flex align-items-center" style="color: #9F6828; margin-bottom: 0px;">Kiks Davao <br>Point of Sales System </p>
            </div>
        </div>
        <div class="col-5">
            <div class="search-bar input-group">
                <input type="text" class="form-control" placeholder="Search Menu ...">
                <button class="btn search-button" style="border: 1px solid rgb(209, 204, 204);"><i
                        class="bi bi-search"></i></button>
            </div>
        </div>
        <div class="col-2 d-flex justify-content-end pe-5">
            <div>
                <i class="bi bi-arrow-repeat refresh-btn"></i>
            </div>
        </div>
    </div>
</div>