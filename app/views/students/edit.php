<h2>Edit User</h2>

<form action="<?php echo URL; ?>/students/update" method="post">
    <input type="hidden" name="id" value="<?php echo $data['row']['students_id']; ?>">
    <table>
        <tr>
            <td>NIS</td>
            <td><input type="text" name="nis" value="<?php echo $data['row']['students_nis']; ?>" required></td>
        </tr>
        <tr>
            <td>FULL NAME</td>
            <td><input type="text" name="full_name" value="<?php echo $data['row']['students_name']; ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>