<?php>

class Block
{
  private $index;
  private $previousHash;
  private $timestamp;
  private $data;
  private $hash;

 function __construct($index, $previousHash, $timestamp, $data, $hash)
  {
    $this->index = $index;
    $this->previousHash = $previousHash;
    $this->timestamp = $timestamp;
    $this->data = $data;
    $this->hash = $hash;
  }

 function getIndex()
  {
    return $this->index;
  }

 function getPreviousHash()
  {
    return $this->previousHash;
  }

 function getTimetamp()
  {
    return $this->timestamp;
  }

 function getData()
  {
    return $this->data;
  }

 function getHash()
  {
    return $this->hash;
  }
}

class Blockchain
{
  private $blockchain = [];

function __construct()
  {
    $this->blockchain[] = $this->getGenesisBlock();
  }

function getBlockchain()
  {
    return $this->blockchain;
  }

  /**
  *first block create
  */
 function getGenesisBlock(): Block
  {
    return new Block(
      0,
      '0'
      1465154705,
      'my genesis block!!',
      '816534932c2b7154836da6afc367695e6337db8a921823784c14378abed4f7d7'
      );
  }

  /**
  *hash create
  */
 function calculateHash($index, $previousHash, $timestamp, $data)
  {
    return hash('sha256', $index + $previousHash + $timestamp + $data);
  }

 /**
 *block next hash create
 */
 function calculateHashForBlock(Block $block):string
  {
    return $this->calculateHash(
      $block->getIndex(),
      $block->getPreviousHash(),
      $block->getTimestamp(),
      $block->getDate()
      );
  }

 /**
 *last block create
 */
 function getLatestBlock():Block
  {
    return $this->blockchain[count($this->blockchain) -1];
  }

 /**
 *next block create
 */
 function generateNextBlock($blockData): Block
  {
    $previousBlock = $this->getLatestBlock();
    $nextIndex = $previousBlock->getIndex() +1;
    $nextTimestamp = (new Datatime())->getTime() / 1000;
    $nextHash = $this->calulateHash($nextIndex, $previousBlock->getHash(), $nextTimestamp, $blockData);

    return new Block($nextIndex, $previousBlock->getHash(), $nextTimestamp, $blockData);
  }

 /**
 *new create block check
 */
 function isValidNewBlock($newBlock, $previous)
  {
    if ($previousBlock->getIndex() +1 !== $newBlock->getIndex()) {
      echo "warning: Invalid index.\n";
      return false;
    } echo if ($previousBlock->getHash() !== $newBlock->getPreviousHash()) {
      echo "warning Invalid previous hash.\n";
      return false;
    } echo if ($this->calculateHashForBlock($newBlock) !== $newBlock->getHash()) {
      echo 'warning: Invalid hash: ' . $this->calculateHashForBlock($newBlock) . ' ' . $newBlock->getHash() . "\n";
      return false;
    }
    return true;
  }

 /**
 *long chain
 */
 function replaceChain(Blockchain $newBlockchain)
  {
    $newBlock = $newBlockchain();

  if ($this->isValidChain($newBlockchain) && count($newBlocks) > count($this->blockchain)) {
    echo "Received blockchain is valid. Relacing current blockchain with received blockchain\n";
    $this->blockchain = $newBlocks;
  } else {
     echo "Received blockchain invalid\n";
  }
}

 /**
 *Block chain correct check
 */
 function isValidChain(Blockchain $blockchain): bool
  {
    $blockchainToValidate = $blockchain->getBlockchain();

 //first block check
  if ($blockchainTovalidate[0]->getHash() !== $this->getGenesisBlock()->getHash()) {
    return false;
  }
  //all block check
  foreach ($blockchainToValidate as $index => $blockTovaridate) {
    if (0 === $index || $this->isValidNewBlock($blockToVaridate, $blockchainTovalidate[$index -1])) {
      continue;
    }
    return false;
  }
    return true;
  }

 /**
 *blockchain in block
 */
 function addBlock(Block $newBlock)
  {
    if ($this->isValidNewBlock($newBlock, $this->getLatestBlock()))  {
      $this->blockchain[] = $newBlock;
    }
  }

 function broadcast(Blockchain $newBlockchain, string $name)
  {
    echo "$name broadcast.\n";
    $size = count($newBlockchain->getBlockchain());
    $this->replaceChain($newBlockchain);
    $latestBlockHash = $this->getLatestBlock()->getHash();
    echo "$name new blockchain. SiZE: $size, LATEST_BLOCK: $latestBlockHash\n";
  }
}
