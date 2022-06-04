function check()
{
    var inp = document.getElementsByName('delivery');
    var pick = document.getElementById('pickup');
    var add = document.getElementById('address');
    var req = document.getElementById('add');
    if(inp[0].checked) {
        add.style.display = "none";
        pick.style.display = "block";
        req.required = false;
    }
    else {
        pick.style.display = "none";
        add.style.display = "block";
        req.required = true;
    }
}
function slide(){
    var slider = document.getElementById("weight");
    var output = document.getElementById("weightnum");
    var port = document.getElementById("portion");
    var v = slider.value;
    output.innerHTML = v;
    port.innerHTML = Math.floor(v/0.2);
}

function decortext(){
    var d1 = document.getElementById('d1');
    var d2 = document.getElementById('d2');
    var tb = document.getElementById('tb');
    var gn = document.getElementById('gn');
    var lber = document.getElementById('lber');
    var lgin = document.getElementById('lgin');
    if(d1.checked){
        lber.style.display = "inline-block";
        tb.required = true;
    }
    else{
        lber.style.display = "none";
        tb.required = false;
    }
    if(d2.checked){
        lgin.style.display = "inline-block";
        gn.required = true;
    }
    else{
        lgin.style.display = "none";
        gn.required = false;
    }
}


