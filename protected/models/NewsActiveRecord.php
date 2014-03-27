<?php
abstract class NewsActiveRecord extends CActiveRecord {
	protected function beforeValidate() {
		if ($this->isNewRecord) {
			$this->create_time = new CDbExpression ( 'NOW()' );
		}
		return parent::beforeValidate ();
	}
	
}
