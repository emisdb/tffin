<?php

/**
 * This is the model class for table "department".
 *
 * The followings are the available columns in table 'department':
 * @property integer $id
 * @property string $name
 *
 * The followings are the available model relations:
 * @property DepartmentId[] $departments
 * @property DepartmentProp[] $departmentProps
 * @property Exp[] $exps
 * @property Inc[] $incs
 */
class Department extends CActiveRecord
{
	private $_dep = null;
	public function getDepid(){
		if ($this->_dep === null && $this->departmentid !== null)
		{
			$this->_dep = $this->departmentid->ckey;
		}
		return $this->_dep;
	}
	public function setDepid($value){
		$this->_dep = $value;
	}
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'department';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name', 'required'),
			array('name', 'length', 'max'=>32),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name', 'safe', 'on'=>'search'),
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
			'departments' => array(self::HAS_MANY, 'DepartmentId', 'id'),
			'departmentid' => array(self::HAS_ONE, 'DepartmentId', 'id','condition'=>'departmentid.db=1'),
			'departmentProps' => array(self::HAS_MANY, 'DepartmentProp', 'id'),
			'exps' => array(self::HAS_MANY, 'Exp', 'department_id'),
			'incs' => array(self::HAS_MANY, 'Inc', 'department_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => '№',
			'name' => 'Наименование',
			'depid' => 'В базе',
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
	protected function afterSave()
	{
		parent::afterSave();
	    if($this->depid) {
  		$model=new DepartmentId;
                $model->ckey=$this->depid;
                $model->db=1;
                $model->id=$this->id;
                if(!$model->save())  ;
               
            }
	}
        public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;
                $criteria->with = array("departmentProps");

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('depiartmentid.ckey',$this->depid,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Department the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
