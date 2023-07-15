<?php 
    include('partials-font/menu.php');
?>
    
    <!-- contact section start -->
    <section class="contact">
        <div class="container">

            <div class="box">
                <div class="contact form">
                    <h3>Send a Message</h3>
                    <form action="">
                        <div class="formBox">
                            <div class="row50">
                                <div class="inputBox">
                                    <span>First Name</span>
                                    <input type="text" placeholder="John">
                                </div>

                                <div class="inputBox">
                                    <span>Last Name</span>
                                    <input type="text" placeholder="Doe">
                                </div>
                            </div>

                            <div class="row50">
                                <div class="inputBox">
                                    <span>Email</span>
                                    <input type="email" placeholder="John@gmail.com">
                                </div>

                                <div class="inputBox">
                                    <span>Mobile</span>
                                    <input type="number" placeholder="019********">
                                </div>
                            </div>

                            <div class="row100">
                                <div class="inputBox">
                                    <span>Message</span>
                                    <textarea name="" id="" cols="30" rows="10" placeholder="Write your message here..."></textarea>
                                </div>
                            </div>

                            <div class="row100">
                                <div class="inputBox">
                                    <input type="submit" value="send" class=".btn btn-primary">
                                </div>
                            </div>

                        </div>
                    </form>
                </div>

                <div class="contact info">
                    <h3>Contact Info</h3>
                    <div class="infoBox">
                        <div>
                            <span><ion-icon name="location-outline"></ion-icon></span>
                            <p>4952 Roosevelt Street <br>Fremont, CA 94539</p>
                        </div>
                        <div>
                            <span><ion-icon name="mail-outline"></ion-icon></span>
                            <a href="mailto:lorem@gmail.com">lorem@gmail.com</a>
                        </div>
                        <div>
                            <span><ion-icon name="call-outline"></ion-icon></span>
                            <a href="tel:4153680508">415-368-0508</a>
                        </div>
                    </div>
                </div>

                <div class="contact map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50633.543219936626!2d-121.89420899999999!3d37.51743499999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fc42851208cdb%3A0x2ee76e1eb80863b3!2sFremont%2C%20CA%2094539%2C%20USA!5e0!3m2!1sen!2sbd!4v1687894706885!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- contact section end -->
    
<?php 
    include('partials-font/footer.php');
?>