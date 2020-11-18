<?php

class StudentListRepository {
	public function getStudentsList($id) {
		$db = new DataBase();
		$connection = $db->getConnection(); 
		$query = "SELECT * FROM `student-list` WHERE `id` = '$id'";
		$result = mysqli_query($connection, $query);
		$studentsList = $result->fetch_assoc();
		$db->closeConnection();

		return $user;
	}


	public function getStudentsListAll() {
		$res = []

		$db = new DataBase();
		$connection = $db->getConnection(); 
		$query = "SELECT * FROM `student-list`";
		$result = mysqli_query($connection, $query);
		
		if ($result) {
            $rows = mysqli_num_rows($result);

            for ($i = 0; $i < $rows; $i++) {
                $row = mysqli_fetch_row($result);

                $studentGroup = new Note($row[0], $row[1], $row[2]);
                array_push($notes, $note);
            }
        }

		$studentsList = $result->fetch_assoc();

		$db->closeConnection();

		return $res;
	}
}