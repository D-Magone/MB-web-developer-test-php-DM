<?php

require_once ('database.php');
require_once ('user.php');

class ViewUser {
    
    public function showAllUsers() {
        
        $this->datas = new User();
        $this->datas = $this->datas->getAllUsers();
        ?>
            <thead class="thead-style">
                <td>
                    <h1>ID</h1>
                </td>
                <td>
                    <h1>EMAIL</h1>
                </td>
                <td>
                    <h1>DATE</h1>
                </td>
                <td>
                    <h1>DELETE</h1>
                </td>
            </thead>
            <tbody class="tbody-style">
        <?php 

        foreach ($this->datas as $data) {            
            ?>
                <tr>
                    <td>
                        <?php echo $data['id']; ?>
                    </td>
                    <td>
                        <?php echo $data['email'];?>
                    </td>
                    <td>
                        <?php echo $data['create_time'];?>
                    </td>
                    <td>
                        <form method="POST" action="">
                            <button type="delete" name="delete" value="Delete">DELETE</button>
                            <input type="hidden" name="id" value="<?php echo $data['id'];?>">
                        </form>
                    </td>
                </tr>
            <?php
                }
            return;
        }
    }