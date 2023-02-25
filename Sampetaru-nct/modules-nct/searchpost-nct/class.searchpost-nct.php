<?php
class SearchPost {
	function __construct($module = "", $id = 0, $token = "",$reffToken="") {
		foreach ($GLOBALS as $key => $values) {
			$this->$key = $values;

		}
		$this->module = $module;
		$this->id = $id;
		
	}

	public function getPost()
	{
		$html= null;
		$conn = mysqli_connect('localhost','root','','sampetaru');
		if (isset($_POST['search'])) {
			$l_from = $_POST['l_from'];
			$l_to = $_POST['l_to'];
			$d_from = $_POST['d_from'];
			$d_to = $_POST['d_to'];

			$search = "SELECT * FROM `tbl_posts` WHERE (`l_start`  LIKE '$l_from' OR `stop1`  LIKE '$l_from' OR `stop2` LIKE '$l_from'  OR `stop3` LIKE '$l_from') AND (`l_end`  LIKE '$l_to' OR `stop1`  LIKE '$l_to' OR `stop2` LIKE '$l_to'  OR `stop3` LIKE '$l_to') AND (`d_start` BETWEEN '$d_from' AND '$d_to') AND (`d_end` BETWEEN '$d_from' AND '$d_to')";
			$result = mysqli_query($conn,$search);
			$number = mysqli_num_rows($result);
		}
		else
		{
			$html = "<center><h2 style='color:red;'>NO Result Found</h2></center>";
		}
		if (!empty($result)) {
			foreach ($result as $k => $v) {
				$replace = array(
						'%l_from%' => $v['l_start'],
						'%d_from%' => $v['d_start'],
						'%l_to%' => $v['l_end'],
						'%d_to%' => $v['d_end'],
						'%t_from%' => $v['e_start_time'],
						'%t_to%' => $v['e_end_time'],
					);
				$html .= get_view(DIR_TMPL . $this->module . "/postshow-nct.tpl.php",$replace);
			}
		}
		else
		{
			$html = "<center><h2 style='color:red;'>NO Result Found</h2></center>";
		}
		return $html;
	}

	public function getPageContent() {
		$replace = array('%POST%' => $this->getPost());
		return get_view(DIR_TMPL . $this->module . "/" . $this->module . ".tpl.php",$replace);	
	}
}

?>
