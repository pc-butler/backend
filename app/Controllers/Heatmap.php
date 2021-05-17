<?php namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use DateTime;
use DateTimeZone;
class Heatmap extends BaseController
{
	use ResponseTrait;
	public function index()
	{
		helper('url'); 
		helper('date');
		$data['title'] = "Heatmap";
		
		 $session = session();
        	$data['user_name'] = $session->get('user_name');
		
		
    	$data['hideTitle'] = "true";
    	$db = db_connect();
    	if ($this->request->getMethod() === 'post' && $this->validate([
	            'type' => 'required|min_length[3]|max_length[255]',
	            'comment'  => 'required',
	        ]))
	    {
			$builder = $db->table('heatmap');
	        $sql_data = [
	        	'datetime' => time(),
	            'type' => $this->request->getPost('type'),
			    'comment'  => $this->request->getPost('comment'),
			];

			$builder->insert($sql_data);

	        //echo "It works!";
	        echo '<meta http-equiv="refresh" content="0; url=/heatmap">';
	    }


		$query = $db->query('select * from heatmap ORDER BY id');
    	$data['query'] = $query;

    	//$data['myTime'] = new Time('now');
    	
    	echo view('templates/header', $data);
        echo view('heatmap/index.php', $data);
        echo view('templates/footer', $data);
		//return view('heatmap');
	}

	public function new($varType, $varComment){
		helper('url'); 
		helper('date');

		//$varType = $this->input->get('type');
		//$varComment = $this->input->get('comment');


		$db = db_connect();
    	if (true){
			
			$builder = $db->table('heatmap');
	        $sql_data = [
	        	'datetime' => time(),
	            'type' => $varType,
			    'comment'  => $varComment,
			];

			$builder->insert($sql_data);

	        //echo "It works!";
	        echo 'Success. Added with type:' . $varType . ", and comment: " . $varComment;
	    }
	}
	
	
	public function newDate($varDate, $varType, $varComment){
		helper('url'); 
		helper('date');

		//$varType = $this->input->get('type');
		//$varComment = $this->input->get('comment');


		$db = db_connect();
		if (true){

			$builder = $db->table('heatmap');
			$sql_data = [
				'datetime' => $varDate,
				'type' => $varType,
				'comment'  => $varComment,
			];

			$builder->insert($sql_data);

			//echo "It works!";
			echo 'Success. Added with type:' . $varType . ", and comment: " . $varComment. ". Date set: " . $varDate;
		    }
	}

	public function api()
	{
		$db = db_connect();
		$query = $db->query('select * from heatmap');

		$returnMe = [];


		foreach ($query->getResult() as $row)
		{

		    $returnMe[intval($row->datetime)] =  1;
		}
		return $this->setResponseFormat('json')->respond($returnMe);
	}
	public function api_view()
	{
		$db = db_connect();
		$query = $db->query('select * from heatmap');

		$returnMe = [];
		$myObj = new \stdClass();
		$count = 0;
		foreach ($query->getResult() as $row)
		{

			$myObj->datetime = $row->datetime;
			$myObj->type = $row->type;
			$myObj->comment = $row->comment;

		    $returnMe[$count] =  $myObj;
		    
		    $count = $count + 1;
		}
		return $this->setResponseFormat('json')->respond($returnMe);
	}
	public function api_info()
	{
		$db = db_connect();
		$query = $db->query('select * from heatmap');

		$returnMe = [];


		foreach ($query->getResult() as $row)
		{
			//echo $row->datetime;
			//strtotime($row->datetime)
			$epoch = 1613684204;
			//echo date('m/d/Y', $epoch);

			$timezone  = -8; //(GMT -5:00) EST (U.S. & Canada)
			echo gmdate("Y/m/j h:i:s A", $epoch + 3600*($timezone+date("I")));
			//echo $time . "<br>";
		    //$returnMe[strtotime($row->datetime)] =  array($row->type, $row->comment);
		}

		
		return $this->setResponseFormat('json')->respond($returnMe);
	}
	
	//--------------------------------------------------------------------

}
