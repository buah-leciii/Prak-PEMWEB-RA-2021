<html>
    <head>
        <script type="text/javascript" src="jquery-3.5.1.min.js"></script>
    </head>
    <body>
        <form method="post" action="tambah.php" >
            <legend><b>---------DATA MAHASISWA---------</b></legend><br>
            <label>NIM : </label>
            <input type="number" name="nim"><br><br>
            <label>Nama : </label>
            <input type="text" name="nama"><br><br>
            <label>Prodi : </label>
            <select name="prodi">
                <option value="IF">Teknik Informatika</option>
                <option value="ARS">Arsitektur</option>
                <option value="PWK">Perencanaan Wilayah dan Kota</option>
                <option value="EL">Teknik Elektro</option>
                <option value="TL">Teknik Lingkungan</option>
            </select><br><br>
            <label>Angkatan : </label>
            <input type="number" name="angkatan"><br><br>
            <p> <input type="submit" name="simpan" value="simpan"></p>
        </form>
    </body>
</html>