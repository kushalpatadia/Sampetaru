<?php

class ManageSlider {
	function __construct($module = "", $id = 0, $token = "",$reffToken="") {
		foreach ($GLOBALS as $key => $values) {
			$this->$key = $values;

		}
		$this->module = $module;
		$this->id = $id;
	}

	public function getOrderTable(){
		$html = null;
		$conn = mysqli_connect("localhost","root","","markethub");
		$results = mysqli_query($conn,"SELECT * FROM tbl_slider");
			
		if(!empty($results)){
			foreach ($results as $k => $v) {
				$replace = array(
				'%id%' => $v['id'],
				'%image%' => $v['imageName'],
				'%title%' => $v['title'],
				'%discount%' => $v['discount'],
				'%position%' => $v['isUpDown'],
				'%description%' => $v['description'],
				'%status%' => $v['isActive'],
				// '%update%' => "../updateproduct-nct?id=".$v['id'],
				'%delete%' => "../deleteall-nct?deleteimage=".$v['id'],
				);
				$html .= get_view(DIR_ADMIN_TMPL . $this->module . "/slidertable-nct.tpl.php",$replace);
			}
		}
		return $html;
	}

	public function getPageContent() {
		$replace=array(
			'%Slider TABLE%' => $this->getOrderTable()
		);
		return get_view(DIR_ADMIN_TMPL . $this->module . "/" . $this->module . ".tpl.php",$replace);
	}
}

?>
