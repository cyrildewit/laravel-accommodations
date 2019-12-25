(function ($) {
    "use strict"; // Start of use strict

    $('#destination').autocomplete({
        serviceUrl: '/search/destination-autocomplete',
        onSelect: function (suggestion) {
            // this.value = suggestion.value;
        }
    });

})(jQuery); // End of use strict
