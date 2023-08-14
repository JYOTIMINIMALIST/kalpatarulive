<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Klconfig extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Common_m');
		// $this->load->library('Smtpmail');
		$this->load->library('S3upload');
		if (!isset($_SESSION['id'])) {
			header('Location: '.base_url().'klconfig');
		}

		if($this->config->item("apply_ip") == 1){
		
			$this->load->library('Ip_restrict');
			$this->ip_restrict->restrict();

		}
	}
	public function dashboard()
	{

		redirect(base_url().'klconfig/properties');
		$data = array();
		// $data['count_camp'] = count($this->Common_m->getAllData("camps"));
		// $data['count_news'] = count($this->Common_m->getAllData("news"));
		// $data['gallery_images'] = count($this->Common_m->getAllData("gallery_images"));
		$this->load->view('klconfig/dashboard',$data);
	}
	public function cities()
	{
		$data = array();
		$data['cities'] = $this->Common_m->getAllData("cities");
		$this->load->view('klconfig/cities',$data);
	}
	public function locations()
	{
		$data = array();
		$this->db->select('locations.id,locations.location,locations.slug,locations.city_id,cities.title');
		$this->db->from('locations');
		$this->db->join('cities', 'cities.id = locations.city_id', 'left');
		$query1 = $this->db->get(); 
		$data['location'] = $query1->result();
		$data['cities'] = $this->Common_m->getAllData("cities");
		$this->load->view('klconfig/location',$data);
	}
	public function amenities()
	{
		$data = array();
		$data['amenities'] = $this->Common_m->getAllData("amenities");
		$this->load->view('klconfig/amenities',$data);
	}
	public function saveAmenities()
	{
		$data = file_get_contents('php://input');
		$json = json_decode($data, true);
		$title = $json['title'];
		$icon = $json['icon'];
		
		$bucket_folder = "kalpataru";

		$icon_url = $this->s3upload->uploadImage($icon,$bucket_folder);
		$data = array(
			"title"=>$title,
			"icon"=>$icon_url
		);
		$status = array();
		$result=$this->Common_m->addData("amenities",$data);
		if($this->db->affected_rows()>0)
		{
			$status["status"]="success";
		}
		else{
			$status["status"]="failed";
		}
		print_r(json_encode($status));
	}
	public function saveCities()
	{
		$data = file_get_contents('php://input');
		$json = json_decode($data, true);
		$title = $json['title'];		
		$data = array(
			"title"=>$title
		);
		//Generate slug
        $slugResult = $this->unique_slug($data['title'],"",NULL,'cities');
        if($slugResult['errors'] == ""){
			$data['slug'] = $slugResult['slug'];
		}
		$status = array();
		$result=$this->Common_m->addData("cities",$data);
		if($this->db->affected_rows()>0)
		{
			$status["status"]="success";
		}
		else{
			$status["status"]="failed";
		}
		print_r(json_encode($status));
	}
	public function saveLocation()
	{
		$data = file_get_contents('php://input');
		$json = json_decode($data, true);
		$location = $json['location'];		
		$city_id = $json['city_id'];		
		$data = array(
			"city_id"=>$city_id,
			"location"=>$location
		);
		//Generate slug
        $slugResult = $this->unique_slug($data['location'],"",NULL,'locations');
        if($slugResult['errors'] == ""){
			$data['slug'] = $slugResult['slug'];
		}
		$status = array();
		$result=$this->Common_m->addData("locations",$data);
		if($this->db->affected_rows()>0)
		{
			$status["status"]="success";
		}
		else{
			$status["status"]="failed";
		}
		print_r(json_encode($status));
	}
	public function updateAmenities()
	{
		$data = file_get_contents('php://input');
		$json = json_decode($data, true);
		$id = $json['id'];
		$title = $json['title'];
		$icon = $json['icon'];
		
		$bucket_folder = "kalpataru";
		$icon_url = $this->s3upload->uploadImage($icon,$bucket_folder);
		$data = array(
			"title"=>$title,
			"icon"=>$icon_url
		);
		$status = array();
		$result=$this->Common_m->updateData("amenities","id='$id'", $data);
		if($this->db->affected_rows()>0)
		{
			$status["status"]="success";
		}
		else{
			$status["status"]="success";
		}
		print_r(json_encode($status));
	}
	public function updateLocation()
	{
		$data = file_get_contents('php://input');
		$json = json_decode($data, true);
		$id = $json['id'];
		$location = $json['location'];
		$slug = $json['slug'];
		$city_id = $json['city_id'];
		
		$data = array(
			"location"=>$location,
			"city_id"=>$city_id
		);
		//Generate slug
        $slugResult = $this->unique_slug($data['location'],$slug,$id,'locations');
        if($slugResult['errors'] == ""){
			$data['slug'] = $slugResult['slug'];
		}
		$status = array();
		$result=$this->Common_m->updateData("locations","id='$id'", $data);
		if($this->db->affected_rows()>0)
		{
			$status["status"]="success";
		}
		else{
			$status["status"]="success";
		}
		print_r(json_encode($status));
	}
	public function updateCities()
	{
		$data = file_get_contents('php://input');
		$json = json_decode($data, true);
		$id = $json['id'];
		$title = $json['title'];
		$slug = $json['slug'];
		
		$data = array(
			"title"=>$title
		);
		//Generate slug
        $slugResult = $this->unique_slug($data['title'],$slug,$id,'cities');
        if($slugResult['errors'] == ""){
			$data['slug'] = $slugResult['slug'];
		}
		$status = array();
		$result=$this->Common_m->updateData("cities","id='$id'", $data);
		if($this->db->affected_rows()>0)
		{
			$status["status"]="success";
		}
		else{
			$status["status"]="success";
		}
		print_r(json_encode($status));
	}
	public function deleteData()
	{
		$data = file_get_contents('php://input');
		$json = json_decode($data, true);
		$id = $json['id'];
		$tablename = $json['table'];
		$result=$this->Common_m->delete($tablename,"id='$id'");
		$status = array();
		if($result == 1){
			$status['status']='success';
		}else{
			$status['status']='failed';
		}
		print_r(json_encode($status));
	}
	public function properties()
	{
		$data = array();
		$this->db->select('properties.*,locations.location as location_name, cities.title as city_name');
		$this->db->from('properties');
		$this->db->join('cities', 'cities.id = properties.city', 'left');
		$this->db->join('locations', 'locations.id = properties.location', 'left');
		$this->db->order_by('id', 'DESC');
		$query1 = $this->db->get(); 
		$properties = $query1->result();
		$data['properties'] = $properties;
		$this->load->view('klconfig/properties',$data);
	}
	public function sortProperties(){
		$data = array();
		$this->db->order_by('sort_order');
		$query1 = $this->db->get('properties');
		$properties = $query1->result();
		$data['properties'] = $properties;
		$this->load->view('klconfig/properties_sorting',$data);
	}
	public function postSortProperties(){
		if(isset($_POST) && !empty($_POST)){
			$updateArr = [];
			$status = [];
			$sortables = $_POST['sortable'];
			foreach($sortables as $key=>$value){
				$arr = [
					'id'  => $value,
					'sort_order' => ($key+1)
				];
				array_push($updateArr, $arr);
			}

			if(!empty($updateArr)){
				$result = $this->db->update_batch('properties',$updateArr,'id');
				if($result){
					$status["status"] = "success";
				}
				else{
					$status["status"] = "failed";
				}
				echo json_encode($status);
			}
		}
	}
	public function addProperties()
	{
		$data = array();
		$data['typologies'] = $this->Common_m->getAllData("typology");
		$data['amenities'] = $this->Common_m->getAllData("amenities");
		$data['cities'] = $this->Common_m->getAllData("cities");
		$data['projects'] = $this->Common_m->getAllDataWithCondition("properties","active=1");
		$this->load->view('klconfig/properties_add',$data);
	}
	public function getLocations()
	{
		$data = file_get_contents('php://input');
		$json = json_decode($data, true);
		$city_id = $json['city_id'];
		$data = array();
		$data['locations'] = $this->Common_m->getAllDataWithCondition("locations","city_id='$city_id'");
		print_r(json_encode($data));
	}
	public function editProperties()
	{
		$id = $_GET['id'];
		$data = array();
		$data['typologies'] = $this->Common_m->getAllData("typology");
		$data['amenities'] = $this->Common_m->getAllData("amenities");
		$data['projects'] = $this->Common_m->getAllDataWithCondition("properties","active=1");
		$properties = $this->Common_m->getAllDataWithCondition("properties","id='$id'");
		$data['properties'] = $properties[0];
		$city_id = $properties[0]->city;

		$construction_details = $this->Common_m->getAllDataWithCondition("construction_details","property_id='$id'");
		$data['construction_details'] = $construction_details;

		$kalpataru_experience = $this->Common_m->getAllDataWithCondition("kalpataru_experience","property_id='$id'");
		$data['kalpataru_experience'] = $kalpataru_experience;

		$kalpataru_way = $this->Common_m->getAllDataWithCondition("kalpataru_way","property_id='$id'");
		$data['kalpataru_way'] = $kalpataru_way;

		$kalpataru_awards = $this->Common_m->getAllDataWithCondition("kalpataru_awards","property_id='$id'");
		$data['kalpataru_awards'] = $kalpataru_awards;	

		$kalpataru_experts = $this->Common_m->getAllDataWithCondition("kalpataru_experts","property_id='$id'");
		$data['kalpataru_experts'] = $kalpataru_experts;

		$location = $this->Common_m->getAllDataWithCondition("locations","city_id='$city_id'");
		$data['locations'] = $location;

		$data['cities'] = $this->Common_m->getAllData("cities");

		$this->load->view('klconfig/properties_edit',$data);
	}
	public function saveBasicDetails()
	{
		$data = file_get_contents('php://input');
		$json = json_decode($data, true);
		$insert_id = $json['insert_id'];
		$property_type = $json['property_type'];
		$on_going = $json['on_going'];
		$top_picks = $json['top_picks'];
		$completed = $json['completed'];
		$title = $json['title'];
		$status = $json['status'];
		$city = $json['city'];
		$location = $json['location'];
		$price = $json['price'];
        $is_pop_reload = $json['is_pop_reload'];
        $is_menu_bar = $json['is_menu_bar'];
		$possession = $json['possession'];
		$typology = $json['typology'];
		$footer_typology = (is_array($json['footer_typology'])?implode(',',$json['footer_typology']):$json['footer_typology']);
		$banner_type = $json['banner_type'];
		$video_data = isset($json['video_data']) ? $json['video_data'] : "";
		$mobile_video_data = isset($json['mobile_video_data']) ? $json['mobile_video_data'] : "";
		$mobile_video_url = isset($json['mobile_video_url']) ? $json['mobile_video_url'] : "";
		$banner_url = isset($json['banner_url']) ? $json['banner_url'] : "";
		$featured_images = isset($json['featured_images']) ? $json['featured_images'] : "";
		$mobile_banner = isset($json['mobile_banner']) ? $json['mobile_banner'] : "";
		$property_logo = isset($json['property_logo_images']) ? $json['property_logo_images'] : array();
		$thumbnail_images = $json['thumbnail_images'];

		$property_log_filter = array_filter($property_logo); //To check if the valueid empty
		
		$bucket_folder = "kalpataru";
		$property_logo_url = (!empty($property_log_filter)?$this->s3upload->uploadImage($property_logo,$bucket_folder):'');
		$thumbnail_url = $this->s3upload->uploadImage($thumbnail_images,$bucket_folder);
		$images_url = $this->s3upload->uploadImage($featured_images,$bucket_folder);
		if ($mobile_banner!="") {

			$mobile_images_url = $this->s3upload->uploadImage($mobile_banner,$bucket_folder);
		}	
		else
		{
			$mobile_images_url = "";
		}

		if ($video_data=="") {
			$banner_video = $banner_url;
		}
		else
		{
			$banner_video = $video_data;
		}

		$banner_mobile_video = "";
		if ($mobile_video_data!="") {
			$banner_mobile_video = $mobile_video_data;
		}else{
			$banner_mobile_video = $mobile_video_url;
		}

		//Check and save Typology
		$insertData = [];
		$all_typologies = $this->db->get('typology')->result();
		if(!empty($all_typologies)){
			$existing_typologies = array_column($all_typologies, 'name');
			foreach($json['footer_typology'] as $fKey=>$fVal){
				if(!in_array($fVal, $existing_typologies)){
					$arr = [
						'name' => $fVal,
						'is_active' => 1,
						'created_at' => date('Y-m-d H:i:s')
					];
					array_push($insertData, $arr);
				}
			}
		}else{
			foreach($json['footer_typology'] as $fKey=>$fVal){
				$arr = [
					'name' => $fVal,
					'is_active' => 1,
					'created_at' => date('Y-m-d H:i:s')
				];
				array_push($insertData, $arr);
			}
		}

		if(!empty($insertData)){
			$this->db->insert_batch('typology',$insertData);
		}


		$data = array(
			"title"=>$title,
			"property_type"=>$property_type,
			"on_going"=>$on_going,
			"top_picks"=>$top_picks,
			"completed"=>$completed,
			"status"=>$status,
			"city"=>$city,
			"location"=>$location,
			"price"=>$price,
			"is_pop_reload" => $is_pop_reload,
            "is_menu_bar"=>$is_menu_bar,
			"possession"=>$possession,
			"typology"=>$typology,
			"typology_for_footer"=>$footer_typology,
			"property_logo"=>$property_logo_url,
			"thumbnail_image"=>$thumbnail_url,
			"banner_type"=>$banner_type,
			"featured_video"=>$banner_video,
			"featured_mobile_video"=>$banner_mobile_video,
			"featured_images"=>$images_url,
			"featured_images_mobile"=>$mobile_images_url,
			"active"=>1
		);

		$status = array();
		if ($insert_id!='' || $insert_id !=0) {
			//Generate slug
            $slugResult = $this->unique_slug($data['title'],$json['slug'],$insert_id,'properties');
            if($slugResult['errors'] == ""){
				$data['slug'] = $slugResult['slug'];
			}
			$result=$this->Common_m->updateData("properties","id='$insert_id'", $data);
		}
		else
		{
			//Generate slug
            $slugResult = $this->unique_slug($data['title'],"",NULL,'properties');
            if($slugResult['errors'] == ""){
				$data['slug'] = $slugResult['slug'];
			}

			//Get max sort order for new property
			$max_sort = 1;
			$max_sort_result = $this->db->select('MAX(sort_order) as max_sort_order')->get('properties')->row();
			if(isset($max_sort_result->max_sort_order) && !empty($max_sort_result->max_sort_order)){
				$max_sort = $max_sort_result->max_sort_order+1;
			}
			$data['sort_order'] = $max_sort;
			$result=$this->Common_m->addData("properties",$data);
		}
		
		if($this->db->affected_rows()>0)
		{
			$status["insert_id"] = $this->db->insert_id();
			$status["status"]="success";
		}
		else{
			if ($insert_id!='' || $insert_id !=0) {
				$status["status"]="success";
			}
			else
			{
				$status["status"]="failed";
			}
		}
		print_r(json_encode($status));
	}
	public function saveOverviewDetails()
	{
		$data = file_get_contents('php://input');
		$json = json_decode($data, true);
		$insert_id = $json['insert_id'];
		$featured_description = $json['featured_description'];
		$short_description = $json['short_description'];
		$overview_Amenity = $json['overview_Amenity'];
		$overview_Amenity = implode(",", $overview_Amenity);
		$overview_images = $json['overview_images'];
		$overview_more_images = $json['overview_more_images'];
		$overview_more_text = $json['overview_more_text'];
		
		$bucket_folder = "kalpataru";
		$overview_images = $this->s3upload->uploadImage($overview_images,$bucket_folder);
		$images_url = $this->s3upload->uploadImage($overview_more_images,$bucket_folder);
		$img_arr = explode(",", $images_url);
		$img_txt = "";
		foreach ($img_arr as $key => $value) {
			$both = "";
			$img = $value;
			$text = $overview_more_text[$key];
			$both = $img."====".$text;
			$img_txt = $img_txt.'<==>'.$both;
		}
		$data = array(
			"featured_description"=>$featured_description,
			"short_description"=>$short_description,
			"overview_image"=>$overview_images,
			"overview_amenity"=>$overview_Amenity,
			"overview_text_images"=>trim($img_txt,"<==>")
		);
		$status = array();
		$result=$this->Common_m->updateData("properties","id='$insert_id'", $data);
		if($this->db->affected_rows()>0)
		{
			$status["status"]="success";
		}
		else{
			$status["status"]="success";
		}
		print_r(json_encode($status));
	}
	public function saveAmenitiesDetails()
	{
		$data = file_get_contents('php://input');
		$json = json_decode($data, true);
		// $insert_id = 1;
		$insert_id = $json['insert_id'];
		$amenities = ($json['amenities']);
		$amenities = implode(",", $amenities);
		$data = array(
			"amenities"=>$amenities
		);
		$result=$this->Common_m->updateData("properties","id='$insert_id'", $data);
		$status = array();
		if($this->db->affected_rows()>0)
		{
			$status["status"]="success";
		}
		else{
			$status["status"]="success";
		}
		print_r(json_encode($status));
	}
	public function saveResources()
	{
		$insert_id = $_POST['insert_id'];
		$brochure_name = $_FILES['brochure']['name'];
		$tmp_brochure = $_FILES['brochure']['tmp_name'];

		$floor_plan_name = $_FILES['floor_plan']['name'];
		$tmp_floor_plan = $_FILES['floor_plan']['tmp_name'];
		
		$master_plan_name = $_FILES['master_plan']['name'];
		$tmp_master_plan = $_FILES['master_plan']['tmp_name'];
		
		$virtual_tour = $_POST['virtual_tour'];
		$resource_image = $_POST['resource_image'];
		// $tmp_virtual_tour = $_FILES['virtual_tour']['tmp_name'];

		$bucket_folder = "kalpataru";

		$brochure  = "";	
		if ($brochure_name!="") {
			$brochure = $this->uploadData($brochure_name,$tmp_brochure,$bucket_folder);
		}
		$floor_plan = "";			
		if ($floor_plan_name!="") {
			$floor_plan = $this->uploadData($floor_plan_name,$tmp_floor_plan,$bucket_folder);
		}
		$master_plan = "";			
		if ($master_plan_name!="") {
			$master_plan = $this->uploadData($master_plan_name,$tmp_master_plan,$bucket_folder);
		}		
		$data = array();
		if ($resource_image!="") {
			$temp_arr = array();
			array_push($temp_arr, $resource_image);
			$images_url = $this->s3upload->uploadImage($temp_arr,$bucket_folder);
			$data['resource_image'] = $images_url;
		}
		// $virtual_tour = $this->uploadData($virtual_tour_name,$tmp_virtual_tour,$bucket_folder);
		if ($brochure!="") {
			$data['brochure'] = $brochure;
		}
		if ($floor_plan!="") {
			$data['floor_plan'] = $floor_plan;
		}
		if ($master_plan!="") {
			$data['master_plan'] = $master_plan;
		}
		
		$data['virtual_tour'] = $virtual_tour;
		
		$status = array();
		if (count($data)!=0) {
			$result=$this->Common_m->updateData("properties","id='$insert_id'", $data);
			if($this->db->affected_rows()>0)
			{
				$status["status"]="success";
			}
			else{
				$status["status"]="success";
			}
		}
		else
		{
			$status["status"]="success";
		}
		print_r(json_encode($status));
	}
	public function removeResource(){
		if(isset($_POST) && !empty($_POST)){
			if(isset($_POST['property']) && !empty($_POST['property'])){
				//Delete the column data based on $_POST['for_type']
				$resource_column_name = $_POST['for_type'];
				$this->db->set($resource_column_name,'');
				$this->db->where('id',$_POST['property']);
				$result = $this->db->update('properties');
				if($result){
					$returnArr = [
						'status' => 'true',
						'message' => 'Updated Successfully'
					];
				}else{
					$returnArr = [
						'status' => 'false',
						'message' => 'Error updating record'
					];
				}
				echo json_encode($returnArr);die;
			}
		}
	}
	public function saveMapDetails()
	{
		$insert_id = $_POST['insert_id'];
		// $insert_id = 1;
		$map_image_name = $_FILES['map_image']['name'];
		$tmp_map_image = $_FILES['map_image']['tmp_name'];
		$rera = $_POST['rera'];
		$map_url = $_POST['map_url'];
		$bucket_folder = "kalpataru";
		$status = array();
		$data = array(
			"rera"=>$rera,
			"map_url"=>$map_url
		);
		if ($map_image_name!="") {
			$map_image = $this->uploadData($map_image_name,$tmp_map_image,$bucket_folder);
			$data['map_image'] = $map_image;
		}
		$result=$this->Common_m->updateData("properties","id='$insert_id'", $data);
		if($this->db->affected_rows()>0)
		{
			$status["status"]="success";
		}
		else{
			$status["status"]="success";
		}
		print_r(json_encode($status));
	}
	public function saveConstructionDetails()
	{
		// $insert_id = 1;
		$data = file_get_contents('php://input');
		$json = json_decode($data, true);
		$insert_id = $json['insert_id'];
		$construction_title = $json['construction_title'];
		$construction_text = $json['construction_text'];
		$construction_image = $json['construction_image'];
		$bucket_folder = "kalpataru";
		$del = $this->Common_m->delete("construction_details","property_id = '$insert_id'");
		foreach ($construction_title as $key => $value) {
			$temp_arr = array();
			$title =  $value;
			$text = $construction_text[$key];
			$image = $construction_image[$key];
			array_push($temp_arr, $image);
			$images_url = $this->s3upload->uploadImage($temp_arr,$bucket_folder);
			$data1 = array(
				"property_id"=>$insert_id,
				"title"=>$title,
				"text"=>$text,
				"image"=>$images_url
			);
			$result=$this->Common_m->addData("construction_details",$data1);
		}
		$status = array();
		if($this->db->affected_rows()>0)
		{
			$status["status"]="success";
		}
		else{
			$status["status"]="failed";
		}
		print_r(json_encode($status));
	}
	public function saveExperienceDetails()
	{
		$insert_id = $json['insert_id'];
		// $insert_id = 1;
		$data = file_get_contents('php://input');
		$json = json_decode($data, true);
		$experience_title = $json['experience_title'];
		$experience_text = $json['experience_text'];
		$experience_image = $json['experience_image'];
		$bucket_folder = "kalpataru";
		$del = $this->Common_m->delete("kalpataru_experience","property_id = '$insert_id'");
		foreach ($experience_title as $key => $value) {
			$temp_arr = array();
			$title =  $value;
			$text = $experience_text[$key];
			$image = $experience_image[$key];
			array_push($temp_arr, $image);
			$images_url = $this->s3upload->uploadImage($temp_arr,$bucket_folder);
			$data1 = array(
				"property_id"=>$insert_id,
				"title"=>$title,
				"text"=>$text,
				"image"=>$images_url
			);
			$result=$this->Common_m->addData("kalpataru_experience",$data1);
		}
		$status = array();
		if($this->db->affected_rows()>0)
		{
			$status["status"]="success";
		}
		else{
			$status["status"]="failed";
		}
		print_r(json_encode($status));
	}
	public function saveWayDetails()
	{
		$insert_id = $json['insert_id'];
		// $insert_id = 1;
		$data = file_get_contents('php://input');
		$json = json_decode($data, true);
		$way_title = $json['way_title'];
		$way_text = $json['way_text'];
		$way_image = $json['way_image'];
		$bucket_folder = "kalpataru";
		$del = $this->Common_m->delete("kalpataru_way","property_id = '$insert_id'");
		foreach ($way_title as $key => $value) {
			$temp_arr = array();
			$title =  $value;
			$text = $way_text[$key];
			$image = $way_image[$key];
			array_push($temp_arr, $image);
			$images_url = $this->s3upload->uploadImage($temp_arr,$bucket_folder);
			$data1 = array(
				"property_id"=>$insert_id,
				"title"=>$title,
				"text"=>$text,
				"image"=>$images_url
			);
			$result=$this->Common_m->addData("kalpataru_way",$data1);
		}
		$status = array();
		if($this->db->affected_rows()>0)
		{
			$status["status"]="success";
		}
		else{
			$status["status"]="failed";
		}
		print_r(json_encode($status));
	}
	public function saveVideoDetails()
	{
		$insert_id = $json['insert_id'];
		// $insert_id = 1;
		$data = file_get_contents('php://input');
		$json = json_decode($data, true);
		$video_url = $json['video_url'];
		$videos = "";
		foreach ($video_url as $key => $value) {
			$videos = $videos.','.$value;
		}
		$videos = trim($videos,",");
		$data = array(
			"videos"=>$videos
		);
		$result=$this->Common_m->updateData("properties","id='$insert_id'", $data);
		$status = array();
		if($this->db->affected_rows()>0)
		{
			$status["status"]="success";
		}
		else{
			$status["status"]="failed";
		}
		print_r(json_encode($status));
	}
	public function saveAwardDetails()
	{
		$insert_id = $json['insert_id'];
		// $insert_id = 1;
		$data = file_get_contents('php://input');
		$json = json_decode($data, true);
		$award_text = $json['award_text'];
		$award_image = $json['award_image'];
		$bucket_folder = "kalpataru";
		$del = $this->Common_m->delete("kalpataru_awards","property_id = '$insert_id'");
		foreach ($award_text as $key => $value) {
			$temp_arr = array();
			$description =  $value;
			$image = $award_image[$key];
			array_push($temp_arr, $image);
			$images_url = $this->s3upload->uploadImage($temp_arr,$bucket_folder);
			$data1 = array(
				"property_id"=>$insert_id,
				"description"=>$description,
				"image"=>$images_url
			);
			$result=$this->Common_m->addData("kalpataru_awards",$data1);
		}
		$status = array();
		if($this->db->affected_rows()>0)
		{
			$status["status"]="success";
		}
		else{
			$status["status"]="failed";
		}
		print_r(json_encode($status));
	}
	public function saveExpertDetails()
	{
		$insert_id = $_json['insert_id'];
		// $insert_id = 1;
		$data = file_get_contents('php://input');
		$json = json_decode($data, true);
		$expert_name = $json['expert_name'];
		$expert_designation = $json['expert_designation'];
		$expert_image = $json['expert_image'];
		$bucket_folder = "kalpataru";
		$del = $this->Common_m->delete("kalpataru_experts","property_id = '$insert_id'");
		foreach ($expert_name as $key => $value) {
			$temp_arr = array();
			$name =  $value;
			$designation = $expert_designation[$key];
			$image = $expert_image[$key];
			array_push($temp_arr, $image);
			$images_url = $this->s3upload->uploadImage($temp_arr,$bucket_folder);
			$data1 = array(
				"property_id"=>$insert_id,
				"name"=>$name,
				"designation"=>$designation,
				"image"=>$images_url
			);
			$result=$this->Common_m->addData("kalpataru_experts",$data1);
		}
		$status = array();
		if($this->db->affected_rows()>0)
		{
			$status["status"]="success";
		}
		else{
			$status["status"]="failed";
		}
		print_r(json_encode($status));
	}
	public function saveProjectDetails()
	{
		$data = file_get_contents('php://input');
		$json = json_decode($data, true);
		// $insert_id = 1;
		$insert_id = $json['insert_id'];
		$projects = ($json['projects']);
		$projects = implode(",", $projects);
		$data = array(
			"projects"=>$projects
		);
		$result=$this->Common_m->updateData("properties","id='$insert_id'", $data);
		$status = array();
		if($this->db->affected_rows()>0)
		{
			$status["status"]="success";
		}
		else{
			$status["status"]="success";
		}
		print_r(json_encode($status));
	}
	public function saveBookingDetails()
	{
		$insert_id = $_POST['insert_id'];
		$booking_url = $_POST['booking_url'];
		$booking_text = $_POST['booking_text'];
		// $insert_id = 1;
		$back_image_name = $_FILES['back_image']['name'];
		$tmp_back_image = $_FILES['back_image']['tmp_name'];
		$bucket_folder = "kalpataru";
		$status = array();
		$data = array(
			"booking_url"=>$booking_url,
			"booking_text"=>$booking_text,			
			"active"=>1
		);

		if ($back_image_name!="") {
			$back_image = $this->uploadData($back_image_name,$tmp_back_image,$bucket_folder);
			$data['booking_background'] = $back_image;
		}
		$result=$this->Common_m->updateData("properties","id='$insert_id'", $data);
		if($this->db->affected_rows()>0)
		{
			$status["status"]="success";
		}
		else{
			$status["status"]="success";
		}
		print_r(json_encode($status));
	}
	public function saveSeoDetails()
	{
		$insert_id = $_POST['insert_id'];
		$meta_title = $_POST['meta_title'];
		$meta_description = $_POST['meta_description'];
		$meta_tags = $_POST['meta_tags'];
		$h1_tag = $_POST['h1_tag'];
		$h2_tag = $_POST['h2_tag'];
		$google_pixel = $_POST['google_pixel'];
		$facebook_pixel = $_POST['facebook_pixel'];
		$all_other_pixel = $_POST['all_other_pixel'];
		$status = array();

		$data = array(
			"meta_title"=>$meta_title,
			"meta_description"=>$meta_description,			
			"meta_tags"=>$meta_tags,
			"h1_tag"=>$h1_tag,
			"h2_tag"=>$h2_tag,
			"google_pixel"=>$google_pixel,
			"facebook_pixel"=>$facebook_pixel,
			"all_other_pixel"=>$all_other_pixel
		);
		$result=$this->Common_m->updateData("properties","id='$insert_id'", $data);
		if($this->db->affected_rows()>0)
		{
			$status["status"]="success";
		}
		else{
			$status["status"]="success";
		}
		print_r(json_encode($status));
	}

	public function saveMediaPixelDetails(){
		$insert_id = $_POST['insert_id'];
		$cavity1 = $_POST['cavity1'];
		$cavity2 = $_POST['cavity2'];
		$cavity3 = $_POST['cavity3'];
		$cavity4 = $_POST['cavity4'];
		$cavity5 = $_POST['cavity5'];
		$cavity6 = $_POST['cavity6'];
		$cavity7 = $_POST['cavity7'];
		$cavity8 = $_POST['cavity8'];
		$thank_head = $_POST['thank_head'];
		$thank_body = $_POST['thank_body'];
		
		$other_cavities = $_POST['other_cavities'];
		$status = array();

		$data = array(
			"cavity1"=>$cavity1,
			"cavity2"=>$cavity2,
			"cavity3"=>$cavity3,
			"cavity4"=>$cavity4,
			"cavity5"=>$cavity5,
			"cavity6"=>$cavity6,
			"cavity7"=>$cavity7,
			"cavity8"=>$cavity8,
			"other_cavities"=>$other_cavities,
			"thank_head"=>$thank_head,
			"thank_body"=>$thank_body
		);
		$result=$this->Common_m->updateData("properties","id='$insert_id'", $data);
		if($this->db->affected_rows()>0)
		{
			$status["status"]="success";
		}
		else{
			$status["status"]="success";
		}
		print_r(json_encode($status));
	}

	public function uploadData($name,$tmp,$bucket_folder)
	{
		if ($name=="") {
			return "";
		}
		else
		{
			$ext = $this->getExtension($name);
			$actual_image_name = time().".".$ext;
			return $filepaht = $this->s3upload->uploadFiles($tmp,$actual_image_name,$bucket_folder);
		}	
	}
	public function uploadVideoData($name,$tmp,$bucket_folder)
	{
		if ($name=="") {
			return "";
		}
		else
		{
			$ext = $this->getExtension($name);
			$actual_image_name = time().".".$ext;
			return $filepaht = $this->s3upload->uploadFiles($tmp,$actual_image_name,$bucket_folder);
		}
		
	}
	public function getExtension($str)
	{
		$i = strrpos($str,".");
		if (!$i) { return ""; }
		$l = strlen($str) - $i;
		$ext = substr($str,$i+1,$l);
		return $ext;
	}
	public function clean($string) {
		$string = str_replace(' ', '-', $string); 
		$string = preg_replace('/[^A-Za-z0-9\-]/', '', $string);
		$string = strtolower($string);
		return $string;
	}
	public function Home()
	{
		$data = array();
		// $data['amenities'] = $this->Common_m->getAllData("amenities");
		$this->load->view('klconfig/home_page',$data);
	}
	function getProperties()
	{
		$data = file_get_contents('php://input');
		$json = json_decode($data, true);
		$type = $json['type'];
		if ($type=='slider') {
			$cond = " AND slider!=1";
		}
		else
		{
			$cond = " AND featured!=1";
		}
		$keyword = $json['keyword'];
		$status = array();
		$status['properties'] = $this->Common_m->getAllDataWithCondition("properties","active=1 AND title LIKE '%$keyword%' $cond");
		if(count($status['properties'])>0)
		{
			$status["status"]="success";
		}
		else{
			$status["status"]="failed";
		}
		print_r(json_encode($status));
	}
	public function getFeaturedProperties()
	{
		$status = array();
		$properties = $this->Common_m->getAllDataWithCondition("properties","active=1 AND (slider=1 OR featured=1)");
		$status['slider'] = array();
		$status['featured'] = array();
		foreach ($properties as $key => $value) {
			if ($value->slider==1) {
				array_push($status['slider'], $value);
			}
			if($value->featured==1)
			{
				array_push($status['featured'], $value);
			}
		}
		print_r(json_encode($status));
	}
	public function featured()
	{
		$data = file_get_contents('php://input');
		$json = json_decode($data, true);
		$type = $json['type'];
		$status = $json['status'];
		$id = $json['id'];
		if ($type=='slider') {

			$slider_order = 0;
			if($status == 1){
				$this->db->select('COUNT(id) as count');
				$this->db->from("properties");
				$this->db->where("active=1 AND slider=1");
				$query = $this->db->get();
				$count_result = $query->result();
				if(isset($count_result[0]->count)){
					$slider_order = $count_result[0]->count + 1;
				}
			}

			$data = array(
				"slider"=>$status,
				"slider_order" => $slider_order
			);
		}
		else
		{
			$data = array(
				"featured"=>$status
			);
		}
		$status = array();
		$result=$this->Common_m->updateData("properties","id='$id'", $data);
	}
	public function uploadVideo()
	{
		$video_name = $_FILES['featured_video']['name'];
		$tmp_video = $_FILES['featured_video']['tmp_name'];
		$bucket_folder = "kalpataru/video";
		$video = $this->uploadData($video_name,$tmp_video,$bucket_folder);
		echo trim($video);
	}
	public function mobileUploadVideo()
	{
		$video_name = $_FILES['mobile_featured_video']['name'];
		$tmp_video = $_FILES['mobile_featured_video']['tmp_name'];
		$bucket_folder = "kalpataru/video";
		$video = $this->uploadData($video_name,$tmp_video,$bucket_folder);
		echo trim($video);
	}
	public function uploadGalleryVideo()
	{
		$video_name = $_FILES['video_file']['name'];
		$tmp_video = $_FILES['video_file']['tmp_name'];
		$bucket_folder = "kalpataru/video";
		$video = $this->uploadVideoData($video_name,$tmp_video,$bucket_folder);
		echo $video;
	}
	public function gallery()
	{
		$data = array();
		$data['gallery'] = $this->Common_m->getAllDataDesc("gallery");
		$this->load->view('klconfig/gallery',$data);
	}
	public function galleryAdd()
	{
		$data = array();
		$data['gallery'] = $this->Common_m->getAllDataDesc("gallery");
		$this->load->view('klconfig/gallery_add',$data);
	}
	public function editGallery()
	{
		$data = array();
		$id = $_GET['id'];
		$gallery = $this->Common_m->getAllDataWithCondition("gallery","id='$id'");
		$data = $gallery[0];
		$this->load->view('klconfig/gallery_edit',$data);
	}
	public function saveGallery()
	{
		$title = $_POST['title'];
		$project_url = $_POST['project_url'];
		$type = $_POST['type'];
		$bucket_folder = "kalpataru";
		$file_name = $_FILES['file']['name'];
		$tmp_file = $_FILES['file']['tmp_name'];

		$bucket_folder = "kalpataru/gallery";
		$image_url = $this->uploadData($file_name,$tmp_file,$bucket_folder);
		$data1 = array(
			"title"=>$title,
			"project_url"=>$project_url,
			"type"=>$type,
			"thumbnail"=>$image_url
		);
		if ($type == 'video') {
			$video_data = $_POST['video_data'];
			if ($video_data!="") {
				$video_url = $video_data;
			}
			else
			{
				$video_url = $_POST['video_url'];
			}
			$data1['video_url'] = $video_url;
		}
		$result=$this->Common_m->addData("gallery",$data1);
		$status = array();
		if($this->db->affected_rows()>0)
		{
			$status["status"]="success";
		}
		else{
			$status["status"]="failed";
		}
		print_r(json_encode($status));
	}

	public function updateGallery()
	{
		$id = $_POST['id'];
		$title = $_POST['title'];
		$project_url = $_POST['project_url'];
		$type = $_POST['type'];

		$file_name = $_FILES['file']['name'];
		$tmp_file = $_FILES['file']['tmp_name'];

		$bucket_folder = "kalpataru/gallery";
		$data1 = array(
			"title"=>$title,
			"project_url"=>$project_url,
			"type"=>$type
		);
		if ($file_name!="") {
			$image_url = $this->uploadData($file_name,$tmp_file,$bucket_folder);
			$data1['thumbnail'] = $image_url;
		}
		if ($type == 'video') {
			$video_data = $_POST['video_data'];
			if ($video_data!="") {
				$video_url = $video_data;
			}
			else
			{
				$video_url = $_POST['video_url'];
			}
			$data1['video_url'] = $video_url;
		}
		$result=$this->Common_m->updateData("gallery","id='$id'", $data1);
		$status = array();
		if($this->db->affected_rows()>0)
		{
			$status["status"]="success";
		}
		else{
			$status["status"]="success";
		}
		print_r(json_encode($status));
	}
	public function exportProperty(){
		header("Content-type: application/csv");
		header("Content-Disposition: attachment; filename=\"test".".csv\"");
		header("Pragma: no-cache");
		header("Expires: 0");
		$handle = fopen('php://output', 'w');

		$this->db->select('properties.*,locations.location as location_name, cities.title as city_name');
		$this->db->from('properties');
		$this->db->join('cities', 'cities.id = properties.city', 'left');
		$this->db->join('locations', 'locations.id = properties.location', 'left');
		$this->db->order_by('id', 'DESC');
		$query1 = $this->db->get(); 
		$result = $query1->result();

		$data_array = array();
		$data_array['title'] = "TITLE";
		$data_array['location_name'] = "LOCATION";
		$data_array['meta_title'] = "META TITLE";
		$data_array['meta_description'] = "META DESCRIPTION";
		$data_array['meta_tags'] = "META KEYWORDS";
		$data_array['h1_tag'] = "H1 TAG";
		$data_array['h2_tag'] = "H2 TAG";
		$data_array['google_pixel'] = "GOOGLE PIXEL";
		$data_array['facebook_pixel'] = "FACEBOOK PIXEL";
		fputcsv($handle, $data_array);

		foreach ($result as $key => $value) {
			$data_array = array();
			$data_array['title'] = $value->title;  
			$s = ", ";
			if ($value->location_name=="" || $value->city_name="") {
				$s = "";
			}
			$data_array['location_name'] = $value->location_name.$s.$value->city_name;  
			$data_array['meta_title'] = $value->meta_title;  
			$data_array['meta_description'] = $value->meta_description;  
			$data_array['meta_tags'] = $value->meta_tags;  
			$data_array['h1_tag'] = $value->h1_tag;  
			$data_array['h2_tag'] = $value->h2_tag;  
			$data_array['google_pixel'] = $value->google_pixel;  
			$data_array['facebook_pixel'] = $value->facebook_pixel;  
			fputcsv($handle, $data_array);
		}
		fclose($handle);
		exit;
	}

	//Press
	public function press(){
		$data = [];
		$this->db->select('press_news.*,properties.title as project_name');
		$this->db->join('properties','properties.id=press_news.project_id');
		$this->db->order_by('article_date','desc');
		$this->db->where('is_active != ',2);
		$data['press'] = $this->db->get('press_news')->result();
		$this->load->view('klconfig/press',$data);
	}
	public function edit_press($id=NULL){
		$data = [];
		$data['meta_title'] = "Add Press";

		if(isset($_POST) && !empty($_POST)){
			$saveData = [
				'project_id' => $_POST['project_id'],
				'title' => $_POST['title'],
				'description' => $_POST['description'],
				'external_link' => '',
				'article_date' => date('Y-m-d',strtotime($_POST['article_date'])),
				'is_active' => $_POST['is_active'],
				'updated_at' => date('Y-m-d H:i:s')
			];
			if(isset($_FILES) && !empty($_FILES['file']['name'])){
				$file_name = $_FILES['file']['name'];
				$tmp_file = $_FILES['file']['tmp_name'];

				$bucket_folder = "kalpataru/press";
				if ($file_name!="") {
					$image_url = $this->uploadData($file_name,$tmp_file,$bucket_folder);
					$saveData['pdf_file'] = $image_url;
				}
			}
			if(!empty($_POST['external_link'])){
				$saveData['external_link'] = $_POST['external_link'];
			}

			if(isset($_POST['id']) && !empty($_POST['id'])){
				$id = $_POST['id'];
				$result=$this->Common_m->updateData("press_news","id='$id'", $saveData);
				$status = array();
				if($this->db->affected_rows()>0){
					$status["status"]="success";
					$status['redirect_url'] = base_url().'klconfig/edit_press/'.$id;
				}
				else{
					$status["status"]="success";
				}
				print_r(json_encode($status));
			}else{
				$saveData['created_at'] = date('Y-m-d H:i:s');
				$result=$this->Common_m->addData("press_news",$saveData);
				$status = array();
				if($this->db->affected_rows()>0){
					$status["status"]="success";
					$status['redirect_url'] = base_url().'klconfig/press';
				}
				else{
					$status["status"]="failed";
				}
				print_r(json_encode($status));
			}
			die;
		}

		//Get all Projects
		$this->db->select('id,title');
		$this->db->where('active',1);
		$this->db->order_by('sort_order');
		$data['properties'] = $this->db->get('properties')->result();
		if($id){
			$data['meta_title'] = "Edit Press";
			$this->db->where('id',$id);
			$data['press'] = $this->db->get('press_news')->row();
		}
		$this->load->view('klconfig/press_edit',$data);
	}
	public function removePressAttachment(){
		$data = file_get_contents('php://input');
		$json = json_decode($data, true);
		$id = $json['id'];
		$tablename = $json['table'];
		$updateData['pdf_file'] = "";

		$this->db->where('id',$id);
		$result = $this->db->update($tablename,$updateData);
		$status = array();
		if($result == 1){
			$status['status']='success';
		}else{
			$status['status']='failed';
		}
		print_r(json_encode($status));
	}

	//Unique slug functionality
	public function unique_slug($title, $slug, $id, $table){
		if(!$slug){
			$slug = $this->Common_m->seoUrl($title);
		}else{
			$slug = $this->Common_m->seoUrl($slug);
		}

		$this->db->where('slug', $slug);
		if($id){
			$this->db->where('id != ', $id);
		}
		$properties = $this->db->get($table)->result();

		$data = array();
		if(count($properties)){
			$slug = $slug."-".count($properties);
		}else{
			$data["errors"] = "";
		}
		$data["errors"] = "";
		$data["slug"] = $slug;
		return $data;
	}
}
?>