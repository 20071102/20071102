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
        $newBlock = $myBlockchain->generateNextBlock('dummy_block_data');
        $newBlockHash = $newBlock->getHash();
        $myBlockchain->addBlock($newBlock);
        echo "$name add block. BLOCK: $newBlockHash\n";
      }
      //new block create play
      $masterBlockchain->broadcast($myBlockchain, $name);
    });
  }

echo "=== START SIMULATE ===\n";

Loop::run(function () use ($masterBlockchain) {
  createMiner($masterBlockchain, 'Miner1');
  createMiner($masterBlockchain, 'Miner2');
  createMiner($masterBlockchain, 'Miner3');
});
