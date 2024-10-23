<?php
$dictionary['AOS_Products']['relationships']['product_works'] = array(
    'lhs_module' => 'AOS_Products',
    'lhs_table' => 'aos_products',
    'lhs_key' => 'part_number',
    'rhs_module' => 'Works',
    'rhs_table' => 'works',
    'rhs_key' => 'product_id', 
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'product_type',
    'relationship_role_column_value' => 'AOS_Products',
);

$dictionary['AOS_Products']['fields']['product_works'] = array(
    'name' => 'product_works',
    'type' => 'link',
    'relationship' => 'product_works',
    'source' => 'non-db',
    'vname' => 'LBL_PRODUCT_WORKS', 
    'module' => 'Works',
    'bean_name' => 'Works',
);
