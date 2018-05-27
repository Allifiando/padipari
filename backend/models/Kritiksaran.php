<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "kritik_saran".
 *
 * @property integer $id_kritik_saran
 * @property string $nama_kritik_saran
 * @property string $email_kritik_saran
 * @property string $penj_kritik_saran
 */
class Kritiksaran extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kritik_saran';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_kritik_saran', 'email_kritik_saran', 'penj_kritik_saran'], 'required'],
            [['nama_kritik_saran', 'email_kritik_saran'], 'string', 'max' => 50],
            [['penj_kritik_saran'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_kritik_saran' => 'ID',
            'nama_kritik_saran' => 'Nama',
            'email_kritik_saran' => 'Email',
            'penj_kritik_saran' => 'Kritik & Saran',
        ];
    }
}
