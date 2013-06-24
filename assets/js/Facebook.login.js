/**
 * Created with JetBrains PhpStorm.
 * User: martinstycho
 * Date: 27/01/13
 * Time: 12:51
 * To change this template use File | Settings | File Templates.
 */


$(function(){

    userConnected = false;
    setupAPI();

});

function setupAPI(){
    window.fbAsyncInit = (function(){
        // init the FB JS SDK
        FB.init({
            appId      : '616766485000843', // App ID from the App Dashboard
            //channelUrl : '//http://student.howest.be/tycho.martins/20122013/MAIII/RECORD/',
            channelUrl : 'http://localhost/20122013/SEMESTER2/MAIV/MAIVFOOD', // Channel File for x-domain communication
            status     : true, // check the login status upon init?
            cookie     : true, // set sessions cookies to allow your server to access the session?
            xfbml      : true  // parse XFBML tags on this page?,
            // oauth      : true
        });

        // Additional initialization code such as adding Event Listeners goes here

        FB.getLoginStatus(function(response) {
            if (response.status === 'connected') {
                userConnected = true;
                deployFacebook(null);
            } else if (response.status === 'not_authorized') {
                // not_authorized
                console.log('not authorised');
                console.log(response);
                //
            } else {
                // do nothing yet
                console.log('not logged in');
            }
        });

    })();

    $('.actions li:first-child a').click(deployFacebook);
    $('#voteBtns ul li:first-child a').click(deployFacebookShare);
    $('#actios li:last-child a').click(deployFacebook);

    // -------------------------------------------
    // INLOGGEN OP FB + LIKEN
    // -------------------------------------------

function deployFacebook(e){
    if(userConnected == false){
        FB.login(function(response){
            if(response.authResponse !== null){
                fetchUserDetails();
            } else {
                // user closed window?
                console.log('userclosedwindow');
            }

        },{scope: 'email', scope:'publish_stream'});

    } else {
        if(e !== null)fetchUserDetails(e.currentTarget);
    }

    if(e !== null) e.preventDefault();
}

function fetchUserDetails(target){

    FB.api("/me", function(response){
        performAjaxAction(target,response);
    });
}

    // -------------------------------------------
    // VOOR TE SHAREN (EERST INLOGGEN)
    // -------------------------------------------

    function deployFacebookShare(e){
        if(userConnected == false){
            FB.login(function(response){
                if(response.authResponse !== null){
                    fetchUserDetails();
                } else {
                    // user closed window?
                    console.log('userclosedwindow');
                }

            },{scope: 'email'});

        } else {
            if(e !== null)fetchUserDetailsShare(e.currentTarget);
        }

        if(e !== null) e.preventDefault();
    }

    function fetchUserDetailsShare(target){

        FB.api("/me", function(response){
            shareBurgerOnFace(target, response);
        });
    }
}


// PUBLISH THE MESSAGE ON FACEBOOK
function fb_publish(burgerID) {

    var url = "http://localhost/20122013/SEMESTER2/MAIV/MAIVFOOD/index.php?page=detail&burgerId=" + burgerID;

     FB.ui(
       {
         method: 'stream.publish',
         message: 'This one will be BK next burger',
         attachment: {
           name: 'I voted for a burger in the battle of centuries',
           caption: 'This one will be BK next burger',
           description: (
             'Which burger will be the best of all ages and who will win a car?'
           ),
           href: url
         },
         action_links: [
           { text: 'Create a burger yourself', href: 'http://localhost/20122013/SEMESTER2/MAIV/MAIVFOOD/index.php?page=create' }
         ],
         user_prompt_message: 'Create a burger yourself'
       },

       function(response) {
         if (response && response.post_id) {
           console.log('Post was published.');
         } else {
           console.log('Post was not published.');
         }
       }
     );
  }
