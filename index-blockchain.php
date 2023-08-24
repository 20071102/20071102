class Block {

 constructor(index, previousHash,timetamp, data, hash) {
 this.index = index;
 this.previousHash = previousHash.toString();
 this.timetamp = timetamp;
 this.data = data;
 this.hash = hash.toString;
 }

var calculate = (index, previousHash, timetamp, data) => {
 return CryptoJS.SHA256(index + previousHash + timetamp + data).toString();
 };

var generateNextBlock = (blockdata) => {
 var previoousBlock = getLatesBlock();
 var nextIndex = previousBlock.index + 1;
 var nextTimetamp = new Data().getTime() / 1000;
 var nextHash = calculateHash(nextIndex, previousBlock.hash, nextTimetamp, blockData, nextHash);
 };

var getGenesisBlock = () => {
 return new Block(0, "0", 1465154705, "my genesis block!!", "816534932c2b7154836da6afc367695e6337db8a921823784c14378abed4f7d7");
 };

var blockchain = [getGenesisBlock()];

var isValidNewBlock = (newBlock, previousBlock) => {
 if (previousBlock.index + 1 !== newBlock.index) {
  console.log('invalid index');
  return false;
 } else if (previousBlock.hash !== newBlock.previousHash) {
    console.log('invalid 

}
