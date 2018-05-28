<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TubeMod extends CI_Model
{
	private function __xurl() { return $this->config->item('api_url'); }
    private function __xkey() { return $this->config->item('credential'); }



}