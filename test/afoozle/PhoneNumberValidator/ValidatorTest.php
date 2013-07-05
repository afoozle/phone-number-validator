<?php
namespace afoozle\PhoneNumberValidator;

use afoozle\PhoneNumberValidator\Validator as PhoneValidator;

class ValidatorTest extends \PHPUnit_Framework_TestCase {

    public function testPhoneNumberIsValid()
    {
        $validator = new PhoneValidator();
        $this->assertEquals(true, $validator->isValid('0292494459'), "This number should have validated");
    }

    public function testPhoneNumberIsInvalid()
    {
        $validator = new PhoneValidator();
        $this->assertEquals(false, $validator->isValid('meow meow snuh'), "This number should NOT have validated");
    }

}
