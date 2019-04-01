<?php
 $default_action = 'ranking';
 $actions = ['ranking', 'team','game'];
 $action = filter_input(INPUT_GET, 
                        'action', 
                        FILTER_VALIDATE_REGEXP, 
                        ['options' => ['regexp' => '/^[a-z]*$/']]);
 if (!in_array($action, $actions)) {
   $action = $default_action;
 }
 include "controllers/${action}_action.php";