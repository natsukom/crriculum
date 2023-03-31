let numbers = [2, 5, 12, 13, 15, 18, 22];
//ここに答えを実装してください。↓↓↓
for (let i = 0; i < numbers.length; i++){
    if(numbers[i] % 2 == 0){
        isEven( numbers[i] );
    }  

}
      
 function isEven(numbers) {
    console.log(numbers + 'は偶数です');
return numbers + "偶数";

}

class Car {
    constructor(gas,number){
        this.gas = gas;
        this.number = number;
    }

gasstation() {
    console.log(`ガソリンは${this.gas}です,ナンバーは${this.number}です`);
}
}
let getNumGas = new Car('45.5','1212');
getNumGas.gasstation();
