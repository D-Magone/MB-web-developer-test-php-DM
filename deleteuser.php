<?php
    require_once ('database.php');
    require_once ('data-tb.php');

    class DeleteUser {

        public function Delete() {

            if(isset($_POST['delete'])) {

                if($_POST['delete'] && $_POST['id']) {
                    if($_POST['delete'] == 'Delete') {

                        $this->conn = new Database();
                        $this->conn = $this->conn->__connect();
    
                        $id = $_POST['id'];
                        $delete = mysqli_query($this->conn,"DELETE from `user` WHERE id = '$id'");
                    }
                }             
            }
            return;
        }
    }
?>