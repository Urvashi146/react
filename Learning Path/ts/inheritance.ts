class parents
{
    name1
    setname(name1){
        this.name1 = name1 
    }
}

class child extends parents
{
    getname()
    {
        return this.name1
    }
}

let c2  = new child();
c2.setname("urvashi")

console.log(c2.getname());