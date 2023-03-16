<?php
include('inc/header.php');
?>
<?php
error_reporting(0);
include('inc/config.php');
if (isset($_POST['submit1'])) {
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobileno'];
    $subject = $_POST['subject'];
    $description = $_POST['description'];
    $sql = "INSERT INTO  tblenquiry(FullName,EmailId,MobileNumber,Subject,Description) VALUES(:fname,:email,:mobile,:subject,:description)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':fname', $fname, PDO::PARAM_STR);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':mobile', $mobile, PDO::PARAM_STR);
    $query->bindParam(':subject', $subject, PDO::PARAM_STR);
    $query->bindParam(':description', $description, PDO::PARAM_STR);
    $query->execute();
    $lastInsertId = $dbh->lastInsertId();
    if ($lastInsertId) {
        $msg = "Enquiry  Successfully submited";
    } else {
        $error = "Something went wrong. Please try again";
    }
}
?>

<div class="row container ms-5">
    <div class="col-lg-6">
        <h2 class="mt-5   fw-bold h-font ">Enquiry Form</h2>
        <form method="post">
            <?php if ($error) { ?><div class="errorWrap">
                <strong>ERROR</strong>:<?php echo htmlentities($error); ?>
            </div><?php } else if ($msg) { ?><div class="succWrap">
                <strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?>
            </div><?php } ?>
            <p style="max-width: 450px;">

                <b>Full name</b> <input type="text" name="fname" class="form-control" id="fname" placeholder="Full Name"
                    required="">
            </p>
            <p style="max-width: 450px;">
                <b>Email</b> <input type="email" name="email" class="form-control" id="email"
                    placeholder="Valid Email id" required="">
            </p>

            <p style="max-width: 450px;">
                <b>Mobile No</b> <input type="text" name="mobileno" class="form-control" id="mobileno" maxlength="10"
                    placeholder="10 Digit mobile No" required="">
            </p>

            <p style="max-width: 450px;">
                <b>Subject</b> <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject"
                    required="">
            </p>
            <p style="max-width: 450px;">
                <b>Description</b> <textarea name="description" class="form-control" rows="6" cols="50" id="description"
                    placeholder="Description" required=""></textarea>
            </p>

            <p style="max-width: 450px;">
                <button type="submit" name="submit1" class="btn-primary btn">Submit</button>
            </p>
        </form>
    </div>
    <div class="col-lg-6" style="padding-right: 5em; padding-top: 5em;padding-bottom: 5em;">
        <img src="images/icons/questions-animate.svg" width="100%" alt="">
    </div>
</div>




<?php
include('inc/footer.php');
?>