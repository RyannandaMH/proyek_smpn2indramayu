<h2>Edit User</h2>

<form action="<?php echo URL; ?>/staffteachers/update" method="post">
    <input type="hidden" name="id" value="<?php echo $data['row']['tenpend_id']; ?>">
    <table>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="nama" value="<?php echo $data['row']['tenpend_nama']; ?>" required></td>
        </tr>
        <tr>
            <td>NIP</td>
            <td><input type="text" name="NIP" value="<?php echo $data['row']['tenpend_nip']; ?>" required></td>
        </tr>
        <tr>
            <td>EMAIL</td>
            <td><input type="email" name="email" value="<?php echo $data['row']['tenpend_email']; ?>" required></td>
        </tr>
        <tr>
            <td>NO TELP</td>
            <td><input type="text" name="no_telp" value="<?php echo $data['row']['tenpend_no_telp']; ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>