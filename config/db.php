<?php

return [

	//Conexion para postGresSql
	//'pgsql:host=localhost;port=5432;dbname=hoteles_test',
	//postgres 123

    'class' => 'yii\db\Connection',
    'dsn' => 'pgsql:host=localhost;port=5432;dbname=hoteles_test',
    'username' => 'postgres',
    'password' => '123',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
