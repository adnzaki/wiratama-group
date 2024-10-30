<div class="contact-inner-area sp6">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-inner-boxarea">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <div class="contact-input-section" id="app">
                                <h3>Mulai Koneksi Bersama Kami!</h3>
                                <div class="space16"></div>
                                <p>Punya pertanyaan, butuh bantuan, atau ingin tahu lebih lanjut? Kami siap membantu Anda. <br />Isi form di bawah, dan tim kami akan segera menghubungi Anda.</p>
                                <div class="space12"></div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="space20"></div>
                                        <div class="input-area">
                                            <input type="text" required placeholder="Your Name*" v-model="contactName">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="space20"></div>
                                        <div class="input-area">
                                            <input type="email" required placeholder="Email*" v-model="contactEmail">
                                        </div>
                                    </div>


                                    <div class="col-lg-12">
                                        <div class="space20"></div>
                                        <div class="input-area">
                                            <textarea required placeholder="Your Message*" v-model="contactMessage"></textarea>
                                        </div>
                                    </div>
                                    <div class="space24"></div>
                                    <div class="col-lg-12">
                                        <div class="alert alert-danger custom-alert" v-if="showWarning" role="alert">
                                            Silakan isi form pesan dengan lengkap!
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="space32"></div>
                                        <div class="input-area text-end">
                                            <button @click="sendWhatsapp2" class="header-btn4">Send Message</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="contact-box">
                                <div class="icons">
                                    <img src="assets/img/icons/contact-icon1.svg" alt="">
                                </div>
                                <div class="content">
                                    <p>Kontak</p>
                                    <a href="<?= $contactLink ?>"><?= $contactNumber ?></a>
                                </div>
                            </div>
                            <div class="space20"></div>
                            <div class="contact-box">
                                <div class="icons">
                                    <img src="assets/img/icons/contact-icon2.svg" alt="">
                                </div>
                                <div class="content">
                                    <p>Email</p>
                                    <a href="mailto:<?= $email ?>"><?= $email ?></a>
                                </div>
                            </div>
                            <div class="space20"></div>
                            <div class="contact-box">
                                <div class="icons">
                                    <img src="assets/img/icons/contact-icon4.svg" alt="">
                                </div>
                                <div class="content">
                                    <p>Alamat Kantor</p>
                                    <a href="<?= $mapLocation ?>" target="_blank"><?= $location ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="space80"></div>

        <div class="row">
            <div class="col-lg-4">
                <div class="contact-author-box">
                    <div class="img1">
                        <img src="<?= $img ?>all-images/contact/logo-wiratama-awan.jpg" alt="">
                    </div>
                    <div class="space24"></div>
                    <p>Butuh komunikasi lebih lanjut? Kunjungi kantor kami dan staff kami siap membantu anda secara langsung!</p>
                    <div class="space32"></div>
                    <!-- <div class="btn-area1">
                        <a href="#"><img src="assets/img/icons/whatsapp.svg" alt=""> Ask Question On WhatsApp</a>
                    </div> -->
                </div>
            </div>
            <div class="col-lg-8">
                <div class="maps-area">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.590569307066!2d107.05375339999999!3d-6.317389200000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6991d6d29fc559%3A0x70834b22ff3d0ab7!2sWiratama%20residence%202!5e0!3m2!1sid!2sid!4v1730272256814!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>