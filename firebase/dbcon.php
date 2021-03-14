<?php

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory)
    ->withServiceAccount('firebase/mhospo-1bad8-firebase-adminsdk-sm5wz-8a191ac33a.json')
    ->withDatabaseUri('https://mhospo-1bad8-default-rtdb.firebaseio.com/');

    $database = $factory->createDatabase();
                                    
?>