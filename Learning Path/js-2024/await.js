// async await 

// console.log("number1");
// console.log("number2");
// async function test(){
//    await console.log("number3");
//      console.log("number4");
// }
// test();
// console.log("number5")

const ticket = new Promise(function (resolve, reject)  {
    let ontime = true;
    if(ontime){
// console.log("you are on time");        
resolve("you are on time");        
    }
    else{
        // console.log("you are late")
        reject("you are late")
    };
})

ticket.then((data)=>{console.log("ohh good",data)}).catch(()=>{console.log("Sorry",data)});