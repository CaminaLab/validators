<?php
/**
 * Created by PhpStorm.
 * User: Joan Valls
 * Date: 1/24/17
 * Time: 11:29 AM
 */

namespace Caminalab\Validators;
use Caminalab\ValidatorInterface;


/**
 * Class PhoneNumber
 * @package Validators
 */
class PhoneNumber implements ValidatorInterface
{
    /**
     * Phone number validator. Return TRUE if number is valid. False otherwise
     *
     * @param $number
     * @return bool
     */
    public function isValid($number)
    {
        return preg_match('/^\d{8,15}$/', $number);
    }
}