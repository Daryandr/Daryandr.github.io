function check() {
    var a = parseFloat(document.getElementById('a').value);
    var b = parseFloat(document.getElementById('b').value);
    var c = parseFloat(document.getElementById('c').value);
    var res = document.getElementById("res");
    var img = document.getElementById("res_image");
    if (((a + b) > c) && ((b + c) > a) && ((a + c) > b)) {
        if (a == b || a == c || b == c) {
            if (a == b && a == c) {
                res.innerHTML = "Треугольник равносторонний";
                img.innerHTML = "<img src=\"../assets/img/tr-3.jpg\" width=\"200px \">";
            }
            else {
                res.innerHTML = "Треугольник равнобедренный";
                img.innerHTML = "<img src=\"../assets/img/tr-2.jpg\" width=\"200px \">";
            }
        }
        else {
            res.innerHTML = "Треугольник существует";
            img.innerHTML = "<img src=\"../assets/img/tr-1.jpg\" width=\"200px \">";
        }
    }
    else {
        res.innerHTML = "Треугольник не существует";
        img.innerHTML = "<img src=\"../assets/img/tr-4.jpg\" width=\"200px \">";
    }
}

