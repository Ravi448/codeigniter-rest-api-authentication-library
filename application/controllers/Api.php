<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends AUTH_Controller {
	public function __construct(){
        parent::__construct();
    }

    public function index(){
    	echo 'validated';
    }
    
}