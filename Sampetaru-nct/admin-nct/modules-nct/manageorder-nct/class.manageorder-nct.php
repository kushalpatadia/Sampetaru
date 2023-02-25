<?php

class ManageOrder {
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
		$results = mysqli_query($conn,"SELECT * FROM tbl_order_details");
			
		if(!empty($results)){
			foreach ($results as $k => $v) {
				$replace = array(
				'%id%' => $v['id'],
				'%orderid%' => $v['order_id'],
				'%productid%' => $v['p_id'],
				'%userId%' => $v['u_id'],
				'%qty%' => $v['qty'],
				'%status%' => $v['status'],
				'%purchase_date%' => $v['purchase_date'],
				'%user_ip%' => $v['ip'],
				'%update%' => "../updateproduct-nct?id=".$v['id'],
				'%delete%' => "../deleteproduct-nct?id=".$v['id'],
				);
				$html .= get_view(DIR_ADMIN_TMPL . $this->module . "/ordertable-nct.tpl.php",$replace);
			}
		}
		return $html;
	}

	public function getPageContent() {
		$replace=array(
			'%ORDER TABLE%' => $this->getOrderTable()
		);
		return get_view(DIR_ADMIN_TMPL . $this->module . "/" . $this->module . ".tpl.php",$replace);
	}
}

?>
