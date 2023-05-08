interface usertype{
    name1:string,
    age:number,
    
}


let user:usertype = {
    name1: 'urvashi',
    age : 26,

}




interface usertype1{
    name11:string,
    age1:number,
    lastname1:()=>string
}

let user1:usertype1 = {
    name11: 'urvashi',
    age1 : 26,
    lastname1:function()
    {
        return "barot"
    }

}

console.log(user1.lastname1());