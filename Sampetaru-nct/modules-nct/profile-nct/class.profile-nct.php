<?php
class Profile {
	function __construct($module = "", $id = 0, $token = "",$reffToken="") {
		foreach ($GLOBALS as $key => $values) {
			$this->$key = $values;

		}
		$this->module = $module;
		$this->id = $id;
	}

	public function getProfile() {			
		$html = null;
		$id = $_SESSION['userid'];
		$conn = mysqli_connect("localhost","root","","sampetaru");
		$results = mysqli_query($conn,"SELECT * FROM tbl_register_user WHERE r_id='$id'");	
		if(!empty($results)){
			foreach ($results as $k => $v) {
				$replace = array(
					'%ldate%'=>$v['last_updatetime'],
					'%username%'=>$v['fname'],
					'%lname%'=>$v['lname'],
					'%email%'=>$v['email'],
					'%mobileno%' => $v['mobile'],
					'%occupation%' => $v['occupation'],
					'%d_birth%' => $v['b_date'],
					'%address1%' => $v['address1'],
					'%area%' => $v['area'],
					'%city%' => $v['city'],
					'%pincode%' => $v['pincode'],
					'%state%' => $v['state'],
					'%country%' => $v['country']
				);
				$html .= get_view(DIR_TMPL . $this->module . "/showprofile-nct.tpl.php",$replace);
			}
		}
		return $html;
	}
	
	public function getPageContent() {	
		if (isset($_SESSION['userid'])) {
			$replace = array(
				'%PROFILE%' => $this->getProfile()
			);
		}
		else
		{
			header('Location: ../home-nct');
		}
		return get_view(DIR_TMPL . $this->module . "/" . $this->module . ".tpl.php",$replace);	
	}
}

?>
