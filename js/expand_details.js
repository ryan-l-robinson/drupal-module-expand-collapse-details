(function (Drupal) {
    var detailsElements = document.querySelectorAll('article details');
    // @todo this block ID won't be the same, depending what theme it is included within, so I need to select on something else
    var expandDetailsBlock = document.getElementById('block--expanddetails');
    var expandDetailsButton = document.getElementById('expand-details-button');
    var collapseDetailsButton = document.getElementById('collapse-details-button');

    if (detailsElements.length > 0 && expandDetailsBlock) {
        expandDetailsBlock.style.display = 'flex';

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
    }

})(Drupal);
