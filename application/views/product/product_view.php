  <body>
    <!-- Navigation -->
    

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading -->
      <h1 class="my-4">All Products
        <small>Secondary Text</small>
        <a href="<?php echo base_url()?>products/add" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Add product</a>
      
      </h1>

      <div class="row">
      <?php foreach( $data as $products){ ?>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="<?php echo base_url()?>products/edit/<?php echo $products['ID_PRODUCT'] ?>"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="products/edit/<?php echo $products['ID_PRODUCT'] ?>"><?php echo $products['TITLE_PRODUCT'] ?></a>
              </h4>
              <a onclick="delete_product('<?php echo $products['ID_PRODUCT'] ?>')" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Delete</a>
              <a href="<?php echo base_url() ; ?>products/edit/<?php echo $products['ID_PRODUCT'] ?>" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Edit</a>

            </div>
          </div>
        </div>
        <?php } ?>
    </div>
       
      <!-- /.row -->

      <!-- Pagination -->
      

    </div>
    
    
  </body>
<script>
function delete_product(id){
alert('Are you sure ?');
var base_url='http://localhost/projet1/';
$.ajax({
  url: base_url+'products/delete',
  type:'POST',
  data:{'ID_PRODUCT': id},
  success:function(data){
   var delay = 0; 
  setTimeout(function(){ window.location = '<?php echo base_url(); ?>products'; }, delay); 
  },
  error:function(data){
    alert(data.responseText);
  }
});


}

</script>

