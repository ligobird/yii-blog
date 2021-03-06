<?php

namespace common\models;

use common\models\base\BaseModel;
use Yii;
use yii\db\Query;

/**
 * This is the model class for table "relation_post_tags".
 *
 * @property integer $id
 * @property integer $post_id
 * @property integer $tag_id
 */
class RelationPostTagsModel extends BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'relation_post_tags';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['post_id', 'tag_id'], 'integer'],
            [['post_id', 'tag_id'], 'unique', 'targetAttribute' => ['post_id', 'tag_id'], 'message' => 'The combination of Post ID and Tag ID has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'post_id' => 'Post ID',
            'tag_id' => 'Tag ID',
        ];
    }


    public function BatchInsert($data)
    {
        return (new Query())->createCommand()
            ->batchInsert(self::tableName(), ['post_id', 'tag_id'], $data)
            ->execute();
    }


    public function getTag()
    {
        return $this->hasOne(TagsModel::className(), ['id'=>'tag_id']);
    }
}
