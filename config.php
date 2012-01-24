<?php

$CFG = new stdClass();
$CFG->prefix = 'ink-';

$CFG->db = array();
$CFG->db['host'] = 'localhost';
$CFG->db['user'] = 'root';
$CFG->db['pass'] = '';
$CFG->db['name'] = 'groceries';

mysql_connect($CFG->db['host'], $CFG->db['user'], $CFG->db['pass']);
@mysql_select_db($CFG->db['name']);

?>