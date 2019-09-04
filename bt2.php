<?php function LetterChanges(str) {
str = str.toLowerCase();
var al = "abcdefghijklmnopqrstuvwxyz";
var vo = "aeiou";
var newStr = "";
for (var i = 0;i < str.length;i++) {
    if (al.charAt(al.indexOf(str.charAt(i))) == "z") {
        newStr += "A";
    }
    else if (str.charAt(i) == " "){
        newStr += " ";
    }
    else {
        if (al.charAt(al.indexOf(str.charAt(i))+1) == vo.charAt(vo.indexOf(str.charAt(i)))) {
            newStr += vo.charAt(vo.indexOf(str.charAt(i))+1).toUpperCase();
        }
        else {
            newStr += al.charAt(al.indexOf(str.charAt(i))+1)
        }
    }
}
   console.log(newStr);
}
LetterChanges("Argument goes here")
?>