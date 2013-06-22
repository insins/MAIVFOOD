
$(function(){
    console.log('Application.js up and running');
});

function performAjaxAction(target,userDetails)
{
	console.log(target,userDetails);
    console.log(userDetails.id);

// Eerst checken of de user al in de DB zit

<<<<<<< HEAD
    var baseUrl = "http://localhost/devine/20122013/MAIV/MAIVFOOD/api";

    var details = JSON.stringify({'id':userDetails.id});
    var user_profile = userDetails;
    console.log(details);
=======
    var baseUrl = "http://localhost/20122013/SEMESTER2/MAIV/MAIVFOOD/api";
    var user_profile = new Object({});
    user_profile.id = userDetails.id;
>>>>>>> cc60d3f70e231af9ed0011992b80760e05d28e1e

    $.ajax({
            url : baseUrl + "/user/check",
    		type : 'POST',
            dataType: 'json',
    		data : details,
    		success: function(data){
    		  console.log(data);
    		}, error: function(){
                console.log(arguments);
            }
    });


}