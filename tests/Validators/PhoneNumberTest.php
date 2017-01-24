<?php
/**
 * Created by PhpStorm.
 * User: Joan Valls
 * Date: 1/24/17
 * Time: 11:49 AM
 */


use Caminalab\Validators\PhoneNumber;


class EmailTest extends PHPUnit_Framework_TestCase
{
    private $validator;

    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->validator = new PhoneNumber();
    }

    public function testEmails(){
        $testValues = array();

        /* MUST not VALIDATE */
        $testValues[] = array("value"=>null,"isValid"=>false);
        $testValues[] = array("value"=>"3412345","isValid"=>false);
        $testValues[] = array("value"=>"3412345678901234","isValid"=>false);
        $testValues[] = array("value"=>"+34123456789","isValid"=>false);
        $testValues[] = array("value"=>"(+34)123456789","isValid"=>false);
        $testValues[] = array("value"=>"+34 123456789","isValid"=>false);

        /* MUST VALIDATE */
        $testValues[] = array("value"=>"34123456789","isValid"=>true);


        foreach($testValues as $em){
            $isValid = $this->validator->isValid($em["value"]);
            $this->assertEquals($em["isValid"],$isValid);
        }
    }
}
