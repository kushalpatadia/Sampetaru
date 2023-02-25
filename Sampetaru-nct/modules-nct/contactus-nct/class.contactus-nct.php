<?php
class ContactUs {
	function __construct($module = "", $id = 0, $token = "",$reffToken="") {
		foreach ($GLOBALS as $key => $values) {
			$this->$key = $values;

		}
		$this->module = $module;
		$this->id = $id;
		
	}
	public function getPageContent() {
		//$html = html(DIR_TMPL . $this->module . "/" . $this->module . ".tpl.php");
		return get_view(DIR_TMPL . $this->module . "/" . $this->module . ".tpl.php");
	}

	
}

?>
