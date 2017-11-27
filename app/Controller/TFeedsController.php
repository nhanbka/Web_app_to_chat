<?php
	class TFeedsController extends AppController{
	public $name="TFeeds";
	
	function index(){
		$data = $this->TFeed->find('all');
		$this->set("index",$data);
	}
}
?>
