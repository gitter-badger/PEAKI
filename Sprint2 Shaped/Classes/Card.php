<?php
    class Card  {
       public $header; 
       public $keypoints;
       public $keywords; 
       public $mmedia;
       private $RelationShip; //array [key=>value]  key: others_keyword value: relation_name
       private $PeakStatus;
       
        public function __construct($_header,$_keypoints,$_keywords,$_mmedia) {
        $this->header=$_header;
        $this->keypoints=$_keypoints;
        $this->keywords=$_keywords;
        $this->mmedia=$_mmedia;
         }
         
      public function updateRS(){
       }
       
       // DONE 7DAY 15DAY 30DAY (Adamkhoo - I'm gifted, so you are) 
       //3DAY (NOW: 16/11/2015 - 19/11/2015)  (voca.vn blueup ankirs)
     public   function updatePS($_ps){ 
         return $this->PeakStatus=$_ps;
       }
       
}