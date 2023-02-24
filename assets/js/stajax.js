



  


 
    $('#State').on('change', function(){
       
        var StateID = $('#State').val();
        //alert(StateID)
        if(StateID){
            $.ajax({
                url:'admin/ajaxData.php',
                type:'POST',
                    
                data:{
                    stateid : StateID
                },
                success : function(html){
                    //alert(html);
                   console.log(html);
                    $('#dist').html(html);
                  

                    }
                 //   $('#dist').html(html);
                 
               
               
            }); 
        }else{
            $('#dist').html('<option value="">Select State first</option>');
        
        }
    });
    


