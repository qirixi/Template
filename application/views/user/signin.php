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
                <?php echo form_open('user/login') ?>
                <input id="username" name="username" class="span12" type="text" placeholder="用户名" />
                <input id="passwd" name="passwd" class="span12" type="password" placeholder="密码" />
                <!-- <a href="#" class="forgot">Forgot password?</a> -->
                <div class="remember">
                    <input id="remember_me" type="checkbox" />
                    <label for="remember_me">Remember me</label>
                </div>
         
                <input class="btn-glow primary login" type="submit" name="submit" value="Log in" /> 
                </form>
            </div>
        </div>

        <!-- <div class="span4 no-account">
            <p>Don't have an account?</p>
            <a href="signup.html">Sign up</a>
        </div> -->
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

           
    		var COOKIE_NAME = 'username';
    		var PASSWORD = 'password';
    		if($.cookie(COOKIE_NAME)){
    			$("#username").val($.cookie(COOKIE_NAME));
    			$("#passwd").val($.cookie(PASSWORD));
    		}
    		$("#remember_me").click(function(){
    			if($(this).is(':checked')){
    				$.cookie(COOKIE_NAME, $("#username").val() , { path: '/', expires: 10 });  
    				$.cookie(PASSWORD, $("#passwd").val() , { path: '/', expires: 10 }); 
    			}else{
    				$.cookie(COOKIE_NAME, null, { path: '/' });  //删除cookie  
    				$.cookie(PASSWORD, null, { path: '/' });  //删除cookie  
    			}
    		});
    	

        });
    </script>