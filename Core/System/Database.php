<?php
/*

    @author : Simon Bucher
    @nameof : KYC-CHECK-AML

*/

class Database{
  private $db;
  private $query;
  private $host;
  private $pass;
  private $user;
  private $data;

  public function __construct($host, $pass, $user, $data)
  {
	   try {
      $this->db = new PDO('mysql:host='.$host.';dbname='.$data.';charset=utf8',''.$user.'', ''.$pass.'');
	      $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	      return $this->db;
	    } catch (PDOException $e) {
	      die($e->getMessage());
	    }
  }

  public function __destruct()
  {
	     $this->db     = null;
       $this->query  = null;
       $this->host   = null;
       $this->pass   = null;
       $this->user   = null;
       $this->data   = null;
  }

  public function getQuery($table, $where) {
    $this->query = $this->db->prepare("SELECT * FROM ".$table." WHERE ".$where);
    $this->query->execute();
    return $this->query;
    __destruct();   
  }

  public function insert($table){
	  $this->query = $this->db->prepare("INSERT INTO ".$table);
	  $this->query->execute();
    __destruct();
  }

  public function update($table, $data){
	  $this->query = $this->db->prepare("UPDATE ".$table." SET ".$data);
	  $this->query->execute();
    __destruct();
  }

  public function delete($table, $where){
	  $this->query = $this->db->prepare("DELETE FROM ".$table." WHERE ".$where);
    $this->query->execute();
    __destruct();
  }
}
?>