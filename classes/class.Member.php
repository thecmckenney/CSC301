<?php
include('functions.php');
class Member{
	
	private $fname;
    private $lname;
    private $email;
	private $id;
	private $database;
	
	
	
	public function __construct($memberid, $database){
		$this->id = $memberid;
		$this->database = $database;
        
		$this->getFromDatabase();
	}
	
	private function getFromDatabase(){
		
		$members = getMember($this->id,$this->database);
		$this->fname = $members[0]['fname'];
        $this->lname = $members[0]['lname'];
        $this->email = $members[0]['email'];
	}
	
	public function getFName(){
		return $this->fname;
	}
    public function getLName(){
        return $this->lname;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getId(){
        return $this->id;
    }
    
	
}

?>