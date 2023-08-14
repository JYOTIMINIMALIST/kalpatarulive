<?php
class Common_m extends CI_Model {

    public function getAllData($tablename)
    {
        $query = $this->db->get($tablename);
        $result = $query->result();
        return $result;
    }
    
    public function getAllDataWithCondition($tablename,$condition)
    {
       $this->db->select('*');
       $this->db->from($tablename);
       $this->db->where($condition);
       $query = $this->db->get();
       $result = $query->result();
       return $result;
   }

   public function getData($tablename,$data)
    {
        $this->db->select($data);
        $this->db->from($tablename);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function getDataLimitOrder($tablename,$data,$orderby,$order,$limit)
    {
        $this->db->select($data);
        $this->db->from($tablename);
        $this->db->order_by($orderby,$order);
        $this->db->limit($limit);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function getDataLimitOrderCond($tablename,$data,$condition,$orderby,$order,$limit)
    {
      if($data=="")
      {
        $this->db->select('*');  
      }
      else
      {
        $this->db->select($data);
      }
      $this->db->from($tablename);
      $this->db->where($condition);
      $this->db->order_by($orderby,$order);
      $this->db->limit($limit);
      $query = $this->db->get();
      $result = $query->result();
      return $result;
    }
    
    public function getDataWithCondition($tablename,$condition,$data)
    {
       $this->db->select($data);
       $this->db->from($tablename);
       $this->db->where($condition);
       $query = $this->db->get();
       $result = $query->result();
       return $result;
   }

   public function deleteData($tablename,$column,$data)
   {
       $this->db->where($column,$data);
       $this->db->delete($tablename);
       if($this->db->affected_rows()>0)
       {
            return 1;
        }
        else{
            return 0;	
        }
    }

    public function delete($tablename,$condition)
    {
     $this->db->where($condition);
     $this->db->delete($tablename);
     if($this->db->affected_rows()>0)
     {
      return 1;
    }
    else{
      return 0; 
    }
  }
   public function getAllDataAscOrder($column,$tablename,$condition,$orderBy)
   {
        if($column!=""){
          $this->db->select($column);
        }else{
          $this->db->select('*');
        }
        $this->db->from($tablename);
        if($condition!="")
        {
          $this->db->where($condition);
        } 
        $this->db->order_by($orderBy,'ASC');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
   public function getAllDataDescOrder($column,$tablename,$condition,$orderBy)
   {
        if($column!=""){
          $this->db->select($column);
        }else{
          $this->db->select('*');
        }
        $this->db->from($tablename);
        if($condition!="")
        {
          $this->db->where($condition);
        } 
        $this->db->order_by($orderBy,'DESC');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    public function deleteArticleData($tablename,$condition,$data)
    {
       $this->db->where($condition);
       $this->db->update($tablename, $data);
       if($this->db->affected_rows()>0)
       {
        return 1;
      }
      else{
        return 0; 
      }
    }

    public function addData($tablename,$data)
    {
        $this->db->insert($tablename, $data);
    }

    public function updateData($tablename,$condition,$data)
   {
       $this->db->where($condition);
        $this->db->update($tablename, $data);
     //  echo $this->db->last_query();
     //  exit();
       if($this->db->affected_rows()>0)
       {
            return 1;
        }
        else{
            return 0; 
        }
    }
    public function getMaxOrder($tablename,$condition)
   {
        
        $this->db->select('*');
        $this->db->from($tablename);
        if($condition!="")
        {
          $this->db->where($condition);
        } 
        $this->db->order_by('image_order','DESC');
        $this->db->limit('1');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function getAllDataDesc($tablename)
    {   
        $this->db->select('*');
        $this->db->from($tablename);
        $this->db->order_by("id", "DESC");
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    
    public function getAllDataWithConditionDesc($tablename,$condition)
    {
       $this->db->select('*');
       $this->db->from($tablename);
       $this->db->where($condition);
       $this->db->order_by("id", "DESC");
       $query = $this->db->get();
       $result = $query->result();
       return $result;
    }
    public function getDataDesc($tablename,$data)
    {
      if ($data=="") {
        $this->db->select("*");
      }
      else
      {
        $this->db->select($data);
      }
      $this->db->from($tablename);
      $this->db->order_by("id", "DESC");
      $query = $this->db->get();
      $result = $query->result();
      return $result;
    }
    public function getDataWithConditionDesc($tablename,$condition,$data)
    {
        if ($data=="") {
          $this->db->select("*");
        }
        else
        {
          $this->db->select($data);
        }
        $this->db->from($tablename);
        $this->db->where($condition);
        $this->db->order_by("id", "DESC");
        $query = $this->db->get();
        $result = $query->result();
        return $result;
  }
   public function getDataOrderLimitFrom($tablename,$column,$condition,$orderby,$order,$limitFrom,$limitto)
    {
      if($column!=""){
        $this->db->select($column);
      }else{
        $this->db->select('*');
      }
      $this->db->from($tablename);
      if($condition!="")
      {
        $this->db->where($condition);
      } 
      $this->db->order_by($orderby,$order);
      $this->db->limit($limitto,$limitFrom);
      $query = $this->db->get();
      $result = $query->result();
      return $result;
    }
    function androiduserpush($image,$token,$message,$id,$title)
    {
      $registrationIds = array($token);
      $msg = array
      (
        'title' => $title,
        'id' => $id,
        'message' => $message,
        'image'  => $image,   
        'vibrate' => 1,
        'sound'   => 1
      ); 
      $fields = array
      (
        'registration_ids'  => $registrationIds,
        'data'      => $msg
      );

      $headers = array
      (
        'Authorization: key=AIzaSyAcH8kMDvKbaaVlrEDaaFXgJvt_dZUv_oA',
        'Content-Type: application/json' 
      );

      $ch = curl_init();
      curl_setopt( $ch,CURLOPT_URL,'https://fcm.googleapis.com/fcm/send'); 
      curl_setopt( $ch,CURLOPT_POST,true);
      curl_setopt( $ch,CURLOPT_HTTPHEADER,$headers);
      curl_setopt( $ch,CURLOPT_RETURNTRANSFER,true);
      curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER,false);  
      curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode($fields));
      $result = curl_exec($ch);
      $restkv = json_decode($result,true);
      if($restkv['success']=='0')
      {
        
      }
      else
      {
        
      }
      return $restkv;
      curl_close( $ch );
    }

    function androiduserpushCustom($image,$token,$message,$id,$title)
    {
      $registrationIds = explode(",", $token);
      $msg = array
      (
        'title' => $title,
        'id' => $id,
        'message' => $message,
        'image'  => $image,   
        'vibrate' => 1,
        'sound'   => 1
      ); 
      $fields = array
      (
        'registration_ids'  => $registrationIds,
        'data'      => $msg
      );

      $headers = array
      (
        'Authorization: key=AIzaSyAcH8kMDvKbaaVlrEDaaFXgJvt_dZUv_oA',
        'Content-Type: application/json' 
      );

      $ch = curl_init();
      curl_setopt( $ch,CURLOPT_URL,'https://fcm.googleapis.com/fcm/send'); 
      curl_setopt( $ch,CURLOPT_POST,true);
      curl_setopt( $ch,CURLOPT_HTTPHEADER,$headers);
      curl_setopt( $ch,CURLOPT_RETURNTRANSFER,true);
      curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER,false);  
      curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode($fields));
      $result = curl_exec($ch);
      $restkv = json_decode($result,true);
      if($restkv['success']=='0')
      {

      }
      else
      {

      }
      return $restkv;
      curl_close( $ch );
    }
    public function iosuserpush($image,$token,$message,$id,$title)
    {
      $tHost = 'gateway.push.apple.com';
      $tPort = 2195;
      $tCert = 'assets/pem/idopushcert.pem';
      $tPassphrase = '123456';
      $tToken = $token;
      $tAlert = $message;
      $tBadge = 0;
      $tSound = 'default';
      $tPayload = $message;
      $image = $image;
      $tBody['aps'] = array (
        'alert' => array (
          'title' => 'VPS',
          'body' => $tAlert
        ),
        'badge' => $tBadge,
        'sound' => $tSound,
        'mutable-content' => 1,
        'image' => $image
      );
      $tBody['payload'] = $tPayload;
      $tBody = json_encode ($tBody);
      $tContext = stream_context_create ();
      stream_context_set_option ($tContext, 'ssl', 'local_cert', $tCert);
      stream_context_set_option ($tContext, 'ssl', 'passphrase', $tPassphrase);
      $tSocket = stream_socket_client ('ssl://'.$tHost.':'.$tPort, $error, $errstr, 30, STREAM_CLIENT_CONNECT|STREAM_CLIENT_PERSISTENT, $tContext);
      if (!$tSocket)
        exit ("APNS Connection Failed: $error $errstr" . PHP_EOL);
      $tMsg = chr (0) . chr (0) . chr (32) . pack ('H*', $tToken) . pack ('n', strlen ($tBody)) . $tBody;
      $tResult = fwrite ($tSocket, $tMsg, strlen ($tMsg));
      if ($tResult)
      {
        return $tResult;
      }
      else
      {
       return $tResult; 
      }
      fclose ($tSocket);
    }
    public function iosuserpushCustom($image,$token,$message,$id,$title)
    {
      $registrationIds = explode(",", $token);
      foreach ($registrationIds as $key => $value) {
        $token = $value;

        $tHost = 'gateway.push.apple.com';
        $tPort = 2195;
        $tCert = 'assets/pem/idopushcert.pem';
        $tPassphrase = '123456';
        $tToken = $token;
        $tAlert = $message;
        $tBadge = 0;
        $tSound = 'default';
        $tPayload = $message;
        $image = $image;
        $tBody['aps'] = array (
          'alert' => array (
            'title' => 'VPS',
            'body' => $tAlert
          ),
          'badge' => $tBadge,
          'sound' => $tSound,
          'mutable-content' => 1,
          'image' => $image
        );
        $tBody['payload'] = $tPayload;
        $tBody = json_encode ($tBody);
        $tContext = stream_context_create ();
        stream_context_set_option ($tContext, 'ssl', 'local_cert', $tCert);
        stream_context_set_option ($tContext, 'ssl', 'passphrase', $tPassphrase);
        $tSocket = stream_socket_client ('ssl://'.$tHost.':'.$tPort, $error, $errstr, 30, STREAM_CLIENT_CONNECT|STREAM_CLIENT_PERSISTENT, $tContext);
        if (!$tSocket)
          exit ("APNS Connection Failed: $error $errstr" . PHP_EOL);
        $tMsg = chr (0) . chr (0) . chr (32) . pack ('H*', $tToken) . pack ('n', strlen ($tBody)) . $tBody;
        $tResult = fwrite ($tSocket, $tMsg, strlen ($tMsg));
        if ($tResult)
        {
          return $tResult;
        }
        else
        {
         return $tResult; 
       }
       fclose ($tSocket);
     }
   }
   function seoUrl($string) {
    //Lower case everything
    $string = strtolower($string);
    //Make alphanumeric (removes all other characters)
    $string = preg_replace("/[^a-z0-9_.\s-]/", "", $string);
    //Clean up multiple dashes or whitespaces
    $string = preg_replace("/[\s-]+/", " ", $string);
    //Convert whitespaces and underscore to dash
    $string = preg_replace("/[\s_]/", "-", $string);
    return $string;
  }

  /* --------------  DYNAMIC FOOTER ------------- */
  public function getFooter($city=NULL,$property_slug=NULL,$page_type=NULL){
    $this->db->select('properties.id, properties.property_type,properties.title as property_name,properties.slug as property_slug,properties.location as location_id,properties.on_going,properties.typology_for_footer,cities.title as og_city_name,LOWER(cities.title) as city_name,cities.slug as city_slug,locations.location as location_name,locations.slug as location_slug');
    $this->db->from('properties');
    $this->db->join('cities', 'cities.id = properties.city', 'left');
    $this->db->join('locations', 'locations.id = properties.location', 'left');
    $this->db->where("active=1");
    if($city){
      $this->db->where('cities.title',$city);
      $this->db->order_by('cities.title');
      $this->db->order_by('locations.location');
    }else{
      $this->db->order_by('sort_order');
    }
    if(!empty($property_slug) && $page_type=="project-inner"){
      //$this->db->where('properties.slug !=',$property_slug);
    }
    $result = $this->db->get()->result();
    if(!empty($result)){
      $cities = [];
      $locations = [];
      $typologies = [];
      $temporary_typo = [];
      $ongoing = [];
      $related_projects = [];

      //For Cities - Option1
      /*$this->db->select('title as name,slug');
      if($city){
        $this->db->where('title',$city);
      }
      $cities = $this->db->get('cities')->result();*/

      //For Location - Option1
     /* $this->db->select('locations.location as location_name,locations.slug,cities.slug as city_slug');
      $this->db->join('cities','cities.id=locations.city_id');
      if($city){
        $this->db->where('cities.title',$city);
      }
      $locations = $this->db->get('locations')->result();*/

      foreach($result as $key=>$value){
        if(empty($page_type)){
          if(!$city){
            //For cities - Option2
            $cityKey = array_search($value->city_slug, array_column($cities, 'slug'));
            if(isset($cities[$cityKey]) && $cities[$cityKey]->slug == $value->city_slug){

            }else{
              $cityArr = new StdClass;
              $cityArr->name = $value->og_city_name;
              $cityArr->slug = $value->city_slug;
              array_push($cities, $cityArr);
            }
          }
        }

        //For locations - Option2
        $locationKey = array_search($value->location_slug, array_column($locations, 'slug'));
        if(isset($locations[$locationKey]) && $locations[$locationKey]->slug == $value->location_slug){

        }else{
          $locationArr = new StdClass;
          $locationArr->location_name = $value->location_name;
          $locationArr->slug = $value->location_slug;
          $locationArr->city_slug = $value->city_slug;
          array_push($locations, $locationArr);
        }

        if($city){
          //For Typology - Option1
          $uniqueTypologies = array_values(array_unique(explode(',', $value->typology_for_footer)));
          if(!empty($uniqueTypologies)){
            foreach($uniqueTypologies as $tKey=>$tVal){
              $config_name = trim($tVal);
              $checkKey = $config_name.''.$value->location_id;
              if(!in_array($checkKey, $temporary_typo)){
                array_push($temporary_typo, $checkKey);
                $typologyObj = new StdClass;
                $typologyObj->name = $config_name;
                $typologyObj->slug = $this->seoUrl($config_name);
                $typologyObj->city_slug = $value->city_slug;
                $typologyObj->location_name = $value->location_name;
                $typologyObj->location_slug = $value->location_slug;
                $typologyObj->location_id = $value->location_id;
                array_push($typologies, $typologyObj);
              }
            }
          }
        }

        if($page_type == 'project-inner'){
          if(!empty($property_slug) && $property_slug != $value->property_slug){
            //Related projects
            array_push($related_projects, $value);
          }
        }else{
          //On Going
          if($value->on_going==1){
            array_push($ongoing, $value);
          }
        }
      }

      //Sort Typologies in ASC order
      if(!empty($typologies)){
        usort($typologies, function($a, $b) {
          return $a->name <=> $b->name;
        });
      }
      
      return ['cities' => $cities, 'locations' => $locations, 'typology' => $typologies, 'ongoing' => $ongoing, 'related_projects' => $related_projects];
    }else{
      return [];
    }
  }


    /* --------------- get city search by typology ------------------------ */
    public function get_city_by_config($city_slug, $bhk)
    {
        $config = str_replace('-',' ',$bhk);


        $this->db->select('properties.*,cities.title as city_name,locations.location as location_name,cities.slug as city_slug,locations.slug as location_slug');
        $this->db->from('properties');
        $this->db->join('cities', 'cities.id = properties.city', 'left');
        $this->db->join('locations', 'locations.id = properties.location', 'left');
        $this->db->where([
            'cities.slug'=>$city_slug,
            'properties.property_type'=>'residential'  // 'properties.property_type'=>$property_type
        ]);
        $this->db->where("FIND_IN_SET('$config' ,properties.typology_for_footer)");
        $this->db->order_by('sort_order');
        $query1 = $this->db->get();
        $properties = $query1->result_array();

        return $properties;

    }


    /* ===================== Home Search ====================  */

   function fetch_data($query)
    {
        $query=urldecode($query);
        
        $query2= $this->db->query("SELECT `properties`.*, `cities`.`title` as `city_name`, `locations`.`location` as `location_name`, `cities`.`slug` as `city_slug`, `locations`.`slug` as `location_slug` FROM `properties` JOIN `cities` ON `cities`.`id` = `properties`.`city` LEFT JOIN `locations` ON `locations`.`id` = `properties`.`location` WHERE ( `properties`.`title` LIKE '%$query%' ESCAPE '!' OR `typology` LIKE '%$query%' ESCAPE '!' OR `cities`.`title` LIKE '%$query%' ESCAPE '!' OR `locations`.`location` LIKE '%$query%' ESCAPE '!')  and `properties`.`completed` != '1' GROUP BY `properties`.`id`, `properties`.`typology`, `cities`.`title`;");
         
        if($query2->num_rows() > 0){

            $output=[];
            foreach($query2->result_array() as $row)
            {
              $output[] = ['name' => $row["title"]];
            }

            /*echo json_encode(array_unique($output));*/
            echo json_encode($output);
        }
    }
    // search data
    public function get_search_property_data($search_box) //, $search_city, $search_location, $typology
    {
        $search_box =  urldecode($search_box);

        if ($search_box == '3bhk' || $search_box == '3bh' || $search_box == '3b' || $search_box == '3BHK')
        {
            $search_box_search = '3 BHK';
        }
        elseif ($search_box == '4bhk' || $search_box == '4b' || $search_box == '4bh')
        {
            $search_box_search = '4 BHK';
        }elseif ($search_box == '1, 2, 3, 4')
        {
            $search_box_search = '1, 2, 3 & 4 BHK';
        }
        elseif ($search_box == '2bhk' || $search_box == '2 Bhk'|| $search_box == '2Bh'|| $search_box == '2bh')
        {
            $search_box_search = '2 bhk';
        }elseif ($search_box == '2.5bhk')
        {
            $search_box_search = '2.5 BHK';
        }else
        {
            $search_box_search = $search_box;
        }


        if ($search_box !=='') // && $search_city !=='' && $search_location !=='' && $typology !==''
        {
            $qry = $this->db->select('properties.*,cities.title as city_name,locations.location as location_name,cities.slug as city_slug,locations.slug as location_slug')
                ->from('properties')
                ->join('cities','cities.id = properties.city')
                ->join('locations', 'locations.id = properties.location', 'left')
                ->like('properties.title',$search_box)
                ->or_like('cities.title',$search_box)
                ->or_like('locations.location',$search_box)
                ->or_like('properties.typology',$search_box_search)
                ->get()->result_array();

            return $qry;
            /* echo "<pre>";
             print_r($qry);
            ->or_like('properties.typology',$search_box)
             exit;*/
        }
        else
        {
            return false;
        }

        /* elseif ($search_box !=='')
         {
                 return $this->db->select('*')
                     ->from('properties')
                     ->like('title', $search_box)
                     ->get()->result_array();
             }
             elseif ($search_city !=='')
         {
                 return $this->db->select('*')
                     ->from('properties')
                     ->like('city', $search_city)
                     ->get()->result_array();
             }
             elseif ($search_location !=='')
         {
                 return $this->db->select('*')
                     ->from('properties')
                     ->like('location', $search_location)
                     ->get()->result_array();
             }
             elseif ($typology !=='')
         {
                 return $this->db->select('*')
                     ->from('properties')
                     ->like('typology', $typology)
                     ->get()->result_array();
             }
             elseif ($search_box !== '' && $search_city !=='' && $search_location!=='')
         {
         $qry = $this->db->select('*')
             ->from('properties')
             ->like('title', $search_box)
             ->or_like('city',$search_city)
             ->or_like('location',$search_location)
             ->get()->result_array();
                 return $qry;
             }
             elseif ($search_city !== '' && $typology !=='')
         {
         $qry = $this->db->select('*')
             ->from('properties')
             ->like('city', $search_city)
             ->or_like('typology',$typology)
             ->get()->result_array();
                 return $qry;
             }*/

    }
/* rks */
public function getallpropertyposition($id)
  {
$this->db->select('*');
       $this->db->from('properties_position');
       $this->db->where('postion_properties', $id);
       $this->db->order_by('position_id','desc');
       $query = $this->db->get();
       
    //echo  $this->db->last_query();
       $result = $query->result();
       return $result;

  }


 public function getamenities($id)
  {
$this->db->select('*');
       $this->db->from('amenities');
       $this->db->where('id', $id);
       $query = $this->db->get();
       
    //echo  $this->db->last_query();
       $result = $query->result();
       return $result;

  }

 public function getprop($id)
  {
$this->db->select('*');
       $this->db->from('properties');
       $this->db->where('id', $id);
       $query = $this->db->get();
       
    //echo  $this->db->last_query();
       $result = $query->result();
       return $result;

  }


  public function getAllDataWithConditionDescconst($tablename,$condition)
    {
       $this->db->select('*');
       $this->db->from($tablename);
       $this->db->where($condition);
       $this->db->order_by("orderby", "ASC");
       $query = $this->db->get();
       $result = $query->result();
       return $result;
    }

  /* rks */










}
?>