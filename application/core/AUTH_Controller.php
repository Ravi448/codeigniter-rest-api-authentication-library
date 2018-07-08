<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class AUTH_Controller extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->library('access',getallheaders());
			$this->access->validate() or exit($this->access->validate());
		}

}