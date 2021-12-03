<table border=2>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Prodi</th>
            <th>Angkatan</th>
            <th>Operation</th>
        </tr>

        <?php
        include "connect.php";


        $hasil=mysqli_query($conn,"select * from data_mahasiswa");
        $no=0;
        while ($data = mysqli_fetch_array($hasil)):
            $no++;
        ?>
        
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $data['NIM']; ?></td>
            <td><?php echo $data['Nama']; ?></td>
            <td><?php echo $data['Prodi']; ?></td>
            <td><?php echo $data['Angkatan']; ?></td>
            <td>
                <button id="btn_update" value="<?php echo $data['NIM']; ?>">Edit</button>
                <button id="btn_delete" value="<?php echo $data['NIM']; ?>">Delete</button>
        </tr>
            <?php endwhile;?>
