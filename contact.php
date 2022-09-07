<?php
    include('partials/header.php');
?>
<div class="contact-container">
    <div class="contact-text-container">
        <div>
            <div class="contact-title">Let's Chat!</div>
            <div class="contact-description">Feel free to connect over social media or send a message here!
                <div class="contact-grid">
                    <div class="contact-icon"><a href="mailto:hansonzhliu@gmail.com"><img src="/images/mail.png" alt="" style="width: 25px;"></a></div>
                    <div class="contact-icon"><a href="https://www.linkedin.com/in/hansonzhliu/" target="_blank"><img src="/images/linkedin.png" alt="" style="width: 25px;"></a></div>
                    <div class="contact-icon"><a href="https://github.com/hansonliu72888" target="_blank"><img src="/images/github.png" alt="" style="width: 25px;"></a></div>
                    <div class="contact-icon"><a href="https://www.instagram.com/hansonzhliu/" target="_blank"><img src="/images/instagram.png" alt="" style="width: 25px;"></a></div>
                </div>
            </div>
        </div>
        <div class="contact-form">
            <form action="form-to-email.php" method="post">
                <div>
                    <input type="text" name="name" placeholder="Name">

                </div>
                <div>
                    <input type="email" name="email" placeholder="Email">
                </div>
                <div>
                    <input type="text" name="subject" placeholder="Subject">
                </div>
                <div>
                    <textarea name="message" placeholder="Message" style="height:200px" required></textarea>
                </div>
                <div class="contact-submit-container">
                    <button class="contact-submit-button" type="submit" name="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
    include('partials/footer.php');
?>
<script language="JavaScript">
    var frmvalidator  = new Validator("contactform");
    frmvalidator.addValidation("name","req","Please provide your name");
    frmvalidator.addValidation("email","req","Please provide your email");
    frmvalidator.addValidation("email","email", "Please enter a valid email address");
</script>
    
    