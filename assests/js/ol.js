import './css/ol.css';
import './css/loader.css'

import $ from 'jquery';

$("#cmbQualification").change(()=>{

    loadSubjects();

});

$(document).ready(()=>{
    loadSubjects();
})

function loadSubjects(){
    $("#loader-container").removeClass("hide");
    $("#ulQualifications").addClass("hide");

    $.ajax({
        method:"GET",
        url:"dist/js/ol-subject-db.json",
        async:true,
        dataType: "json"
    }).done((response)=>{

        $("#loader-container").addClass("hide");
        $("#ulQualifications").removeClass("hide");
        let subjects = (response);

        $("#ulQualifications li").remove();

        for(let index in subjects){
            let subject = subjects[index];

            if ($("#cmbQualification").val() == "all"){
                $("#ulQualifications").append("<li><a href='ol-subject-template.html'>" +  subject.subject + "</a></li>");
            }else{
                if (subject.tag === $("#cmbQualification").val()){
                    $("#ulQualifications").append("<li><a href='ol-subject-template.html'>" +  subject.subject + "</a></li>");
                }
            }
        }

    });
}
