
$(function(){
    console.log('Application.js up and running');
});

function performAjaxAction(target,userDetails)
{
	console.log(target,userDetails);
    console.log(userDetails.id);

// Eerst checken of de user al in de DB zit

    var baseUrl = "http://localhost/20122013/SEMESTER2/MAIV/MAIVFOOD/api";


    var user_profile = userDetails;

    $.ajax({
            url : baseUrl + "/user/check",
    		type : 'POST',
            dataType: 'json',
    		data : user_profile,
    		success: function(data){
    		console.log(data);
    		}, error: function(){
                console.log(arguments);
            }
    });


}