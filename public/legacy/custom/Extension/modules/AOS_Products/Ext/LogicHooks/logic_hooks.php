<?php
$hook_array['before_save'][] = Array(
    1, // prioryty
    'Check part_number', // Desc
    'custom/modules/AOS_Products/UniquePartNumber.php', // Path for class 
    'UniquePartNumber', // Name of Calss
    'checkUniquePartNumber' // Name of methods 
);