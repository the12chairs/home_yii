<?php

class BucketForm extends CFormModel {



	public $bucket = array();


	// Add to bucket
	public function add($good = null){
		$this->bucket[] = $good;
	}

	public function getAll(){
		return $this->bucket;
	}

}