$('document').ready(function() {

    $('#open_mod').click(function() {
        $('#sin_form').removeClass("d-none");
        $('#sup_form').addClass("d-none");
        $('#sin').addClass("d-none");
        $('#sup').removeClass("d-none");
        $('#exampleModalLabel').text("Login to LeafBerri");
    });
    $('#sup').click(function() {
        $('#sin_form').addClass("d-none");
        $('#sup_form').removeClass("d-none");
        $('#sin').removeClass("d-none");
        $('#sup').addClass("d-none");
        $('#exampleModalLabel').text("SignUp with LeafBerri");

    });
    $('#sin').click(function() {
        $('#sin_form').removeClass("d-none");
        $('#sup_form').addClass("d-none");
        $('#sin').addClass("d-none");
        $('#sup').removeClass("d-none");
        $('#exampleModalLabel').text("Login to LeafBerri");

    });


});