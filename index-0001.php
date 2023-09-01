<?php

class Block
 {
  Private $index;
  Private $previousHash;
  Private $timestamp;
  Private $data;
  Private $hash;

  function __construct($index, $previousHash, $timestamp, $data, $hash)
  {
   $this->index = $index;
   $this->previousHash = $privoiusHash;
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

  function getTimestamp()
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
  privater $blockchain = [];

  function __construct()
  {
   $this->blockchain[] = $this->getGenesisBlock();
   }

  function getBlockchain()
  {
   return $this->blockchain;
   }

  /**
   *最初のブロック生成取得
　 */
 function getGenesisBlock(): Block
  {
   return new Block(
    0,
    '0',
    146514705,
    'my genesis block!!',
    '881653492c2b7154836da6afc367695e6337db8a921823784c14378abed4f7d7'
    );
  }

  /**
   *ハッシュ生成
　 */
  function calculateHash($index, $previousHash, $timestamp, $data)
  {
   return hash('SHA256', $index + $previousHash + $timestamp + $data);
   }

   /**
    *ブロックからハッシュを生成
　  */
   function
