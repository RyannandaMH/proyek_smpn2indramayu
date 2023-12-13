<h2>Tenaga Kependidikan</h2>

<a href="<?php echo URL; ?>/staffteachers/input" class="btn">Input Data</a>

<table id="dtb">
      <thead>
            <tr>
                  <th>NO</th>
                  <th>NAMA</th>
                  <th>NIP</th>
                  <th>EMAIL</th>
                  <th>NO TELP</th>
                  <th>STATUS</th>
                  <th>EDIT</th>
                  <th>DELETE</th>
            </tr>
      </thead>
      <tbody>
            <?php $no = 1;
            foreach ($data['rows'] as $row) { ?>
                  <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $row['tenpend_nama']; ?></td>
                        <td><?php echo $row['tenpend_nip']; ?></td>
                        <td><?php echo $row['tenpend_email']; ?></td>
                        <td><?php echo $row['tenpend_no_telp']; ?></td>
                        <td><?php echo $row['tenpend_status']; ?></td>
                        <td><a href="<?php echo URL; ?>/staffteachers/edit/<?php echo $row['tenpend_id']; ?>" class="btn">Edit</a></td>
                        <td><a href="<?php echo URL; ?>/staffteachers/delete/<?php echo $row['tenpend_id']; ?>" class="btn" onclick="return confirm('Are you sure?')">Delete</a></td>
                  </tr>
            <?php $no++;
            } ?>
      </tbody>
</table>