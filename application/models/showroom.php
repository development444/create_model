
<?php
 class showroom extends CI_model
 {
 		public function __construct($attributes=array())
 		{

 			parent::__construct ($attributes);
 		}

 		public function set_showroomname($name)
 		 {

		    	$name = trim($name);

				if($name == '') {
           		throw new Exception('A name is required to create a showroom.');
        		}

				$this->assign_attribute('name', $name);
	    }

	    public function set_showroomlocation($name)
 		 {

		    	$name = trim($name);

				if($name == '') {
           		throw new Exception('A location is required to create a showroom.');
        		}

				$this->assign_attribute('location', $name);
	    }

	    public static function create($params) {

		$showroom = new showroom;

		$showrroom->name = array_key_exists('name', $params) ? $params['name'] : null;
		$showroom->location = array_key_exists('location', $params) ? $params['location'] : null;
		

		return $showroom;
	}



	    public assign_attribute('attribute_key',$value)
	    {

	    	$this->attributes['attribute_key'] = $value;
 
	    }






 	
 }