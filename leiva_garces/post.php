<?php include('header.php');?>
<section>
<?php
$blog = array_map('str_getcsv', file('data/blog.csv'));
array_walk($blog, function(&$a) use ($blog) {$a = array_combine($blog[0], $a);});
array_shift($blog);
$nro = $_GET['url'];
?>
  <h2><?php echo($blog[$nro]["titulo"])?></h2>
  <p><?php echo($blog[$nro]["bajada"])?></p>
  <img src="<?php echo($blog[$nro]["imagen"])?>" class="img-responsive">
  <p><?php echo($blog[$nro]["cuerpo"])?></p>
</section>
<?php include('footer.php');?>
