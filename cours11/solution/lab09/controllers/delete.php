<?php

include_once(__DIR__ . "/../controller.php");
include_once(__DIR__ . '/../models/series.php');

class DeleteController extends Controller {
  function handle($get) {
    if (!isset($get['id'])) {
      throw new Exception('Parameter `id` is missing.');
    }
    $id = intval($get['id']);

    $model = new SeriesModel($this->db);

    $model->delete($id);

    header("Location: ?action=list");
  }
}

?>