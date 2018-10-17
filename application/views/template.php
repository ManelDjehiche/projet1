<?php
$this->load->view('templates/header');
?>

<?php

$data['title']=$title;
$this->load->view('templates/nav',$data);

?>

<?php

$this->load->view($page);

?>
<?php

$this->load->view('templates/footer');

?>