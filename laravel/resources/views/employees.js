$(document).ready(function(){
});
//create instance of dataTable
const employeeTable = $('#employeeDataTable').DataTable({
  "scrollX": true
});

//Initialize general variables and constants
const txtName= document.getElementById('txtName');
const txtEmail= document.getElementById('txtEmail');
const txtLastName = document.getElementById('txtLastName');
const txtAdmissionDate = document.getElementById('txtAdmissionDate');
const txtBirtdate = document.getElementById('txtBirthDate');
const selectEmployment = document.getElementById('selectEmployment');
const txtGender = document.getElementById('txtGender');
const txtNss = document.getElementById('txtNss');
const txtPassword = document.getElementById('txtPassword');
const txtPasswordConfirmation = document.getElementById('txtPasswordConfirmation');
const txtPhone = document.getElementById('txtPhone');
const txtRfc = document.getElementById('txtRfc');
const txtModalTitle = document.getElementById('txtModalTitle');
const inputEmployeePhoto = document.getElementById('inputEmployeePhoto');
const btnSaveemployee = document.getElementById('btnSaveEmployee');
const btnUpdateemployee = document.getElementById('btnUpdateEmployee');

var franchiseId = 0;
var database = initializeFirebase();
var employeesCounter = 0;
var selectedEmployee = null;

//load Initial data
getEmployeeData();

$('#inputEmployeePhoto').change(function () {
	readURL(this);
})

function readURL(input) {
	console.log('entre al input ... \n');
	console.log(input);
	if (input.files && input.files[0]) {
		var reader = new FileReader();

		reader.onload = function (e) {
			$('#imgEmployeePhoto').attr('src', e.target.result);
		}

		reader.readAsDataURL(input.files[0]);
	}
}

//Get employees data from firebase
function getEmployeeData(){
  var ref = database.ref('Employees/' + franchiseId);

  ref.on('value', loadTableData, errDataMessage)
}

//Show error message to the user if you cannot get the data from employees
function errDataMessage(){
  swal('Ocurrió un problema al obtener los datos del Empleado. Favor de contactar al administrador.', {
		icon: 'error',
		dangerMode: true
	});
}

//show a message to the user about the empty document on the database
function emptyDocumentMessage(){
  swal({
    title: 'No has creado Empleados aún, te recomendamos des de alta un Empleado nuevo.',
    type: 'error',
    confirmButtonClass: 'btn btn-succes'
  });
}

//show a message to the user about problems saving the record
function errorSavingMessage(){
  swal({
    title: 'Ocurrió un error al tratar de guardar el Empleado en el sistema, \
          porfavor contacte al administrador del sistema para más información.',
    type: 'error',
    confirmButtonClass: 'btn btn-succes'
  });
}

//Load the data to the employees table from firebase
function loadTableData(data){
  //clear records in the datatable
  employeeTable.clear().draw();
  var drawnRecords = 0;
  employees = data.val();

  //check if the database has data of employees
  if(!employees){
    emptyDocumentMessage();
    return null;
  }

  employeesCounter = employees['Counter'] + 1;

  //Load keys
  var keys = Object.keys(employees);

  for(i = 0; i < keys.length; i++){
    var employeeId = keys[i];

    if(employeeId == "Counter" || !employees[employeeId]["Enabled"]){
      continue;
    }

    drawnRecords++;
    //Fields to add
    var lastName = employees[employeeId]["LastName"];
    var email = employees[employeeId]["Email"];
    var name= employees[employeeId]["Name"];
    var phone = employees[employeeId]["Phone"];
    var franchise = employees[employeeId]["Franchise"];
    var address = employees[employeeId]["Address"];
    var admissionDate = employees[employeeId]["AdmissionDate"];
    var birthdate = employees[employeeId]["Birthdate"];
    var employment = employees[employeeId]["Employment"];
    var gender = employees[employeeId]["Gender"];
    var nss = employees[employeeId]["NSS"];
    var password = employees[employeeId]["Password"];
    var rfc = employees[employeeId]["RFC"];

    employeeTable.row.add({
      0: name,
      1: lastName,
      2: email,
      3: phone,
      4: gender,
      5: franchise,
      6: employment,
      7: address,
      8: admissionDate,
      9: birthdate,
      10: rfc,
      11: nss,
      12: '<a href="#" data-toggle="modal" data-target="#modal-employees" class="btn btn-warning btn-link btn-icon btn-sm edit" onclick="loadEmployeeToForm(`' + employeeId + '`)"><i class="fa fa-edit"></i></a>\
           <a href="#" class="btn btn-danger btn-link btn-icon btn-sm remove" onclick="deleteEmployee(`' + employeeId + '`)"><i class="fa fa-times"></i></a>'
    }).draw();
  }
  if(drawnRecords == 0){
    emptyDocumentMessage();
  }
}

//Get the employee data using the id
function getEmployeeById(id){
  var employeeRef = database.ref('Employees/' + franchiseId + '/' + id);
  return employeeRef;
}

//put the title in the modal whe the user want to add a new record
function setModalTitleToSave(){
  txtModalTitle.innerHTML = "Alta de empleado";
}

//check if the user filled all the form fields
function isFormEmpty(){
  if(txtName.value == '' ||
     txtPhone.value == '' ||
     txtEmail.value == '' ||
     txtNss.value == '' ||
     txtAddress.value == '' ||
     txtAdmissionDate.value == '' ||
     txtBirthdate.value == '' ||
     txtLastName.value == '' ||
     txtNss.value == '' ||
     txtPassword.value == '' ||
     txtRfc.value == '' ||
     selectGender.options[selectGender.selectedIndex].text == '' ||
     selectEmployment.options[selectEmployment.selectedIndex].text == ''
     ){
    swal({
      title: 'Debes llenar todos los campos',
      type: 'error',
      confirmButtonClass: 'btn btn-succes'
    });
    return true
  }
  return false
}

//Update the counter of employees in the database
function updateEmployeeCounter(newCounter){
  var updates = {Counter : newCounter}
  var error = null;
  database.ref('Employees/' + franchiseId).update(updates,function(err){
    error = err;
  });
  return error;
}

//Insert new Record to employees document
function saveEmployee(){
  if(isFormEmpty()){
    return null
  }
  var fileImage = inputEmployeePhoto.files[0];
  if (fileImage)
    var fileImageName = fileImage.name;
  else {
    var fileImageName = '';
  }

  database.ref('Employees/' + franchiseId + '/' + employeesCounter).set({
    Name: txtName.value,
    Phone: txtPhone.value,
    Email: txtEmail.value,
    LastName: txtLastName.value,
    Address: txtAddress.value,
    AdmissionDate: txtAdmissionDate.value,
    Birthdate: txtBirthdate.value,
    NSS: txtNss.value,
    Password: txtPassword.value,
    RFC: txtRfc.value,
    Franchise: franchiseId,
    Gender: selectGender.options[selectGender.selectedIndex].text,
    Employment: selectEmployment.options[selectEmployment.selectedIndex].text,
    Enabled: true
  },function(err){
    if(err){
      errorSavingMessage();
    }else{
      if(updateEmployeeCounter(employeesCounter)){
        errorSavingMessage();
      }else{
        if (fileImage == undefined || fileImage == "" || fileImageName == undefined || fileImageName == "") {

				} else {
					uploadImage(fileImage, fileImageName);
				}
        swal({
          title: 'Empleado guardado exitosamente',
          type: 'success',
          confirmButtonClass: 'btn btn-succes'
        });
      }
    }
  });
}


function uploadImage(imageFile, imageFileName) {
	// Create a root reference
	var storageRef = firebase.storage().ref();
	// Create a reference to 'images/mountains.jpg'
	var attachementImagesRef = storageRef.child('Employees/' + franchiseId+ '/' + imageFileName);
	// Upload the file and metadata
	var uploadTask = storageRef.child(attachementImagesRef.fullPath).put(imageFile);

	uploadTask.on('state_changed', function progress(snapshot) {
		// Get task progress, including the number of bytes uploaded and the total number of bytes to be uploaded
		var progress = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
		console.log('Upload is ' + progress + '% done');
		switch (snapshot.state) {
			case 'paused':
				console.log('Upload is paused');
				break;
			case 'running':
				console.log('Upload is running');
				break;
		}
	},
		function error(error) {
			switch (error.code) {
				case 'storage/unauthorized':
					// User doesn't have permission to access the object
					break;

				case 'storage/canceled':
					// User canceled the upload
					break;
				case 'storage/unknown':
					// Unknown error occurred, inspect error.serverResponse
					break;
			}
		},
		function complete() {
			// Upload completed successfully, now we can get the download URL
			uploadTask.snapshot.ref.getDownloadURL().then(function (downloadURL) {
				console.log('File available at', downloadURL);
				var ref = 'Employees/' + franchiseId + '/'+ (employeesCounter-1);
				const imageRef = firebase.database().ref(ref);
				imageRef.update({
					'ProfilePicture': downloadURL
				});
			});
		});
}

//Get the employee data and prepare the form to contain the data
function loadEmployeeToForm(id){
  selectedEmployee = id;
  btnSaveEmployee.style.display = 'none';
  btnUpdateEmployee.style.display = 'block';
  console.log("im here");

  var employeeRef = getEmployeeById(id);
  employeeRef.once('value',putDataInForm,errDataMessage)
    .then(e => {
      $('#modal-employees').on('hidden.bs.modal', function(e){
        $(this)
          .find("input,textarea,select")
          .val('')
          .end();
        btnSaveEmployee.style.display = 'block';
        btnUpdateEmployee.style.display = 'none';
      });
    });
}

//Put the data in the form
function putDataInForm(data){
  var employee = data.val();
  var employmentOptions = {"Cajero":"1","Cleaner":"2","Gerente":"3","Administrador":"4"}
  var genderIndex = (employee.Franchise == "Masculino") ?  "1" : "2";
  var employmentIndex = employmentOptions[employee.Employment];

  txtName.value= employee.Name;
  txtPhone.value = employee.Phone;
  txtEmail.value = employee.Email;
  txtLastName.value = employee.LastName;
  txtAddress.value = employee.Address;
  txtAdmissionDate.value = employee.AdmissionDate;
  txtBirthdate.value = employee.Birthdate;
  txtNss.value = employee.NSS;
  txtPassword.value = employee.Password;
  txtRfc.value = employee.RFC;
  $('#selectGender').val(genderIndex).trigger('change');
  $('#selectEmployment').val(employmentIndex).trigger('change');
  txtModalTitle.innerHTML = "Actualizar empleado";
}

//Update a record to firebase database
function updateEmployee(){
  if(isFormEmpty()){
    return null;
  }

  var employeeRef = getEmployeeById(selectedEmployee);
  employeeRef.update({
    Name: txtName.value,
    Phone: txtPhone.value,
    Email: txtEmail.value,
    LastName: txtLastName.value,
    Address: txtAddress.value,
    AdmissionDate: txtAdmissionDate.value,
    Birthdate: txtBirthdate.value,
    NSS: txtNss.value,
    LastPassword: txtPassword.value,
    RFC: txtRfc.value,
    Gender: selectGender.options[selectGender.selectedIndex].text,
    Employment: selectEmployment.options[selectEmployment.selectedIndex].text
  },function(err){
    if (err) {
      swal({
        title: 'Ocurrió un error al tratar de guardar el Empleado en el sistema, \
              porfavor contacte al administrador del sistema para más información.',
        type: 'error',
        confirmButtonClass: 'btn btn-succes'
      });
    } else {
      swal({
        title: 'Los cambios se han guardado exitosamente.',
        type: 'success',
        confirmButtonClass: 'btn btn-succes'
      });
    }
  });
}

//Delete a record to firebase database
function deleteEmployee(employeeId){
  var employeeRef = getEmployeeById(employeeId);

  swal({
    title: '¿Estás seguro?',
    text: "Ya no estará disponible en el listado",
    type: 'warning',
    showCancelButton: true,
    confirmButtonClass: 'btn btn-success',
    cancelButtonClass: 'btn btn-danger',
    confirmButtonText: 'Sí',
    cancelButtonText: 'Cancelar',
    buttonsStyling: false
  }).then(function() {
    employeeRef.update({
      Enabled: false
    },function(err){
      if (err) {
        swal({
          title: 'Ocurrió un error al tratar de eliminar el Empleado en el sistema, \
                porfavor contacte al administrador del sistema para más información.',
          type: 'error',
          confirmButtonClass: 'btn btn-succes'
        });
      }
    });
  }).catch(swal.noop);
}

$('.datepicker').datetimepicker({
  format: 'DD/MM/YYYY',
  icons: {
    time: "fa fa-clock-o",
    date: "fa fa-calendar",
    up: "fa fa-chevron-up",
    down: "fa fa-chevron-down",
    previous: 'fa fa-chevron-left',
    next: 'fa fa-chevron-right',
    today: 'fa fa-screenshot',
    clear: 'fa fa-trash',
    close: 'fa fa-remove'
  }
});
