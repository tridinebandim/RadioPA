<?php
	class Date {
        
        public static function create() {
            return new self();
        }

		private function __construct() {

		public function toRussian($text) {
			$text = str_replace("Tuesday", " Вторник", $text);
			$text = str_replace("Wednesday", " Среда", $text);
			$text = str_replace("Thursday", " Четверг", $text);
			$text = str_replace("Friday", " Пятница", $text);
			$text = str_replace("Saturday", " Суббота", $text);
			$text = str_replace("Sunday", " Воскресенье", $text);
			$text = str_replace("Понедельник, Вторник, Среда, Четверг, Пятница, Суббота, Воскресенье", "Каждый день", $text);

			return $text;



		public function minutes($minutes) {

		public function getAuthTime() {

		public function setTime($time) {
			return $this;

		public function toFormatString($format) {

		public function toMinSec($second) {
			$dur_minutes= fmod($second, 60);
        	if($dur_minutes < 10) {
        	} else {
        	}

        	return $return;
?>