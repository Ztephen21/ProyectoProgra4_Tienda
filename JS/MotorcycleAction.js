(function()
{     
    $(function()
    {  
        $("#MotorcycleForm").submit(function(e) 
        {   
            e.preventDefault();
                
            $.post("../Negocio/MotorcycleController.php",$("#MotorcycleForm").serialize(),function(result) 
            {
                alert("El resultado es: " + result);              
            });
            
        });  
          
    });
}
())