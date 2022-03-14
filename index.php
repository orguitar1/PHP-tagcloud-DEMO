<?php

// open database connection
include_once('models/open_db.php');

// load models
include_once('models/tagcloud.model.php');

// create tagcloud here


// loead view
include('views/tagcloud.view.php');

// close databse connection
include_once('models/close_db.php');

?>