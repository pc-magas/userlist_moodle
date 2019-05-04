<?php
defined('MOODLE_INTERNAL') || die();

class block_userlist extends block_base {
    public function init() {
        $this->title = get_string('userlist', 'block_userlist');
    }
    // The PHP tag and the curly bracket for the class definition 
    // will only be closed after there is another function added in the next section.

    public function get_content() {
        global $DB;

        // if ($this->content !== null) {
        //   return $this->content;
        // }
        
        $user = $DB->get_record_sql('SELECT COUNT(*) as total_users FROM {user};');

        $this->content         =  new stdClass;
        $this->content->text  .= 'The content of our ';
        $this->content->text  .= html_writer::tag('span','UserList',['style'=>'color:red']);
        $this->content->text  .= ' block!';
        $this->content->footer = "Τotal Users: $user->total_users";
        return $this->content;
    }
}