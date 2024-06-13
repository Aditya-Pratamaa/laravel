    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Contact Form</title>
        <link rel="stylesheet" href="css/contact.css" />
        <script
        src="https://kit.fontawesome.com/64d58efce2.js"
        crossorigin="anonymous"
        ></script>
    </head>
    <body>
        <div class="container">
        <span class="big-circle"></span>
        <img src="img/shape.png" class="square" alt="" />
        <div class="form">
            <div class="contact-info">
            <h3 class="title">Let's get in touch</h3>
            <p class="text">
                Ayo mengobrol bersamaku!
            </p>

            <div class="info">
                <div class="information">
                <img src="img/location.png" class="icon" alt="" />
                <p>Aditya Pratama</p>
                </div>
                <div class="information">
                <img src="img/email.png" class="icon" alt="" />
                <p>adityapratama@smkwikrama.sch.id</p>
                </div>
                <div class="information">
                <img src="img/phone.png" class="icon" alt="" />
                <p>+62 895 355 321 756</p>
                </div>
            </div>

            <div class="social-media">
                <p>Connect with us :</p>
                <div class="social-icons">
                <a href="#">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="https://instagram/adlltya">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://wa.me/+62895355321756">
                    <i class="fab fa-whatsapp"></i>
                </a>
                </div>
            </div>
            </div>

            <div class="contact-form">
            <span class="circle one"></span>
            <span class="circle two"></span>

            <form action="index.html" autocomplete="off">
                <h3 class="title">Contact us</h3>
                <div class="input-container">
                <input type="text" name="name" class="input" />
                <label for="">Username</label>
                <span>Username</span>
                </div>
                <div class="input-container">
                <input type="email" name="email" class="input" />
                <label for="">Email</label>
                <span>Email</span>
                </div>
                <div class="input-container">
                <input type="tel" name="phone" class="input" />
                <label for="">Phone</label>
                <span>Phone</span>
                </div>
                <div class="input-container textarea">
                <textarea name="message" class="input"></textarea>
                <label for="">Message</label>
                <span>Message</span>
                </div>
                <input type="submit" value="Send" class="btn" />
            </form>
            </div>
        </div>
        </div>

        <script src="app.js"></script>
    </body>
    </html>