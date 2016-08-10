<?php
	class Payment_m extends CI_Model{
		private $id;
		private $fname;
		private $lname;
		private $company;
		private $email;
		private $jml;
		private $bank;
		private $a_name;
		private $a_number;
		private $message;
		private $id_status;

		public function setId($val){ $this->id = $val; }
		public function setFName($val){ $this->fname = $val; }
		public function setLName($val){ $this->lname = $val; }
		public function setCompany($val){ $this->company = $val; }
		public function setEmail($val){ $this->email = $val; }
		public function setJml($val){ $this->jml = $val; }
		public function setBank($val){ $this->bank = $val; }
		public function setAName($val){ $this->a_name = $val; }
		public function setANumber($val){ $this->a_number = $val; }
		public function setMessage($val){ $this->message = $val; }
		public function setIdStatus($val){ $this->id_status = $val; }

		public function getId(){ return $this->id; }
		public function getFName(){ return $this->fname; }
		public function getLName(){ return $this->lname; }
		public function getCompany(){ return $this->company; }
		public function getEmail(){ return $this->email; }
		public function getJml(){ return $this->jml; }
		public function getBank(){ return $this->bank; }
		public function getAName(){ return $this->a_name; }
		public function getANumber(){ return $this->a_number; }
		public function getMessage(){ return $this->message; }
		public function getIdStatus(){ return $this->id_status; }

		public function tambah(){
			$data = array(
				'fname' => $this->getFName(),
				'lname' => $this->getLName(),
				'company' => $this->getCompany(),
				'email' => $this->getEmail(),
				'jml' => $this->getJml(),
				'bank' => $this->getBank(),
				'a_name' => $this->getAName(),
				'a_number' => $this->getANumber(),
				'message' => $this->getMessage(),
				'id_status' => $this->getIdStatus()
			);
			return $this->db->insert('tbl_pembayaran', $data);
		}

	}
?>