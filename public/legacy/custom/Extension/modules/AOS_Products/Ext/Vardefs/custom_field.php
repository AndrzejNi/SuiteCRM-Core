<?php
$dictionary['AOS_Products']['fields']['price']['default']=0;           
$dictionary['AOS_Products']['fields']['type']['default']='Robot';
$dictionary['AOS_Products']['fields']['part_number']['required']=true;
$dictionary['AOS_Products']['fields']['part_number']['unique']=true;
/*
// kontrola pola 
$dictionary['AOS_Products']['fields']['part_number']['validation']= array (
    'type' => 'callback',
    'callback' => 'function(formname,nameIndex){alert("nameIndex->"+nameIndex); return false;}',
  );
 */ 