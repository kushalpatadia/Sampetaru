<?php

class ManageShipping {
	function __construct($module = "", $id = 0, $token = "",$reffToken="") {
		foreach ($GLOBALS as $key => $values) {
			$this->$key = $values;

		}
		$this->module = $module;
		$this->id = $id;
	}

	public function getShippingTable(){
		$html = null;
		$conn = mysqli_connect("localhost","root","","markethub");
		$results = mysqli_query($conn,"SELECT * FROM tbl_shipping_details");
			
		if(!empty($results)){
			foreach ($results as $k => $v) {
				$replace = array(
					'%id%' => $v['id'],
					'%userid%' => $v['u_id'],
					'%username%' => $v['username'],
					'%email%' => $v['email'],
					'%address%' => $v['address'],
					'%pincode%' => $v['pincode'],
					'%mobileno%' => $v['mobilenumber'],
				);
				$html .= get_view(DIR_ADMIN_TMPL . $this->module . "/shippingtable-nct.tpl.php",$replace);
			}
		}
		return $html;
	}

	public function getPageContent() {
		$replace=array(
			'%SHIPPING TABLE%' => $this->getShippingTable()
		);
		return get_view(DIR_ADMIN_TMPL . $this->module . "/" . $this->module . ".tpl.php",$replace);
	}
}

?>
