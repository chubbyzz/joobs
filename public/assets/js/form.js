$(function(){
    $(".form-ajax").on("submit", function(e){
        e.preventDefault();
        var form = $(this);
        $.ajax({
            url: form.data("action"),
            type: 'POST',
            dataType: "JSON",
            data: form.serialize(),
        }).success(function(rtn) {
            console.log(rtn);
        })
        .error(function() {
           $('body').pgNotification({
                style: "circle",
                title: "Erro inesperado",
                message: "<p>A transação foi cancelada</p>",
                positon: "top-right",
                type: "danger"
           }).show();
        });

    });
});
