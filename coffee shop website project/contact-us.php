<?php

include('connection.php');
session_start();

  global $conn;

  $check_login = $conn->query("SELECT
                            users.*,
                            user_logs.is_login,
                            user_logs.created_at as date_logs
                          FROM users LEFT JOIN user_logs ON users.id = user_logs.users_id
                          ORDER BY user_logs.created_at DESC");
  $cl = mysqli_fetch_assoc($check_login);

  if ($cl['is_login'] == 1) {
    include('userheader.php');
  }else{
    include('header.php');
  }

?>

<div class="container contact">
    <div class="container mx-4 my-5">
        <h1>FAQs</h1>
        <section class="faq-container">
            <div class="faq-one">
                <!-- faq question -->
                <h2 class="faq-page">What is Caffeimate?</h2>
                <!-- faq answer -->
                <div class="faq-body">
                    <p>Caffeimate is an e-commerce website designed by Group 2. They are the most talented students
                        of Web Development Batch 18 trained by Ms. Angeli Ramirez.
                        This website cater both pick up and delivery services for coffee and cake lovers.
                        </p>
                </div>
            </div>
            <hr class="hr-line">
            <div class="faq-two">
                <!-- faq question -->
                <h2 class="faq-page">Do you accept late night deliveries?</h2>
                <!-- faq answer -->
                <div class="faq-body">
                    <p>As of the moment, Caffeimate doesn't accept late night deliveries
                    because we do not have any branches yet that's open for 24 hours.</p>
                </div>
            </div>
            <hr class="hr-line">
            <div class="faq-three">
                <!-- faq question -->
                <h2 class="faq-page">What are your payment methods?</h2>
                <!-- faq answer -->
                <div class="faq-body">
                    <p><ul>We accept payment through:</ul>
                        <li>Cash</li>
                        <li>Credit/Debit Card</li>
                        <li>Gcash</li>
                    </p>
                </div>
            </div>
        </section>
        </main>
    </div>

    <div class="container my-3">
        <div class="footer_get_touch_inner grid-70-30">
            <div class="colmun-70 get_form">
                <div class="get_form_inner">
                    <div class="get_form_inner_text">
                        <h3>Send us a Message</h3>
                    </div>
                    <form action="#">
                        <div class="grid-50-50">
                            <input type="text" placeholder="First Name">
                            <input type="text" placeholder="Last Name">
                            <input type="email" placeholder="Email">
                            <input type="tel" placeholder="Phone">
                        </div>
                        <div class="grid-full">
                            <textarea placeholder="Your Message" cols="30" rows="10"></textarea>
                            <input type="submit" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
            <div class="colmun-30 get_say_form pl-2">
                <h5>Contact Us</h5>
                <ul class="get_say_info_sec mx-2">
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                        </svg>
                        <a href="mailto:">inquiry@caffeimate.com</a>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                        </svg>
                        <a href="tel:">+63 0123 256789</a>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                        </svg>
                        <a href="#">Caffeimate Store Address
                            <p class="font-weight-light my-0">123 Coffee Street</p>
                            <p class="font-weight-light my-0">Manila, 1420</p>
                        </a>
                    </li>
                </ul>
                <ul class="get_say_social-icn justify-content-center mx-3">
                    <li><button class="btn"><img class="px-0" src="image/socials/IG Icon.png" alt="..."></button></li>
                    <li><button class="btn"><img class="px-0" src="image/socials/Facebook Icon.png" alt="..."></button></li>
                    <li><button class="btn"><img class="px-0" src="image/socials/Twitter Icon.png" alt="..."></button></li>
                    <li><button class="btn"><img class="px-0" src="image/socials/Youtube Icon.png" alt="..."></button></li>
                </ul>
            </div>
        </div>
    </div>



</div>

<?php
include_once 'footer.php'
?>
