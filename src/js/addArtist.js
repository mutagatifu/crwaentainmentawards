$(document).ready(function(){
    $("button").click(function(){
        $.post("addArtist.php",
            {
                profile: "",
                artisName: "",
                firstName: "",
                surName: "",
                gender: "",
                category: "",
                subCategory:"",
                email:"",
                shortDescription:""
            },
            function(data,status){
                alert("Status: " + status);
            });
    });
});

$( "form" ).submit(function( event ) {
    if ( $( "input:profile" ).val() === "profile" ) {
        $( "span" ).text( "Validated..." ).show();
        return;
    }
    if else ( $( "input:artistName" ).val() === "artistName" ) {
        $( "span" ).text( "Validated..." ).show();
        return;
    }
    if else ( $( "input:firstName" ).val() === "firstName" ) {
        $( "span" ).text( "Validated..." ).show();
        return;
    }
    if else ( $( "input:surName" ).val() === "surName" ) {
        $( "span" ).text( "Validated..." ).show();
        return;
    }
    if else ( $( "input:gender" ).val() === "gender" ) {
        $( "span" ).text( "Validated..." ).show();
        return;
    }
    if else  ( $( "input:category" ).val() === "category" ) {
        $( "span" ).text( "Validated..." ).show();
        return;
    }
    if else  ( $( "input:subCategory" ).val() === "subCategory" ) {
        $( "span" ).text( "Validated..." ).show();
        return;
    }
    if else  ( $( "input:email" ).val() === "email" ) {
        $( "span" ).text( "Validated..." ).show();
        return;
    }
    if else  if ( $( "input:shortDescription" ).val() === "shortDescription" ) {
        $( "span" ).text( "Validated..." ).show();
        return;
    }
    $( "span" ).text( "Not valid!" ).show().fadeOut( 1000 );
    event.preventDefault();
});