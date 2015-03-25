$(function(){
    $(document).ready(function(){
        $.each(notifications,function(i, option){
            delete option.__pronto__
            console.log(option);
            $('body').pgNotification(option).show();
        });
    });
});
