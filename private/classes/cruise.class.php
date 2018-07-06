<?php
/**
 * Description of Cruise
 *
 * @author Russ
 */
class Cruise {
    
    public $name;
    public $port;
    public $date;
    public $nights;
    public $cabinType;
    public $price;
    
    public function __construct($args=[]) {  
      $this->name = isset($args['name']) ? $args['name'] : '';
      $this->port = isset($args['port']) ? $args['port'] : '';
      $this->date = isset($args['date']) ? $args['date'] : '';
      $this->nights = isset($args['nights']) ? $args['nights'] : '';
      $this->cabinType = isset($args['cabinType']) ? $args['cabinType'] : '';
      $this->price = isset($args['price']) ? $args['price'] : '';
    }
}
