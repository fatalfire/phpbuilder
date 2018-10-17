function getSum(){
    var sum = 0;
    var number = 0;
    while(number !== false){
        number = prompt('Enter sum number\nNow you have: ' + sum);
        if(isNaN(number) || number === ''){
            alert("Error");
            continue;
        }else if (number === null){
            break;
        }
        sum += parseInt(number);
    }
    return sum;
}
var result = getSum();
console.log("Your sum is: " + result);
