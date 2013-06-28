function abc(className) {
  alert(className);
}

function toggle() {

    var acc_files = document.getElementById('acc_files');
    var fileselector = document.getElementById('fileselector');
    var fileselectorapp = document.getElementById('add-button');

    if (acc_files.className == 'acc_files_hidden') {
	acc_files.className='acc_files_visible'; 
	fileselector.className='acc_files_hidden'; 
	acc_files.focus();
	
    } else {
	fileselector.className="";  
	acc_files.className='acc_files_hidden';
	fileselectorapp.focus();
    }
}
