<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class UniquePartNumber
{
    public function checkUniquePartNumber($bean, $event, $arguments)
    {
        global $db;

        // Check if exists 
        if (!empty($bean->id)) {
            $query = "SELECT id FROM aos_products WHERE part_number = '" . $db->quote($bean->part_number) . "' AND id != '" . $bean->id . "' AND deleted = 0";
        } else {
            $query = "SELECT id FROM aos_products WHERE part_number = '" . $db->quote($bean->part_number) . "' AND deleted = 0";
        }

        $result = $db->query($query);
        $row = $db->fetchByAssoc($result);

        // Set error 
        if ($row) {
            $GLOBALS['log']->fatal("Part number already exists: " . $bean->part_number);
            //Set Error message 
            //TODO Display Error on GUI
            //$bean->addError('Already exists'. $bean->part_number, 'part_number');
            //$bean->validation_message[] = 'Part number already exists. Please use a unique value.';
            return false; // Stop save 
        }
        else 
            return true; 
         
    }
}

