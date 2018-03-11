<?php

namespace backend\modules\api\models;

use Yii;

/**
 * This is the model class for table "housingUnits".
 *
 * @property int $id
 * @property string $house_number
 * @property int $owner_id
 * @property string $size
 * @property resource $description
 * @property string $occupied
 * @property string $parking_slot
 * @property string $created_at
 * @property int $created_by
 * @property string $updated_at
 * @property int $updated_by
 */
class HousingUnits extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'housingUnits';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'house_number'], 'required'],
            [['id', 'owner_id', 'created_by', 'updated_by'], 'integer'],
            [['description', 'occupied'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['house_number'], 'string', 'max' => 20],
            [['size'], 'string', 'max' => 50],
            [['parking_slot'], 'string', 'max' => 30],
            [['id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'house_number' => 'House Number',
            'owner_id' => 'Owner ID',
            'size' => 'Size',
            'description' => 'Description',
            'occupied' => 'Occupied',
            'parking_slot' => 'Parking Slot',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
        ];
    }
}
