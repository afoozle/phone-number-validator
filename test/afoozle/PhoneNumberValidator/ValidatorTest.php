<?php
namespace afoozle\PhoneNumberValidator;

use afoozle\PhoneNumberValidator\Validator as PhoneValidator;

class ValidatorTest extends \PHPUnit_Framework_TestCase {

    public function phoneNumberDataProvider()
    {
        return array(
            array('', false),
            array('meow meow snuh', false),
            array(false, false),
            array(1.2, false),
            array('1234', false),
            array('0292494459', true),
            array('(02) 9249 4459', true),
            array('+61 2 9249 4459', true),
            array('+61-2-9249-4459', true),
            array('       +61-2-9249-4459         ', true),
        );
    }

    /**
     * @dataProvider phoneNumberDataProvider
     */
    public function testPhoneNumberIsValid($phoneNumber, $expectedIsValid)
    {
        $validator = new PhoneValidator();
        $this->assertEquals($expectedIsValid, $validator->isValid($phoneNumber), "This number '".$phoneNumber."' validated incorrectly");
    }
}
