<a href="index.php"> input lagi</a>
<table border="3">
    <thead>   
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Prodi</th>
            <th>Angkatan</th>
            <th>Action</th>
        </tr>
    </thead>

    <?php
    include "koneksi.php";
    $hasil=mysqli_query($kon,"select * from data order by nim asc");
    $no = 0;
    while ($data = mysqli_fetch_array($hasil)):
        $no++;
    ?>

    <tr>
        <td><?php echo $no;?></td>
        <td><?php echo $data['nim']; ?></td>
        <td><?php echo $data['nama']; ?></td>
        <td><?php echo $data['prodi']; ?></td>
        <td><?php echo $data['angkatan']; ?></td>
    <td><a href="edit.php?nim=<?php echo $data['nim'];?>" >edit</a>|<a href="delete.php?nim=<?php echo $data['nim'];?>" onClick = "return confirm('Apakah Anda ingin mengapus  <?php echo $data['nama']; ?>?')" >delete</a></td>
    </tr>
    <?php endwhile; ?>
</table>