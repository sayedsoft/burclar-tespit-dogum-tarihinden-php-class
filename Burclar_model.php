<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Burclar_model extends CI_Model
{

  public function __construct()
  {

  }

  function CheckIfDateBetween ($datea,$dateb,$date) {
      if ($date >= $datea and $date <= $dateb) {
        return true;
      }
      return false;
  }

  function BurclarList () {
      return array(
        '1'  => array('n'=>'Koç','sn'=>'koc','datea'=>'03-21','dateb'=>'04-19'),
        '2'  => array('n'=>'Boğa','sn'=>'boga','datea'=>'04-20','dateb'=>'05-20'),
        '3'  => array('n'=>'İkizler','sn'=>'ikizler','datea'=>'05-21','dateb'=>'06-21'),
        '4'  => array('n'=>'yengec','sn'=>'Yengeç','datea'=>'06-22','dateb'=>'07-22'),
        '5'  => array('n'=>'Aslan','sn'=>'aslan','datea'=>'07-23','dateb'=>'08-22'),
        '6'  => array('n'=>'Başak','sn'=>'basak','datea'=>'08-23','dateb'=>'09-22'),
        '7'  => array('n'=>'Terazi','sn'=>'terazi','datea'=>'09-23','dateb'=>'10-23'),
        '8'  => array('n'=>'Akrep','sn'=>'akrep','datea'=>'10-24','dateb'=>'11-21'),
        '9'  => array('n'=>'Yay','sn'=>'yay','datea'=>'11-22','dateb'=>'12-21'),
        '10' => array('n'=>'Oğlak','sn'=>'oglak','datea'=>'12-22','dateb'=>'01-19'),
        '11' => array('n'=>'Kova','sn'=>'kova','datea'=>'01-20','dateb'=>'02-18'),
        '12' => array('n'=>'Balık','sn'=>'balik','datea'=>'02-19','dateb'=>'20-19'),
      );
  }

  function SetBurc () {
      $date = '1991-12-21';
      $month = date("m",strtotime($date));
      $day   = date("d",strtotime($date));
      $date  = $month.'-'.$day;
      $burc  = null;
      $list  = $this->BurclarList ();
      foreach ($list as $key => $burc) {
         $datea = $burc['datea'];
         $dateb = $burc['dateb'];
         $check = $this->CheckIfDateBetween ($datea,$dateb,$date);
         if ($check) {
           $burc = $burc;
           break;
         }
      }
      return $burc;
  }

}
