<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%tbl_tag}}".
 *
 * @property int $id
 * @property int $frequency
 * @property string $name
 */
class TblTag extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tbl_tag}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['frequency'], 'integer'],
            [['name'], 'string', 'max' => 512],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('backend', 'ID'),
            'frequency' => Yii::t('backend', 'Frequency'),
            'name' => Yii::t('backend', 'Name'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return TblTagQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TblTagQuery(get_called_class());
    }
}
