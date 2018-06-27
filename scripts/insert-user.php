<?php

require 'dao/UserDao.php';

$userDao = new UserDAO();
$userDao->addDefaultUser();

