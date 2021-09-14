function modalActive(data_view_remove, data_view_active) {
    $(data_view_remove).removeClass('active');
    $(data_view_active).addClass('active');
}

$(function(){
    $('.accept-cookies').click(function(){
        $('#cookie-disclaimer').hide();
    });

    $('.page-burger').click( function() {
        $('.main-menu-overlay').toggleClass('open');
        $('.main-menu-content').toggleClass('open');
    });

    $('.toggle-account-modal').click( function() {
        $('body').toggleClass('modal-open');
    });

    $('.create-account').click( function() {
        modalActive('.my-account-gateway', '.my-account-teamup');
    });

    $('.modal__back-button').click( function(){
        modalActive( '.my-account-teamup', '.my-account-gateway' );
    })

});