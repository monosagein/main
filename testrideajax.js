
 
    $('#SelectState').on('change', function(){
       
        var StateID = $('#SelectState').val();
        //alert(StateID)
        if(StateID){
            $.ajax({
                url:'admin/ajaxData.php',
                type:'POST',
                    
                data:{
                    stateid : StateID
                },
                success : function(html){
                   // alert(html);
                   console.log(html);
                    $('#showDist').html(html);
                  

                    }
                 //   $('#dist').html(html);
                 
               
               
            }); 
        }else{
            $('#showDist').html('<option value="">Select State first</option>');
        
        }
    });