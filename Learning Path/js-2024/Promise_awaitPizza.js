function getcheese(){
    return new Promise((resolve, reject) => {
        setTimeout(()=> {
            const cheese = "cheese is here";
            resolve(cheese);
        },2000)
    })

}

function getdough(cheese){
    return new Promise((resolve, reject) => {
        setTimeout(()=>{
            const dough = "you have your dough ready"
            resolve(dough);
        },2000)
    })
}

function getpizza(dough){
    return new Promise((resolve, reject) => {
        setTimeout(()=>{
            const pizza = "finaaly pizza is done";
            resolve(pizza);
        },2000)
    })
}

// getcheese().then((cheese)=>{
//     console.log(cheese)
//     return getdough(cheese);
// }).then((dough)=>{
//     console.log(dough)
//     return getpizza(dough);
// }).then((pizza)=>{
//     console.log(pizza)
// }).catch((data)=>{
//     console.log("error occured",data )
// }).finally(()=>{
//     console.log("process ended");
// })

async function orderPizza(){

    const cheese = await getcheese();
    console.log(cheese);
    const dough = await getdough(cheese);
    console.log(dough);
    const pizza = await getpizza(dough);
    console.log(pizza);
}
orderPizza();