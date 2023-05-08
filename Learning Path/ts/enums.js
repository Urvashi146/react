var level;
(function (level) {
    level[level["zero"] = 0] = "zero";
    level[level["first"] = 1] = "first";
    level[level["second"] = 2] = "second";
    level[level["third"] = 3] = "third";
})(level || (level = {}));
var level1 = level.third;
console.log(level1);
// enum initializ
var levels;
(function (levels) {
    levels[levels["zero"] = 5] = "zero";
    levels[levels["first"] = 6] = "first";
    levels[levels["second"] = 7] = "second";
    levels[levels["third"] = 8] = "third";
})(levels || (levels = {}));
var levels1 = levels.third;
console.log(levels1);
// fully initialized
var levelf;
(function (levelf) {
    levelf[levelf["zero"] = 100] = "zero";
    levelf[levelf["first"] = 101] = "first";
    levelf[levelf["second"] = 102] = "second";
    levelf[levelf["third"] = 103] = "third";
})(levelf || (levelf = {}));
var levelsf = levelf.third;
console.log(levelsf);
// enum string 
var levelstr;
(function (levelstr) {
    levelstr["zero"] = "zero";
    levelstr["first"] = "one";
    levelstr["second"] = "two";
    levelstr["third"] = "three";
})(levelstr || (levelstr = {}));
var levelst = levelstr.third;
console.log(levelst);
