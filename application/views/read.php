<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Blog Saya</title>
  </head>
  <body>
    <h1>Daftar Artikel</h1>
    <?php foreach ($posts as $post): ?>
      <h2><?php echo $post->judul; ?></h2>
      <?php $this->load->helper('url'); ?>
      <p><?php echo $post->konten; ?></p>
      <a href="<?php echo base_url('blog/delete/' . $post->id); ?>">Hapus</a>
      <a href="<?php echo base_url('blog/update/?id='.$post->id.'&judul='.$post->judul.'&konten='.$post->konten); ?>">Edit</a>
    <?php endforeach; ?>
  </body>
</html>
