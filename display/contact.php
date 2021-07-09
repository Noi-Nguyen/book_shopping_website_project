<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname  = $_POST['fullname'];
    $email     = $_POST['email'];
    $subject   = $_POST['subject'];
    $message   = $_POST['message'];

    $query  = "insert into phanhoi(fullname, email, message, subject, day) values ('$fullname', '$email', '$message', '$subject', now())";
    $rowss = $db->exec($query);
}
?>

<div class="container">
    <div class="google">
        <div class="google-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3918.2533083672447!2d106.80109394285279!3d10.868328283747362!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xafa66f9c8be3c91!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2jhu4cgVGjDtG5nIHRpbiDEkEhRRy1IQ00!5e0!3m2!1svi!2s!4v1492510743872" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>


    <?php if (isset($rowss)) { ?>
        <div class="alert alert-success" role="alert">
            <strong> Thank you for responding to us! </strong>
        </div>
    <?php } ?>

    <div class="demo-contact">
        <form class="contact" method="post" id="contact-form">
            <h2>Liên hệ với chúng tôi</h2>
            <div class="half-contact contact">
                <input type="text" id="input-name" name="fullname" placeholder="Tên">
                <input type="email" id="input-email" name="email" placeholder="Email">
                <input type="text" id="input-subject" name="subject" placeholder="Tiêu đề">
            </div>

            <div class="half-contact contact pull-right">
                <textarea name="message" type="text" id="input-message" placeholder="Nội dung"></textarea>
            </div>
            <input type="submit" value="Gửi phản hồi" id="input-submit-contact">

        </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>
<script>
    jQuery(function($) {

        $("#contact-form").validate({
            // 	onfocusout: false,
            // 	onkeyup: false,
            // 	onclick: false,
            rules: {
                fullname: {
                    required: true,
                    maxlength: 15
                },
                email: {
                    required: true,
                    email: true,
                }
            },
            messages: {
                "fullname": {
                    required: "Mời bạn nhập tên liên hệ",
                    maxlength: "Chỉ nhập được tối đa 15 ký tự"
                },
                "email": {
                    required: "Mời bạn nhập thông tin email",
                    email: "Hãy nhập đúng định dạng email"
                },
            }
        });

    });
</script>