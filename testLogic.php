<div class="table-responsive bg-white border rounded-3">
                         <!--  -->
                         <?php
                                // Step 1: Fetch the first and second users in the givas_phase_1 table
                                $sql_first_two = "SELECT * FROM givas_phase_1 ORDER BY user_id ASC LIMIT 2";
                                $res_first_two = mysqli_query($conn, $sql_first_two);
  
                                $first_user = null;
                                $second_user = null;
  
                                if ($res_first_two && mysqli_num_rows($res_first_two) > 0) {
                                    $first_user = mysqli_fetch_assoc($res_first_two);
                                    if (mysqli_num_rows($res_first_two) > 1) {
                                        $second_user = mysqli_fetch_assoc($res_first_two);
                                    }
                                }
  
                                // Step 2: Fetch the new users under the first and second users
                                $sql_new_users = "SELECT * FROM givas_phase_1 WHERE user_id > '{$first_user['user_id']}' ORDER BY user_id ASC LIMIT 12";
                                $res_new_users = mysqli_query($conn, $sql_new_users);
  
                                $users_under_first = [];
                                $users_under_second = [];
                                $total_users_under_first = 0;
                                $total_users_under_second = 0;
  
                                if ($res_new_users) {
                                    $i = 1;
                                    while ($row = mysqli_fetch_assoc($res_new_users)) {
                                        // Fetch details from the user table for each user
                                        $user_id = $row['user_id'];
                                        $sql_user = "SELECT * FROM user WHERE user_id = '$user_id'";
                                        $res_user = mysqli_query($conn, $sql_user);
                                        $user_details = mysqli_fetch_assoc($res_user);
  
                                        if ($i <= 12) {
                                            $users_under_first[] = $user_details;
                                            $total_users_under_first++;
                                            if ($i > 1) {
                                                $users_under_second[] = $user_details;
                                                $total_users_under_second++;
                                            }
                                        }
                                        $i++;
                                    }
                                }
  
                                // Step 3: Calculate earnings for the first and second users
                                $first_user_fullname = '';
                                if ($first_user) {
                                    // get the fullname of the user that is occupying the first position
                                    $first_user_id = $first_user['user_id'];
                                    $sql_first_user_details = "SELECT fname, lname FROM user WHERE user_id = '$first_user_id'";
                                    $res_first_user_details = mysqli_query($conn, $sql_first_user_details);
                                    if ($res_first_user_details && $user_details = mysqli_fetch_assoc($res_first_user_details)) {
                                      $first_user_fullname = $user_details['fname'] . ' ' . $user_details['lname'];
                                    }
  
                                     
                                    // here we calculate the earnings of the first user
                                    $earnings_first_user = min($total_users_under_first, 12) * (10 * 0.50); // 50% of $10 per user
                                    $update_first_user = "UPDATE givas_phase_1 SET total_phase_earning = '{$earnings_first_user}' WHERE user_id = '{$first_user['user_id']}'";
                                    mysqli_query($conn, $update_first_user);
  
                                    // Check if the first user has completed their phase
                                    if ($total_users_under_first >= 12) {
                                        
                                        $remove_first_user = "DELETE FROM givas_phase_1 WHERE user_id = '{$first_user['user_id']}'";
                                        mysqli_query($conn, $remove_first_user);
                                    }
                                }
                               
                                $second_user_fullname = '';
                                if ($second_user) {
                                  // get the fullname of the user in the second postion
                                    $second_user_id = $second_user['user_id'];
                                    $sql_second_user_details = "SELECT fname, lname FROM user WHERE user_id = '$second_user_id'";
                                    $res_second_user_details = mysqli_query($conn, $sql_second_user_details);
                                    if ($res_second_user_details && $user_details = mysqli_fetch_assoc($res_second_user_details)) {
                                        $second_user_fullname = $user_details['fname'] . ' ' . $user_details['lname'];
                                    }
  
                                    $earnings_second_user = min($total_users_under_second, 12) * (10 * 0.50); // 50% of $10 per user
                                  
  
                                    $update_second_user = "UPDATE givas_phase_1 SET total_phase_earning = '{$earnings_second_user}' WHERE user_id = '{$second_user['user_id']}'";
                                    mysqli_query($conn, $update_second_user);
                                }
  
                                // Step 4: Display the users under each first and second user
                                ?>
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
                                        <?php if ($first_user): ?>
                                            <tr>
                                                <td colspan="6">Users under <strong><?= $first_user_fullname ?></strong>(First User)</td>
                                            </tr>
                                            <?php foreach ($users_under_first as $index => $user): ?>
                                                <tr>
                                                    <td><?= $index + 1 ?></td>
                                                    <td><?= $user['email'] ?></td>
                                                    <td><?= $user['uname'] ?></td>
                                                    <td><?= $user['fname'] ?></td>
                                                    <td><?= $user['lname'] ?></td>
                                                    <td>$ <?= number_format(10 * 0.50, 2) ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
  
                                        <?php if ($second_user): ?>
                                            <tr>
                                                <td colspan="6">Users under <strong><?= $second_user_fullname ?></strong>  (Second User)</td>
                                            </tr>
                                            <?php foreach ($users_under_second as $index => $user): ?>
                                                <tr>
                                                    <td><?= $index + 1 ?></td>
                                                    <td><?= $user['email'] ?></td>
                                                    <td><?= $user['uname'] ?></td>
                                                    <td><?= $user['fname'] ?></td>
                                                    <td><?= $user['lname'] ?></td>
                                                    <td>$ <?= number_format(10 * 0.50, 2) ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
  
                         <!--  -->
                    </div>