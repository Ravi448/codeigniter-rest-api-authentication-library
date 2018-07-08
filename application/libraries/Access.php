<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Access{
	var $headers;
	var $apiKey = '909090';
	var $keyPass = '880080';
	function __construct($headers){
		$this->headers = $headers;
	}

	private function _check_api_key(){
		return array_key_exists('api_key',$this->headers) ? true: exit('Error: No API key');
	}

	private function _check_api_password(){
		array_key_exists('api_password',$this->headers)? true: exit('Error: No API Passoword');
	}

	private function _check_api_key_value(){
		return $this->headers['api_key'] == $this->apiKey ? true : exit('Error: Invalid API Key');
	}

	private function _check_api_password_value(){
		$this->headers['api_password'] == $this->keyPass ? true : exit('Invalid API Password');
	}

	public function validate(){
		$this->_check_api_key();
		$this->_check_api_password();
		$this->_check_api_key_value();
		$this->_check_api_password_value();
		return true;
	}

}