



  


 
    $('#editstate').on('change', function(){
       
        var StateID = $('#editstate').val();
       // alert(StateID)
        if(StateID){
            $.ajax({
                url:'ajaxData.php',
                type:'POST',
                    
                data:{
                    stateid : StateID
                },
                success : function(html){
                  //  alert(html);
                   console.log(html);
                    $('#editdist').html(html);
                  

                    }
                 //   $('#dist').html(html);
                 
               
               
            }); 
        }else{
            $('#dist').html('<option value="">Select State first</option>');
        
        }
    });
    


