<?php
namespace afoozle\PhoneNumberValidator;

class Validator {

    public function isValid($phoneNumber)
    {
        $phoneNumber = preg_replace('/[^0-9\+]/', '', $phoneNumber);
        if (preg_match('/^\+?[0-9]{8,12}$/', $phoneNumber)) {
            return true;
        }
        return false;
    }
}