<?php

namespace backend\models;

use Yii;
use yii\helpers\ArrayHelper;
use backend\models\Galeri;

/**
 * This is the model class for table "blog".
 *
 * @property integer $id_blog
 * @property string $judul_blog
 * @property string $deskripsi
 * @property string $penulis
 * @property string $tanggal_blog
 * @property integer $id_galeri
 * @property string $publish
 */
class Blog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blog';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['judul_blog', 'deskripsi', 'penulis', 'id_galeri'], 'required'],
            [['deskripsi', 'publish'], 'string'],
            [['tanggal_blog'], 'safe'],
            [['id_galeri'], 'integer'],
            [['judul_blog', 'penulis'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_blog' => 'ID',
            'judul_blog' => 'Judul Blog',
            'deskripsi' => 'Deskripsi',
            'penulis' => 'Penulis',
            'tanggal_blog' => 'Tanggal Blog',
            'id_galeri' => 'Cover',
            'publish' => 'Publish',
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
