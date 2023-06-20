<h2>Pelanggan</h2>

<a href="<?php echo URL; ?>/pelanggan/input" class="btn">Tambah Pelanggan</a>

<table>
      <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>ID USERS</th>
            <th>ID GOLONGAN</th>
            <th>OPSI</th>
      </tr>

      <?php foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $row['pel_id']; ?></td>
                  <td><?php echo $row['pel_nama']; ?></td>
                  <td><?php echo $row['pel_id_user']; ?></td>
                  <td><?php echo $row['pel_id_gol']; ?></td>
                  <td>
                  <a href="<?php echo URL; ?>/pelanggan/edit/<?php echo $row['pel_id']; ?>" class="edit">Edit</a>
                  <a href="<?php echo URL; ?>/pelanggan/delete/<?php echo $row['pel_id']; ?>"class="delete">Delete</a>
                  </td>
            </tr>
      <?php } ?>

</table>