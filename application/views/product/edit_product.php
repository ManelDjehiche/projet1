<script src="<?php echo base_url()?>assets/jquery/jquery.min.js"></script>

<div><br><br><br></div>
<div class="container">
<?php foreach($data as $products){ ?>

  <div class="row">
    <div class="col-sm">
<form method='post' id="data2">
    <div class="form-group">
    <label for="exampleInputtext1">Name product</label>
    <input type="text" class="form-control" id="TITLE_PRODUCT"  name="TITLE_PRODUCT" value="<?php echo $products['TITLE_PRODUCT']?>">
  </div>

   <div class="form-group">
    <label for="exampleInputtext1">Description</label>
    <input type="text" class="form-control" id="DESCRIPTION_PRODUCT"  name="DESCRIPTION_PRODUCT" value="<?php echo $products['DESCRIPTION_PRODUCT']; ?>" placeholder="Description product">
  </div>


  <div class="form-group">
    <label for="exampleInputPassword1">Limit available stock</label>
    <input type="text" class="form-control" id="LIMIT_STOCK_PRODUCT" name="LIMIT_STOCK_PRODUCT"  value="<?php echo $products['LIMIT_STOCK_PRODUCT']; ?>" placeholder="limit available stock">
 
  </div>

   <div class="form-group">
    <label for="exampleInputPassword1">Price</label>
    <input type="text" class="form-control" id="PRICE_PRODUCT" name="PRICE_PRODUCT" value="<?php echo $products['PRICE_PRODUCT']; ?>" placeholder="Price">
 
  </div>

   <div class="form-group">
    <label for="exampleInputPassword1">Discount</label>
    <input type="text" class="form-control" id="DISCOUNT_PRODUCT" name="DISCOUNT_PRODUCT" value="<?php echo $products['DISCOUNT_PRODUCT']; ?>" placeholder="Discount">
 
  </div>

   <div class="form-group">
    <label for="exampleInputPassword1">Count down timer</label>
    <input type="date" class="form-control" id="COUNT_DOWN_PRODUCT" value="<?php echo $products['COUNT_DOWN_PRODUCT']; ?>" name="COUNT_DOWN_PRODUCT" >
 
  </div>


  <div class="form-group">
    <label for="exampleInputtext1">dilivry fees</label>
    <input type="text" class="form-control" id="FEES_DELIVRY_PRODUCT" value="<?php echo $products['FEES_DELIVRY_PRODUCT']; ?>" name="FEES_DELIVRY_PRODUCT" >
  </select>
 

  </div>



  
    </div>


     <div class="col-sm">   

  <div class="form-group">
    <label for="exampleInputtext1">Show header</label>
    <select  class="form-control" name="HEADER_PRODUCT" id="HEADER_PRODUCT">
    <option value='yes'>Yes</option>
    <option value='no' selected>no</option>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleInputtext1">Background</label>
    <select  class="form-control" name="BACKGROUND" id="BACKGROUND" onchange="changeFunc(value);">
    <option value="" selected>select background type </option>
    <option value='image'>image</option>
    <option value='color'>color</option>
    </select>
  </div>


  <div id="background_color" style="display:none">

<div class="form-group">
    <label for="exampleInputPassword1">Text color </label>
    <input type="color"  id="TEXT_COLOR_PRODUCT" name="TEXT_COLOR_PRODUCT" value="<?php echo $products['TEXT_COLOR_PRODUCT'] ?>" >
</div></div>


  <div id="background_image" style="display:none">

  <div class="form-group">
    <label for="exampleInputtext1">Blurry image background</label>
    <select  class="form-control" name="BLURRY_IMAGE_PRODUCT" id="BLURRY_IMAGE_PRODUCT" >
    <option value='yes'>Yes</option>
    <option value='no' selected>no</option>
    </select>
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Upload image backgound</label>
    <input type="file" class="form-control" id="BACKGROUND_PRODUCT" name="BACKGROUND_PRODUCT">

  </div>

  </div>

  
<div class="form-group">
    <label for="exampleInputPassword1">Order button</label>
    <input type="text" class="form-control" id="ORDER_BUTTON_PRODUCT" name="ORDER_BUTTON_PRODUCT" value="<?php echo $products['ORDER_BUTTON_PRODUCT']; ?>"  placeholder="limit available stock">
 
  </div>


  <div class="form-group">
    <label for="exampleInputPassword1">Button color</label>
    <input type="color"  id="COLOR_ORDER_BUTTON_PRODUCT" name="COLOR_ORDER_BUTTON_PRODUCT" value="<?php  echo $products['COLOR_ORDER_BUTTON_PRODUCT']; ?>" >
 
 
    <label for="exampleInputPassword1"  style="margin-left:140px">Text color </label>
    <input type="color"  id="TEXT_COLOR_PRODUCT" name="TEXT_COLOR_PRODUCT" value="<?php  echo $products['TEXT_COLOR_PRODUCT']; ?>" >
 
  </div>


  


  

</div>

    <div class="col-sm">    

  

    <div class="form-group">
    <label for="exampleInputtext1">Publish your prodyuct page</label>
    <select  class="form-control" name="STATUS_PRODUCT" id="STATUS_PRODUCT" >
    <option value='online'>Online</option>
    <option value='offline'>Offline</option>
    </select>
  </div>

<br>


<div class="form-group">
    <label for="exampleInputPassword1">Upload Product image</label>
    <input type="file" class="form-control" id="IMAGE_PRODUCT" name="IMAGE_PRODUCT">

  </div>


<div class="form-group">
    <label for="exampleInputPassword1">Note client</label>
    <input type="file" class="form-control" id="NOTE_CLIENT_PRODUCT" name="NOTE_CLIENT_PRODUCT">

  </div>
  <div class="form-group">
    <button class="btn btn-primary" id="OPTION_GROUP"> add option group </button>
  </div>


  
    </div>
  <input type='hidden' name="ID_PRODUCT" id="ID_PRODUCT" value="<?php echo $products['ID_PRODUCT'] ?>">

 </div>
  <button type="submit" class="btn btn-success">Edit product</button>
  </form>
<?php  } ?>
  <h5 id="form-message">  </h5>

</div>
<div><br><br><br></div>



<script>

 function changeFunc(value){
  var selectBox = document.getElementById("BACKGROUND").value;
  if( selectBox == 'image'){
    document.getElementById("background_image").style.display = "block";
    document.getElementById("background_color").style.display = "none";
  } 
  if( selectBox == 'color'){
  document.getElementById("background_color").style.display = "block";  
  document.getElementById("background_image").style.display = "none";
}
 }

$(document).ready(function() {
   $("form#data2").submit(function(event){
     
     var id_product=$('#ID_PRODUCT').val();
     var name=$('#TITLE_PRODUCT').val();
     var description=$('#DESCRIPTION_PRODUCT').val();
     var limit_stock=$('#LIMIT_STOCK_PRODUCT').val();
     var discount=$('#DISCOUNT_PRODUCT').val();
     var dilivry_fees=$('#FEES_DELIVRY_PRODUCT').val();
     var count_down=$('#COUNT_DOWN_PRODUCT').val();
     var price=$('#PRICE_PRODUCT').val();
     var note_client=$('NOTE_CLIENT_PRODUCT').val();



     var header=$('#HEADER_PRODUCT  option:selected').val();
     var background=$('#BACKGROUND_PRODUCT').val();
     var blurry_image=$('#BLURRY_IMAGE_PRODUCT  option:selected').val();
     var button_order=$('#ORDER_BUTTON_PRODUCT').val();
     var button_color=$('#COLOR_ORDER_BUTTON_PRODUCT').val();
     var text_color=$('#TEXT_COLLOR_PRODUCT').val();
     var image=$('#IMAGE_PRODUCT').val();
     var status=$('#STATUS_PRODUCT').val();
     event.preventDefault();
  $.ajax({
            url:"<?php echo base_url();?>products/update/",
            type: 'POST',  

            data:{    
                      'ID_PRODUCT': id_product,
                      'TITLE_PRODUCT': name,
                      'DESCRIPTION_PRODUCT': description,
                      'LIMIT_STOCK_PRODUCT':limit_stock,
                      'DISCOUNT_PRODUCT':discount,
                      'PRICE_PRODUCT':price,
                      'NOTE_CLIENT_PRODUCT':note_client,
                      'FEES_DELIVRY_PRODUCT':dilivry_fees,
                      'COUNT_DOWN_PRODUCT':count_down,
                      'HEADER_PRODUCT': header,
                      'BACKGROUND_PRODUCT': background,
                      'BLURRY_IMAGE_PRODUCT': blurry_image,
                      'ORDER_BUTTON_PRODUCT': button_order,
                      'COLOR_ORDER_BUTTON_PRODUCT': button_color,
                      'TEXT_COLLOR_PRODUCT' :text_color,
                      'IMAGE_PRODUCT':'5252525',
                      'STATUS_PRODUCT':status
                  
                      
                 },
            success:function (data) {             
              if(data.result =='yes'){
                $('#form-message').html(data.data);
                var delay = 1000; 
                setTimeout(function(){ window.location = '<?php echo base_url(); ?>products'; }, delay); 

               }if(data.result =='no') $('#form-message').html(data.data);
                    
                
            },
            error:function(data){
              alert(data.responseText);
            }
        });

   });
});
</script>