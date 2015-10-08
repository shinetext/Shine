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

            /*medium+ screen sizes*/
            @media (min-width:992px) {
                .desktop-only {
                    display:block !important;
                }
            }
             
            /*small screen sizes*/
            @media (max-width: 991px) {
                .mobile-only {
                    display:block !important;
                }
             
                .desktop-only {
                    display:none !important;
                }
            }

            .nav-bar { 
                list-style:none; 
                margin-right: 5%;
            }

            .nav-bar img {
                max-width: 7%;
                max-height: auto;
                float: left;
                display: block;
                position: relative;
                margin: -30px 0 -20px 0;
            }

            .nav-bar li { 
                display:inline; 
                float: right;
                padding-top: 2%;
            }

            .nav-bar li img {
                max-width: 80%;
                max-height: auto;
            }

            .header {
                background: url('{{asset('images/girl_smiling.png')}}');
                background-size: cover;
                background-color: #E6E6E6;
                clear: both;
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

            .column {
                display: inline-block;
                float: left;
                width: 20%;
                text-align: left;
                padding: 100px 0 100px 10%;
                margin-top: 5%;
                color: black;
                font-family: 'Fira Sans';
            }

            .column h3 {
                font-family: 'Bebas Neue Bold';
                font-size: 40px;
            }

            .column img {
                height: 114px;
                width: auto;
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
                background: url('{{ asset('images/sign_up_button_regular.png') }}');
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
                padding: 2% 3% 10% 4%;
                text-align: left;
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
            }

            .testimonials_column img {
                max-width: 40%;
                max-height: auto;
                padding: 5% 0 5% 0;
            }

            @media (max-width: 700px) {
                .testimonials_column {
                    display: block;
                    float: none;
                    width: 80%;                    
                }
            }

            .refer-a-friend h2{
                margin: 5% 0 0 0;
                padding-top: 5%;
                font-family: 'Bebas Neue Bold';
                font-size: 40px;
                text-align: center;
            }

            .refer-a-friend form {
                display: block;
                text-align: center;
                font-family: 'Fira Sans';
                position: relative;
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
        </style>
    </head>

    <body>
        <ul class="nav-bar">
            <img src={{asset('images/shine_logo.png')}}>
            <li><a href="https://twitter.com/ShineText" target="_blank"><img src={{asset('images/twitter_Icon.png')}}></a></li>
            <li><a href="https://instagram.com/ShineText" target="_blank"><img src={{asset('images/instagram_Icon.png')}}></a></li>
            <li><a href="https://www.facebook.com/Shine-Text" target="_blank"><img src={{asset('images/facebook_Icon.png')}}></a></li>
        </ul>

        <div class="header">    
            <a name="top"></a>
            <div class="text_bubble_column">
                <div id="text_bubble">
                    <p>Team-Up Tuesday: Work BFFs help with 1) happy hours 2) debriefing after anixety-inducing moments and 3) career growth: asking raise and promotion advice.</p>
                </div>

                <div id="text_bubble">
                    <p>Really? How do I get one?</p>
                </div>

                <div id="last_text_bubble">
                    <p>That's the gospel truth. Here are some tips on how to find the best work BFF for you: http://lil.ms/uxi/2yqaa9</p>
                </div>
            </div>

            <div id="logo_column">
                <img src={{asset('images/shine_logo.png')}}>

                <h3>A daily text so you can slay today.</h3>

                <form action="https://secure.mcommons.com/profiles/join" method="post">                    
                    <input type="hidden" name="opt_in_path[]" value="OP4B1A27AC508266A1F4373419CE1BE391" />
                    <input type="hidden" name="redirect_to" value="https://www.mobilecommons.com/redirect_to_instructions" />

                    <input required="required" placeholder="NAME" type="text" name="person[first_name]" id="person_first_name" /></br>

                    <input required="required" placeholder="PHONE NUMBER" type="text" name="person[phone]" id="person_phone" /></br>
                    
                    <!-- <input required="required" placeholder="EMAIL ADDRESS" id="person_email" name="person[email]" size="30" type="email" /></br> -->
          
                    <input required="required" placeholder="BIRTHDAY" id="person_birthday" name="person[birthday]" size="30" type="date" /></br>                       
          
                    <input type="submit" value="SIGNUP" class="signup_button"/>
                </form>
                
                <!-- <span style="font-size:80%"><a href="https://www.mobilecommons.com/about/terms-and-conditions/">Msg &amp; Data Rates May Apply.</a><br />Text <b>STOP</b> to opt out. No purchase necessary.<br />Expect 4 msgs/mo. <a href="https://www.mobilecommons.com/about/terms-and-conditions/privacy-policy/">Terms and Conditions</a></span> -->
            </div>
        </div>


    <div class="column">
        <img src={{asset('images/coffee_icon.png')}}>
            <h3>A.M. MOTIVATION</h3>
              <p>We curate and create content to send you every morning around your lifestyle. Learn how positive affirmations, the perfect playlist, and a work bestie can boost confidence and reduce stress at the office.</p>
    </div>
    
    <div class="column">
        <img src={{asset('images/mail_icon.png')}}>
            <h3>SAY BYE TO ANXIETY </h3>
              <p>Daily affirmations are proven to reprogram negative thought patterns. Shine texts help target dysfunctional beliefs through short positive statements (a common practice in Cognitive Behavioral Therapy and modern meditation).</p>
    </div>
    
    <div class="column">
        <img src={{asset('images/ice_cream_icon.png')}}>
            <h3>SHARE WITH FRIENDS</h3>
              <p>The best part? You can share all of this motiv-affirmation (motivation + affirmation. Yeah, we made up a word.) with your friends to give them the boost they need. A few Channing Tatum GIFs never hurt anyone, right?</p>
    </div>

    <div style="clear: both;"></div>
    
    <div class="testimonials">
        <h2>WORD ON THE STREET</h2>
        <div class="testimonials_column">
            <img src={{asset('images/messages.png')}}>
            <p><span style="color: #FFC52D; font-size: 25px; font-family: 'Bebas Neue Bold';">"</span>This week was awesome, I loved hearing my text sound go off in the AM as I was getting ready for work.  It is the perfect mix of being smart, funny, and intelligent and of course accessible!<span style="color: #FFC52D; font-size: 25px; font-family: 'Bebas Neue Bold';">"</p>  
        </div>

        <div class="testimonials_column">
            <img src={{asset('images/messages.png')}}>
            <p><span style="color: #FFC52D; font-size: 25px; font-family: 'Bebas Neue Bold';">"</span>Pushed me to take a few minutes to stop and reflect about my own goals and achievements, which helped spark my intrinsic confidence & mood.<span style="color: #FFC52D; font-size: 25px; font-family: 'Bebas Neue Bold';">"</p>
        </div>

        <div class="testimonials_column">
            <img src={{asset('images/messages.png')}}>
            <p><span style="color: #FFC52D; font-size: 25px; font-family: 'Bebas Neue Bold';">"</span>Thanks for this. I look forward to getting these messages every day. This has been an especially rough past couple of weeks and this is helping me get through them.<span style="color: #FFC52D; font-size: 25px; font-family: 'Bebas Neue Bold';">"</p>
        </div>
    </div>

    <div style="clear: both;">

    <div class="refer-a-friend">
        <h2>Share Shine texts with your friends!</h2>
            <form action="https://secure.mcommons.com/profiles/join" method="post">                    
                <input type="hidden" name="opt_in_path[]" value="OP4B1A27AC508266A1F4373419CE1BE391" />
                <input type="hidden" name="redirect_to" value="https://www.mobilecommons.com/redirect_to_instructions" />

                <input required="required" placeholder="YOUR NAME" type="text" name="person[first_name]" id="person_first_name" /></br>
      
                <input required="required" placeholder="YOUR PHONE NUMBER" type="text" name="person[phone]" id="person_phone" /></br>
      
                <input required="required" placeholder="YOUR FRIEND'S NUMBER" type="text" name="friends[]"/><br /> <input type="hidden" name="friends_opt_in_path" value="OP4B1A27AC508266A1F4373419CE1BE391" /><br>
      
                <input type="submit" value="SUBMIT" class="signup_button"/>
            </form>
    </div>

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
