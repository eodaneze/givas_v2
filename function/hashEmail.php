<?php
function hashEmail($email) {
    // Split the email address into parts: local part and domain part
    list($local, $domain) = explode('@', $email);

    // Get the length of the local part
    $local_length = strlen($local);

    // Keep the first three characters
    $first_three_chars = substr($local, 0, 3);

    // Hash the characters after the first three characters except the last character before "@"
    $hash_length = $local_length - 4; // Exclude the first three characters and the last character before "@"
    $hashed_middle_part = str_repeat('*', $hash_length);

    // Keep the last character before "@"
    $last_char_index = $local_length - 1;
    $last_char = $local[$last_char_index];

    // Concatenate the parts to form the hashed email
    $hashed_email = $first_three_chars . $hashed_middle_part . $last_char . '@' . $domain;

    return $hashed_email;
}

// Example usage
// $email = 'examplegod@gmail.com';
// $hashed_email = hashEmail($email);
// echo $hashed_email; // Output: exa******d@gmail.com



