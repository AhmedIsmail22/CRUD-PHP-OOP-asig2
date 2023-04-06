<?php

require_once 'inc/connection.php';
require_once 'classes/Encrypt.php';
require_once 'classes/validations/validationinterface.php';
require_once 'classes/validations/traits/Required.php';
require_once 'classes/validations/traits/Isemail.php';
require_once 'classes/validations/traits/Isnumeric.php';
require_once 'classes/validations/traits/Length.php';
require_once 'classes/validations/Namevalidation.php';
require_once 'classes/validations/Emailvalidation.php';
require_once 'classes/validations/Phonevalidation.php';
require_once 'classes/validations/Passwordvalidation.php';
require_once 'classes/validations/RequiredData.php';
require_once 'classes/validations/Validation.php';
require_once 'classes/Register.php';
require_once 'classes/login/Isexist.php';
require_once 'classes/login/Login.php';
require_once 'classes/Database/Selectall.php';
require_once 'classes/Database/Selectone.php';
require_once 'classes/Database/Delete.php';
require_once 'classes/update/Update.php';
require_once 'classes/messages/Message.php';
require_once 'classes/Requests.php';
require_once 'classes/Session.php';
require_once 'classes/Header.php';




$register = new Register($conn);
$encrypt = new Encrypt();
$login = new Login($conn);
$selectall = new Selectall($conn);
$selectone = new Selectone($conn);
$delete = new Delete($conn);
$update = new Update($conn);
$isexist = new Isexist($conn);
$validation = new Validation;
$message = new Message;
$request = new Requests;
$header = new Header;
$session = new Session;

