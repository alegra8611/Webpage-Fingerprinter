function result_Run() {
	var fp1 = new Fingerprint();
	var inputF = document.getElementById("fp1");
	var el_down = document.getElementById("fp1_down");
	inputF.value = fp1.get();
} 

window.onload = result_Run();