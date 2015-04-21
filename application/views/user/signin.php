 <!-- background switcher -->
    <div class="bg-switch visible-desktop">
        <div class="bgs">
            <a href="#" data-img="landscape.jpg" class="bg active">
                <img src="<?php echo base_url();?>img/bgs/landscape.jpg" />
            </a>
            <a href="#" data-img="blueish.jpg" class="bg">
                <img src="<?php echo base_url();?>img/bgs/blueish.jpg" />
            </a>            
            <a href="#" data-img="7.jpg" class="bg">
                <img src="<?php echo base_url();?>img/bgs/7.jpg" />
            </a>
            <a href="#" data-img="8.jpg" class="bg">
                <img src="<?php echo base_url();?>img/bgs/8.jpg" />
            </a>
            <a href="#" data-img="9.jpg" class="bg">
                <img src="<?php echo base_url();?>img/bgs/9.jpg" />
            </a>
            <a href="#" data-img="10.jpg" class="bg">
                <img src="<?php echo base_url();?>img/bgs/10.jpg" />
            </a>
            <a href="#" data-img="11.jpg" class="bg">
                <img src="<?php echo base_url();?>img/bgs/11.jpg" />
            </a>
        </div>
    </div>


    <div class="row-fluid login-wrapper">
        <a href="index.html">
            <img class="logo" src="<?php echo base_url();?>img/logo-white.png" />
        </a>

        <div class="span4 box">
            <div class="content-wrap">
                <h6>Log in</h6>
                <input class="span12" type="text" placeholder="E-mail address" />
                <input class="span12" type="password" placeholder="Your password" />
                <a href="#" class="forgot">Forgot password?</a>
                <div class="remember">
                    <input id="remember-me" type="checkbox" />
                    <label for="remember-me">Remember me</label>
                </div>
                <a class="btn-glow primary login" href="index.html">Log in</a>
            </div>
        </div>

        <div class="span4 no-account">
            <p>Don't have an account?</p>
            <a href="signup.html">Sign up</a>
        </div>
    </div>


    <!-- pre load bg imgs -->
    <script type="text/javascript">
        $(function () {
        	$("html").addClass("login-bg");
            // bg switcher
            var $btns = $(".bg-switch .bg");
            $btns.click(function (e) {
                e.preventDefault();
                $btns.removeClass("active");
                $(this).addClass("active");
                var bg = $(this).data("img");

                
                $("html").css("background-image", "url('<?php echo base_url();?>img/bgs/" + bg + "')");
               
            });

        });
    </script>