<?php
namespace afoozle\PhoneNumberValidator;

class Validator {

    public function isValid($phoneNumber)
    {
        return is_numeric($phoneNumber);
    }
}