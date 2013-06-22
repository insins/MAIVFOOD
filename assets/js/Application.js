
$(function(){
    console.log('Application.js up and running');
});

function performAjaxAction(target,userDetails)
{
	console.log(target,userDetails);
    console.log(userDetails.id);

// Eerst checken of de user al in de DB zit

    var details = JSON.stringify({'id':userDetails.id});
    var user_profile = userDetails;
    console.log(details);

    var api = new Api("tychozijnawesomeapiominestehelpen");
    
    api.post('/user/checkExistance',{ id : userDetails.id}, function(result, error){
        console.log(result, error);
    });

}

var Api = function(name){
    this.name = name;
};
Api.prototype = (function(){

    var baseUrl = "http://localhost:8888/devine/20122013/MAIV/MAIVFOOD/api";

    var get = function(callString, responseHandler){
        $.ajax({
            url : baseUrl + callString,
            type : 'get',
            success : function(data){
                responseHandler(data,null);
            }, error : function(){
                responseHandler(null,arguments);
            }
        });
    };

    var post = function(callString, params, responseHandler){
        $.ajax({
            url : baseUrl + callString,
            type : 'post',
            data : params,
            success : function(data){
                responseHandler(data,null);
            }, error : function(){
                responseHandler(null,arguments);
            }
        });
    };

    return {

        get : get,
        post : post

    }

})();