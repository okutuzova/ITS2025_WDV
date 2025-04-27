<?php 
define('TITLE', 'Welcome to my PHP Website'); 
?>
<?php include 'head_page.php'; ?>



<!-- <h1><?php echo TITLE; ?></h1> -->

<h1><?= TITLE ?></h1>

<p>Today is <?= date('d/m/Y')?></p>
<p>Current time is <?= date('h:i:s')?></p>

<?php $subject = 'PHP Programming'; ?>

<h2><?= $subject ?></h2>

<?php $subject = 'DATABASE'; ?>

<h2><?= $subject ?></h2>




<?php 

echo __FILE__ .'<br>'; // says in which file we are
echo __LINE__ .'<br>'; // says in which line we are

?>

<?php include 'footer_page.php'; ?>