<?php
	class TFeedsController extends AppController{
	public $name="Tfeeds";
	
	function feed(){
		$data = $this->Tfeed->find('all', array ('order'=>array('id'=>'desc')));
		$this->set("data",$data);

		if(isset($_POST) && $_POST)
			{	
				$this->Tfeed->set(array(
				'name' => $_POST['name'],
				'message' => $_POST['msg'],
				'create_at' => date("Y-m-d H:i:s")
				));
				$this->Tfeed->save();
			}
		$data = $this->Tfeed->find('all', array ('order'=>array('id'=>'desc')));
		$this->set("data",$data);
	}

}



