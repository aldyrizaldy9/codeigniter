<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Blog Saya</title>
  </head>
  <body>
    <h1>Update Artikel Baru</h1>
    <form action="<?php echo base_url('blog/update_process/' . intval($_GET['id'])); ?>" method="post">
      <label>
        Judul: <input type="text" name="judul" autofocus value=<?php echo $_GET['judul']?>>
      </label>
      <br>
      <label>
        Konten:<br>
        <textarea name="konten" ><?php echo $_GET['konten']?></textarea>
      </label>
      <br>
      <input type="submit" value="Simpan">
    </form>
  </body>
</html>
