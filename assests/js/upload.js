import './css/upload.css';
import './css/dropzone.css';
import $ from 'jquery';
import Dropzone from 'dropzone';


$('#sanu').click(function () {
    // $("div#myId").dropzone({ url: "/file/post" });
});



$(document).ready(() => {
    Dropzone.options.imgUploader = {
        paramName: "uploadedImg",
        url: 'http://localhost/Back-End-Afterschools/index.php/Uploader',
        maxFilesize: 50,
        dictDefaultMessage: 'Click To Uplod PassPapers and Videos'
    }
    loadSubjects();
    loadSubjects2();
    getYearsForSubject();
})

function loadSubjects(): void {
    $.ajax({
        method: "GET",
        url: "dist/js/al-subject-db.json",
        async: true,
        dataType: "json"
    }).done((response) => {
        let subjects = (response);
        for (let index in subjects) {
            let subject = subjects[index];
            $("#allSubs").append("<option>" + subject.subject + "</option>");
        }

    });
}

function loadSubjects2(): void {
    $.ajax({
        method: "GET",
        url: "dist/js/ol-subject-db.json",
        async: true,
        dataType: "json"
    }).done((response) => {
        let subjects = (response);

        for (let index in subjects) {
            let subject = subjects[index];
            $("#allSubs").append("<option>" + subject.subject + "</option>");
        }
    });
}

function getYearsForSubject():void{
    $.ajax({
        method: "GET",
        url: "http://localhost/Back-End-Afterschools/index.php/Uploader",
        async: true,
        dataType: "json"
    }).done((response) => {
        let subjects = (response);

        for (let index in subjects) {
            let subject = subjects[index];
            // $("#allSubs").append("<option>" + subject.subject + "</option>");
        }
    });
}