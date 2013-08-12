<?php 


class Crud extends Eloquent {
	protected $table = 'crud';

	//Remove created_at and updated_at from query
	public $timestamps = false;

	public function  saveData($data){
		if ($data['id'] == null || $data['id'] == '') {
			$this->nama = $data['nama'];
			$this->alamat = $data['alamat'];
			$this->save();
		} else {
			self::where('id', '==', $data['id'])->update($data);
		}
	}

	public function deleteData($id)
	{
		self::find($id)->delete();
	}

	public function getData($id = null)
	{
		if ($id !== null) {
			return self::find($id);
		} else {
			return self::all();
		}
	}
}