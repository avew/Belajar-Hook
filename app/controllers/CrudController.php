<?php 

class CrudController extends BaseController {

	public function index(){
		$model = new Crud();
		return View::make('Hello/list', array('data' => $model->getData()));
	}

	public function form($id = null) {
		$data = new Crud();
		$data->id = '';
		$data->name = '';
		$data->alamat = '';
		if ($id !== null) {
			$model = new Crud();
			$data = $model->getData($id);
		}
		return View::make('Hello/form', array('data' => $data));
	}

	public function delete($id) {
		$model = new Crud();
		$model->deleteData($id);

		return Redirect::route('crud_index');
	}

	public function save() {
		$data['id'] = Input::get('id');
		$data['nama'] = Input::get('nama');
		$data['alamat'] = Input::get('alamat');

		$model = new Crud();
		$model->saveData($data);

		return Redirect::route('crud_index');
	}
}