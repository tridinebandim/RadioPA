<?php
	class Security {
	    
        public static $object;
        
        public static function create() {
            if (self::$object === null) {
                self::$object = new self();
            }
            
            return self::$object;
        }
        
		private function __construct() {

		public function denied() {
    		exit;

		public function accessCheck($filename) {
        		die('ACCESS DENIED to '.$filename);
    		}
?>