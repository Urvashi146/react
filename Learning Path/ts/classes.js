var classes = /** @class */ (function () {
    function classes() {
        this.name = "urvashi";
    }
    classes.prototype.getname = function () {
        console.log(this.name);
    };
    return classes;
}());
var c = new classes();
c.getname();
var clas1 = /** @class */ (function () {
    function clas1(name1) {
        this.name1 = "urvashi";
        this.name1 = name1;
    }
    clas1.prototype.getname1 = function () {
        console.log(this.name1);
    };
    return clas1;
}());
var c1 = new clas1("urvashi using constructor");
c1.getname1();
