import { Tx } from"./tx.ts";
import { Validator } from"./validator.ts";
//ブロック
export type Block = {
  //何番目のブロックか
  index: number;
  //ブロックを作った時間
  time: string;
  //ひとつ前のブロックのハッシュ
  prev_hash: string;
  //このブロックのハッシュ
  hash: string;
  //トランザクション
  tx: Tx;
  //このブロックを保証してくれるバリデーター
  validator: Validator;
};
