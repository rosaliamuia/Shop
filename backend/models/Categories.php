<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "categories".
 *
 * @property int $id
 * @property string $user_email
 * @property string $name
 * @property string $description
 * @property string $ikey
 * @property string $amount
 * @property int $quantity
 * @property string $availability
 * @property string $prod_condition
 * @property string $brand
 * @property string $image
 * @property int $women
 * @property int $men
 * @property int $kids
 * @property int $stock
 * @property string $created_at
 */
class Categories extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'categories';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_email', 'name', 'description', 'ikey', 'amount', 'availability', 'prod_condition', 'brand', 'image', 'women', 'kids', 'stock'], 'required'],
            [['description'], 'string'],
            [['quantity', 'women', 'men', 'kids', 'stock'], 'integer'],
            [['created_at'], 'safe'],
            [['user_email', 'prod_condition', 'brand'], 'string', 'max' => 100],
            [['name', 'image'], 'string', 'max' => 255],
            [['ikey', 'amount', 'availability'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_email' => 'User Email',
            'name' => 'Name',
            'description' => 'Description',
            'ikey' => 'Ikey',
            'amount' => 'Amount',
            'quantity' => 'Quantity',
            'availability' => 'Availability',
            'prod_condition' => 'Prod Condition',
            'brand' => 'Brand',
            'image' => 'Image',
            'women' => 'Women',
            'men' => 'Men',
            'kids' => 'Kids',
            'stock' => 'Stock',
            'created_at' => 'Created At',
        ];
    }
}
