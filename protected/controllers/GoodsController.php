<?php


class GoodsController extends Controller {


  public function actionGoods() {

   	$model = new GoodsForm;

    $this->render('goods', array('data' => $model->getAll(), 'model' => $model));

  }

  public function actionAdd(){
  	
  	$model = new BucketForm;
  	$model->add();
  	
  }

  public function actionBucket(){
  		$model = new BucketForm;
  	    $this->render('bucket', array('data' => $model->getAll(), 'model' => $model));
  }



}
