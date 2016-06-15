<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

use Doctrine\MongoDB\Connection;
use Doctrine\ODM\MongoDB\Configuration;
use Doctrine\ODM\MongoDB\DocumentManager;
use Doctrine\ODM\MongoDB\Mapping\Driver\AnnotationDriver;
use Doctrine\ODM\MongoDB\Mapping\Driver\YamlDriver;

require __DIR__."/../vendor/autoload.php";

$connection = new Connection();
$config = new Configuration();

$config->setProxyDir(__DIR__ . '/Proxies');
$config->setProxyNamespace('Proxies');
$config->setHydratorDir(__DIR__ . '/Hydrators');
$config->setHydratorNamespace('Hydrators');
$config->setDefaultDB('doctrine_odm');
$config->setMetadataDriverImpl(new YamlDriver([__DIR__], '.mongodb.yml'));

$dm = DocumentManager::create($connection, $config);

$job = new Job();

$dm->persist($job);
$dm->flush($job);


$job1 = new Job();
$job1->uuid = $job->uuid;
$job1->name = 'test';

$dm->persist($job1);
$dm->flush($job1);