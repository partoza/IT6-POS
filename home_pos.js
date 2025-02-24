function showPage(element) {
    const page = element.getAttribute("data-page");

    // Debugging log
    console.log("Switching to:", page);

    // Get sections
    const menuSection = document.getElementById("menu-section");
    const orderSection = document.getElementById("order-section");

    // Hide all sections
    menuSection.classList.add("d-none");
    orderSection.classList.add("d-none");

    // Show the selected section
    if (page === "menu") {
        menuSection.classList.remove("d-none");
    } else if (page === "order") {
        orderSection.classList.remove("d-none");
    }

    // Remove active class from all sidebar items
    document.querySelectorAll(".sidebar-item").forEach(item => {
        item.classList.remove("active", "text-primary");
    });

    // Add active class to the clicked item
    element.classList.add("active", "text-primary");
}


document.querySelectorAll('.tab-button').forEach(button => {
    button.addEventListener('click', function () {
        document.querySelectorAll('.tab-button').forEach(btn => btn.classList.remove('active'));
        this.classList.add('active');

        document.querySelectorAll('.tab-pane').forEach(pane => pane.classList.remove('show', 'active'));
        document.getElementById(this.getAttribute('data-tab')).classList.add('show', 'active');
    });
});


