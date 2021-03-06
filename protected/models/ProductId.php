<?php

/**
 * This is the model class for table "product_id".
 *
 * The followings are the available columns in table 'product_id':
 * @property string $ckey
 * @property integer $db
 * @property integer $id
 *
 * The followings are the available model relations:
 * @property Product $id0
 */
class ProductId extends CActiveRecord
{
	private $_cli = null;
	public $ids = array();
	public function getProdname(){
		if ($this->_cli === null && $this->product !== null)
		{
			$this->_cli = $this->product->name;
		}
		return $this->_cli;
	}
	public function seProdname($value){
		$this->_cli = $value;
	}
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'product_id';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ckey, db, id', 'required'),
			array('db, id', 'numerical', 'integerOnly'=>true),
			array('ckey', 'length', 'max'=>15),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ckey, db, id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'product' => array(self::BELONGS_TO, 'Product', 'id'),
			'product1' => array(self::BELONGS_TO, 'Product', 'id','condition'=>'productid.db=1'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ckey' => 'Ckey',
			'db' => 'Db',
			'id' => 'ID',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;
                $criteria->with = array('product');
		$criteria->compare('ckey',$this->ckey,true);
		$criteria->compare('db',$this->db);
		$criteria->compare('id',$this->id);
		$criteria->addInCondition('ckey',$this->ids);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ProductId the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
