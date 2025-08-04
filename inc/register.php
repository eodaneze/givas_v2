<?php 
      session_start();
      require_once('./config/connection.php');
      require_once('../helpers/sendMail.php');
    
    try{
        
      if(isset($_POST['register'])){
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $uname = $_POST['uname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $coupon = $_POST['coupon'];
            $country = $_POST['country'];
            $entity = $_POST['entity'];

            $ref = isset($_POST['ref']) ? $_POST['ref'] : null;

             if ($ref) { 
                  // Query to fetch all usernames from pro_users
                  $sql = "SELECT u.user_id FROM pro_users p JOIN user u ON p.user_id = u.user_id WHERE u.uname = ?";
                 
                  $stmt = $conn->prepare($sql);
                  $stmt->bind_param("s", $ref);
                  $stmt->execute();
                  $result = $stmt->get_result();
            
              
                  if ($row = $result->fetch_assoc()) {
                        $ref_user_id = $row['user_id']; 
                  }else{
                        if(isset($_SESSION['checkRef'] )){
                              $_SESSION['error'] = "Invalid referral . Please check and try again or register without a referral.";
                              header('location: ../register?next&ref='.$ref);
                              exit();

                        }else{
                              $_SESSION['error'] = "Invalid referral . Please check and try again";
                              header('location: ../register?next');
                              exit();
                        }

                  }
              
                
              } 
            //   else {
            //       echo "No referral provided.";
            //   }
             

            $fullName  = $fname . ' ' .$lname;

            // Check if username already exists
             $sql = "SELECT * FROM user WHERE uname = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("s", $uname);
                $stmt->execute();
                $res = $stmt->get_result();
            
                if ($res->num_rows > 0) {
                    if(isset($_SESSION['checkRef'])){
                          $_SESSION['error'] = "Username already exists. Please use a different username.";
                              header('location: ../register?next&ref='.$ref);
                              exit();

                    }else{
                          $_SESSION['error'] = "Username already exists. Please use a different username.";
                          header('location: ../register?next');
                          exit();

                    }
                }

            // Check if coupon code is valid
            $sql = "SELECT * FROM coupon WHERE code = '$coupon'";
            $res = mysqli_query($conn, $sql);
            if ($row = mysqli_fetch_assoc($res)) {
                  $coupon_id = $row['id'];
                    $get_coupon = $row['code'];
                    $status = $row['status'];
                    $times_used = $row['times_used'];
                    $expected_times = $row['expected_times'];
                    $max_daily_uses = $row['max_daily_uses'];
            } else {
                  if(isset($_SESSION['checkRef'])){
                      $_SESSION['error'] = "Invalid coupon code";
                      header('location: ../register?next&ref='.$ref);
                      exit();
                  }else{
                        $_SESSION['error'] = "Invalid coupon code";
                        header('location: ../register?next');
                        exit();

                  }
            }
            
            // Check if the coupon has expired
            if ($status == 1) {
                  if(isset($_SESSION['checkRef'])){
                         $_SESSION['error'] = "Coupon has expired";
                        header('location: ../register?next&ref='.$ref);
                        exit();

                  }else{
                        $_SESSION['error'] = "Coupon has expired";
                        header('location: ../register?next');
                        exit();

                  }
            }

          
           // Get how many times this coupon has been used in the last 24 hours
            $sql = "SELECT COUNT(*) AS daily_usage FROM coupon_usage 
                    WHERE coupon_id = '$coupon_id' AND used_at >= NOW() - INTERVAL 1 DAY";
            $res = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($res);
            $daily_usage = $row['daily_usage'];
            
            
            if ($daily_usage >= $max_daily_uses) {
                  if(isset($_SESSION['checkRef'])){
                         $_SESSION['error'] = "This coupon has reached its daily limit. Try again later.";
                         header('location: ../register?next&ref='.$ref);
                         exit();
                  }else{
                        $_SESSION['error'] = "This coupon has reached its daily limit. Try again later.";
                        header('location: ../register?next');
                        exit();

                  }
            }

                  $hashed_password = password_hash($password, PASSWORD_BCRYPT);

                  $affiliate_id = sprintf('%05d', mt_rand(0, 99999));
                  $sql = "INSERT INTO user (fname, lname, uname, email, country, entity, coupon, password, referral, affiliate_id) 
                   VALUES ('$fname', '$lname', '$uname', '$email', '$country', '$entity', '$coupon', '$hashed_password', '$ref', '$affiliate_id')";

                  $res = mysqli_query($conn, $sql);
                  if($res){
                        $userId = mysqli_insert_id($conn);
                        $_SESSION['userId'] = $userId;
                        $_SESSION['userEmail'] = $email;
                        
                        // Insert coupon usage record
                        $sql = "INSERT INTO coupon_usage (coupon_id) VALUES ('$coupon_id')";
                        mysqli_query($conn, $sql);

                        // Update coupon usage
                        $times_used++;
                        $sql = "UPDATE coupon SET times_used = '$times_used' WHERE code = '$coupon'";
                        mysqli_query($conn, $sql);
                        if($times_used >= $expected_times){
                              mysqli_query($conn, "UPDATE coupon SET status = 1 WHERE code = '$coupon'");
                        }

                         // Insert the user_id into the withdrawal_balance table
                         $sql = "INSERT INTO withdrawal_balance (user_id) VALUES ('$userId')";
                         $res = mysqli_query($conn, $sql);

                          // Insert user_id, uname and email to gas_payment table
                          $sql = "INSERT INTO gas_payment (user_id, uname, email) VALUES ('$userId', '$uname', '$email')";
                          $res = mysqli_query($conn, $sql);


                            //   $title = "Account Creation 😊";
                            //   require_once('../template/register.template.php');
                            //   $result = sendCustomEmail($email, $uname, $title, $body);
                              
                        // Insert user into Givas Phase 1
                      
                        $insert_user_sql = "INSERT INTO givas_phase_1 (user_id) VALUES ('$userId')";
                        $insert_result = mysqli_query($conn, $insert_user_sql);

                        if($insert_result){
                              $last_inserted_id = mysqli_insert_id($conn);

                              if($last_inserted_id > 0){
                                    $fetch_user_sql = "SELECT user_id FROM givas_phase_1 WHERE id = '$last_inserted_id'";
                                    $fetch_user_result = mysqli_query($conn, $fetch_user_sql);

                                    if($fetch_user_row = mysqli_fetch_assoc($fetch_user_result)){
                                          $last_insert_givas_1_user = $fetch_user_row['user_id'];
                                          $_SESSION['last_givas_1_user_id'] = $last_insert_givas_1_user ;
                                    }
                              }
                              // Count how many users are in givas_phase_1
                              $count_sql = "SELECT COUNT(*) as total_users FROM givas_phase_1";
                              $count_result = mysqli_query($conn, $count_sql);
                              $count_row = mysqli_fetch_assoc($count_result);
                              $total_users = $count_row['total_users'];
                        
                              // If this is the second user, set the first user as the current earner
                              if ($total_users == 2) {
                                    $get_first_user_sql = "SELECT user_id FROM givas_phase_1 ORDER BY user_id ASC LIMIT 1";
                                    $first_user_result = mysqli_query($conn, $get_first_user_sql);
                                    if ($first_user_row = mysqli_fetch_assoc($first_user_result)) {
                                          $first_user_id = $first_user_row['user_id'];
                                          $update_first_user_sql = "UPDATE givas_phase_1 SET is_current_earner = 1 WHERE user_id = '$first_user_id'";
                                          mysqli_query($conn, $update_first_user_sql);
                                    }
                              }
                              // Assign earnings
                              $update_current_earnings_sql = "UPDATE givas_phase_1 SET downlines = downlines + 1 , total_phase_earning = total_phase_earning + 10 WHERE is_current_earner = 1";
                              $result = mysqli_query($conn, $update_current_earnings_sql);
                              
                            
                               
                              if($result){
                                    $fetch_updated_current_earnings_sql = "SELECT * FROM givas_phase_1 WHERE is_current_earner = 1";
                                    $result = mysqli_query($conn, $fetch_updated_current_earnings_sql);
                                    $row = mysqli_fetch_assoc($result);
                                    $downlines = $row['downlines'];
                                    $current_earner_id = $row['user_id'];
                                   
      
                                    if ($downlines == 10) {
                                          
            
                                          // Distribute earnings
                                          mysqli_query($conn, "UPDATE withdrawal_balance SET amount = amount + 20 WHERE user_id = '$current_earner_id'");
                                          mysqli_query($conn, "INSERT INTO project(user_id, amount) VALUES('$current_earner_id', 30)");
                                          mysqli_query($conn, "INSERT INTO extra(user_id, amount) VALUES('$current_earner_id', 2)");
                                          mysqli_query($conn, "INSERT INTO free_account(user_id, amount) VALUES('$current_earner_id', 28)");
            
                                          // Move to Givas Phase 2
                                          
                                          $insert_givas_phase_2 = "INSERT INTO givas_phase_2 (user_id, entry_amount) VALUES ('$current_earner_id', 20)";
                                          $insert_givas_result = mysqli_query($conn, $insert_givas_phase_2);
                                          if($insert_givas_result){
                                                $last_inserted_id = mysqli_insert_id($conn);
      
                                                if($last_inserted_id > 0){
                                                      $fetch_user_sql = "SELECT user_id FROM givas_phase_2 WHERE id = '$last_inserted_id'";
                                                      $fetch_user_result = mysqli_query($conn, $fetch_user_sql);
      
                                                      if($fetch_user_row = mysqli_fetch_assoc($fetch_user_result)){
                                                            $last_insert_phase2_user = $fetch_user_row['user_id'];
                                                            $_SESSION['last_user_id'] = $last_insert_phase2_user ;
                                                      }
                                                }
                                          }
                                      
                                          mysqli_query($conn, "DELETE FROM givas_phase_1 WHERE user_id = '$current_earner_id'");
            
                                          // Set next earner in Phase 1
                                          $next_earner = mysqli_query($conn, "SELECT user_id FROM givas_phase_1 ORDER BY user_id ASC LIMIT 1");
                                          if ($next_earner_row = mysqli_fetch_assoc($next_earner)) {
                                                mysqli_query($conn, "UPDATE givas_phase_1 SET is_current_earner = 1 WHERE user_id = '{$next_earner_row['user_id']}'");
                                          }
                                    }
      
                                    $update_current_registered_user_sql = "UPDATE givas_phase_1 SET current_earner_id = '$current_earner_id' WHERE user_id = '$last_insert_givas_1_user'";
                                     mysqli_query($conn, $update_current_registered_user_sql);
                              }
                        }
                        



                        
                              // Count how many users are in givas_phase_2

                            $count_sql = "SELECT COUNT(*) as total_users FROM givas_phase_2";
                            $count_result = mysqli_query($conn, $count_sql);
                            $count_row = mysqli_fetch_assoc($count_result);
                            $total_users = $count_row['total_users'];
                      
                            // If this is the second user, set the first user as the current earner
                            if ($total_users == 2) {
                                  $get_first_user_sql = "SELECT user_id FROM givas_phase_2 ORDER BY user_id ASC LIMIT 1";
                                  $first_user_result = mysqli_query($conn, $get_first_user_sql);
                                  if ($first_user_row = mysqli_fetch_assoc($first_user_result)) {
                                        $first_user_id = $first_user_row['user_id'];
                                        $update_first_user_sql = "UPDATE givas_phase_2 SET is_current_earner = 1 WHERE user_id = '$first_user_id'";
                                        mysqli_query($conn, $update_first_user_sql);
                                  }
                            }
                       
                      
                        // Handle Givas Phase 2 earnings

                    

                        if(isset($_SESSION['last_user_id'])){
                              $new_inserted_user_id =  $_SESSION['last_user_id']; 
                              $update_current_earnings_sql = "UPDATE givas_phase_2 SET downlines = downlines + 1 , total_phase_earning = total_phase_earning + 20 WHERE is_current_earner = 1";
                              $update_result = mysqli_query($conn, $update_current_earnings_sql);
                              if($update_result){
                                    // Fetch updated details of the current earner
                                    $fetch_updated_current_earnings_sql = "SELECT * FROM givas_phase_2 WHERE is_current_earner = 1";
                                    $result = mysqli_query($conn, $fetch_updated_current_earnings_sql);
                                    $row = mysqli_fetch_assoc($result);
                                    $downlines = $row['downlines'];
                                    $current_earner_id = $row['user_id'];  
                                    
                                    if($downlines == 10){
                                          // Distribute Givas Phase 2 earnings
                                          mysqli_query($conn, "UPDATE withdrawal_balance SET amount = amount + 40 WHERE user_id = '$current_earner_id'");
                                          $insert_success_phase_1 = "INSERT INTO success_phase_1(user_id, entry_amount) VALUES('$current_earner_id', 40)";
                                          $insert_success_1_result = mysqli_query($conn, $insert_success_phase_1);

                                          if($insert_success_1_result){
                                                $last_inserted_id = mysqli_insert_id($conn);

                                                if($last_inserted_id > 0){
                                                      $fetch_user_sql = "SELECT user_id FROM success_phase_1 WHERE id = '$last_inserted_id'";
                                                      $fetch_user_result = mysqli_query($conn, $fetch_user_sql);

                                                      if($fetch_user_row = mysqli_fetch_assoc($fetch_user_result)){
                                                            $last_insert_success_1_user = $fetch_user_row['user_id'];
                                                            $_SESSION['last_success_1_user_id'] = $last_insert_success_1_user ;
                                                      }
                                                }
                                          }

                                          mysqli_query($conn, "INSERT INTO free_account(user_id, amount) VALUES('$current_earner_id', 50)");
                                          mysqli_query($conn, "INSERT INTO project(user_id, amount) VALUES('$current_earner_id', 70)");
                                          
                                          // Remove user from Givas Phase 2
                                          mysqli_query($conn, "DELETE FROM givas_phase_2 WHERE user_id = '$current_earner_id'");
                                          
                                          // Set next earner in Phase 2
                                          $next_earner = mysqli_query($conn, "SELECT user_id FROM givas_phase_2 ORDER BY user_id ASC LIMIT 1");
                                          if ($next_earner_row = mysqli_fetch_assoc($next_earner)) {
                                                mysqli_query($conn, "UPDATE givas_phase_2 SET is_current_earner = 1 WHERE user_id = '{$next_earner_row['user_id']}'");
                                          }
                                    }
      
                                   
                                    $update_current_registered_user_sql = "UPDATE givas_phase_2 SET current_earner_id = '$current_earner_id' WHERE user_id = '$new_inserted_user_id '";
                                    mysqli_query($conn, $update_current_registered_user_sql);
                              }
                        }



                        // handle success phase 1

                        
                        $count_sql = "SELECT COUNT(*) as total_users FROM success_phase_1";
                        $count_result = mysqli_query($conn, $count_sql);
                        $count_row = mysqli_fetch_assoc($count_result);
                        $total_users = $count_row['total_users'];
                  
                        // If this is the second user, set the first user as the current earner
                        if ($total_users == 2) {
                              $get_first_user_sql = "SELECT user_id FROM success_phase_1 ORDER BY user_id ASC LIMIT 1";
                              $first_user_result = mysqli_query($conn, $get_first_user_sql);
                              if ($first_user_row = mysqli_fetch_assoc($first_user_result)) {
                                    $first_user_id = $first_user_row['user_id'];
                                    $update_first_user_sql = "UPDATE success_phase_1 SET is_current_earner = 1 WHERE user_id = '$first_user_id'";
                                    mysqli_query($conn, $update_first_user_sql);
                              }
                        }

                             
                            if(isset($_SESSION['last_success_1_user_id'])){
                                  $new_inserted_user_id =  $_SESSION['last_success_1_user_id']; 
                                  $update_current_earnings_sql = "UPDATE success_phase_1 SET downlines = downlines + 1 , total_phase_earning = total_phase_earning + 40 WHERE is_current_earner = 1";
                                  $update_result = mysqli_query($conn, $update_current_earnings_sql);
    
                                  if($update_result){
                                         // Fetch updated details of the current earner
                                         $fetch_updated_current_earnings_sql = "SELECT * FROM success_phase_1  WHERE is_current_earner = 1";
                                         $result = mysqli_query($conn, $fetch_updated_current_earnings_sql);
                                         $row = mysqli_fetch_assoc($result);
                                         $downlines = $row['downlines'];
                                         $current_earner_id = $row['user_id'];  
    
    
                                         if($downlines == 25){
                                               // Distribute success Phase 1 earnings
                                               mysqli_query($conn, "UPDATE withdrawal_balance SET amount = amount + 250 WHERE user_id = '$current_earner_id'");
                                               $insert_success_phase_2 = "INSERT INTO success_phase_2(user_id, entry_amount) VALUES('$current_earner_id', 160)";
                                               $insert_success_2_result = mysqli_query($conn, $insert_success_phase_2);
    
                                               if($insert_success_2_result){
                                                    $last_inserted_id = mysqli_insert_id($conn);
    
                                                    if($last_inserted_id > 0){
                                                          $fetch_user_sql = "SELECT user_id FROM success_phase_2 WHERE id = '$last_inserted_id'";
                                                          $fetch_user_result = mysqli_query($conn, $fetch_user_sql);
    
                                                          if($fetch_user_row = mysqli_fetch_assoc($fetch_user_result)){
                                                                $last_insert_success_2_user = $fetch_user_row['user_id'];
                                                                $_SESSION['last_success_2_user_id'] = $last_insert_success_2_user ;
                                                          }
                                                    }
                                               }
    
    
                                               mysqli_query($conn, "INSERT INTO free_account(user_id, amount) VALUES('$current_earner_id', 190)");
                                               mysqli_query($conn, "INSERT INTO project(user_id, amount) VALUES('$current_earner_id', 400)");
                                               
                                               // Remove user from Givas Phase 2
                                               mysqli_query($conn, "DELETE FROM success_phase_1 WHERE user_id = '$current_earner_id'");
    
                                               // Set next earner in Phase 2
                                              $next_earner = mysqli_query($conn, "SELECT user_id FROM success_phase_1 ORDER BY user_id ASC LIMIT 1");
                                              if ($next_earner_row = mysqli_fetch_assoc($next_earner)) {
                                                    mysqli_query($conn, "UPDATE success_phase_1 SET is_current_earner = 1 WHERE user_id = '{$next_earner_row['user_id']}'");
                                              }
                                         }
    
                                         $update_current_registered_user_sql = "UPDATE success_phase_1 SET current_earner_id = '$current_earner_id' WHERE user_id = '$new_inserted_user_id '";
                                         mysqli_query($conn, $update_current_registered_user_sql);
    
                                  }
    
                            }
                        
                        // handle success phase 2
                        $count_sql = "SELECT COUNT(*) as total_users FROM success_phase_2";
                        $count_result = mysqli_query($conn, $count_sql);
                        $count_row = mysqli_fetch_assoc($count_result);
                        $total_users = $count_row['total_users'];
                  
                        // If this is the second user, set the first user as the current earner
                        if ($total_users == 2) {
                              $get_first_user_sql = "SELECT user_id FROM success_phase_2 ORDER BY user_id ASC LIMIT 1";
                              $first_user_result = mysqli_query($conn, $get_first_user_sql);
                              if ($first_user_row = mysqli_fetch_assoc($first_user_result)) {
                                    $first_user_id = $first_user_row['user_id'];
                                    $update_first_user_sql = "UPDATE success_phase_2 SET is_current_earner = 1 WHERE user_id = '$first_user_id'";
                                    mysqli_query($conn, $update_first_user_sql);
                              }
                        }

                        if(isset($_SESSION['last_success_2_user_id'])){
                              $new_inserted_user_id =  $_SESSION['last_success_2_user_id']; 
                              $update_current_earnings_sql = "UPDATE success_phase_2 SET downlines = downlines + 1 , total_phase_earning = total_phase_earning + 160 WHERE is_current_earner = 1";
                              $update_result = mysqli_query($conn, $update_current_earnings_sql);

                              if($update_result){
                                     // Fetch updated details of the current earner
                                     $fetch_updated_current_earnings_sql = "SELECT * FROM success_phase_2  WHERE is_current_earner = 1";
                                     $result = mysqli_query($conn, $fetch_updated_current_earnings_sql);
                                     $row = mysqli_fetch_assoc($result);
                                     $downlines = $row['downlines'];
                                     $current_earner_id = $row['user_id']; 
                                     
                                     

                                     if($downlines == 25){
                                           // Distribute success Phase 1 earnings
                                           mysqli_query($conn, "UPDATE withdrawal_balance SET amount = amount + 900 WHERE user_id = '$current_earner_id'");
                                           $insert_abundance_phase_1 = "INSERT INTO abundance_phase_1(user_id, entry_amount) VALUES('$current_earner_id', 500)";
                                           $insert_abundance_phase_1_result = mysqli_query($conn, $insert_abundance_phase_1);

                                           if($insert_abundance_phase_1){
                                                $last_inserted_id = mysqli_insert_id($conn);

                                                if($last_inserted_id > 0){
                                                      $fetch_user_sql = "SELECT user_id FROM abundance_phase_1 WHERE id = '$last_inserted_id'";
                                                      $fetch_user_result = mysqli_query($conn, $fetch_user_sql);

                                                      if($fetch_user_row = mysqli_fetch_assoc($fetch_user_result)){
                                                            $last_insert_abundance_1_user = $fetch_user_row['user_id'];
                                                            $_SESSION['last_abundance_1_user_id'] = $last_insert_abundance_1_user ;
                                                      }
                                                }
                                           }


                                           mysqli_query($conn, "INSERT INTO free_account(user_id, amount) VALUES('$current_earner_id', 600)");
                                           mysqli_query($conn, "INSERT INTO project(user_id, amount) VALUES('$current_earner_id', 2000)");
                                           
                                           // Remove user from Givas Phase 2
                                           mysqli_query($conn, "DELETE FROM success_phase_2 WHERE user_id = '$current_earner_id'");

                                           // Set next earner in Phase 2
                                          $next_earner = mysqli_query($conn, "SELECT user_id FROM success_phase_2 ORDER BY user_id ASC LIMIT 1");
                                          if ($next_earner_row = mysqli_fetch_assoc($next_earner)) {
                                                mysqli_query($conn, "UPDATE success_phase_2 SET is_current_earner = 1 WHERE user_id = '{$next_earner_row['user_id']}'");
                                          }
                                     }

                                     $update_current_registered_user_sql = "UPDATE success_phase_2 SET current_earner_id = '$current_earner_id' WHERE user_id = '$new_inserted_user_id '";
                                     mysqli_query($conn, $update_current_registered_user_sql);
                              }
                        }


                        // handle abundance phase 1

                        $count_sql = "SELECT COUNT(*) as total_users FROM abundance_phase_1";
                        $count_result = mysqli_query($conn, $count_sql);
                        $count_row = mysqli_fetch_assoc($count_result);
                        $total_users = $count_row['total_users'];
                  
                        // If this is the second user, set the first user as the current earner
                        if ($total_users == 2) {
                              $get_first_user_sql = "SELECT user_id FROM abundance_phase_1 ORDER BY user_id ASC LIMIT 1";
                              $first_user_result = mysqli_query($conn, $get_first_user_sql);
                              if ($first_user_row = mysqli_fetch_assoc($first_user_result)) {
                                    $first_user_id = $first_user_row['user_id'];
                                    $update_first_user_sql = "UPDATE abundance_phase_1 SET is_current_earner = 1 WHERE user_id = '$first_user_id'";
                                    mysqli_query($conn, $update_first_user_sql);
                              }
                        }

                        if(isset($_SESSION['last_abundance_1_user_id'])){
                              $new_inserted_user_id =  $_SESSION['last_abundance_1_user_id']; 
                              $update_current_earnings_sql = "UPDATE abundance_phase_1 SET downlines = downlines + 1 , total_phase_earning = total_phase_earning + 500 WHERE is_current_earner = 1";
                              $update_result = mysqli_query($conn, $update_current_earnings_sql);

                              if($update_result){
                                     // Fetch updated details of the current earner
                                     $fetch_updated_current_earnings_sql = "SELECT * FROM abundance_phase_1  WHERE is_current_earner = 1";
                                     $result = mysqli_query($conn, $fetch_updated_current_earnings_sql);
                                     $row = mysqli_fetch_assoc($result);
                                     $downlines = $row['downlines'];
                                     $current_earner_id = $row['user_id']; 
                                     
                                     

                                     if($downlines == 25){
                                           // Distribute abundance phase 1 earnings
                                           mysqli_query($conn, "UPDATE withdrawal_balance SET amount = amount + 2500 WHERE user_id = '$current_earner_id'");
                                           $insert_abundance_phase_2 = "INSERT INTO abundance_phase_2(user_id, entry_amount) VALUES('$current_earner_id', 2500)";
                                           $insert_abundance_2_result = mysqli_query($conn, $insert_abundance_phase_2);

                                           if($insert_abundance_2_result){
                                                $last_inserted_id = mysqli_insert_id($conn);

                                                if($last_inserted_id > 0){
                                                      $fetch_user_sql = "SELECT user_id FROM abundance_phase_2 WHERE id = '$last_inserted_id'";
                                                      $fetch_user_result = mysqli_query($conn, $fetch_user_sql);

                                                      if($fetch_user_row = mysqli_fetch_assoc($fetch_user_result)){
                                                            $last_insert_abundance_2_user = $fetch_user_row['user_id'];
                                                            $_SESSION['last_abundance_2_user_id'] = $last_insert_abundance_1_user ;
                                                      }
                                                }
                                           }


                                           mysqli_query($conn, "INSERT INTO free_account(user_id, amount) VALUES('$current_earner_id', 2500)");
                                           mysqli_query($conn, "INSERT INTO project(user_id, amount) VALUES('$current_earner_id', 5000)");
                                           
                                           // Remove user from Givas Phase 2
                                           mysqli_query($conn, "DELETE FROM abundance_phase_1 WHERE user_id = '$current_earner_id'");

                                           // Set next earner in Phase 2
                                          $next_earner = mysqli_query($conn, "SELECT user_id FROM  abundance_phase_1 ORDER BY user_id ASC LIMIT 1");
                                          if ($next_earner_row = mysqli_fetch_assoc($next_earner)) {
                                                mysqli_query($conn, "UPDATE abundance_phase_1 SET is_current_earner = 1 WHERE user_id = '{$next_earner_row['user_id']}'");
                                          }
                                     }

                                     $update_current_registered_user_sql = "UPDATE abundance_phase_1 SET current_earner_id = '$current_earner_id' WHERE user_id = '$new_inserted_user_id '";
                                     mysqli_query($conn, $update_current_registered_user_sql);
                              }
                        }



                        // handle abundance phase 2

                        $count_sql = "SELECT COUNT(*) as total_users FROM abundance_phase_2";
                        $count_result = mysqli_query($conn, $count_sql);
                        $count_row = mysqli_fetch_assoc($count_result);
                        $total_users = $count_row['total_users'];
                  
                        // If this is the second user, set the first user as the current earner
                        if ($total_users == 2) {
                              $get_first_user_sql = "SELECT user_id FROM abundance_phase_2 ORDER BY user_id ASC LIMIT 1";
                              $first_user_result = mysqli_query($conn, $get_first_user_sql);
                              if ($first_user_row = mysqli_fetch_assoc($first_user_result)) {
                                    $first_user_id = $first_user_row['user_id'];
                                    $update_first_user_sql = "UPDATE abundance_phase_2 SET is_current_earner = 1 WHERE user_id = '$first_user_id'";
                                    mysqli_query($conn, $update_first_user_sql);
                              }
                        }

                        if(isset($_SESSION['last_abundance_2_user_id'])){
                              $new_inserted_user_id =  $_SESSION['last_abundance_2_user_id']; 
                              $update_current_earnings_sql = "UPDATE abundance_phase_2 SET downlines = downlines + 1 , total_phase_earning = total_phase_earning + 2500 WHERE is_current_earner = 1";
                              $update_result = mysqli_query($conn, $update_current_earnings_sql);

                              if($update_result){
                                     // Fetch updated details of the current earner
                                     $fetch_updated_current_earnings_sql = "SELECT * FROM abundance_phase_2  WHERE is_current_earner = 1";
                                     $result = mysqli_query($conn, $fetch_updated_current_earnings_sql);
                                     $row = mysqli_fetch_assoc($result);
                                     $downlines = $row['downlines'];
                                     $current_earner_id = $row['user_id']; 
                                     
                                     

                                     if($downlines == 25){
                                           // Distribute abundance phase 2 earnings
                                           mysqli_query($conn, "UPDATE withdrawal_balance SET amount = amount + 15000 WHERE user_id = '$current_earner_id'");
                                           $insert_givas_phase_1 = "INSERT INTO givas_phase_1(user_id) VALUES('$current_earner_id')";
                                           $insert_givas_1_result = mysqli_query($conn, $insert_givas_phase_1);

                                          


                                           mysqli_query($conn, "INSERT INTO free_account(user_id, amount) VALUES('$current_earner_id', 16000)");
                                           mysqli_query($conn, "INSERT INTO project(user_id, amount) VALUES('$current_earner_id', 31490)");
                                           
                                           // Remove user from Givas Phase 2
                                           mysqli_query($conn, "DELETE FROM abundance_phase_2 WHERE user_id = '$current_earner_id'");

                                           // Set next earner in Phase 2
                                          $next_earner = mysqli_query($conn, "SELECT user_id FROM abundance_phase_2 ORDER BY user_id ASC LIMIT 1");
                                          if ($next_earner_row = mysqli_fetch_assoc($next_earner)) {
                                                mysqli_query($conn, "UPDATE abundance_phase_2 SET is_current_earner = 1 WHERE user_id = '{$next_earner_row['user_id']}'");
                                          }
                                     }

                                     $update_current_registered_user_sql = "UPDATE abundance_phase_2 SET current_earner_id = '$current_earner_id' WHERE user_id = '$new_inserted_user_id '";
                                     mysqli_query($conn, $update_current_registered_user_sql);
                              }
                        }

                        // update the referral_no and the ref_bonus for the user that has the referral code

                        $updateSql = "UPDATE pro_users SET referral_no = referral_no + 1, ref_bonus = ref_bonus + 2  WHERE user_id = '$ref_user_id'";

                        $proRes = mysqli_query($conn, $updateSql);

                       



                        $_SESSION['success'] = "Welcome $uname!";
                        header('location: ../user/');
                  } else {
                        echo "Error: ".mysqli_error($conn);
                  }
            
      }
    }catch(mysqli_sql_exception $e){
         
         $_SESSION['error'] = "Something went wrong. Please try again later";
         if(isset($_SESSION['checkRef'])){
             header('location: ../register?next&ref='.$ref);
             exit();
         }else{
             header('location: ../register?next');
            exit();
         }
        
    }
?>
