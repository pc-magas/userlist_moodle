<?php
defined('MOODLE_INTERNAL') || die();

class block_userlist_observer 
{
    public static function recordLogoutTime($event)
    {
        global $DB;
        $userid=$event->userid;
        $query = 'INSERT INTO {block_userlist} (user_id,logout_time,login_time,session_duration) 
        SELECT id,lastaccess,currentlogin,(lastaccess - currentlogin) from {user} WHERE id=:user_id';
        $DB->execute($query,['user_id'=>$userid]);
    }
}
