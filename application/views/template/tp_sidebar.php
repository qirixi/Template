    <!-- sidebar -->
    <div id="sidebar-nav">
        <ul id="dashboard-menu">
            <li id="home">
                <a href="index.html">
                    <i class="icon-home"></i>
                    <span>Home</span>
                </a>
            </li>            
            <li id="charts">
                <a href="chart-showcase.html">
                    <i class="icon-signal"></i>
                    <span>Charts</span>
                </a>
            </li>
            <li id="user">
                <a class="dropdown-toggle" href="#">
                    <i class="icon-group"></i>
                    <span>Users</span>
                    <i class="icon-chevron-down"></i>
                </a>
                <ul class="submenu">
                    <li id="user_list"><a href="user-list.html">User list</a></li>
                    <li id="new_user"><a href="<?php echo base_url();?>user/add_user">New user form</a></li>
                    <li id="user_profile"><a href="user-profile.html">User profile</a></li>
                </ul>
            </li>
            <li id="forms">
                <a class="dropdown-toggle" href="#">
                    <i class="icon-edit"></i>
                    <span>Forms</span>
                    <i class="icon-chevron-down"></i>
                </a>
                <ul class="submenu">
                    <li id="form_showcase"><a href="form-showcase.html">Form showcase</a></li>
                    <li id="form_wizard"><a href="form-wizard.html">Form wizard</a></li>
                </ul>
            </li>
            <li id="gallery">
                <a href="gallery.html">
                    <i class="icon-picture"></i>
                    <span>Gallery</span>
                </a>
            </li>
            <li id="calendar">
                <a href="calendar.html">
                    <i class="icon-calendar-empty"></i>
                    <span>Calendar</span>
                </a>
            </li>
            <li id="tables">
                <a href="tables.html">
                    <i class="icon-th-large"></i>
                    <span>Tables</span>
                </a>
            </li>
            <li id="ui">
                <a class="dropdown-toggle ui-elements" href="#">
                    <i class="icon-code-fork"></i>
                    <span>UI Elements</span>
                    <i class="icon-chevron-down"></i>
                </a>
                <ul class="submenu">
                    <li id="ui_elements"><a href="ui-elements.html">UI Elements</a></li>
                    <li id="icons"><a href="icons.html">Icons</a></li>
                </ul>
            </li>
            <li id="my_info">
                <a href="personal-info.html">
                    <i class="icon-cog"></i>
                    <span>My Info</span>
                </a>
            </li>
            <li id="extras">
                <a class="dropdown-toggle" href="#">
                    <i class="icon-share-alt"></i>
                    <span>Extras</span>
                    <i class="icon-chevron-down"></i>
                </a>
                <ul class="submenu">
                    <li id="code_editor"><a href="code-editor.html">Code editor</a></li>
                    <li id="grids"><a href="grids.html">Grids</a></li>
                    <li id="sign_in"><a href="<?php echo base_url();?>user/login">Sign in</a></li>
                    <li id="sign_up"><a href="signup.html">Sign up</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- end sidebar -->
    <script type="text/javascript">
		$(function(){

			var $active_li = $("#<?php if(isset($active_item)){echo $active_item;}else{echo "home";} ?>");
			$active_li.addClass('active');
			var $parent_li = $active_li.parents('li');
			if($parent_li.length>0){
				$active_li.parents('ul').css("display","block");
				$parent_li.addClass("active");
				$parent_li.prepend("<div class=\"pointer\"><div class=\"arrow\"></div><div class=\"arrow_border\"></div></div>");
			}else{
				$active_li.prepend("<div class=\"pointer\"><div class=\"arrow\"></div><div class=\"arrow_border\"></div></div>");
			}
			
		});
    </script>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    