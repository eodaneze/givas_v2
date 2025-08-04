  <!--  -->
  <?php
  // Define constants for phase progression
  $phases = [
      'Givas: Phase 1' => ['next_phase' => 'Givas: Phase 2', 'required_users' => 12, 'total_earning' => 60, 'distribution' => [20, 5, 15]],
      'Givas: Phase 2' => ['next_phase' => 'Success Phase 1', 'required_users' => 12, 'total_earning' => 120, 'distribution' => [40, 20, 20]],
      'Success Phase 1' => ['next_phase' => 'Success Phase 2', 'required_users' => 39, 'total_earning' => 780, 'distribution' => [250, 208, 162]],
      'Success Phase 2' => ['next_phase' => 'Abundance Phase 1', 'required_users' => 39, 'total_earning' => 3120, 'distribution' => [900, 1082, 638]],
      'Abundance Phase 1' => ['next_phase' => 'Abundance Phase 2', 'required_users' => 39, 'total_earning' => 9750, 'distribution' => [2500, 4000, 750]],
      'Abundance Phase 2' => ['next_phase' => 'Givas: Phase 1', 'required_users' => 39, 'total_earning' => 48750, 'distribution' => [15000, 16500, 17240]],
  ];

  // Fetch the first and second users in the current phase
  $sql_first_two = "SELECT * FROM givas_phase_1 WHERE is_completed = 0 ORDER BY createddate ASC LIMIT 2";
  $res_first_two = mysqli_query($conn, $sql_first_two);

  $first_user = $res_first_two && mysqli_num_rows($res_first_two) > 0 ? mysqli_fetch_assoc($res_first_two) : null;
  $second_user = $res_first_two && mysqli_num_rows($res_first_two) > 1 ? mysqli_fetch_assoc($res_first_two) : null;

  // Function to update user's phase and distribute funds
  function update_phase($conn, $user, $phase_data, $phases) {
      $distribution = $phase_data['distribution'];
      $user_id = $user['user_id'];

      // Update withdrawal table
      $sql_withdrawal = "INSERT INTO withdrawal_balance (user_id, amount) VALUES ('$user_id', '{$distribution[0]}')";
      mysqli_query($conn, $sql_withdrawal);

      // Update free account
      $sql_free_account = "INSERT INTO free_account (user_id, amount) VALUES ('$user_id', '{$distribution[1]}')";
      mysqli_query($conn, $sql_free_account);

      // Update project
      $sql_project = "INSERT INTO project (user_id, amount) VALUES ('$user_id', '{$distribution[2]}')";
      mysqli_query($conn, $sql_project);

      // Update user's phase
      $next_phase = $phases[$user['phase']]['next_phase'];
      $sql_update_phase = "UPDATE givas_phase_1 SET phase = '$next_phase', total_phase_earning = 0, users_under = 0, entery_amount = '{$distribution[0]}' WHERE user_id = '$user_id'";
      mysqli_query($conn, $sql_update_phase);
  }

  // Update earnings and handle phase completion for the first two users
  foreach ([$first_user, $second_user] as $key => $user) {
      if ($user) {
          $user_id = $user['user_id'];
          $phase_data = $phases[$user['phase']];
          $required_users = $phase_data['required_users'];

          // Fetch users under the current user in the same phase
          $sql_users_under = "SELECT * FROM givas_phase_1 WHERE user_id > '$user_id' AND phase = '{$user['phase']}' ORDER BY user_id ASC";
          $res_users_under = mysqli_query($conn, $sql_users_under);
          $users_under = mysqli_num_rows($res_users_under);

          // Check if there are new users under the current user
          if ($users_under > $user['users_under']) {
              // Calculate new users added
              $new_users = $users_under - $user['users_under'];

              // Calculate earnings for the new users
              $earning = $new_users * ($user['entery_amount'] * 0.50);

              // Update the user's total_phase_earning and users_under
              $sql_update_earning = "UPDATE givas_phase_1 
                                    SET total_phase_earning = total_phase_earning + $earning, 
                                        users_under = $users_under 
                                    WHERE user_id = '$user_id'";
              mysqli_query($conn, $sql_update_earning);

              // Check if the user has completed the phase
              $updated_earning = $user['total_phase_earning'] + $earning; // Updated total earnings
              if ($updated_earning >= $phase_data['total_earning']) {
                  update_phase($conn, $user, $phase_data, $phases);
              }
          }
      }
  }
  ?>

  <div class="table-responsive bg-white border rounded-3">
      <table class="table table-bordered">
          <thead>
              <tr>
                  <th>#</th>
                  <th>Email</th>
                  <th>Username</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Earnings</th>
              </tr>
          </thead>
          <tbody>
              <?php foreach ([$first_user, $second_user] as $key => $user): ?>
                  <?php if ($user): ?>
                      <tr>
                          <td colspan="6">
                              Users under <strong><?= $user['user_id'] ?></strong> (<?= $key === 0 ? 'First' : 'Second' ?> User)
                          </td>
                      </tr>
                      <?php
                      $sql_users = "SELECT * FROM givas_phase_1 WHERE user_id > '{$user['user_id']}' AND phase = '{$user['phase']}' ORDER BY user_id ASC LIMIT {$phases[$user['phase']]['required_users']}";
                      $res_users = mysqli_query($conn, $sql_users);
                      $index = 1;
                      while ($row = mysqli_fetch_assoc($res_users)):
                          $sql_user_details = "SELECT * FROM user WHERE user_id = '{$row['user_id']}'";
                          $res_user_details = mysqli_query($conn, $sql_user_details);
                          $user_details = mysqli_fetch_assoc($res_user_details);
                      ?>
                          <tr>
                              <td><?= $index++ ?></td>
                              <td><?= $user_details['email'] ?></td>
                              <td><?= $user_details['uname'] ?></td>
                              <td><?= $user_details['fname'] ?></td>
                              <td><?= $user_details['lname'] ?></td>
                              <td>$ <?= number_format($user['entery_amount'] * 0.50, 2) ?></td>
                          </tr>
                      <?php endwhile; ?>
                  <?php endif; ?>
              <?php endforeach; ?>
          </tbody>
      </table>
  </div>

<!--  -->