// https://stackoverflow.com/questions/426258/setting-checked-for-a-checkbox-with-jquery

// jq 1.6 +
$('.myCheckbox').prop('checked', true);
$('.myCheckbox').prop('checked', false);

//jq 1.5 -
$('.myCheckbox').attr('checked', true);
$('.myCheckbox').attr('checked', false);