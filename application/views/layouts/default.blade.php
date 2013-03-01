<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />


<title>Petmatchup - Find your pet</title>

<link href="css/style.css" rel="stylesheet" type="text/css" />
{{ HTML::style('css/style.css') }}
<link href="css/navigation.css" rel="stylesheet" type="text/css" />
{{ HTML::style('css/navigation.css') }}

<script type="text/javascript" src="fonts/cufon-yui.js"></script>
{{ HTML::script('fonts/cufon-yui.js'); }}
<script type="text/javascript"  src="fonts/Helvetica_500-Helvetica_700.font.js"></script>
{{ HTML::script('fonts/Helvetica_500-Helvetica_700.font.js'); }}
<script type="text/javascript">  
    Cufon.replace('h2,h3');
</script>

<script src="js/jquery-1.5.2.min.js" type="text/javascript"></script>
{{ HTML::script('js/jquery-1.5.2.min.js'); }}
<script src="js/jquery.faded.js" type="text/javascript"></script>

{{ HTML::script('js/jquery.faded.js'); }}
<script type="text/javascript">
	   $(function(){
	        $("#faded").faded();
		});
</script>

</head>

<body>

	<div class="maindiv">
		<div class="wrapper">
		
			
			
			
			<!--Header Section-->
			<div id="header">
				<div class="logodiv"><a href="index.html" title="Petmatchup"><!--<img src="./images/logo.png" alt="Home">-->{{ HTML::image('./images/logo.png'); }}</a></div>
				<div class="headerright">
				
					
					<!--Social Media Section-->
					<div class="socialmedia">
						<div class="socialimg"><a href="#" title="Follow us on Social Media">
                        <!--<img src="images/social-icon4.png" />-->{{ HTML::image('images/social-icon4.png'); }}</a></div>
						<div class="socialimg"><a href="#" title="Follow us on Social Media">
                        <!--<img src="images/social-icon3.png" />-->{{ HTML::image('images/social-icon3.png'); }}</a></div>
						<div class="socialimg"><a href="#" title="Follow us on Google Plus">
                        <!--<img src="images/googleplus-icon.png" />-->{{ HTML::image('./images/googleplus-icon.png'); }}</a></div>
						<div class="socialimg"><a href="#" title="Follow us on Facebook">
                        <!--<img src="images/facebook-icon.png" />-->{{ HTML::image('images/facebook-icon.png'); }}</a></div>
						<div class="clear"></div>
					</div>
					
					
					<!--Header Search Section-->
					<div class="searchsection">
						
                        
                        <div class="loginform">
						{{ Form::open('login', 'POST') }}

      {{ Form::token() }}

      {{ Form::text('email', Input::Old('email') , array('id'=>'email', 'class' => 'input-block-level', 'placeholder' => 'Email')) }}

      {{ Form::text('password', Input::Old('password') , array('id'=>'password', 'class' => 'input-block-level', 'placeholder' => 'Password')); }}  

      <div class="signinbtn">     
     
      {{ Form::submit('Sign In', array('class'=>'btn btn-large btn-primary align-right')) }}
      
      </div>

    {{ Form::close() }}
     <div class="loginforma">
                    <a href="#">Forgot password</a>
                    </div>
    				
    				</div>
                    
                    
                     
					</div>
					
					
				</div>
			</div>
	
			<!--Navigation Section-->		
			<div class="navigation">
				<ul id="superfish-1" class="sf-menu">
					<li class="first"><a href="#" class="active" title="Home">Home</a></li>
					<li><a href="#" title="Search">Search</a></li>
					<li><a href="#" title="About Us">About Us</a></li>
					<li><a href="#" title="Dogs for Sale">Dogs for Sale</a></li>
					<li><a href="#" title="Gogs for Adoption">Gogs for Adoption</a></li>
					<li><a href="#" title="Post a Profile">Post a Profile</a></li>
					<li class="last"><a href="contact" title="Contact Us">Contact Us</a></li>
				</ul>
			</div>
            
            @yield('content')
            
            <!--Footer Section-->
			<div id="footer">
				<div class="links">
					<a href="index.html" title="Home">Home</a>   |        
					<a href="index.html" title="About Us">About Us</a> |          
					<a href="index.html" title="Services">Services </a> |         
					<a href="index.html" title="Categories">Categories</a> |          
					<a href="index.html" title="Search">Search </a>     |     
					<a href="index.html" title="Post a Profile">Post a Profile </a> |         
					<a href="index.html" title="Contact Us">Contact Us</a>       |    
					<a href="index.html" title="Privacy Policy">Privacy Policy</a>
				</div>
				<div class="copyright">© 2012 Petmatchup.com / All Rights Reserved </div>
			</div>
			
			
		
		</div>
	</div>
    
    </body>
    
    </html>