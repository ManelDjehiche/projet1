
<div><br><br><br></div>
<div class="container">
  <div class="row">
    <div class="col">

    <div class="form-group">
    <label for="exampleInputEmail1">Edit <?php  echo $title ; ?></label>
     <?php foreach( $data as $collection ){?>
     
    <input type="email" class="form-control" id="NAME_COLLECTION"  name="NAME_COLLECTION" value="<?php echo $collection['NAME_COLLECTION']?>"  placeholder="Name COLLECTION">
  </div>

   <div class="form-group">
    <label for="exampleInputEmail1">Description</label>
    <input type="text" class="form-control" id="DESCRIPTION_COLLECTION"  name="DESCRIPTION_COLLECTION" value="<?php echo $collection['DESCRIPTION_COLLECTION']?>" placeholder="Description COLLECTION">
    <small id="emailHelp" class="form-text text-muted">required</small>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Button color</label>
    <input type="color"  id="BUTTON_COLLOR_COLLECTION" name="BUTTON_COLLOR_COLLECTION" value="<?php echo $collection['BUTTON_COLLOR_COLLECTION']?>" >
 
  </div>
  
    </div>


     <div class="col">   

  <div class="form-group">
    <label for="exampleInputEmail1">Show header</label>
    <select  class="form-control" name="HEADER_COLLECTION">
    <option value='yes'>Yes</option>
    <option value='no'>no</option>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Background</label>
    <select  class="form-control" name="BACKGROUND_COLLECTION" >
    <option value='image'>image</option>
    <option value='color' selected>color</option>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Blurry image</label>
    <select  class="form-control" name="BLURRY_IMAGE_COLLECTION" >
    <option value='yes'>Yes</option>
    <option value='no' selected>no</option>
    </select>
  </div>

     <?php  } ?>
</div>
 

    
 </div >
 
  <button type="send" class="btn btn-primary">edit</button>

</div>
<div><br><br><br></div>


