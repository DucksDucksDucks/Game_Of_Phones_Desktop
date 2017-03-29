<?php
    class answer implements JsonSerializable {
        private $id;
        private $deviceID;
        private $submittedAnswer;
        private $displayed;
        
        //Constructers
        function __construct($id, $deviceID, $submittedAnswer, $displayed) {
	  	    $this->setID($id);
	  	    $this->setDeviceID($deviceID);
            $this->setSubmittedAnswer($submittedAnswer);
            $this->setDisplayed($displayed);
        }
        
        //Setters
        public function setID($id) {$this->id=$id;}
        public function setDeviceID($deviceID) {$this->deviceID=$deviceID;}
        public function setSubmittedAnswer($submittedAnswer) {$this->submittedAnswer=$submittedAnswer;}
        public function setDisplayed($displayed) {$this->displayed=$displayed;}
        
        //Getters
        public function getID() {return $this->id;}
        public function getDeviceID() {return $this->deviceID;}
        public function getSubmittedAnswer() {return $this->submittedAnswer;}
        public function getDisplayed() {return $this->displayed;}
        
        // Json Seralize Method
	    public function jsonSerialize() {
	  	    return ['id'=>$this->getID(),
	  	        'deviceID'=>$this->getDeviceID(),
	  	        'submittedAnswer'=>$this->setSubmittedAnswer(),
                'displayed'=>$this->getDisplayed()];
	    }
	    
	    public function __toString() {
   	        $answerObject =  'Answer: ' .
                'id=>' . $this->getCourseID() . ' ' . 
   	            'deviceID=>' . $this->getDeviceID() . ' ' .
   	            'submittedAnswer=>' . $this->setSubmittedAnswer().' '.
                'displayed=>' . $this->getDisplayed(); 
	        return $answerObject;
        }
    }
?>