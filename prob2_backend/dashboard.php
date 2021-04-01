<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/styler.css">
    <title>Dashboard</title>
  </head>
  <body>
    <header class="dash-nav-header">
      <span class="dash-header-text">Dashboard</span>
      <span class="dash-header-logout">Logout</span>
    </header>

    <main class="dash-content">
      <?php
      require "form_item/add_user_admin.php";
      require "form_item/user_list_admin.php";
        // echo "wtf";
        // $priv = $_SESSION['curr_priv'];
        // echo $priv;
        // if($priv == 2){
        //   require "form_item/add_user_admin.php";
        //   require "form_item/user_list_admin.php";
        // }

      ?>

      <div class="add-user">
          <h4>Add Report</h4>
          <form class="add-user-form" action="/db/add_report.php" method="post">
              <div class="">
                <label for="report_info">Report:</label>
                <textarea id="report_info" class="input-new-user" name="report_info" rows="4" cols="50"> </textarea>
                <input type="hidden" name="user_id" value="<?php echo $_SESSION['curr_priv']; ?>">
              </div>
              <div class="btn-nu-submit-form">
                <input type="submit" class="btn-submit" name="" value="Submit">
              </div>
          </form>
      </div>

      <div class="report-view">
          <h4>Reports</h4>

          <table class="user-list-table">
            <tr>
              <td>User author</td>
              <td>Report info</td>
              <td>Action</td>
            </tr>
            <?php
            require "db/get_reports_all.php";

            foreach($reportlist as $report){
              echo "<tr>";
              echo "<td>".$report['user_id']."</td>";
              echo "<td>".$report['content']."</td>";
              echo "<td> <a href=/fourptzero/prob2_backend/db/rem_user.php?id='".$report['id']."'> Remove </a></td>";
              echo "</tr>";
            }
            ?>
          </table>
      </div>
    </main>


  </body>
</html>
