document.addEventListener("DOMContentLoaded", function () {
    // Number of items to display per page
    const itemsPerPage = 6;
    let currentPage = 1;

    // Get all the entertainment cards
    const allCards = document.querySelectorAll(".entertainment-card");

    // Show a specific page
    function showPage(page) {
        const start = (page - 1) * itemsPerPage;
        const end = start + itemsPerPage;

        // Hide all cards first
        allCards.forEach(card => card.style.display = 'none');

        // Show only the cards for the current page
        allCards.forEach((card, index) => {
            if (index >= start && index < end) {
                card.style.display = 'block';
            }
        });
    }

    // Render pagination controls
    function renderPaginationControls() {
        const totalPages = Math.ceil(allCards.length / itemsPerPage);
        const pagination = document.getElementById("pagination-controls");
        pagination.innerHTML = ""; // Clear existing pagination controls

        // Create page buttons
        for (let i = 1; i <= totalPages; i++) {
            const btn = document.createElement("button");
            btn.textContent = i;
            btn.classList.add("btn", "btn-outline-secondary", "rounded-pill", "glow-on-hover-blue", "m-1");

            // Add active class to the current page
            if (i === currentPage) btn.classList.add("active");

            // When a page button is clicked
            btn.addEventListener("click", () => {
                currentPage = i;
                showPage(currentPage);
                renderPaginationControls(); // Re-render pagination controls

                // Scroll to the #results section
                const resultsElement = document.getElementById("results");
                if (resultsElement) {
                    resultsElement.scrollIntoView({ behavior: "smooth" });
                }
            });

            pagination.appendChild(btn);
        }
    }

    // Initialize pagination on page load
    showPage(currentPage); // Show the first page
    renderPaginationControls(); // Show pagination controls
});
