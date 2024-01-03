<!-- HEADER -->
<?php
require '../controller/UserReviewController.php';
include "layouts/header.php"
?>

<!-- ABOUT -->
<section class="about aboutRating bookRating">
    <h1 class="heading">Tell us <span>why choose us</span></h1>
    <div class="row">
        <div class="content">
            <h3 class="title">write your review about us!</h3>
            <p style="margin-bottom: 20px">
                Your review will be shown on the landing page.
            </p>
            <form action="#" method="post">
                <input type="text" placeholder="Name" name="name" class="box" />
                <input type="email" placeholder="Email" class="box" name="email" />
                <textarea name="message" placeholder="Message" class="box" id="" cols="30" rows="10"></textarea>
                <span class="fileUpload">Profile Image (optional)</span>
                <input type="file" class="box" name="imageFileUpload" id="imageFileUpload" />
                <input type="submit" value="send review" class="btn" name="btnAddRating" />
            </form>

        </div>
    </div>
</section>

<?php
include './layouts/footer.php';
?>

<!-- Your existing script -->
<?php
// if (isset($_POST['btnAddRating'])) {

//     $request['name'] = $_POST['name'];
//     $request['email'] = $_POST['email'];
//     $request['message'] = $_POST['message'];
//     $request['image'] = $_POST['imageFileUpload'];

//     $user = new UserReviewController();
//     $user->store($request);

//     echo "customAlert.alert('Data berhasil ditambah! (notifikasi ini akan tertutup otomatis).','Pemberitahuan!'); setTimeout(function() { document.location.href='./add_rating.php'; }, 4000);";
//     // 3000 milidetik (3 detik) penundaan sebelum pemindahan halaman
// }
?>