    <div class="col-12 text-start bg-white rounded p-2 ps-3">
        <h3>Customer</h3>
    </div>
    <br>
    <div class="col-12 text-start bg-white rounded pt-4 ps-4 pb-4">
        <h5>Fill in Customer Information (if needed)</h5>
        <div class="container mt-4">
            <h3>Customer Information</h3>
            <form class="ms-3 me-5">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="firstName" class="form-label">First Name (Optional)</label>
                        <input type="text" class="form-control" id="firstName" placeholder="Enter First Name">
                    </div>
                    <div class="col-md-6">
                        <label for="lastName" class="form-label">Last Name (Optional)</label>
                        <input type="text" class="form-control" id="lastName" placeholder="Enter Last Name">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="phoneNumber" class="form-label">Phone Number of Customer (Optional)</label>
                    <input type="tel" class="form-control" id="phoneNumber" placeholder="Enter Phone Number">
                </div>

                <h4>Discounted Customer (PWD or Senior Citizen)</h4>
                <div class="col-2 col-md-12 row mb-3">
                    <div class="col-md-6 d-flex align-items-center">
                        <div class="form-check">
                            <input class="form-check-input me-2" type="checkbox" id="seniorCitizen" onclick="toggleCheckbox('seniorCitizen', 'pwd')">
                            <label class="form-check-label me-3" for="seniorCitizen">Senior Citizen</label>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-center">
                        <div class="form-check">
                            <input class="form-check-input me-2" type="checkbox" id="pwd" onclick="toggleCheckbox('pwd', 'seniorCitizen')">
                            <label class="form-check-label me-3" for="pwd">PWD</label>
                        </div>
                    </div>
                </div>  

                <div class="row mb-3">
                    <div class="col-md-6 d-flex align-items-center">
                        <input type="text" class="form-control" id="idNumber" placeholder="Enter ID Number" disabled>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <script>
        function toggleCheckbox(checkedId, otherId) {
            const checkedBox = document.getElementById(checkedId);
            const otherBox = document.getElementById(otherId);
            const idInput = document.getElementById('idNumber');

            if (checkedBox.checked) {
                otherBox.checked = false;
                idInput.disabled = false;
            } else {
                idInput.disabled = true;
            }
        }
    </script>