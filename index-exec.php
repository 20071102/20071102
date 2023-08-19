<?php

require_once 'blockchain.php';
require_once 'vendor/autoload.php';

use Amp\Loop;

//block start ver
$masterBlockchain = new Blockchan() ;

function createMiner(Blockchain &$masterBlockchain,string $name)
  {
    $msInterval = rand(800,5000);
    Loop::Repeat($msInterval, function() use ($msterBlockchain, $name) {
      $meBlockchain = clone $masterBlockchain;
      $blockCount = rand(1,5);
      for ($i = 0; $i < $blockCount; $i++) {
        //block plus
        $newBlock =
