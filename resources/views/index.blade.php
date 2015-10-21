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
                margin-top: -40px;
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

            #nav-refer {
                padding: 5% 15% 5% 15%;
                border-radius: 25px;
                background: #FFC52D;
                font-family: 'Bebas Neue Bold';
                font-size: 22px;
                text-align: center;
                color: black;
                text-decoration: none;
            }


            @media (max-width: 1000px) {
                #nav-refer {
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
/*                <ul class="drop_menu">
                    <li><a href="#"><img src={{asset('images/hamburger.png')}}></a>
                        <ul>
                            <li><a href="#about">ABOUT</a></li>
                            <li><a href="#testimonials">TESTIMONIALS</a></li>
                            <li><a href="#refer">REFER-A-FRIEND</a></li>
                            <li><a href="#contact">CONTACT</a></li>
                        </ul>
                    </li>
                </ul>*/

            .drop_menu {
                background: white;
                padding:0;
                margin:0;
                list-style-type:none;
                /*height: 30px;*/
            }
            
            .drop_menu li { 
                float:left; 
            }
                
            .drop_menu li a {
                padding:9px 20px;
                display:block;
                color: black;
                text-decoration:none;
                font-family: 'Bebas Neue Regular';
                font-size: 22px;
            }

            .drop_menu li a img {
                width: 60%; 
                height: auto;
                padding: 0px;
            }
            
                /* Submenu */
            .drop_menu ul {
                position: absolute;
                left:-9999px;
                top:-9999px;
                list-style-type: none;
            }

            .drop_menu:hover {
                display:block;
                height: 110px;

            }
            
            .drop_menu li:hover { 
                position:relative; 
                height: 30px;
            }
                
            .drop_menu li:hover ul {
                left:70px;
                top:50px;
                background: white;
                padding:0px;
            }
                 
            .drop_menu li:hover ul li a {
                padding:10px;
                display:block;
                width:168px;
                text-indent:15px;
                background-color: white;
            }
            
            .drop_menu li:hover ul li a:hover { 
                background: #E6E6E6; 
                padding: 5px;
            }

            @media (max-width: 1000px) {
                #left {
                    display: none;
                }
            }

            .header {
                background: url('{{asset('images/girl_smiling2.png')}}');
                background-size: cover;
                background-color: #E6E6E6;
                clear: both;
            }

            @media screen and (max-width:1000px) {
                .header { 
                    background: none;
                    background-color: #E6E6E6;
                    clear: both;
                }
            }

            #logo_column {
                display: block;
                text-align: center;
                padding-bottom: 5%;
                font-family: 'Fira Sans';
                position: relative;
            }

            #logo_column img {
                max-width: 25%;
                max-height: auto;
            }

            #logo_column h3 {
                padding-bottom: 2%;
                font-size: 24px;
                width: 20%;
                position: absolute;
                top: 35%;
                left: 40%;
            }

            @media screen and (max-width:1000px) {
                #logo_column h3 { 
                    position: relative;
                    width: 20%;
                    padding-bottom: 0;
                }
            }

            form {
                margin-top: 5%;
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

            .column {
                display: inline-block;
                width: 20%;
                text-align: center;
                padding: 100px 0 0 10%;
                color: black;
                font-family: 'Fira Sans';
            }

            .column h3 {
                font-family: 'Bebas Neue Bold';
                font-size: 40px;
                margin-bottom: 5px;
            }

            .column img {
                height: 114px;
                width: auto;
            }

            #mail {
                height: 80px;
                width: auto;
                padding: 20px 0 10px 0;
            }

            .column p {
                float: left;
            }

            @media (max-width: 700px) {
                .column {
                    display: block;
                    float: none;
                    width: 80%;
                }
            }

            .signup_button {
                padding: 1% 5% 1% 5%;
                width: 15%;
                margin: 30px;
                border-radius: 25px;
                background:#FFC52D;
                font-family: 'Bebas Neue Bold';
                font-size: 28px;
                text-align: center;
                color: black;
            }

            @media screen and (max-width:1000px) {
                .signup_button { 
                    width: 27%;
                }
            }

            .text_bubble_column {
                text-align: left;
                font-family: 'Fira Sans';
                position: absolute;
                top: 0px;
                right: 0px;
                margin: 15% 5% 0 25%;
            }

            #text_bubble {
                border-radius: 25px;
                background: black;
                color: white;
                padding: 20px;
                width: 27%;
                float: right;
                margin: 1% 10% 0 10%;
            }

            #last_text_bubble {
                background: url('{{ asset('images/chat_bubble.png') }}');
                width: 26%;
                background-size: 100% 70%;
                background-repeat: no-repeat;
                float: right;
                margin: 1% 10% 0 10%;
                clear: both;
                color: white;
                padding: 1% 2% 5% 4%;
                text-align: left;
            }

            @media screen and (max-width:1000px) {
                .text_bubble_column { 
                    display:none 
                }
            }

            .testimonials {
                margin-top: 10%;
                overflow: scroll;
                background: #E6E6E6;
            }

            .testimonials h2{
                font-family: 'Bebas Neue Bold';
                font-size: 40px;
                padding: 3% 0 0 10%;
                margin-top: 5%;
            }

            .testimonials_column {
                float: left;
                padding: 0 0 100px 10%;
                display: inline-block;
                width: 20%;
                text-align: left;
                font-family: 'Fira Sans';
                font-style: italic;
            }


            .testimonials_column img {
                width: 90%;
                height: 90%;
            }

            @media (max-width: 700px) {
                .testimonials_column {
                    display: block;
                    float: none;
                    width: 80%;                    
                }
            }

            .refer-a-friend h2{
                margin-top: 5%;
                padding-top: 5%;
                font-family: 'Bebas Neue Bold';
                font-size: 40px;
                padding: 3% 0 0 10%;
                text-align: left;
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

            #center {
                margin: 0 auto;
            }

            .about {
                margin-top: 10%;
                padding-bottom: 10%;
                overflow: scroll;
                background: url('{{ asset('images/map_icon.png') }}'); 
                background-repeat: no-repeat;
                background-position: 85% 80%;
                background-size: 18%;
                background-color: #E6E6E6;
            }

            .about h2 {
                font-family: 'Bebas Neue Bold';
                font-size: 40px;
                padding: 3% 0 0 10%;
                margin-top: 5%;
            }

            .about p {
                font-family: 'Fira Sans';
                text-align: left;
                padding: 0 35% 5% 10%;
                z-index: 1;
            }

            .about a {
                font-style: italic;
                color: #FFC52D;
            }

            .footer { 
                list-style:none; 
                background-color: black;
                overflow: scroll;
                padding-left: 5%;
                margin-top: 0;
            }

            .footer h1 {
                float: left;
                color: white;
                display: block;
                position: relative;
                font-family: 'Bebas Neue Regular';
            }

            .footer li { 
                display:inline; 
                float: right;
                padding-top: 2%;
                max-width: 42px;
            }

            .footer li img {
                max-width: 75%;
                max-height: auto;
                position: relative;
            }

            #footer-social {
                margin-right: 5%;
            }

            @media (max-width: 900px) {
                .footer li img{
                    margin-top: 25%;
                }
            }
        </style>
    </head>

    <body>
        <div class="nav-bar">
            <ul id="left">
  <!--               <ul class="drop_menu">
                    <li><a href="#"><img src={{asset('images/hamburger2.png')}}></a>
                        <ul>
                            <li><a href="#about">ABOUT</a></li>
                            <li><a href="#testimonials">TESTIMONIALS</a></li>
                            <li><a href="#refer">REFER-A-FRIEND</a></li>
                            <li><a href="#contact">CONTACT</a></li>
                        </ul>
                    </li>
                </ul> -->

                <li><img src={{asset('images/shine2_logo.png')}}></li>
            </ul> 

            <ul id="right">
                <li><a href="#refer" id="nav-refer">REFER FRIENDS</a></li>
                <li><a href="https://twitter.com/ShineText" target="_blank"><img src={{asset('images/twitter_Icon.png')}}></a></li>
                <li><a href="https://instagram.com/ShineText" target="_blank"><img src={{asset('images/instagram_Icon.png')}}></a></li>
                <li><a href="https://www.facebook.com/Shine-Text" target="_blank"><img src={{asset('images/facebook_Icon.png')}}></a></li>
            </ul>
        </div>

        <div class="header">    
            <div class="text_bubble_column">
                <div id="text_bubble">
                    <p>Welcome to Shine! We all need a little help to get through the day & feel our best self. We'll text you daily work hacks & reminders of why you're a badass.</p>
                </div>

                <div id="text_bubble">
                    <p>So pumped!</p>
                </div>

                <div id="last_text_bubble">
                    <p>Glad to hear it. You're going to crush it today. #ShineOn.</p>
                </div>
            </div>

            <div id="logo_column">
                <img src={{asset('images/shine_logo.png')}}>

                <h3>A daily text so you can slay today.</h3>

                <form action="https://secure.mcommons.com/profiles/join" method="post">                    
                    <input type="hidden" name="opt_in_path[]" value="OP4B1A27AC508266A1F4373419CE1BE391" />
                    <input type="hidden" name="redirect_to" value={{ URL::route('confirmation') }} />

                    <input required="required" placeholder="FIRST NAME" type="text" name="person[first_name]" id="person_first_name" /></br>
                    
                    <!-- <input placeholder="LAST NAME (OPTIONAL)" type="text" name="person[last_name]" id="person_last_name" /></br> -->

                    <input required="required" placeholder="PHONE NUMBER" type="text" name="person[phone]" id="person_phone" /></br>
          
                    <input required="required" placeholder="BIRTHDAY" onfocus="(this.type='date')" id="person_birthday" name="person[birthday]" size="30" type="text" /></br>   

                    <input placeholder="EMAIL ADDRESS (OPTIONAL)" id="person_email" name="person[email]" size="30" type="email" /></br>
          
                    <input type="submit" value="SIGNUP" class="signup_button"/>
                </form>
                
                <!-- <span style="font-size:80%"><a href="https://www.mobilecommons.com/about/terms-and-conditions/">Msg &amp; Data Rates May Apply.</a><br />Text <b>STOP</b> to opt out. No purchase necessary.<br />Expect 4 msgs/mo. <a href="https://www.mobilecommons.com/about/terms-and-conditions/privacy-policy/">Terms and Conditions</a></span> -->
            </div>
        </div>

    <a name="about"></a>
    <div class="column">
        <img src={{asset('images/coffee_icon.png')}}>
            <h3>A.M. MOTIVATION</h3>
              <p>We curate and create content to send you every morning around your lifestyle. Learn how positive affirmations, the perfect playlist, and a work bestie can boost confidence and reduce stress at the office.</p>
    </div>
    
    <div class="column">
        <img src={{asset('images/lightning2_icon.png')}}>
            <h3>SAY BYE TO ANXIETY </h3>
              <p>Daily affirmations are proven to reprogram negative thought patterns. Shine texts help target dysfunctional beliefs through short positive statements (a common practice in Cognitive Behavioral Therapy and modern meditation).</p>
    </div>
    
    <div class="column">
        <img src={{asset('images/mail_icon.png')}} id="mail">
            <h3>SHARE WITH FRIENDS</h3>
              <p>The best part? You can share all of this motiv-affirmation (motivation + affirmation. Yeah, we made up a word.) with your friends to give them the boost they need. A few Channing Tatum GIFs never hurt anyone, right?</p>
    </div>

    <div style="clear: both;"></div>
    
    <a name="testimonials"></a>
    <div class="testimonials">
        <h2>WORD ON THE STREET</h2>
        <div class="testimonials_column">
            <img src={{asset('images/lindsay.png')}}>
            <p>"This week was awesome, I loved hearing my text sound go off in the AM as I was getting ready for work. It's the perfect mix of being smart, funny, and intelligent and of course accessible! Shine is DOPE!" - Lindsay Bishop</p>  
        </div>

        <div class="testimonials_column">
            <img src={{asset('images/brenna.png')}}>
            <p>"EVERYTHING I ever needed to make it through another awkward week of my version of adulting." - Brenna Smith</p>
        </div>

        <div class="testimonials_column">
            <img src={{asset('images/jenni.png')}}>
            <p>"Thank you so much for the positive energy. We live in such a stressful world. It's incredible what a few positive words or a funny picture can do to our psyche." - Jenni Bobbio</p>
        </div>
    </div>

    <div style="clear: both;">

    <a name="refer"></a>
    <div class="refer-a-friend">
        <h2>Share Shine texts with your friends!</h2>
            <form action="https://secure.mcommons.com/profiles/join" method="post">                    
                <input type="hidden" name="opt_in_path[]" value="OP4B1A27AC508266A1F4373419CE1BE391" />
                    <input type="hidden" name="redirect_to" value={{ URL::route('refer_confirmation') }} />
                
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

    <a name="contact"></a>
    <div class="about">
        <h2>WE'RE FIGURING IT OUT WITH YOU</h2>
        <p>
            50% of women report that they experience feelings of self-doubt about their performance and careers - compared to just 31% of men. We want to change that.<br><br> 
            As three close friends who met at work, we regularly leaned on each other for support, advice, and confidence tips and recognized a gap in the market. 
            How could we scale the support we gave each other for women across the country? That's how Shine came to be. We are three women of color with separate backgrounds in product, marketing and engineering, 
            curating content we need and want in our day to day.
            <br><br>Have suggestions, thoughts, or just want to get in touch? We'd love to hear from you! <a href="mailto:theshinetext@gmail.com" target="_top">Contact us.</a>
        </p>
    </div>

    <ul class="footer">
        <h1>SHINE</h1>
            <div id="footer-social">
                <li><a href="https://twitter.com/ShineText" target="_blank"><img src={{asset('images/twitter_yellow.png')}}></a></li>
                <li><a href="https://instagram.com/ShineText" target="_blank"><img src={{asset('images/instagram_yellow.png')}}></a></li>
                <li><a href="https://www.facebook.com/Shine-Text" target="_blank"><img src={{asset('images/facebook_yellow.png')}}></a></li>
            </div>
    </div>

    </body>
</html>