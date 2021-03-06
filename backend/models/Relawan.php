<?php

namespace backend\models;

use Yii;
use yii\helpers\ArrayHelper;

use backend\models\Agenda;

/**
 * This is the model class for table "relawan".
 *
 * @property integer $id_relawan
 * @property string $nama
 * @property string $no_telp
 * @property string $email
 * @property string $line
 * @property string $instagram
 * @property integer $agenda_id
 * @property integer $tgl_daftar
 */
class Relawan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'relawan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'no_telp', 'email', 'line', 'instagram', 'agenda_id'], 'required'],
            [['email'], 'email'],
            [['tgl_daftar'], 'safe'],
            [['agenda_id'], 'integer'],
            [['nama'], 'string', 'max' => 20],
            [['no_telp'], 'string', 'max' => 15],
            [['email', 'line', 'instagram'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_relawan' => 'ID Relawan',
            'nama' => 'Nama',
            'no_telp' => 'No Telp',
            'email' => 'Email',
            'line' => 'Line',
            'instagram' => 'Instagram',
            'agenda_id' => 'Agenda ID',
            'tgl_daftar' => 'Tgl Daftar',
        ];
    }

    public function dropDownList()
    {
        $data = Agenda::find()->all();
        return ArrayHelper::map($data, 'id_agenda', 'nama_agenda');
    }

    public function getAgenda()
    {
        $data = Agenda::find()->where(['id_agenda'=>$this->agenda_id])->one();
        return $data->nama_agenda;
    }
}
