
$(function(){
    console.log('Application.js up and running');
});

function shareBurgerOnFace(target,userDetails){
        // Burger ID
    var click = new Object({});
    click.href = target.href;
    url = click.href.toString();
    url = url.split('/');
    var burger_id = url.reverse()[0];

    fb_publish(burger_id);

}

function performAjaxAction(target,userDetails)
{
	console.log(target,userDetails);
    console.log(userDetails.id);

    // ----------------------------------------
    // Eerst checken of de user al in de DB zit
    // ----------------------------------------

    // User gegevens
    var details = new Object({});
    details.id = userDetails.id;
    details.last_name = userDetails.last_name;
    details.first_name = userDetails.first_name;
    details.email = userDetails.email;

    // Burger ID
    var click = new Object({});
    click.href = target.href;
    url = click.href.toString();
    url = url.split('/');
    var burger_id = url.reverse()[0];

    // API aanmaken
    var api = new Api("tychozijnawesomeapiominestehelpen");

    // ----------------------------------------
    // User checken of hij bestaat in de db
    // Indien niet wordt hij toegevoegd in de db
    // ----------------------------------------
    api.post('/user/checkExistance',details, function(result, error){

        if (result == "error"){

            // Error melding

        }
        else{

            // ----------------------------------------
            // Als er geen error bestaat doorgaan naar like proces
            // ----------------------------------------

            // user ID uithalen
            resultaat = result.toString();
            resultaat = result.split('"');
            var user_id = resultaat.reverse()[1];

            // URL samenstellen
            var likeUrl = "/like/check?userID=" + user_id + "&burgerID=" + burger_id;

            // ----------------------------------------
            // De like checken of hij al bestaat
            // En anders toevoegen in de DB
            // ----------------------------------------
            api.get(likeUrl,function(result, error){

                if(result == "errorAlreadyLiked"){
                    // Hier geef je dan een error message mee dat de user de burger al heeft geliked
                }
                else if(result == "gelukt"){
                    // De like is met succes in de DB gestoken
                    // Nu moeten we de page enkel refreshen zodat we de likes kunnen updaten
                    location.reload();
                }

            })
        }
    });

}
var Api = function(name){
    this.name = name;
};

Api.prototype = (function(){

    var baseUrl = "http://localhost/20122013/SEMESTER2/MAIV/MAIVFOOD/api";

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