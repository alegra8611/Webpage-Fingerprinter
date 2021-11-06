var input_textarea = document.querySelector('.content-input');
var save_button = document.querySelector('.save-button');

save_button.addEventListener('click', updateOutput);

input_textarea.value = localStorage.getItem('content');

function updateOutput() {
	localStorage.setItem('content', input_textarea.value);
	
}

