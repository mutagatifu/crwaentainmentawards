$(function(){
    //insert new artist
    $.ajax({
        type: 'POST',
        url: "addArtist.php",

        $('#insert').click(function () {
        var art_profile = $('#profile').val();
        var art_nick_name = $('#nickname').val();
        var fname = $('#fname').val();
        var lName = $('#lName').val();
        var gender = $('#gender').val();
        var category = $('#category').val();
        var subCategory = $('#subCategory').val();
        var art_Email = $('#email').val();
        var phoneNumber = $('#phoneNumb').val();
        var shortDesc = $('#shortDesc').val();

        /*alert(gender)*/

        //syntax - $.post('filename', {data}, function(response){});
        $.post('addArtist.php', {
            action: "insert",
            profile: art_profile,
            nickname: art_nick_name,
            fname: fname,
            lName: lName,
            gender: gender,
            category: category,
            subCategory: subCategory,
            subCategory,
            email: art_Email,
            phoneNumb: phoneNumber,
            shortDesc: shortDesc
        }, function (res) {
            $('#send').html(res);
        });
    });
});