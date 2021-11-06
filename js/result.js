function result_Run() {
var fp2 = new ClientJS();
var inputF = document.getElementById("fp2");
var el_down = document.getElementById("fp2_down");
inputF.value = fp2.getFingerprint();
} 

window.onload = result_Run();


