<?php
class ApplyPost {
	function __construct($module = "", $id = 0, $token = "",$reffToken="") {
		foreach ($GLOBALS as $key => $values) {
			$this->$key = $values;

		}
		$this->module = $module;
		$this->id = $id;
		
	}

	public function getPageContent() {
		$pickup = $_GET['pickup'];
		$pickoff = $_GET['pickoff'];
		$date1 = $_GET['date1'];
		$date2 = $_GET['date2'];

		$replace = array('%from_city%' => $pickup,'%To%' => $pickoff,'%start_date%' => $date1,'%end_date%' => $date2);
		return get_view(DIR_TMPL . $this->module . "/" . $this->module . ".tpl.php",$replace);	
	}
}

?>
