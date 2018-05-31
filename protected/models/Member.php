<?php

/**
 * This is the model class for table "member".
 *
 * The followings are the available columns in table 'member':
 * @property integer $id_member
 * @property string $nama_member
 * @property string $alamat_member
 * @property string $tgl_lahir_member
 * @property string $email_member
 * @property string $no_telp_member
 */
class Member extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Member the static model class
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
		return 'member';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama_member, alamat_member, tgl_lahir_member, email_member, no_telp_member', 'required'),
			array('nama_member, email_member', 'length', 'max'=>30),
			array('alamat_member', 'length', 'max'=>50),
			array('no_telp_member', 'length', 'max'=>13),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_member, nama_member, alamat_member, tgl_lahir_member, email_member, no_telp_member', 'safe', 'on'=>'search'),
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
			'id_member' => 'Id Member',
			'nama_member' => 'Nama Member',
			'alamat_member' => 'Alamat Member',
			'tgl_lahir_member' => 'Tgl Lahir Member',
			'email_member' => 'Email Member',
			'no_telp_member' => 'No Telp Member',
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

		$criteria->compare('id_member',$this->id_member);
		$criteria->compare('nama_member',$this->nama_member,true);
		$criteria->compare('alamat_member',$this->alamat_member,true);
		$criteria->compare('tgl_lahir_member',$this->tgl_lahir_member,true);
		$criteria->compare('email_member',$this->email_member,true);
		$criteria->compare('no_telp_member',$this->no_telp_member,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}