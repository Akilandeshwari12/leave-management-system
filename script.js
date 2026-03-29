function validate() {

let name = document.getElementById("name").value;
let reason = document.getElementById("reason").value;
let leaveType = document.querySelector('input[name="leave_type"]:checked');

if(name == "" || reason == ""){
 alert("Fill all fields!");
 return false;
}

if(!leaveType){
 alert("Select Leave Type!");
 return false;
}

return true;
}