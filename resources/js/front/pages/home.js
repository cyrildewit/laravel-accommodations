(function ($) {
    "use strict"; // Start of use strict

    var destinations = [
        { value: 'Waterland, The Netherlands' },
        { value: 'Amsterdam, The Netherlands' },
        { value: 'Palie, Greece' },
    ];

    $('#destination').autocomplete({
        lookup: destinations,
        onSelect: function (suggestion) {
            // this.value = suggestion.value;
        }
    });

})(jQuery); // End of use strict
