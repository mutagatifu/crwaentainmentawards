

$('form').on('submit', function(){
    event.preventDefault();
    $.ajax(
        'addArtist',{
            type: 'Post'
            data: {"profile": $('#profile').val(), "artistName": $('#artistName'.val(), "name": $('#name').val(), "surname": $('#surname'.val(), "gender": $('gender').val(),
                "category": $('category').val(), "subCategory":$('#subCategory').val(), "email": $('#email').val(),"telephone": $('telephone').val(), "shortDescription": $('#shortDescription').val()
            ) )}
        }
    )
})