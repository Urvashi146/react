// normal function 
function normal() {
    return "this is normal function";
}
console.log(normal());
// function with data type string ...note you can note pass number 
function str(a) {
    return a;
}
console.log(str("this is string"));
// function with data type number ...note you can note pass string 
function num(a1) {
    return a1;
}
console.log(num(1000));
// this is give additon in result and if b's value is not given then return a 
function add(a1, b) {
    return b ? a1 + b : a1;
}
console.log(add(1000, 2000));
