jQuery(document).ready(function(){

     function connexion(){
        
        var id = document.getElementById('user').value;
        var mdp = document.getElementById('pwd').value;
        jQuery.ajax({
            type: 'POST',
            url: 'includes/testco.php',
            dataType: 'html',
            data:{
                id:id,
                mdp:mdp
            },
            success: function (data){
                             var verif=data.toString();
                             if(verif=="true"){     
                                 console.log("vous êtes connecté");
                                document.location.href="index.php";
                             }
                }
        }); 
    }
    


    document.getElementById("submit").addEventListener("click", function(){
        connexion();
    });

});