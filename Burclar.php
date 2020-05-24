<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Controller 

class Burclar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
    $this->loader->model('Burclar_model');
	}

	function BurcCikar () {
    // date format: Y-m-d
    $date = '1991-12-21';
	  $buc  =	$this->Burclar_model->SetBurc($date);
    // sonuç orneği
    //Array ( [n] => Yay [sn] => yay [datea] => 11-22 [dateb] => 12-21 )
	}

}
