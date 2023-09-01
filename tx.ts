//トランザクション
export type TX = {
  //取引id
  id: string;
  //入金
  inputs: Input[]
  //出金
  outputs: Output[]
};
