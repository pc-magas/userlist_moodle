<?php
$observers = array(
    array(
        'eventname'=>'\core\event\user_loggedout',
        'callback' => 'block_userlist_observer::recordloginTime'
    )
);