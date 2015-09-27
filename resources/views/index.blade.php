<!DOCTYPE html>
<html>
    <head>
        <title>Shine</title>
        <link href='https://fonts.googleapis.com/css?family=Fira+Sans' rel='stylesheet' type='text/css'>
        <!-- <link rel="stylesheet" href="fonts/BebasNeueBold.otf" type="text/css" charset="utf-8" />  -->


        <style>
         /*   @font-face {
                font-family: 'Bebas Neue Bold';
                src: url('BebasNeueBold.eot');
                src: url('FontName.eot?#iefix') format('embedded-opentype'),
                    url('FontName-webfont.woff') format('woff'),
                    url('FontName-webfont.ttf') format('truetype'),
                    url('FontName-webfont.svg#FontName') format('svg');
                font-weight: normal;
                font-style: normal;
            }*/

            .header {
                background: url('{{ asset('images/girl_smiling.png') }}');
                background-size: cover;
                position: relative;
                background-color: #E6E6E6;
/*                padding: 5%;
*/                /*opacity: 10%;*/
            }

            #logo_column {
                display: block;
                text-align: center;
                padding-bottom: 5%;
                font-family: 'Fira Sans';
            }

            #logo_column img {
                max-width: 25%;
                max-height: auto;
                z-index: -1;
            }

            #logo_column h3 {
                padding-bottom: 2%;
            }

            input {
                border:none;
                background-color:#FFFFFF;
                width: 200px;
                padding: 10px;
                margin: 5px;
                border-bottom: 1px solid black;
                font-family: 'Fira Sans';
            }

/*    <span style="display: table-cell; width: 100px;">Amount Paid: $ </span>
    <span style="display: table-cell; border-bottom: 1px solid black;"></span>*/

            .column {
                display: inline-block;
                float: left;
                width: 20%;
                text-align: center;
                padding: 100px 0% 100px 10%;
                background-color: white;
                color: black;
            }

            .signup_button {
                padding: .5% 3% .5% 3%;
                /*text-align: center;*/
                margin: 30px;
                border-radius: 25px;
                background:#FFC52D;
                /*text-decoration:none;*/
                /*background: url('{{ asset('images/sign_up_button_regular.png') }}');*/
            }
        </style>
    </head>

    <body>
        <div class="header">    
            <a name="top"></a>
            <div id="logo_column">
                <img src={{asset('images/shine_logo.png')}}>

                <h3>Daily texts to remind you how badass you are</h3>

                <form action="https://secure.mcommons.com/profiles/join" method="post" class="mobilecommons">                    
                    <input type="hidden" name="opt_in_path[]" value="OP4B1A27AC508266A1F4373419CE1BE391" />
                    <input type="hidden" name="redirect_to" value="https://www.mobilecommons.com/redirect_to_instructions" />

                    <input required="required" placeholder="NAME" type="text" name="person[first_name]" id="person_first_name" /></br>
          
                    <input required="required" placeholder="PHONE NUMBER" type="text" name="person[phone]" id="person_phone" /></br>

                    <input required="required" placeholder="EMAIL ADDRESS" id="person_email" name="person[email]" size="30" type="email" /></br>
          
                    <input required="required" placeholder="BIRTHDAY" id="person_birthday" name="person[birthday]" size="30" type="date" /></br>                       

<!--                     <dt><label>Tell a Friend <small class="small">Phone Number</small></label></dt> 
                    <input type="text" name="friends[]"/><br /> <input type="hidden" name="friends_opt_in_path" value="OP4B1A27AC508266A1F4373419CE1BE391" /><br> -->
          
                    <input type="submit" value="SIGN UP" class="signup_button"/>
                </form>
                
                <!-- <span style="font-size:80%"><a href="https://www.mobilecommons.com/about/terms-and-conditions/">Msg &amp; Data Rates May Apply.</a><br />Text <b>STOP</b> to opt out. No purchase necessary.<br />Expect 4 msgs/mo. <a href="https://www.mobilecommons.com/about/terms-and-conditions/privacy-policy/">Terms and Conditions</a></span> -->
            </div>
        </div>

    <div class="column">
        <img src={{asset('images/coffee_icon.png')}}>
            <h3>MOTIVATION</h3>
              <p>Learn how better posture, the perfect playlist, and a work bestie (you know, besides us) can boost confidence and reduce stress at the office. We’ll send pro tips from our favorite women (both real and fictitious), from Mindy Kaling to Sylvia Plath to Leslie Knope.</p>
    </div>
    
    <div class="column">
        <img src={{asset('images/mail_icon.png')}}>
            <h3>A.M. LOLS</h3>
              <p>Meetings: not funny. Know what is funny? Bridesmaids. Liz Lemon. A slow-motion video of a golden retriever who just can’t catch food. (Spoiler alert: the taco explodes all over his face.) You’ve got meetings. We’ve got ROFL-inducing Vines, vids, and memes.</p>
    </div>
    
    <div class="column">
        <img src={{asset('images/ice_cream_icon.png')}}>
            <h3>MOTIV-AFFIRMATION</h3>
              <p>Motivation + affirmation. (Yeah, we made up a word. What of it?) Here is the boost you need. Here are the props you deserve. Here are the Channing Tatum GIFs you’ll be thinking about as you crush each day and roll into happy hour, smiling. (A hard day deserves hard abs. You’re welcome.)</p>
    </div>

    <div style="clear: both;">
        <a href="#top" class="signup_button" style="text-decoration: none; color: black;">SIGN UP</a>     
    </div>

    </body>
</html>
