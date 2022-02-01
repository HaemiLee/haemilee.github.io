// File: UJEI_wellness_main.js
// Name: Haemi Lee
// Class: CS 325, January 2022
// Final Project
// Due date: 01/27/2022

$(document).ready(function() {

    $(".next").click(function() {
        $.ajax({
            url: "UJEI_wellness_main.php",
            data: {galleryNum: $("#galleryNum").val()},
            success: processRequest
        })});

    function processRequest(data, status) {
        if(status == "success") {
            // alert(data);
            $("#next_img").attr("src", data);
        } else {
            alert("Error making Ajax request:\n\nServer status:\n" + status);
        }
    }
});