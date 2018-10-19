
<div><br><br><br></div>
<div class="container">
  <div class="row">
    <div class="col-sm">
  <?php foreach($data as $product){ ?>
<form method="post" action="<?php echo base_url()?>products/update">
    <div class="form-group">
    <label for="exampleInputEmail1">Name product</label>
    <input type="email" class="form-control" id="TITLE_PRODUCT"  name="TITLE_PRODUCT" value="<?php echo $product['TITLE_PRODUCT']?>"   value="<?php echo $product['TITLE_PRODUCT']?>" placeholder="Name product">
  </div>

   <div class="form-group">
    <label for="exampleInputEmail1">Description</label>
    <input type="text" class="form-control" id="DESCRIPTION_PRODUCT"  name="DESCRIPTION_PRODUCT"  value="<?php echo $product['DESCRIPTION_PRODUCT']?>"   value="<?php echo $product['TITLE_PRODUCT']?>" placeholder="Description product">
  </div>


  <div class="form-group">
    <label for="exampleInputPassword1">Limit available stock</label>
    <input type="text" class="form-control" id="LIMIT_STOCK_PRODUCT" name="LIMIT_STOCK_PRODUCT"   value="<?php echo $product['LIMIT_STOCK_PRODUCT']?>" placeholder="limit available stock">
 
  </div>

   <div class="form-group">
    <label for="exampleInputPassword1">Discount</label>
    <input type="text" class="form-control" id="DISCOUNT_PRODUCT" name="DISCOUNT_PRODUCT"   value="<?php echo $product['DISCOUNT_PRODUCT']?>" placeholder="Discount">
 
  </div>

   <div class="form-group">
    <label for="exampleInputPassword1">Count down timer</label>
    <input type="date" class="form-control" id="COUNT_DOWN_PRODUCT" name="COUNT_DOWN_PRODUCT" value="<?php echo $product['COUNT_DOWN_PRODUCT']?>" >
 
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Add dilivry fees</label>
    <select  class="form-control" >
    <option value='yes'>Yes</option>
    <option value='no' selected>no</option>
    </select>
 

  </div>



  
    </div>


     <div class="col-sm">   

  <div class="form-group">
    <label for="exampleInputEmail1">Show header</label>
    <select  class="form-control" name="HEADER_PRODUCT">
    <option value='yes'>Yes</option>
    <option value='no' selected>no</option>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Background</label>
    <select  class="form-control" name="BACKGROUND_PRODUCT" >
    <option value='yes'>Yes</option>
    <option value='no' selected>no</option>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Blurry image</label>
    <select  class="form-control" name="BLURRY_IMAGE_PRODUCT" >
    <option value='yes'>Yes</option>
    <option value='no' selected>no</option>
    </select>
  </div>

<div class="form-group">
    <label for="exampleInputPassword1">Order button</label>
    <input type="text" class="form-control" id="ORDER_BUTTON_PRODUCT" name="ORDER_BUTTON_PRODUCT"  value="<?php echo $product['ORDER_BUTTON_PRODUCT']?>" placeholder="limit available stock">
 
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Button color</label>
    <input type="color"  id="COLOR_ORDER_BUTTON_PRODUCT" name="COLOR_ORDER_BUTTON_PRODUCT" value="#ff0000" value="<?php echo $product['COLOR_ORDER_BUTTON_PRODUCT']?>"  >
 
  </div>

<div class="form-group">
    <label for="exampleInputPassword1">Text color </label>
    <input type="color"  id="TEXT_COLOR_PRODUCT" name="TEXT_COLOR_PRODUCT" value="#ffffff" value="<?php echo $product['TEXT_COLOR_PRODUCT']?>"  >
 
  </div>


  <div class="form-group">
    <label for="exampleInputPassword1">Upload image</label>
    <input type="file" class="form-control" id="IMAGE_PRODUCT" name="IMAGE_PRODUCT" > 

  </div>



  

</div>

    <div class="col-sm">    





 <div class="form-group">
    <label for="exampleInputEmail1">Add Option group</label>
    <select  class="form-control" >
    <option value='yes'>Yes</option>
    <option value='no' selected>no</option>
    </select>
 
  </div>

   <div class="form-group">
    <label for="exampleInputPassword1">Amount</label>
    <input type="text" class="form-control" id="COUNT_DOWN_PRODUCT" name="COUNT_DOWN_PRODUCT"   value="<?php echo $product['COUNT_DOWN_PRODUCT']?>" placeholder="limit available stock">
 
  </div>

    <div class="form-group">
    <label for="exampleInputEmail1">Publish your prodyuct page</label>
    <select  class="form-control" name="BLURRY_IMAGE_PRODUCT" >
    <option value='online'>Online</option>
    <option value='offline'>Offline</option>
    </select>
  </div>

  <?php } ?>

  
    </div>
    
 </div >
 
  <button type="submit" class="btn btn-primary">Submit</button>

</form>
</div>
<div><br><br><br></div>


