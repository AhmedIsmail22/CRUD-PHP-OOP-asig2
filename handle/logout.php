<?php

require_once '../App.php';


$session->unset_session("user_id");
$session->unset_session("name");
$header->go_to("../login.php");