
(function()
{     
    $(function()
    {  
        $("#ArticleForm").submit(function(e) 
        {   
            e.preventDefault();
                
            $.post("../Negocio/ArticleController.php",$("#ArticleForm").serialize(),function(result) 
            {
                console.log("El resultado es: " + result);              
            });
            
        });  



         $("#ArticleForm2").submit(function(e) 
        {   
            e.preventDefault();
                
            $.post("../Negocio/ArticleController.php",$("#ArticleForm2").serialize(),function(result) 
            {
                console.log("El resultado es: " + result);              
            });
            
        });  
          
    });


    function deleteArticle()
    {

        $.post("../Negocio/ArticleController.php",
        {
            id :document.getElementById('id').value,   
                  
        },
        function(result){


             console.log("El resultado eliminado es: " + result);  

        } );
    }


    $(document).ready(function()
    {
 $.post("../Negocio/ArticleController.php",
        {
           show:"",  
                  
        },
        function(result){


             console.log("El resultado eliminado es: " + result);  

        } );


    });

}
())