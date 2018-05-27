<?php

namespace backend\models;

use Yii;
use yii\helpers\ArrayHelper;
use backend\models\Galeri;

/**
 * This is the model class for table "agenda".
 *
 * @property integer $id_agenda
 * @property string $nama_agenda
 * @property string $waktu
 * @property string $ket_agenda
 * @property string $tempat
 * @property integer $id_galeri
 * @property string $create_at
 */
class Agenda extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'agenda';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_agenda', 'waktu', 'ket_agenda', 'tempat', 'id_galeri'], 'required'],
            [['ket_agenda'], 'string'],
            [['id_galeri'], 'integer'],
            [['create_at'], 'safe'],
            [['nama_agenda', 'waktu', 'tempat'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_agenda' => 'ID',
            'nama_agenda' => 'Nama Agenda',
            'waktu' => 'Waktu',
            'ket_agenda' => 'Keterangan Agenda',
            'tempat' => 'Tempat',
            'id_galeri' => 'Cover',
            'create_at' => 'Create At',
        ];
    }

    public function dropDownList()
    {
        $data = Galeri::find()->all();
        return ArrayHelper::map($data, 'id_galeri', 'caption');
    }

    public function getImageUrl()
    {
        $img = Galeri::find()->where(['id_galeri'=>$this->id_galeri])->one();
        return "<img 
            src='".Yii::getAlias('@belakang/').$img->foto."'
            class='img-responsive img-thumbnail' 
            width='500px' />";
    }
}
