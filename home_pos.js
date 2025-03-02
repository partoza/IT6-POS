document.addEventListener("DOMContentLoaded", function () {
    function showPage(element) {
        const page = element.getAttribute("data-page");

        console.log("Switching to:", page);

        const menuSection = document.getElementById("menu");
        const orderSection = document.getElementById("order");

        if (!menuSection || !orderSection) {
            console.error("Error: Sections not found in the DOM!");
            return;
        }

        // Hide all sections
        menuSection.classList.add("d-none");
        orderSection.classList.add("d-none");

        // Show the selected section
        if (page === "menu") {
            menuSection.classList.remove("d-none");
        } else if (page === "order") {
            orderSection.classList.remove("d-none");
        }

        // Remove 'active' class from all sidebar items
        document.querySelectorAll(".sidebar-item").forEach(item => {
            item.classList.remove("active", "text-primary");
        });

        // Add 'active' class to clicked sidebar item
        element.classList.add("active", "text-primary");
    }

    // Attach click event listeners to sidebar items
    document.querySelectorAll(".sidebar-item").forEach(item => {
        item.addEventListener("click", function () {
            showPage(this);
        });
    });

    // ✅ Set "Menu" as the default active section on page load
    const defaultMenu = document.querySelector('.sidebar-item[data-page="menu"]');
    if (defaultMenu) {
        showPage(defaultMenu);
    }

    // ✅ Handle menu tab navigation
    document.querySelectorAll('.tab-button').forEach(button => {
        button.addEventListener('click', function () {
            document.querySelectorAll('.tab-button').forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');

            document.querySelectorAll('.tab-pane').forEach(pane => pane.classList.remove('show', 'active'));
            const tabContent = document.getElementById(this.getAttribute('data-tab'));
            if (tabContent) {
                tabContent.classList.add('show', 'active');
            } else {
                console.error("Error: Tab content not found!");
            }
        });
    });

    // ✅ Set "All" as the default active menu tab on page load
    const defaultTab = document.querySelector('.tab-button[data-tab="all"]');
    if (defaultTab) {
        defaultTab.click();
    }
});






