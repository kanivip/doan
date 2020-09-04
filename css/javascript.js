function Cong(max){
    var i = document.getElementById("SoLuong").value;
    i++;
    if(i>=max)
        i=max;
    document.getElementById("SoLuong").value = i;
    
}
function Tru(){
    var i = document.getElementById("SoLuong").value;
    i--;
    if(i<=0)
    {
        i=1;
    }
    document.getElementById("SoLuong").value = i;
}