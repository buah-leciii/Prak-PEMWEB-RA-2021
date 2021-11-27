<link rel="stylesheet" href="style.css">
<table>
    <tr>
        <th>nama</th>
        <th>nik</th>
        <th>pilih askes</th>
        <th>alamat</th>
        <th>tempat tanggal lahir</th>
        <th></th>
    </tr>
    <?php
        include "database.php";

        $hasil = mysqli_query($kon,"select * from datavaksin");

        while($data = mysqli_fetch_array($hasil)):
            $id =$data['id'];
            $nik = $data['nik'];
            $nama = $data['nama'];
            $faskes =$data['faskes'];
            $ttl = $data["ttl"];
            $alamat = $data["alamat"];
    ?>
        
    <tr>
        <td><?php echo $nama;?></td>
        <td><?php echo $nik;?></td>
        <td><?php echo $faskes;?></td>
        <td><?php echo $alamat;?></td>
        <td><?php echo $ttl;?></td>
        <td>
            <button id="editdata" class="btn btn-primary" value="<?php echo $id?>">edit</button> 
            <button id="deletedata" class="btn btn-danger" value="<?php echo $id?>">delete</button>
        </td>
    </tr>
    <?php endwhile ?>
</table>