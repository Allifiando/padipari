<?php

namespace frontend\models;

use yii\base\Model;
use yii\helpers\ArrayHelper;

use frontend\models\Relawan;

class PendaftaranForm extends Model
{
    //public $id;
    public $nama;
    public $no_telp;
    public $email;
    public $line;
    public $instagram;

    public function rules()
    {
        return [
            [['nama', 'no_telp', 'email', 'line', 'instagram',], 'required'],
            [['email'], 'email'],            
            [['nama'], 'string', 'max' => 20],
            [['no_telp'], 'string', 'max' => 15],
            [['email', 'line', 'instagram'], 'string', 'max' => 30],
        ];
    }

    public function attributeLabels()
	{
		return [
            'id_relawan' => 'ID Relawan',
            'nama' => 'Nama',
            'no_telp' => 'No Telp',
            'email' => 'Email',
            'line' => 'Line',
            'instagram' => 'Instagram',            
        ];
	}
}