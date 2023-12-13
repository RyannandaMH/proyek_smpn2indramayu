<h2>Users</h2>

<a href="<?php echo URL; ?>/students/input" class="btn">Input Siswa</a>

<table>
      <thead>
            <tr>
                  <th>NO</th>
                  <th>NIS</th>
                  <th>FULL NAME</th>
                  <th>UPDATE AT</th>
                  <th>ACTION</th>
            </tr>      
      </thead>
      <tbody>
            <?php $no = 1;
            foreach ($data['rows'] as $row) { ?>
                  <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $row['students_nis']; ?></td>
                        <td><?php echo $row['students_name']; ?></td>
                        <td><?php echo $row['updated_at']; ?></td>
                        <td>
                              <a href="<?php echo URL; ?>/students/edit/<?php echo $row['students_id']; ?>" class="btn">Edit</a>
                              <a href="<?php echo URL; ?>/students/delete/<?php echo $row['students_id']; ?>" class="btn" onclick="return confirm('Are you sure?')">Delete</a>
                        </td>
                  </tr>
            <?php $no++;
            } ?>
      </tbody>

      

</table>