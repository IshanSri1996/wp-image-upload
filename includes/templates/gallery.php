<h1>Gallery</h1>
<?php $img = get_plugin_options('crb_file');
$image =  wp_get_attachment_image_src($img, 'large'); 
$url = $image[0];?>

<img src="<?php echo $url; ?>" alt="alt desc here" width="500px">