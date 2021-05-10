var listContainer = document.getElementById('list-text-container');
var listItem = document.getElementById('list-text-item');
var counter = 1;

function addTextField() {
    var proxyElement = document.createElement('div');
    proxyElement.setAttribute('class', 'remove-' + counter)
    proxyElement.innerHTML = listItem.innerHTML;

    listContainer.appendChild(proxyElement);
}

function removeItem(buttonElementId) {
    

    if (listContainer.childElementCount > 1) {
        // return the closets 'div' element whose parent node is an 'li'
        var selectedElement = buttonElementId.closest('li > div');
        selectedElement.remove();
    } else {
        launchAlert();
    }
}

// job-responsabilites-list
function collectJobResponsabilities() {
    var responsabilitiesArray = [];
    var jobResponsabilities = document.getElementsByClassName('job-responsabilites-list');

    for (let element of jobResponsabilities) {
        responsabilitiesArray.push(element.value);
    }

    var jobFormResponsabilities = document.getElementById('job-responsabilities-json');
    jobFormResponsabilities.value = parseToJson(responsabilitiesArray);

    submitForm();
}

function submitForm() {
    var jobPostForm = document.getElementById('job-post-form');
    jobPostForm.submit();
}

function parseToJson(responsabilities) {
    return JSON.stringify(responsabilities);
}

function launchAlert() {
    Swal.fire(
        'Atención',
        'Debe de existir por lo menos una responsabilidad o requerimiento',
        'warning'
    )
}
