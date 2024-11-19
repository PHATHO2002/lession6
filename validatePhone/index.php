<?php
function isValidPhoneNumber($phone)
{
    $pattern = '/^\(\d{2}\)-\(\d{10}\)$/';
    return preg_match($pattern, $phone) === 1;
}


var_dump(isValidPhoneNumber("(84)-(0978489648)"));
var_dump(isValidPhoneNumber("(84)-(0978489648)"));
var_dump(isValidPhoneNumber("(84)-(097848964ádasd8)"));
