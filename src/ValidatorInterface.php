<?php
/**
 * Created by PhpStorm.
 * User: Joan Valls
 * Date: 1/24/17
 * Time: 11:31 AM
 */

namespace Caminalab;


interface ValidatorInterface
{
    /**
     * @param $value
     * @return bool
     */
    public function isValid($value);
}