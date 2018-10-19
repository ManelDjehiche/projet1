<script src="<?php echo base_url()?>assets/jquery/jquery.min.js"></script>

<div><br><br><br></div>
<div class="container">
  <div class="row">
    <div class="col">

    <div class="form-group">
    <label for="exampleInputtext1">Edit <?php  echo $title ; ?></label>
     <?php foreach( $data as $collection ){?>
<form  method='post' id='edit' >  
    <input type="text" class="form-control" id="NAME_COLLECTION"  name="NAME_COLLECTION" value="<?php echo $collection['NAME_COLLECTION']?>"  placeholder="Name COLLECTION">
  </div>

   <div class="form-group">
    <label for="exampleInputtext1">Description</label>
    <input type="text" class="form-control" id="DESCRIPTION_COLLECTION"  name="DESCRIPTION_COLLECTION" value="<?php echo $collection['DESCRIPTION_COLLECTION']?>" placeholder="Description COLLECTION">
    <small id="textHelp" class="form-text text-muted">required</small>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Button color</label>
    <input type="color"  id="BUTTON_COLLOR_COLLECTION" name="BUTTON_COLLOR_COLLECTION" value="<?php echo $collection['BUTTON_COLLOR_COLLECTION']?>" >
 
  </div>
  
    </div>


     <div class="col">   

  <div class="form-group">
    <label for="exampleInputtext1">Show header</label>
    <select  class="form-control" name="HEADER_COLLECTION">
    <option value='yes'>Yes</option>
    <option value='no'>no</option>
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

     <?php  } ?>

</div>
 

    
 </div >
 <input type='hidden' name="ID_COLLECTION" id="ID_COLLECTION" value="<?php echo $collection['ID_COLLECTION'] ?>">

  <button type="submit" class="btn btn-primary">Edit</button>
  </form>
  <h5 id="form-message">  </h5>


</div>
<div><br><br><br></div>


<script>
$(document).ready(function() {
   $("form#edit").submit(function(event){
     var name=$('#NAME_COLLECTION').val();
     var id_collection=$('#ID_COLLECTION').val();
     var description=$('#DESCRIPTION_COLLECTION').val();
     var header=$('#HEADER_COLLECTION').val();
     var background=$('#BACKGROUND_COLLECTION').val();
     var blurry_image=$('#BLURRY_IMAGE_COLLECTION').val();
     var button_color=$('#BUTTON_COLLOR_COLLECTION').val();
     event.preventDefault();

  $.ajax({
            url:"<?php echo base_url();?>collection/update",
            type: 'POST',  
            data:{    'NAME_COLLECTION': name,
                      'ID_COLLECTION': id_collection,
                      'DESCRIPTION_COLLECTION': description,
                      'HEADER_COLLECTION': header,
                      'BACKGROUND_COLLECTION': background,
                      'BLURRY_IMAGE_COLLECTION': blurry_image,
                      'BUTTON_COLLOR_COLLECTION': button_color
                 },
            success:function (data) {             
                $('#form-message').html(data);
            },
            error:function(data){
              alert(data.responseText);
            }
        });

   });
});
</script>
