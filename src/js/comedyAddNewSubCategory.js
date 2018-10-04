$("form").on("submit", function(e) {
    event.preventDefault();
    var  form = $(this);
    $.ajax($("form").attr("action"),{
        type: "post",
        contentType: "application/json",
        data: form.serialize(),
        success: function(result) {
            form.remove();
            var msg = $ ("<input type="text">");
            msg.append("newSubCategory: " + result.newSubCategory + ". ");
            msg.append("confirmation: " + );
        }
    })
})