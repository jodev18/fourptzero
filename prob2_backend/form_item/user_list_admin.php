<div class="user-list">
    <h4>User List</h4>

    <table class="user-list-table">
      <tr>
        <td>Username</td>
        <td>Action</td>
      </tr>
      <?php
        require "db/get_users.php";

        foreach($userlist as $user){
          echo "<tr>";
          echo "<td>".$user['username']."</td>";
          echo "<td> <a href=/fourptzero/prob2_backend/db/rem_user.php?id='".$user['id']."'> Remove </a></td>";
          echo "</tr>";
        }
      ?>
    </table>
</div>
