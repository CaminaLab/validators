<?php
/**
 * Created by PhpStorm.
 * User: Joan Valls
 * Date: 1/24/17
 * Time: 11:49 AM
 */

use \Caminalab\Validators\Email;

class PhoneNumberTest extends PHPUnit_Framework_TestCase
{
    private $validator;

    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->validator = new Email();
    }

    public function testPhoneNumber(){
        $testValues = array();

        /* MUST not VALIDATE */
        $testValues[] = array("value"=>null,"isValid"=>false);
        $testValues[] = array("value"=>"userdomain.com","isValid"=>false);
        $testValues[] = array("value"=>"user@domaincom","isValid"=>false);
        $testValues[] = array("value"=>"user@domain.m","isValid"=>false);
        $testValues[] = array("value"=>"+denisewalters@stkittsscenicrailway.com","isValid"=>false);

        /* MUST VALIDATE */
        $testValues[] = array("value"=>"joan@igeos.com","isValid"=>true);


        foreach($testValues as $em){
            $isValid = $this->validator->isValid($em["value"]);
            $this->assertEquals($em["isValid"],$isValid);
        }
    }
}
