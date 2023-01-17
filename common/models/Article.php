<?php

namespace common\models;


use common\models\query\ArticleQuery;
use mohorev\file\UploadImageBehavior;
use trntv\filekit\behaviors\UploadBehavior;
use Yii;
use DateTime;
use dosamigos\taggable\Taggable;
//use lan143\yii2_yandexturbo\YandexTurboBehavior;
use yii\db\ActiveQuery;
use yii\helpers\Url;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\SluggableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "article".
 *
 * @property integer $id
 * @property string $slug
 * @property string $title
 * @property string $body
 * @property string $view
 * @property string $short_body
 * @property string $seo_description
 * @property string $seo_keywords
 * @property string $thumbnail_base_url
 * @property string $thumbnail_path
 * @property array $attachments
 * @property integer $author_id
 * @property integer $updater_id
 * @property integer $category_id
 * @property integer $status
 * @property integer $published_at
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $avto
 *
 * @property User $author
 * @property User $updater
 * @property ArticleCategory $category
 * @property ArticleAttachment[] $articleAttachments
 */
class Article extends \yii\db\ActiveRecord
{
    const STATUS_PUBLISHED = 1;
    const STATUS_DRAFT = 0;

    /**
     * @var array
     */
    public $attachments;

    /**
     * @var array
     */
    public $thumbnail;
    public $tagNames;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%article}}';
    }

    /**
     * @return ArticleQuery
     */
    public static function find()
    {
        return new ArticleQuery(get_called_class());
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
            [
                'class'=>BlameableBehavior::className(),
                'createdByAttribute' => 'author_id',
                'updatedByAttribute' => 'updater_id',

            ],
//            'yandexTurbo' => [
//                'class' => YandexTurboBehavior::class,
//                'scope' => function (ActiveQuery $query) {
//                    $query->orderBy(['created_at' => SORT_DESC]);
//                },
//                'dataClosure' => function (self $model) {
//                    return [
//                        'title' => $model->title,
//                        'link' => Url::to(['article/view', 'id' => $model->id], true),
//                        'description' => $model->seo_description,
//                        'content' => $model->body,
//                        'pubDate' => (new DateTime($this->created_at))->format(DateTime::RFC822),
//                    ];
//                }
//            ],
            [
                'class'=>SluggableBehavior::className(),
                'attribute'=>'title',
                'immutable' => true
            ],
            [
                'class' => UploadBehavior::className(),
                'attribute' => 'attachments',
                'multiple' => true,
                'uploadRelation' => 'articleAttachments',
                'pathAttribute' => 'path',
                'baseUrlAttribute' => 'base_url',
                'typeAttribute' => 'type',
                'sizeAttribute' => 'size',
                'nameAttribute' => 'name',
            ],
            Taggable::className(),
            'UploadBehavior'=>[
                'class' => \common\components\UploadImageBehavior::className(),
                'attribute' => 'image',
                'scenarios' => ['insert', 'update'],
                'placeholder' => '@storage/web/source/noimage.png',
                'path' => '@storage/web/source/user/{id}',
                'url' => '@storageUrl/source/user/{id}',
                'thumbs' => [
                    'thumb' => ['width' => 150, 'quality' => 90], //default
                    'preview' => ['width' => 50, 'height' => 50, 'quality' => 100],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'body', 'category_id'], 'required'],
            [['slug'], 'unique'],
            [['body', 'seo_description', 'seo_keywords', 'short_body'], 'string', 'max' => 100000],
            [['published_at'], 'default', 'value' => time()],
            [['published_at'], 'filter', 'filter' => 'strtotime'],
            [['category_id'], 'exist', 'targetClass' => ArticleCategory::className(), 'targetAttribute'=>'id'],
            [['author_id', 'updater_id','iS_publish_vk','iS_publish_telegram', 'status'], 'integer'],
            [['slug', 'thumbnail_base_url', 'thumbnail_path'], 'string', 'max' => 1024],
            [['title'], 'string', 'max' => 512],
            [['view'], 'string', 'max' => 255],
            [['attachments', 'thumbnail','tagNames','avto'], 'safe'],
            ['image', 'image', 'extensions' => 'jpg, jpeg, gif, png', 'on' => ['insert', 'update']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('common', 'ID'),
            'slug' => Yii::t('common', 'УРЛ'),
            'title' => Yii::t('common', 'Название'),
            'body' => Yii::t('common', 'Основной текст'),
            'short_body' => Yii::t('common', 'Короткий текст'),
            'view' => Yii::t('common', 'Article View'),
            'thumbnail' => Yii::t('common', 'Картинка'),
            'image' => Yii::t('common', 'Картинка'),
            'attachments' => Yii::t('common', 'Вложения'),
            'author_id' => Yii::t('common', 'Автор'),
            'updater_id' => Yii::t('common', 'ИД обновления'),
            'category_id' => Yii::t('common', 'Категория'),
            'seo_description' => Yii::t('common', 'Описание для SEO'),
            'seo_keywords' => Yii::t('common', 'Ключевые слова для SEO'),
            'status' => Yii::t('common', 'Статус'),
            'published_at' => Yii::t('common', 'Дата публикации'),
            'created_at' => Yii::t('common', 'Дата создания'),
            'updated_at' => Yii::t('common', 'Дата обновления'),
            'iS_publish_telegram' => Yii::t('common', 'Публиковать Телеграмм'),
            'iS_publish_vk' => Yii::t('common', 'Публиковать Вконтакте')
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor()
    {
        return $this->hasOne(User::className(), ['id' => 'author_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUpdater()
    {
        return $this->hasOne(User::className(), ['id' => 'updater_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(ArticleCategory::className(), ['id' => 'category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArticleAttachments()
    {
        return $this->hasMany(ArticleAttachment::className(), ['article_id' => 'id']);
    }

    /**
     * @return string URL of the image
     */
    public function getUrl()
    {
        return $this->thumbnail_base_url .'/'. $this->thumbnail_path;
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTags()
    {
        return $this->hasMany(TblTag::className(), ['id' => 'tag_id'])->viaTable('tbl_article_tag_assign', ['article_id' => 'id']);
    }


    public function getTagsIm()
    {
        $model =    $this->hasMany(TblTag::className(), ['id' => 'tag_id'])->viaTable('tbl_article_tag_assign', ['article_id' => 'id']);

        $d =$model->asArray()->all();
        $txt = [];
        foreach ($d as $item) {
            $txt []= $item['name'];
        }

        return implode(',',$txt);
    }

}
