<?php


class GoodsController extends Controller
{


  public function actionIndex()
  {
    $model = new GoodsForm;
    $data = $model->menu();
    $data = $data[0];

    $this->render('goods', $data);

  }



}
