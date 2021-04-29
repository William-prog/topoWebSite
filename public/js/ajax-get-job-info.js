var httpRequest;
var jsonResponse;
var jobValuesArray;

function makeRequest(jobPostId) {
    httpRequest = new XMLHttpRequest();

    httpRequest.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("demo").innerHTML = this.responseText;            
            jsonResponse = JSON.parse(this.responseText);
            jobValuesArray = jsonResponse[0];

            setValuesToFormFields(jobValuesArray);
        }
    };

    httpRequest.open('GET', '/get-job-post/' + jobPostId, true);
    httpRequest.send();
}

function setValuesToFormFields(jobValuesArray) {
    var jobTitleField = document.getElementById('job_title');
    var jobExperienceField = document.getElementById('job_experience');
    var jobEducationField = document.getElementById('job_education');

    jobTitleField.innerHTML = jobValuesArray['job_title'];
    jobExperienceField.innerHTML = jobValuesArray['job_experience'];
    jobEducationField.innerHTML = jobValuesArray['job_education'];
}