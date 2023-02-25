<?php
class MyPost {
	function __construct($module = "", $id = 0, $token = "",$reffToken="") {
		foreach ($GLOBALS as $key => $values) {
			$this->$key = $values;

		}
		$this->module = $module;
		$this->id = $id;
		
	}

	public function getMyPost()
	{
		$html = null;
		$id = $_SESSION['userid'];
		$conn = mysqli_connect('localhost','root','','sampetaru');
		$query = "SELECT * FROM `tbl_posts` WHERE u_id = '$id'";
		$result = mysqli_query($conn,$query);
		$count = 1;
		$delay = 5;
		if (!empty($result)) {
			foreach ($result as $k => $v) {
				if ($v['transportation'] == 'Air') {
					$symbol = "[ <i class='glyphicon glyphicon-plane' aria-hidden='true'></i> ]";
				}
				elseif ($v['transportation'] == 'Bus') {
					$symbol = "[ <i class='fa fa-bus'></i> ]";
				}
				elseif ($v['transportation'] == 'Train') {
					$symbol = "[ <i class='fa fa-train'></i> ]";
				}
				else
				{
					$symbol = null;
				}
				$replace = array(
					'%Symbol%' => $symbol,
					'%count%' => $count,
					'%delaytime%' => $delay,
					'%p_id%' => $v['p_id'],
					'%startlocation%' => $v['l_start'],
					'%endlocation%' => $v['l_end'],
					'%startdate%' => $v['d_start'],
					'%enddate%' => $v['d_end'],
					'%starttime%' => $v['e_start_time'],
					'%endtime%' => $v['e_end_time'],
					'%transportation%' => $v['transportation'],
					'%weight%' => $v['e_weight'],
					'%stop1%' => $v['stop1'],
					'%stop2%' => $v['stop2'],
					'%stop3%' => $v['stop3']
				);
				$html .= get_view(DIR_TMPL . $this->module . "/showmypost-nct.tpl.php",$replace);
				$count += $count;
				$delay += 1;
			}
		}
		return $html;
	}

	public function getPageContent() {
		$replace = array( '%MYPOST%' => $this->getMyPost() );
		return get_view(DIR_TMPL . $this->module . "/" . $this->module . ".tpl.php",$replace);
	}
}

?>
