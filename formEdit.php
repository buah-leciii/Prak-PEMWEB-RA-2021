<?php
    include "database.php";
    $id = $_GET['id'];
    $query=mysqli_query($kon, "SELECT * FROM datavaksin WHERE id='$id'") or die(mysqli_error($koneksi));
    $data=mysqli_fetch_array($query);
?>
    <div id="formeditdata">
        <form id="form_vaksin_edit" method="POST">
                <input type="hidden" name="id" id="id" value="<?php echo $data['id']; ?>" />
                
                <label class="tulisan">NIK </label>
                <input type="number" name="nik" value="<?php echo $data['nik'];?>"><br>
        
                <label class="tulisan">Nama</label>
                <input type="text" name="nama" value="<?php echo $data['nama'];?>"><br>
    
                <label class="tulisan">Tempat Tanggal Lahir</label>
                <input type="text" name="ttl" value="<?php echo $data['ttl'];?>"><br>
    
                <label class="tulisan">Alamat</label>
                <input type="text" name="alamat" value="<?php echo $data['alamat'];?>"><br>
        
                <label class="tulisan">Pilih Faskes</label>
                <select name="faskes">
                    <option value="halim" <?php if($data['faskes']=="halim" ) echo "selected"; ?>>Puskesmas Way Halim</option>
                    <option value="kandis" <?php if($data['faskes']=="kandis" ) echo "selected"; ?>>Puskesmas Way Kandis</option>
                    <option value="airan" <?php if($data['faskes']=="airan" ) echo "selected"; ?>>RS Airan</option>
                    <option value="advent" <?php if($data['faskes']=="advent" ) echo "selected"; ?>>RS Advent</option>
                    <option value="imanuel" <?php if($data['faskes']=="imanuel" ) echo "selected"; ?>>RS Imanuel</option>
                </select>     
                
                <input type="submit" value="ubah" class="btn btn-success" id="simpanFile">
                <button type="button" id="batalFile" class="btn btn-warning">Batal</button>
        </form>
    </div>
    