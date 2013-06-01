<?php

define('SRC_ROOT', __DIR__ .'/src/');
define('TEST_ROOT', __DIR__ .'/tests/');
include SRC_ROOT . 'Parser/FieldParser.php';
include SRC_ROOT . 'Parser/ModelDefinitionParser.php';
include SRC_ROOT . 'Parser.php';
include SRC_ROOT . 'Model.php';
include SRC_ROOT . 'Migration.php';
include SRC_ROOT . 'ModelList.php';
include SRC_ROOT . 'MigrationList.php';
include SRC_ROOT . 'Inflect.php';
include SRC_ROOT . 'Exception/ParseError.php';
include SRC_ROOT . 'Generator/MigrationGenerator.php';
include SRC_ROOT . 'Generator/ModelGenerator.php';
include TEST_ROOT . 'ParsedResult.php';
