<?php
$observers = array(
    array(
        'eventname'=>'\core\event\user_loggedin',
        'callback' => 'observer::recordloginTime'
    ),
    array(
        'eventname'=>'\core\event\user_loggedout',
        'callback' => 'observer::recordloginTime'
    )
);