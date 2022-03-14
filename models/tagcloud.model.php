<?php

class tagcloud_model
{
  var $mysqli;
  var $tags; //array(id, name, total)
  var $largest;

  function __construct($conn)
  {
    $this->mysqli = $conn;

    //get tags and largest value
    $this->get_tags();
  }

  /*Utility functions
  -----------------------------------*/

  function get_tags()
  {

  }

  /*Display functions
  -----------------------------------*/
  
  function get_tag_list()
  {

  }

  function get_tag_caloud()
  {
    
  }

}

?>