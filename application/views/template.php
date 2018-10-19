<?php
$this->load->view('templates/header');
?>

<?php

$this->load->view('templates/nav',$title);
// $this->load->view("templates/header_menu");

?>

<?php

$this->load->view($page,$data);


?>
<?php

$this->load->view('templates/footer');

?>