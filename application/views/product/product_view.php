  <body>
    <!-- Navigation -->
    

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading -->
      <h1>
        <a href="<?php echo base_url()?>products/create" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Add product</a>

      </h1>
         
      <div class="row">
      <?php foreach( $data as $products){ ?>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="<?php echo base_url()?>products/edit/<?php echo $products['ID_PRODUCT'] ?>"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="products/edit/<?php echo $products['ID_PRODUCT'] ?>">Edit product</a>
              </h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos quisquam, error quod sed cumque, odio distinctio velit nostrum temporibus necessitatibus et facere atque iure perspiciatis mollitia recusandae vero vel quam!</p>
              <a  href="<?php echo base_url()?>collection/delete/<?php echo $products['ID_PRODUCTS'] ?>" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Delete products</a>

            </div>
          </div>
        </div>
        <?php } ?>
    </div>
       
      <!-- /.row -->

      <!-- Pagination -->
      

    </div>
    
    
  </body>


