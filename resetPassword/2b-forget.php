
<!-- (A) PASSWORD RESET FORM -->

<form method="post" target="_self">
    Email:
    <input type="email" name="user_email" required value="john@doe.com" />
    <input type="submit" value="Reset Password" />
</form>



<!-- (B) PROCESS PASSWORD RESET REQUEST -->
<?php
    if (isset($_POST['user_email'])) {
      // (B1) CONNECT TO DATABASE
        require "2a-common.php";

      // (B2) CHECK IF VALID USER
      $stmt = $pdo->prepare("SELECT * FROM `users` WHERE `user_email`=?");
    $stmt->execute([$_POST['user_email']]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    $result = is_array($user)
            ? "" 
            : $_POST['user_email'] . " is not registered." ;
    
      // (B3) CHECK PREVIOUS REQUEST (PREVENT SPAM)
    if ($result == "") {
        $stmt = $pdo->prepare("SELECT * FROM `password_reset` WHERE `user_id`=?");
        $stmt->execute([$user['user_id']]);
        $request = $stmt->fetch(PDO::FETCH_ASSOC);
        $now = strtotime("now");
        if (is_array($request)) {
            $expire = strtotime($request['reset_time']) + $prvalid;
            if ($now < $expire) { $result = "Please try again later"; }
        }
    }
    
      // (B4) CHECKS OK - CREATE NEW RESET REQUEST
    if ($result == "") {
        // RANDOM HASH
        $hash = md5($user['user_email'] . $now);
    
        // DATABASE ENTRY
        $stmt = $pdo->prepare("REPLACE INTO `password_reset` VALUES (?,?,?)");
        $stmt->execute([$user['user_id'], $hash, date("Y-m-d H:i:s")]);
    
        // SEND EMAIL - CHANGE TO YOUR OWN!
        $from = "admin <rojda.f@gmail.com>";
        $subject = "Password reset";
        $header = implode("\r\n", [
            "From: $from",
            "MIME-Version: 1.0",
            "Content-type: text/html; charset=utf-8"
        ]);
        $link = "http://localhost/2c-reset.php?i=".$user['user_id']."&h=".$hash;
        $message = "<a href='$link'>Click here to reset password</a>";
        if (!@mail($user['user_email'], $subject, $message, $header)) {
            $result = "Failed to send email!";
        }
    }
    
      // (B5) RESULTS
    if ($result=="") { $result = "Email has been sent - Please click on the link in the email to confirm."; }
        echo "<div>$result</div>";
    }
    

?>