<?php

class Utility
{
    public static function convertDateToUnixTimestamp($date_string)
    {
        $date = DateTime::createFromFormat('d m Y', $date_string);
        if ($date) {
            return $date->getTimestamp();
        } else {
            return null;
        }
    }
}
