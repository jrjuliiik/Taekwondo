// Tentei não usar JS, mas... ( -.-')
// I try not use JS, but... ( -.-')

jQuery('input[type="checkbox"]').on('change', function() {
    jQuery('input[type="checkbox"]').not(this).prop('checked', false);
 });