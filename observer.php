<?php
defined('MOODLE_INTERNAL') || die();

class observer 
{
    public static function recordloginTime()
    {
        global $DB;
        global $USER;
        echo $USER->id;
        //Do stuff here
    }

    public static function recordLogoutTime()
    {
        global $DB;
        global $USER;
        echo $USER->id;
        //Do stuff here
    }
}