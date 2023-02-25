<?php

class ManageProduct {
	function __construct($module = "", $id = 0, $token = "",$reffToken="") {
		foreach ($GLOBALS as $key => $values) {
			$this->$key = $values;

		}
		$this->module = $module;
		$this->id = $id;
	}

	public function getProductsTable(){
		$html = null;
		$conn = mysqli_connect("localhost","root","","markethub");
		$results = mysqli_query($conn,"SELECT * FROM tbl_products");
			
		if(!empty($results)){
			foreach ($results as $k => $v) {
				$replace = array(
				'%pid%' => $v['id'],
				'%image1%' => $v['imageName'],
				'%image2%' => $v['image2'],
				'%image3%' => $v['image3'],
				'%title%' => $v['title'],
				'%category%' => $v['category'],
				'%subcategory%' => $v['subcategory'],
				'%brand%' => $v['brand'],
				'%price%' => $v['price'],
				'%qty%' => $v['qty_available'],
				'%rating%' => $v['rating'],
				'%reviews%'	=> $v['reviews'],
				'%size%' => $v['size'],
				'%color%' => $v['color'],
				'%shortdescription%' => $v['shortDescription'],
				'%specification%' => $v['specification'],
				'%additionalinfo%' => $v['additionalinfo'],
				'%update%' => "../updateproduct-nct?id=".$v['id'],
				'%delete%' => "../deleteall-nct?deleteproduct=".$v['id'],
				);
				$html .= get_view(DIR_ADMIN_TMPL . $this->module . "/productstable-nct.tpl.php",$replace);
			}
		}
		return $html;
	}

	public function getPageContent() {
		$replace=array(
			'%PRODUCTS TABLE%' => $this->getProductsTable()
		);
		return get_view(DIR_ADMIN_TMPL . $this->module . "/" . $this->module . ".tpl.php",$replace);
	}
}

?>
