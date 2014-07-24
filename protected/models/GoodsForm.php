<?php

/**
 * ContactForm class.
 * ContactForm is the data structure for keeping
 * contact form data. It is used by the 'contact' action of 'SiteController'.
 */
class GoodsForm extends CFormModel
{
  public $id;
  public $name;
  public $about;
  public $price;
  public $all;


  public function menu() {
    
    if(!isset($this->all)){
      $this->all = array();
    }
      array_push($this->all, array("id" => 1, "name" => "comp", "about" => "Cool thing", "price" => 100));

    return $this->all;
  }

}
