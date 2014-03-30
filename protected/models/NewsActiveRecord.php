<?php
abstract class NewsActiveRecord extends CActiveRecord {
	protected function beforeValidate() {
		if ($this->isNewRecord) {
			$this->create_time = new CDbExpression ( 'NOW()' );
			$this->page_view = 0;
		}
		return parent::beforeValidate ();
	}
}