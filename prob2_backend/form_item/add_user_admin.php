<div class="add-user">
    <h4>Add User</h4>
    <form class="add-user-form" action="db/add_user.php" method="post">
        <div class="input-new-user-field">
          <label for="n_user">New username:</label>
          <input type="text" class="input-new-user" name="n_user" value="" placeholder="Enter new username">
        </div>
        <div class="input-new-pass-field">
          <label for="n_pass">New password:</label>
          <input type="password" class="input-new-user" name="n_pass" value="" placeholder="Enter new password">
        </div>
        <div class="input-new-user-field">
          <label for="priv">Privilege:</label>
          <select class="" name="priv">
            <option value="1">Admin</option>
            <option value="2">Normal User</option>
          </select>
        </div>
        <div class="btn-nu-submit-form">
          <input type="submit" class="btn-submit" name="" value="Submit">
        </div>
    </form>
</div>
