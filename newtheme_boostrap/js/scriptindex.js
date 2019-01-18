$(document).ready(function(){
    var id;
        jQuery('a').click(function(){
            id = jQuery(this).attr('id');
            name = jQuery(this).attr('name');
            if(name=="like"){
                jQuery.ajax({
                    type: 'POST',
                    url: 'compterLike.php',
                    data:{
                        id:id,
                    },
                     success: function (){
                         document.location.href="index.php";
                     }

                });
            }
        });
}); 