<?php include('header.php');?>
<section>
<h2>Reseñas</h2>
<?php
$blog = array_map('str_getcsv', file('data/blog.csv'));
array_walk($blog, function(&$a) use ($blog) {$a = array_combine($blog[0], $a);});
array_shift($blog);
$all = count($blog);
for($n=0; $n < $all; $n++){?>
  <h4><?php echo($blog[$n]["titulo"])?></h4>
  <p><?php echo($blog[$n]["resena_corta"])?> [<a href="post.php?url=<?php print $n;?>">Ver más</a>]</p>
<?php };?>
</section>
<?php include('footer.php');?>
