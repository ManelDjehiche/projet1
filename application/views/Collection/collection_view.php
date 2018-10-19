  <body>
    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading -->
      <h1 class="my-4">your Collections
        <small>Secondary Text</small>
        <a href="collection/add" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Add collection</a>
      
      </h1>

      <div class="row">
        
       <?php  foreach( $data as $collection){  ?> 
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="<?php echo base_url() ;?>collection/products/<?php echo $collection['ID_COLLECTION'] ?>"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="<?php echo base_url() ;?>collection/products/<?php echo $collection['ID_COLLECTION']?>"><?php echo $collection['NAME_COLLECTION']; ?></a>
              </h4>
              <a onclick="delete_collection('<?php echo $collection['ID_COLLECTION'] ?>')" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Delete</a>
              <a href="<?php echo base_url() ; ?>collection/edit/<?php echo $collection['ID_COLLECTION'] ?>" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Edit</a>


            </div>
          </div>
          
        </div>
       <?php  } ?>
      </div>
      <!-- /.row -->

      <!-- Pagination -->
     

    </div>
    
    
  </body>
  <script>
function delete_collection(id){
alert('Are you sure ?');
var base_url='http://localhost/projet1/';
$.ajax({
  url: base_url+'collection/delete',
  type:'POST',
  data:{'ID_COLLECTION': id},
  success:function(data){
   alert(data);
  },
  error:function(data){
    alert(data.responseText);
  }
});

}

</script>


