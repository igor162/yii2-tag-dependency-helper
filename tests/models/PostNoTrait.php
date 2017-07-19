<?php

namespace igor162\TagDependencyHelper\tests\models;

use igor162\TagDependencyHelper\CacheableActiveRecord;
use igor162\TagDependencyHelper\TagDependencyTrait;

/**
 * Class PostNoTrait
 * @property integer $author_id
 * @property string $text
 */
class PostNoTrait extends \yii\db\ActiveRecord
{

    public function behaviors()
    {
        return [
            'CacheableActiveRecord' => [
                'class' => CacheableActiveRecord::className(),
            ],
        ];
    }


    public static function tableName()
    {
        return '{{%post}}';
    }

}