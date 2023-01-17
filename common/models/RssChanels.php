<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "rss_chanels".
 *
 * @property int $id
 * @property int $name
 * @property int $url
 * @property int $time_sync Время синхронизации
 * @property int $status Статус
 */
class RssChanels extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rss_chanels';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [[ 'time_sync','status'], 'integer'],
            [['name', 'url' ], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'url' => 'Url',
            'time_sync' => 'Время синхронизации',
        ];
    }

    /**
     * {@inheritdoc}
     * @return RssChanelsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new RssChanelsQuery(get_called_class());
    }
}
