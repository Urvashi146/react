
let o ={
    firstname : "urvashi",
    age : 26,
    job : "web dev"
}
console.log(o)

// change value 
o.firstname="Uri"
// o.firstname=10 this will give an erro as i will take string as we have passed value in string ....we can update value while pustting same datatypr value

console.log(o)

// we can assing datatype also using interface 

interface userTyped{
    firstname : string,
    age : number,
    job : any,
}

let o1:userTyped ={
    firstname : "urvashi",
    age : 26,
    job : "web dev"
}
console.log(o1)



// if we need to pass any valueeither string ,number or boolen we declare any 
let o2:any ={
    firstname : "urvashi",
    age : 26,
    job : "web dev"
}
console.log(o2)




