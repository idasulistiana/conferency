<?php
	class Speaker_m extends CI_Model{
		private $id;
		private $title;
		private $fname;
		private $lname;
		private $company;
		private $city;
		private $state;
		private $country;
		private $email;
		private $phone;
		private $address;
		private $abstract_category;
		private $title_speech;
		private $username;
		private $pass;
		private $abstract_file;

		public function setID($val){ $this->id = $val; }
		public function setTitle($val){ $this->title = $val; }
		public function setFName($val){ $this->fname = $val; }
		public function setLName($val){ $this->lname = $val; }
		public function setCompany($val){ $this->company = $val; }
		public function setCity($val){ $this->city = $val; }
		public function setState($val){ $this->state = $val; }
		public function setCountry($val){ $this->country = $val; }
		public function setEmail($val){ $this->email = $val; }
		public function setPhone($val){ $this->phone = $val; }
		public function setAddress($val){ $this->address = $val; }
		public function setAbstractCat($val){ $this->abstract_category = $val; }
		public function setTSpeech($val){ $this->title_speech = $val; }
		public function setUsername($val){ $this->username = $val; }
		public function setPass($val){ $this->pass = $val; }
		public function setAbstractFile($val){ $this->abstract_file = $val; }

		public function getID(){ return $this->id; }
		public function getTitle(){ return $this->title; }
		public function getFName(){ return $this->fname; }
		public function getLName(){ return $this->lname; }
		public function getCompany(){ return $this->company; }
		public function getCity(){ return $this->city; }
		public function getState(){ return $this->state; }
		public function getCountry(){ return $this->country; }
		public function getEmail(){ return $this->email; }
		public function getPhone(){ return $this->phone; }
		public function getAddress(){ return $this->address; }
		public function getAbstractCat(){ return $this->abstract_category; }
		public function getTSpeech(){ return $this->title_speech; }
		public function getUsername(){ return $this->username; }
		public function getPass(){ return $this->pass; }
		public function getAbstractFile(){ return $this->abstract_file; }

		public function checkAbstract(){
			$this->db->select('abstract_file')->from('tbl_speaker');
			$this->db->where('username', $this->session->userdata('username'));
			return $this->db->get()->row()->abstract_file;
		}
		public function addAbstract(){
			$data = array('abstract_file' => $this->getAbstractFile());
			$this->db->where('username', $this->session->userdata('username'));
			return $this->db->update('tbl_speaker', $data);
		}
	}
?>