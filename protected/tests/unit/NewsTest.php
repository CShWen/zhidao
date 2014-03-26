<?php
class NewsTest extends CDbTestCase {
	public $fixtures = array (
			'news' => 'News' 
	);
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
	public function testRead() {
		$retrievedNews = $this->news ( 'news1' );
		$this->assertTrue ( $retrievedNews instanceof News );
		$this->assertEquals ( '测试一', $retrievedNews->title );
	}
	public function testUpdate() {
		$news = $this->news ( 'news2' );
		$updateNewsAuthor = 'csw';
		$news->author = $updateNewsAuthor;
		$this->assertTrue ( $news->save ( false ) );
		
		$updatedNews = News::model ()->findByPk ( $news->id );
		$this->assertTrue ( $updatedNews instanceof News );
		$this->assertEquals ( $updateNewsAuthor, $updatedNews->author );
	}
	public function testDelete() {
		$newsd = $this->news ( 'news3' );
		$newsId = $newsd->id;
		$this->assertTrue ( $newsd->delete () );
		$deletedProject = News::model ()->findByPk ( $newsId );
		$this->assertEquals ( NULL, $deletedProject );
	}
	public function testCreate() {
		$newNews = new News ();
		$newNewsContent = '测试create';
		$newNews->setAttributes ( array (
				'title' => '测试Create',
				'content' => $newNewsContent,
				'author' => 'CShWen',
				'create_time' => '777',
				'img_name' => 'sbsbsb7',
				'img_path' => '路径7' 
		) );
		
		$this->assertTrue ( $newNews->save ( false ) );
		
		$retrievedNews = News::model ()->findByPk ( $newNews->id );
		$this->assertTrue ( $retrievedNews instanceof News );
		$this->assertEquals ( $newNewsContent, $newNews->content );
	}
}
