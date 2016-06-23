 function quadraticEquation(a, b, c) {
            var x;
            var x1;
            var x2;
            var discriminant = ((b * b) - 4 * a * c);
            if (a == 0) {
                console.log("The equation is linear. Has root: " + ((-c) / b));
            }
            else if (discriminant == 0) {
                x = ((-b) / (2 * a));
                console.log("The equation has one root x1=x2=" + x);
            }
            else if (discriminant > 0) {
                x1 = ((-b) + Math.sqrt(discriminant)) / (2 * a);
                x2 = ((-b) - Math.sqrt(discriminant)) / (2 * a);
                console.log("The equation has roots x1= " + x1.toFixed(3) + ", x2= " + x2.toFixed(3));
            }
            else {
                console.log("Equation has no real roots!");
            }
        }
        quadraticEquation(-2, 5, 6)
