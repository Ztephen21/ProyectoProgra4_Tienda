
(function()
{     
    $(function()
    {  
        $("#CollaboratorForm").submit(function(e) 
        {   
            e.preventDefault();
                
            $.post("../Negocio/CollaboratorController.php",$("#CollaboratorForm").serialize(),function(result) 
            {
                alert("El resultado es: " + result);              
            });
            
        });  
          
    });
}
())