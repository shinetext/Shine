<!DOCTYPE html>
<html>
    <head>
        <title>Shine</title>
        <link href='https://fonts.googleapis.com/css?family=Fira+Sans' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="fonts/BebasNeueBold.otf" type="text/css" charset="utf-8" /> 
        <link rel="stylesheet" href="fonts/BebasNeueRegular.otf" type="text/css" charset="utf-8" /> 
        
        <style>
	    @font-face {
	        font-family: 'Bebas Neue Bold';
	        src: url('fonts/BebasNeueBold.eot');
	        src: url('fonts/BebasNeueBold.eot?#iefix') format('embedded-opentype'),
	            url('fonts/BebasNeueBold.woff') format('woff'),
	            url('fonts/BebasNeueBold.ttf') format('truetype'),
	            url('fonts/BebasNeueBold.svg#FontName') format('svg');
	        font-weight: normal;
	        font-style: normal;
	    }

	    @font-face {
	        font-family: 'Bebas Neue Regular';
	        src: url('fonts/BebasNeueRegular.eot');
	        src: url('fonts/BebasNeueRegular.eot?#iefix') format('embedded-opentype'),
	            url('fonts/BebasNeueRegular.woff') format('woff'),
	            url('fonts/BebasNeueRegular.ttf') format('truetype'),
	            url('fonts/BebasNeueRegular.svg#FontName') format('svg');
	        font-weight: normal;
	        font-style: normal;
	    }

        .nav-bar { 
            list-style:none; 
        }

        #right {
            padding-right: 100px;
        }

        #right li { 
            display: inline; 
            float: right;
            padding: 3% 0 0.5% 0;
            margin-top: -30px;
        }

        #right li img {
            max-width: 70%;
            max-height: auto;
        }

        @media screen and (max-width: 1000px) {
            #right {
                display: none;
            }
        }

        #left {
            padding-left: 100px;
        }

        #left li {
            display: inline;
            float: left;
            display: block;
            margin: -5px 0 0 -30px;
        }

        #left li img {
            padding: 0 0 0 15px;
        }

	    .page {
	    	background-color: #E6E6E6;
	    	clear: both;
	    	overflow: scroll;
	    }

        .success {
            font-family: 'Bebas Neue Bold';
            text-align: center;
            margin-top: 10%;
        }

        .success h1 {
            font-size: 50px;
        }

        .success h3 {
        	font-family: 'Fira Sans';
        	font-size: 22px;
        }

        form {
            margin-top: 10%;
        }

        input {
            border:none;
            background-color:#FFFFFF;
            width: 18%;
            padding: 10px;
            margin: 5px;
            border-bottom: 1px solid black;
            font-family: 'Bebas Neue Regular';
            font-size: 20px;
        }

        @media screen and (max-width:1000px) {
            input { 
                width: 50%;
            }
        }

        .refer-a-friend form {
                display: block;
                text-align: center;
                font-family: 'Fira Sans';
                position: relative;
        }
        .referral_column {
                float: left;
                padding: 0 0 100px 10%;
                display: inline-block;
                width: 20%;
                text-align: left;
            }

        .referral_column input {
            width: 100%;
        }

        @media (max-width: 700px) {
		    .referral_column {
		        display: block;
		        float: none;
		        width: 80%;
		    }
		}

        .signup_button {
        	margin-top: -20px;
            padding: 1% 5% 1% 5%;
            width: 15%;
            border-radius: 25px;
            background:#FFC52D;
            font-family: 'Bebas Neue Bold';
            font-size: 28px;
            text-align: center;
            color: black;
            margin-bottom: 30%;
        }

        @media screen and (max-width:1000px) {
            .signup_button { 
                width: 27%;
            }
        }
        </style>
    </head>

    <body>
    	<div class="nav-bar">
    		<ul id="left">
    			<li><a href={{ URL::to('/') }}><img src={{asset('images/shine2_logo.png')}}></a></li>
    		</ul>
            
            <ul id="right">
                <li><a href="https://twitter.com/ShineText" target="_blank"><img src={{asset('images/twitter_Icon.png')}}></a></li>
                <li><a href="https://instagram.com/ShineText" target="_blank"><img src={{asset('images/instagram_Icon.png')}}></a></li>
                <li><a href="https://www.facebook.com/Shine-Text" target="_blank"><img src={{asset('images/facebook_Icon.png')}}></a></li>
            </ul>
    	</div>

    	<div class="page">
	    	<div class="success">
	    		<h1>Success! You're now signed up for Shine.</h1>
	    		<h3>Spread the motiv-affirmation and share with friends!</h3>
	    	</div>

	    	<div class="refer-a-friend">
	            <form action="https://secure.mcommons.com/profiles/join" method="post">                    
	                <input type="hidden" name="opt_in_path[]" value="OP4B1A27AC508266A1F4373419CE1BE391" />
	                <input type="hidden" name="redirect_to" value="https://www.mobilecommons.com/redirect_to_instructions" />
	                
	                <div class="referral_column">
	                    <input required="required" placeholder="YOUR NAME" type="text" name="person[first_name]" id="person_first_name" /></br></br>
	                    <input required="required" placeholder="YOUR PHONE NUMBER" type="text" name="person[phone]" id="person_phone" /></br>
	                </div>

	                <div class="referral_column">
	                    <input required="required" placeholder="YOUR FRIEND'S NUMBER" type="text" name="friends[]"/><br /> <input type="hidden" name="friends_opt_in_path" value="OP4B1A27AC508266A1F4373419CE1BE391" /><br>
	                    <input placeholder="YOUR FRIEND'S NUMBER (OPTIONAL)" type="text" name="friends[]"/><br /> <input type="hidden" name="friends_opt_in_path" value="OP4B1A27AC508266A1F4373419CE1BE391" /><br>               
	                </div>

	                <div class="referral_column">            
	                    <input placeholder="YOUR FRIEND'S NUMBER (OPTIONAL)" type="text" name="friends[]"/><br /> <input type="hidden" name="friends_opt_in_path" value="OP4B1A27AC508266A1F4373419CE1BE391" /><br>
	                    <input placeholder="YOUR FRIEND'S NUMBER (OPTIONAL)" type="text" name="friends[]"/><br /> <input type="hidden" name="friends_opt_in_path" value="OP4B1A27AC508266A1F4373419CE1BE391" /><br>
	                
	                </div>

	                <div style="clear: both;">
	                <input type="submit" value="SUBMIT" class="signup_button" id="center"/>
	                </div>  
	            </form>
	    	</div>
		</div>
    </body>
</html>