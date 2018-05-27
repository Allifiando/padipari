<?php

namespace frontend\models;

use Yii;

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
        ];
    }
}
