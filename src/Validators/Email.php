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
 * Class Email
 * @package Validators
 */
class Email implements ValidatorInterface
{
    /**
     * Email validator. Return TRUE if email is valid. False otherwise
     *
     * @param $email
     * @return bool
     */
    public function isValid($email)
    {
        return preg_match('/\A[A-Za-z0-9]+([-._][A-Za-z0-9]+)*@([a-z0-9]+(-[a-z0-9]+)*\.)+[a-z]{2,4}\z/', $email)
        && preg_match('/^(?=.{1,64}@.{4,64}$)(?=.{6,100}$).*/', $email)
        && false !== filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}