<?php
class Acom_Filter_EmptyStringToNull implements Zend_Filter_Interface
{
    public function filter($value)
    {
        if ($value === '') {
            return null;
        }
        return $value;
    }
}