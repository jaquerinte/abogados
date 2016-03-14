var listed=0;

function addUsersForm() {
	var newdiv = document.createElement('div');

    var divIdName = 'secuela_' + listed;

    newdiv.setAttribute('id', divIdName);
    newdiv.className = "divtr";

    newdiv.innerHTML = '<div> Codigo: '
    	+'<input type="text">'
    	+'<a href="javascript:void(0);" title="remove" onClick=\'removeUsersForm(secuela_'+(listed)+')\'>Eliminar</a>'
    	+'</div>';
    
    /*
     * '<div class="divtd">Age ' +
            '<input type="text">' +
            '</div>' +
            '<div class="divtd"> <a href="javascript:void(0);" title="Add" onClick="userController.addUsersForm();">Add</a> ' +
            '<a href="javascript:void(0);" title="Delete this" onClick="userController.removeUsersForm(' + "'" + divIdName + "'" + ');">Delete</a>' +
            '</div>';
     */

    document.getElementById("usersForm").appendChild(newdiv);
    
    listed = listed+1;
}

function removeUsersForm (id) {
		document.getElementById(id).remove();
    	listed = listed-1;
}