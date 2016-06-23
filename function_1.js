function xyz(a) {
	console.log(a);
	a.z = 10;
}

var a = {z: 5}

xyz(a);
console.log(a);





function xyz(a) {
	console.log(a);
	a.z = "test";
}

var a = "original value"

xyz(a);
console.log(a);