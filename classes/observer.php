<?php
defined('MOODLE_INTERNAL') || die();

class block_userlist_observer 
{
    public static function recordLogoutTime($event)
    {
        global $DB;
        global $USER;
        echo "USER_ID: ".$event->userid;
        var_dump($event);
        sleep(50);//Debug Delay
        //Do stuff here
    }
}
