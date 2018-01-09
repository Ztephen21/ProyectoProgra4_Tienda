
(function()
{     
    $(function()
    {  
        $("#ArticleForm").submit(function(e) 
        {   
            e.preventDefault();
                
            $.post("../Negocio/ArticleController.php",$("#ArticleForm").serialize(),function(result) 
            {
                alert("El resultado es: " + result);              
            });
            
        });  
          
    });
}
())