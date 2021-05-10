var httpRequest;
var jsonResponse;
var jobValuesArray;
// Spinner element
var spinnerElement = document.getElementById('spinner-element');
// Form elements
var jobTitleField = document.getElementById('job_title');
var responsabilityContiner = document.getElementById('responsability-list-container');
var jobTitleModalField = document.getElementById('modal-job-title');
var jobExperienceField = document.getElementById('job_experience');
var jobEducationField = document.getElementById('job_education');

function makeRequest(jobPostId) {
    httpRequest = new XMLHttpRequest();

    jobTitleField.innerHTML = spinnerElement.innerHTML;
    responsabilityContiner.innerHTML = spinnerElement.innerHTML;
    jobTitleModalField.value = spinnerElement.innerHTML;
    jobExperienceField.innerHTML = spinnerElement.innerHTML;
    jobEducationField.innerHTML = spinnerElement.innerHTML;

    httpRequest.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("demo").innerHTML = this.responseText;
            jsonResponse = JSON.parse(this.responseText);
            jobValuesArray = jsonResponse[0];

            addResponsabilities(jobValuesArray.job_responsabilities);
            setValuesToFormFields(jobValuesArray);
        }
    };

    httpRequest.open('GET', '/get-job-post/' + jobPostId, true);
    httpRequest.send();
}

function setValuesToFormFields(jobValuesArray) {
    jobTitleField.innerHTML = jobValuesArray['job_title'];
    jobTitleModalField.value = jobValuesArray['job_title'];
    jobExperienceField.innerHTML = jobValuesArray['job_experience'];
    jobEducationField.innerHTML = jobValuesArray['job_education'];
}

function addResponsabilities(responsabilityList) {    
    responsabilityList = JSON.parse(responsabilityList);
    responsabilityContiner.innerHTML = '';

    for (let i = 0; i < responsabilityList.length; i++) {
        var responsabilityItem = document.createElement('li');

        responsabilityItem.classList.add('list-group-item', 'dark-list-group');

        responsabilityItem.innerHTML = responsabilityList[i];
        responsabilityContiner.appendChild(responsabilityItem);
    }
}
