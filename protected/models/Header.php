<?php

/**
 * This is the model class for table "t_header".
 *
 * The followings are the available columns in table 't_header':
 * @property integer $id
 * @property string $domain
 * @property string $title
 * @property string $lang
 * @property string $charset
 * @property string $icon
 * @property string $keywords
 * @property string $description
 * @property string $create_time
 */
class Header extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Header the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 't_header';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('domain, create_time', 'required'),
			array('domain, lang', 'length', 'max'=>128),
			array('title, keywords, description', 'length', 'max'=>512),
			array('charset', 'length', 'max'=>64),
			array('icon', 'length', 'max'=>256),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, domain, title, lang, charset, icon, keywords, description, create_time', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'domain' => 'Domain',
			'title' => 'Title',
			'lang' => 'Lang',
			'charset' => 'Charset',
			'icon' => 'Icon',
			'keywords' => 'Keywords',
			'description' => 'Description',
			'create_time' => 'Create Time',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('domain',$this->domain,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('lang',$this->lang,true);
		$criteria->compare('charset',$this->charset,true);
		$criteria->compare('icon',$this->icon,true);
		$criteria->compare('keywords',$this->keywords,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('create_time',$this->create_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}