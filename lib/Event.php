<?php
  class Event{
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    //get all events
    public function getAllEvents(){
      $this->db->query("SELECT * FROM events ORDER BY reg_date DESC");
      //assign result set
      $results = $this->db->resultSet();
      return $results;
    }

    public function getEvent($id){
      $this->db->query("SELECT * FROM events WHERE id = :id");
      $this->db->bind(':id', $id);
      
      $result = $this->db->single();
      return $result;
    }

    public function create($data){
      $this->db->query("INSERT INTO events (title, date, location, summary, description, img_url)
      VALUES (:title, :date, :location, :summary, :description, :img_url)");

      $this->db->bind(':title', $data['title']);
      $this->db->bind(':date', $data['date']);
      $this->db->bind(':location', $data['location']);
      $this->db->bind(':summary', $data['summary']);
      $this->db->bind(':description', $data['description']);
      $this->db->bind(':img_url', $data['img_url']);

      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }

    public function delete($id){
      $this->db->query("DELETE FROM events WHERE id = $id");
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }

    public function update($id, $data){
      $this->db->query("UPDATE events SET title = :title, date = :date, location = :location, summary = :summary, description = :description, img_url = :img_url WHERE id = $id");

      $this->db->bind(':title', $data['title']);
      $this->db->bind(':date', $data['date']);
      $this->db->bind(':location', $data['location']);
      $this->db->bind(':summary', $data['summary']);
      $this->db->bind(':description', $data['description']);
      $this->db->bind(':img_url', $data['img_url']);

      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }
  }