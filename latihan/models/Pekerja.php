<?php
namespace app\models;

use Yii;
use yii\db\ActiveRecord;
class Pekerja extends ActivesRecord{

//public $nama;
//public $jabatan;
//public $email;
//public $keterangan;

public function rules(){
	return[
		[['nama','jabatan','email','keterangan'],'required'],
		['email','email'],
		['keterangan','string','max'=>150],
	];
	}


	public function dataJabatan(){
		return [
			1 =>'CEO',
			2 =>'COO',
			3 =>'SuperVisor',
			];
	}
	public function labelJabatan(){
		if($this->jabatan==1){
			return 'CEO';
		}elseif($this->jabatan==2){
			return 'COO';
		}elseif($this->jabatan==3){
			return 'supervisor';
		}else{
			return 'unknown';
		}
	}
}
