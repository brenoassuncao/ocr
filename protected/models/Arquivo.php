<?php

/**
 * This is the model class for table "arquivo".
 *
 * The followings are the available columns in table 'arquivo':
 * @property integer $id
 * @property string $nome_arquivo
 * @property integer $user_id
 * @property string $data
 * @property string $mimetype
 * @property integer $status
 * @property integer $tamanho
 *
 * The followings are the available model relations:
 * @property Users $user
 */
class Arquivo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'arquivo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome_arquivo, user_id, status, tamanho', 'required'),
			array('user_id, status, tamanho', 'numerical', 'integerOnly'=>true),
			array('nome_arquivo', 'length', 'max'=>260),
			array('mimetype, hash', 'length', 'max'=>45),
			array('data', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nome_arquivo, hash, user_id, data, mimetype, status, tamanho', 'safe', 'on'=>'search'),
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
			'usuario' => array(self::BELONGS_TO, 'User', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nome_arquivo' => 'Nome Arquivo',
			'user_id' => 'User',
			'data' => 'Data',
			'mimetype' => 'Mimetype',
			'status' => 'Status',
			'tamanho' => 'Tamanho',
			'hash' => 'Hash',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('nome_arquivo',$this->nome_arquivo,true);
		$criteria->compare('data',$this->data,true);
		$criteria->compare('mimetype',$this->mimetype,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('tamanho',$this->tamanho);
		$criteria->compare('hash',$this->hash);

		if(!Yii::app()->user->checkAccess('admin'))
			$criteria->compare('user_id', Yii::app() -> user -> Id);

		// TODO:  filtrar pelo user_id 


		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort'=>array('defaultOrder'=>'data DESC'),

		));
	}



	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Arquivo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
