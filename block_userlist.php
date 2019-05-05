<?php
defined('MOODLE_INTERNAL') || die();

// Supressing warning class
class block_userlist_context {
  public $text='';
  public $foote='';
}

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
        

        $query='SELECT username,login_time,logout_time,session_duration FROM {block_userlist} ORDER BY login_time DESC;';
        $results = $DB->get_records_sql($query);

        $this->content =  new block_userlist_context();
        
        $table = new html_table();
        $table->head = [
            get_string('username', 'block_userlist'),
            get_string('loginTime', 'block_userlist'),
            get_string('logoutTime', 'block_userlist'),
            get_string('sessionDuration', 'block_userlist'),
        ];

        foreach ($results as $result) {
            $table->data[] = [
                $result->username,
                date('D d/m/Y H:i:s', $result->login_time),
                date('D d/m/Y H:i:s', $result->logout_time),
                gmdate('H:i:s', $result->session_duration),
            ];
        }

        $this->content->text=html_writer::table($table);

        return $this->content;
    }
}