<?php

class AjaxrequestController extends AppController {
    
    public $helpers = array('Html', 'Form');
    
    public function index(){

    $trackID =3;//$_POST['trackID'];

            $this->loadModel("Media");
             $media=$this->Media->query("Select * from media where `programpoint_id`='$trackID'");

             print_r($media);
             
             /*
    $getmycontent = $media; //mysql_query("Select * from ");  

    $rows = array();
        
    while($row = mysql_fetch_array($givemenameandcolors)) {
      $rows[] = $row;
    }
    echo json_encode(array("items" => $rows));
              * 
              */
    }
    
}
?>
