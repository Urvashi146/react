class classes{
    name="urvashi"
    getname(){
        console.log(this.name)
    }
}

let c = new classes();
c.getname();



// class with constructor 

class clas1{
    name1="urvashi"
    constructor(name1)
    {
        this.name1 = name1
    }
    getname1(){
        console.log(this.name1)
    }
}

let c1 = new clas1("urvashi using constructor");
c1.getname1();
