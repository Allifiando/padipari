<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "galeri".
 *
 * @property integer $id_galeri
 * @property string $caption
 * @property string $foto
 * @property string $create_at
 */
class Galeri extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'galeri';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['caption', 'foto'], 'required'],
            [['create_at'], 'safe'],
            [['foto'], 'file', 'extensions' => 'png, jpg, jpeg, gif'],
            [['caption'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_galeri' => 'ID',
            'caption' => 'Caption',
            'foto' => 'Foto',
            'create_at' => 'Create At',
        ];
    }

    public function getImageUrl()
    {
        $img = $this::find()->where(['id_galeri'=>$this->id_galeri])->one();
        return "<img 
            src='".Yii::getAlias('@belakang/').$img->foto."'
            class='img-responsive img-thumbnail' 
            width='500px' />";
    }
}
