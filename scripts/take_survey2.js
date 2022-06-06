const current_survey = document.getElementById("CurrentSurveys");
const take_s = document.getElementById("EachSurveys");
clone = take_s.cloneNode(true);
window.addEventListener("load", function() {
    loading();
});
const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);

function loading() {
    var i = 1;
    while (urlParams.getAll(i) != "") {
        var created_survey = urlParams.getAll(i);

        category = created_survey.pop();
        description = created_survey.pop();
        survey_title = created_survey.pop();
        document.getElementById("s_name_cate").innerHTML = survey_title + " | " + category;
        document.getElementById("description").innerHTML = description;
        title = survey_title + ".html";
        var value = "../php/titile_ssesion_store.php?survey_title=" + title;
        var de = document.getElementById("take_survey").setAttribute('href', value);
        clone = take_s.cloneNode(true);
        current_survey.appendChild(clone);
        i++;
    }
}