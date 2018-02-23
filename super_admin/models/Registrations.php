<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "registrations".
 *
 * @property int $id
 * @property string $name
 * @property string $date
 * @property string $validity
 * @property string $key
 * @property int $status
 */
class Registrations extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'registrations';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'validity', 'key'], 'string'],
            [['date'], 'safe'],
            [['status'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'date' => 'Date',
            'validity' => 'Validity',
            'key' => 'Key',
            'status' => 'Status',
        ];
    }
}
