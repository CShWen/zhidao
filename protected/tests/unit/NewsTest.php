<?php
class NewsTest extends CDbTestCase {
	public function testCRUD() {
		$newNews = new News ();
		$testName = 'testGeiGuiLe';
		$newNews->setAttributes ( array (
				'title' => $testName,
				'content' => '坑爹的，居然不能用繁体的样子。。。',
				'author' => 'CShWen',
				'create_time' => '2010-01-01 00:00:00',
				'page_view' => 0 
		) );
		$this->assertTrue ( $newNews->save ( false ) );
		
		$retrievedNews = News::model ()->findByPk ( $newNews->id );
		$this->assertTrue ( $retrievedNews instanceof News );
		$this->assertEquals ( $testName, $retrievedNews->title );
		
		$updatedNewsContent = 'Now Updated Test News wori';
		$newNews->content = $updatedNewsContent;
		$this->assertTrue ( $newNews->save ( false ) );
		
		// read back the record again to ensure the update worked
		$updatedNews = News::model ()->findByPk ( $newNews->id );
		$this->assertTrue ( $updatedNews instanceof News );
		$this->assertEquals ( $updatedNewsContent, $updatedNews->content );
		
		// DELETE the project
		$newNewsId = $newNews->id;
		$this->assertTrue ( $newNews->delete () );
		$deletedNews = News::model ()->findByPk ( $newNewsId );
		$this->assertEquals ( NULL, $deletedNews );
	}
}
