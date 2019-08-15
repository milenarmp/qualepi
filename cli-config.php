<?php
use Doctrine\ORM\Tools\Console\ConsoleRunner;


require_once BASEPATH . 'bootstrap.php';


return ConsoleRunner::createHelperSet($em);