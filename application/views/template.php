<?php
$this->load->view('templates/header');
?>

<?php

//$title['title']=$title;
//$this->load->view('templates/nav',$title);

?>

<?php

$this->load->view($page,$data);


?>
<?php

$this->load->view('templates/footer');

?>