
(function()
{     
    $(function()
    {  
        $("#ClientForm").submit(function(e) 
        {   
            e.preventDefault();
                
            $.post("../Negocio/ClientController.php",$("#ClientForm").serialize(),function(result) 
            {
                alert("El resultado es: " + result);              
            });
            
        });  
          
    });
}
())