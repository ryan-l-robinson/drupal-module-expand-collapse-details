(function () {
    // Get details elements, excluding some special cases.
    var detailsElements = document.querySelectorAll('details:not(.building-hours):not(.captcha):not(.bef--secondary');
    // Get blocks, which could be more than once.
    var expandDetailsBlocks = document.querySelectorAll('.block-expand-details-block');

    if (detailsElements.length > 0 && expandDetailsBlocks.length > 0) {
        expandDetailsBlocks.forEach((expandDetailsBlock) => {
            // Display change is set at the block level.
            expandDetailsBlock.style.display = 'flex';

            // Assuming that there will only ever be one of each per block.
            var expandDetailsButton = expandDetailsBlock.querySelector('.expand-details-button-expand');
            var collapseDetailsButton = expandDetailsBlock.querySelector('.expand-details-button-collapse');

            // Add click actions for each block.
            expandDetailsButton.addEventListener("click", () => {
                detailsElements.forEach((details) => {
                    details.open = true;
                })
            });
            collapseDetailsButton.addEventListener("click", () => {
                detailsElements.forEach((details) => {
                    details.open = false;
                })
            });
        });
    }

})();
