<?php

namespace App\Models;

use App\Core\Model;

class Student extends Model
{

      public function show()
      {
            $query = "SELECT * FROM students";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
      }

      public function save()
      {
            $nis = $_POST['nis'];
            $full_name = $_POST['full_name'];

            $sql = "INSERT INTO students
            SET students_nis=:students_nis, students_name=:students_name";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":students_nis", $nis);
            $stmt->bindParam(":students_name", $full_name);

            $stmt->execute();
      }

      public function edit($id)
      {
            $query = "SELECT * FROM students WHERE students_id=:students_id";
            $stmt = $this->db->prepare($query);

            $stmt->bindParam(":students_id", $id);
            $stmt->execute();

            return $this->select($stmt);
      }

      public function update()
      {
            $nis = $_POST['nis'];
            $full_name = $_POST['full_name'];
            $id = $_POST['id'];

            if (!empty($nis)) {
                  $sql = "UPDATE students
                  SET students_nis=:students_nis, students_name=:students_name
                  WHERE students_id=:students_id";
            } else {
                  $sql = "UPDATE tb_users
                  SET students_name=:students_name
                  WHERE students_id=:students_id";
            }

            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":students_nis", $nis);
            $stmt->bindParam(":students_name", $full_name);
            $stmt->bindParam(":students_id", $id);

            $stmt->execute();
      }

      public function delete($id)
      {
            $sql = "DELETE FROM students WHERE students_id=:students_id";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":students_id", $id);
            $stmt->execute();
      }
}
