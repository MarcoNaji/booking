<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class create_id{
	public function get_id(){
		$microtime = (microtime());
		$time      = explode(" ", $microtime);
		$micro     = explode(".", $time[0]);
		$rnd       = $micro[1] . substr($micro[1], rand(0, 6), 1);
		$id        = $time[1] . $rnd;

		return $id;
	}
}