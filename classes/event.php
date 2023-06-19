<?php
session_start();
class Event extends Dbh{
    private $name;
    private $description;
    private $price;
    private $date;
    private $tickets_number;
    private $category;
    private $host_days;
    private $event_img;
    private $status;
    private $owner_id;
    private $social_media_url;
    public function setEvent($name, $date, $price, $category, $event_img, $host_days, $description, $tickets_number, $owner_id, $social_media_url){
        $this->name = $name;
        $this->date = $date;
        $this->price = $price;
        $this->category = $category;
        $this->event_img = $event_img;
        $this->host_days = $host_days;
        $this->status = "pending";
        $this->description = $description;
        $this->tickets_number = $tickets_number;
        $this->owner_id = $owner_id;
        $this->social_media_url = $social_media_url;
        $sql = "INSERT INTO `event`(`id`, `name`, `tickets_num`, `date`, `category`, `host_days`, `price`, `event_img`, `description`, `status`, `owner_id`, `social_media_url`) 
                VALUES(NULL, '$this->name', '$this->tickets_number', '$this->date', '$this->category', '$this->host_days', 
                '$this->price', '$this->event_img', '$this->description', '$this->status', $this->owner_id, '$this->social_media_url')";
        try{
            $this->conn()->query($sql);
        }
        catch(Exception $e){
            echo "Error:" . $e->getMessage();
        }

    }
}