// File: UJEI_wellness_contact.js
// Name: Haemi Lee
// Class: CS 325, January 2022
// Final Project
// Due date: 01/27/2022

// describe contactComment;
// select * from contactComment;
//delete from contactComment where Name = "Bella";

$(document).ready(function() {

    $(".send").click(function() {
        $.ajax({
            url: "UJEI_wellness_contact.php",
            data: {name: $("#name").val(), email: $("#email").val(),
            subject: $("#subject").val(), comment: $("#comment").val()},
            success: processRequest
        })});

    function processRequest(data, status) {
        if(status == "success") {
            // alert(data);
            alert("Submitted Successfully!");
            document.getElementById('name').value='';
            document.getElementById('email').value='';
            document.getElementById('subject').value='';
            document.getElementById('comment').value='';
        } else {
            alert("Error making Ajax request:\n\nServer status:\n" + status);
        }
    }
});