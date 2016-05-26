<?php
require 'Database.class.php';
require 'Newsletter.class.php';

if (!empty($_POST)) {
    $email = $_POST['signup-email'];
    $email = htmlspecialchars( $email );
    $email = strip_tags( $email );

    Newsletter::register($email);
}