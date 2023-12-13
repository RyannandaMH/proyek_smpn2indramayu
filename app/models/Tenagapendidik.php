<?php

namespace App\Models;

use App\Core\Model;

class Tenagapendidik extends Model
{

      public function show()
      {
            $query = "SELECT * FROM tb_tenpend";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
      }

      public function save ()
      {
            $nama = $_POST['nama'];
            $nip = $_POST['NIP'];
            $email = $_POST['email'];
            $no_telp = $_POST['no_telp'];
            $status = $_POST['status '];

            $sql = "INSERT INTO tb_tenpend
            SET tenpend_nama=:tenpend_nama, tenpend_nip=:tenpend_nip, tenpend_email=:tenpend_email, tenpend_no_telp=:tenpend_no_telp, tenpend_status='Tenaga Kependidikan'";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":tenpend_nama", $nama);
            $stmt->bindParam(":tenpend_nip", $nip);
            $stmt->bindParam(":tenpend_email", $email);
            $stmt->bindParam(":tenpend_no_telp", $no_telp);

            $stmt->execute();
      }

      public function edit($id)
      {
            $query = "SELECT * FROM tb_tenpend WHERE tenpend_id=:tenpend_id";
            $stmt = $this->db->prepare($query);

            $stmt->bindParam(":tenpend_id", $id);
            $stmt->execute();

            return $this->select($stmt);
      }

      public function update()
      {
            $id = $_POST['id'];
            $nama = $_POST['nama'];
            $nip = $_POST['NIP'];
            $email = $_POST['email'];
            $no_telp = $_POST['no_telp'];

            if (!empty($nip)) {
                  $sql = "UPDATE tb_tenpend
                  SET  tenpend_nama=:tenpend_nama, tenpend_nip=:tenpend_nip, tenpend_email=:tenpend_email, tenpend_no_telp=:tenpend_no_telp
                  WHERE tenpend_id=:tenpend_id";
            } else {
                  $sql = "UPDATE tb_tenpend
                  SET tenpend_nama=:tenpend_nama, tenpend_email=:tenpend_email, tenpend_no_telp=:tenpend_no_telp
                  WHERE tenpend_id=:tenpend_id";
            }

            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":tenpend_nama", $nama);
            $stmt->bindParam(":tenpend_nip", $nip);
            $stmt->bindParam(":tenpend_email", $email);
            $stmt->bindParam(":tenpend_no_telp", $no_telp);
            $stmt->bindParam(":tenpend_id", $id);
            $stmt->execute();
      }

      public function delete($id)
      {
            $sql = "DELETE FROM tb_tenpen WHERE tenpend_id=:tenpend_id";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":tenpend_id", $id);
            $stmt->execute();
      }
}
