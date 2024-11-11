<script>
document.addEventListener("DOMContentLoaded", function () {
    // Add click event listener to the entire document to handle all add and delete buttons
    document.addEventListener("click", function (event) {
        // Check if the clicked element is an add button
        if (event.target.closest(".add-input-btn")) {
            const type = event.target.closest(".add-input-btn").getAttribute("data-type");
            addInputField(type);
        }

        // Check if the clicked element is a delete button
        if (event.target.closest(".delete-input-btn")) {
            event.target.closest(".input-group").remove();
        }
    });

    function addInputField(type) {
        // Determine the container based on the type (features or specifications)
        const container = document.querySelector(`[data-container="${type}"]`);
        
        // Create a new input group with delete button
        const inputGroup = document.createElement("div");
        inputGroup.classList.add("input-group", `${type}-input`, "mt-2");
        
        inputGroup.innerHTML = `
            <input type="text" name="${type}[]" class="form-control" placeholder="Product ${type}">
            <div class="input-group-append">
                <button class="btn btn-sm btn-inverse-dark btn-icon delete-input-btn" type="button">
                    <i class="mdi mdi-delete"></i>
                </button>
            </div>
        `;
        
        // Append the new input group to the appropriate container
        container.appendChild(inputGroup);
    }
});
</script>