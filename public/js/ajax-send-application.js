var waitingModalContent = document.getElementById('waiting-modal');
var finishedModalContent = document.getElementById('finished-modal');
var formModalContent = document.getElementById('form-modal');

function sendFormData(e) {
    var formElement = document.getElementById('application-form');
    var formData = new FormData(formElement);

    httpRequest = new XMLHttpRequest();

    console.log(formData);
    httpRequest.open('POST', '/send', true);

    httpRequest.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            console.log("Making request");
            // change modal content after the request is finished
            hideModalContent(waitingModalContent);
            displayModalContent(formModalContent);
            launchSuccessAlert();
        }

        if (this.status != 200) {
            console.log("Handling error");
            // change modal content after the request is finished
            hideModalContent(waitingModalContent);
            displayModalContent(formModalContent);
            launchErrorAlert();
        }
    };
    
    httpRequest.send(formData);

    // change modal content while the request is done
    hideModalContent(formModalContent);
    displayModalContent(waitingModalContent);
    // prevent redirect after form is sent
    e.preventDefault();
}

function launchSuccessAlert() {
    Swal.fire(
        'Hemos recibido su aplicación para la vacante',
        'Por favor revise su bandeja de entrada',
        'success'
    )
}

function launchErrorAlert() {
    Swal.fire(
        'Hubo un error al recibir su información',
        'Recargue la página e intente de nuevo',
        'error'
    )
}

function displayModalContent(elementToDisplay) {
    elementToDisplay.classList.remove('d-none');
}

function hideModalContent(elementToHide) {
    elementToHide.classList.add('d-none');
}
