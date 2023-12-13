<h2>Input User</h2>

<form action="<?php echo URL; ?>/students/save" method="post">
    <table>
        <tr>
            <td>NIS</td>
            <td><input type="text" name="nis" style="display: block; width: 90%;" required></td>
        </tr>
        <tr>
            <td>FULL NAME</td>
            <td><input type="text" name="full_name" style="display: block; width: 90%;" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>