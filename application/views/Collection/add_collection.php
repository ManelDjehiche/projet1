
<div><br><br><br></div>
<script src="<?php echo base_url()?>assets/jquery/jquery.min.js"></script>


<div class="container">
  <div class="row">
    <div class="col-sm">
<form id="data">
    <div class="form-group">
    <label for="exampleInputtext1">Name Collection</label>
    <input type="text" class="form-control" id="NAME_COLLECTION"  name="NAME_COLLECTION" placeholder="Name COLLECTION">
  
  </div>

   <div class="form-group">
    <label for="exampleInputtext1">Description</label>
    <input type="text" class="form-control" id="DESCRIPTION_COLLECTION"  name="DESCRIPTION_COLLECTION" placeholder="Description COLLECTION">
  
  </div>


  
    </div>


     <div class="col-sm">   

  <div class="form-group">
    <label for="exampleInputtext1">Show header</label>
    <select  class="form-control" name="HEADER_COLLECTION">
    <option value='yes'>Yes</option>
    <option value='no' selected>no</option>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleInputtext1">Background</label>
    <select  class="form-control" name="BACKGROUND_COLLECTION" >
    <option value='image'>image</option>
    <option value='color' selected>color</option>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleInputtext1">Blurry image</label>
    <select  class="form-control" name="BLURRY_IMAGE_COLLECTION" >
    <option value='yes'>Yes</option>
    <option value='no' selected>no</option>
    </select>
  </div>






  

</div>

    <div class="col-sm">    





 <div class="form-group">
    <label for="exampleInputtext1">Add product</label>
    <select  class="form-control" >
    <option value='yes'>Yes</option>
    <option value='no' selected>no</option>
    </select>
 
  </div>

  
  <div class="form-group">
    <label for="exampleInputPassword1">Button color</label>
    <input type="color"  id="BUTTON_COLLOR_COLLECTION" name="BUTTON_COLLOR_COLLECTION" value="#ff0000" >
 
  </div>

  
    </div>
    
 </div >

  <button type="submit" class="btn btn-primary">Save</button>
  <h5 id="form-message"></h5>
  <br>
  
</form>
</div>
<div><br><br><br></div>

<script>
$(document).ready(function() {
    $("form#data").submit(function(event){
     var name=$('#NAME_COLLECTION').val();
     var description=$('#DESCRIPTION_COLLECTION').val();
     var header=$('#HEADER_COLLECTION').val();
     var background=$('#BACKGROUND_COLLECTION').val();
     var blurry_image=$('#BLURRY_IMAGE_COLLECTION').val();
     var button_color=$('#BUTTON_COLLOR_COLLECTION').val();
     event.preventDefault();
  $.ajax({
            url:"<?php echo base_url();?>collection/create",
            type: 'POST',  
            data:{    'NAME_COLLECTION': name,
                      'DESCRIPTION_COLLECTION': description,
                      'HEADER_COLLECTION': header,
                      'BACKGROUND_COLLECTION': background,
                      'BLURRY_IMAGE_COLLECTION': blurry_image,
                      'BUTTON_COLLOR_COLLECTION': button_color
                 },
            success:function (data) { 
                
               
                if(data.result =='yes'){
                $('#form-message').html(data.data);
                var delay = 1000; 
                setTimeout(function(){ window.location = '<?php echo base_url(); ?>collection'; }, delay); 

               }if(data.result =='no') $('#form-message').html(data.data);
                             
               },
                error:function(data){
              alert(data.responseText);
            }
        });

   });
});


</script>
