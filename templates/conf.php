<?php
$dolibarr_main_url_root='https://{{domain}}';
$dolibarr_main_document_root='/home/pacs/{{pac}}/users/{{user}}/dolibarr/htdocs';
$dolibarr_main_url_root_alt='/custom';
$dolibarr_main_document_root_alt='/home/pacs/{{pac}}/users/{{user}}/dolibarr/custom';
$dolibarr_main_data_root='/home/pacs/{{pac}}/users/{{user}}/data';
$dolibarr_main_db_host='localhost';
$dolibarr_main_db_port='5432';
$dolibarr_main_db_name='{{pac}}_{{user}}';
$dolibarr_main_db_prefix='llx_';
$dolibarr_main_db_user='{{pac}}_{{user}}';
$dolibarr_main_db_pass='{{password}}';
$dolibarr_main_db_type='pgsql';
$dolibarr_main_db_character_set='UTF8';
$dolibarr_main_db_collation='C';
// Authentication settings
$dolibarr_main_authentication='dolibarr';

// Security settings
$dolibarr_main_prod='1';
$dolibarr_main_force_https='1';
$dolibarr_main_restrict_os_commands='mysqldump, mysql, pg_dump, pgrestore';
$dolibarr_nocsrfcheck='0';
$dolibarr_main_instance_unique_id='{{instance_unique_id}}';
$dolibarr_mailing_limit_sendbyweb='0';

$dolibarr_main_distrib='standard';
