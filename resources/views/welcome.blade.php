<!DOCTYPE html>
<html>
    <head>
        <title>Shine</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                vertical-align: middle;
                padding: 20%;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }

            .signup-form {
                text-align: center;
                padding: 15%;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Shine</div>
                <h3>Daily texts to remind you just how badass you are.</h3>
            </div>
        </div>

        <div class = "signup-form">
            <div id="basic" class="joinform">
                <form action="https://secure.mcommons.com/profiles/join" method="post" class="mobilecommons">
                    <h1>Sign-up form</h1>
                    
                    <p>Sign up for daily texts from Shine!</p>
                    <input type="hidden" name="opt_in_path[]" value="OP4B1A27AC508266A1F4373419CE1BE391" />
                    <input type="hidden" name="redirect_to" value="https://www.mobilecommons.com/redirect_to_instructions" />

                    <dt><label>First Name <small class="small">Required</small></label></dt>
                    <input required="required" type="text" name="person[first_name]" id="person_first_name" />
                    
                    <dt><label>Last Name</label></dt>
                    <input type="text" name="person[last_name]" id="person_last_name" /> 
          
                    <dt><label>Phone Number <small class="small">Required</small></label></dt>
                    <input required="required" type="text" name="person[phone]" id="person_phone" />

                    <dt><label>Email Address <small class="small">Required</small></label></dt>
                    <input required="required" id="person_email" name="person[email]" size="30" type="email" />
          
                    <dt><label>Birthday <small class="small">Required</small></label></dt>
                    <input required="required" id="person_birthday" name="person[birthday]" size="30" type="date" />                       

                    <dt><label>Tell a Friend <small class="small">Phone Number</small></label></dt> 
                    <input type="text" name="friends[]"/><br /> <input type="hidden" name="friends_opt_in_path" value="OP4B1A27AC508266A1F4373419CE1BE391" /><br>
          
                    <dt><input type="submit" value="Subscribe" class="button"/></dt>
                </form>
                
                <span style="font-size:80%"><a href="https://www.mobilecommons.com/about/terms-and-conditions/">Msg &amp; Data Rates May Apply.</a><br />Text <b>STOP</b> to opt out. No purchase necessary.<br />Expect 4 msgs/mo. <a href="https://www.mobilecommons.com/about/terms-and-conditions/privacy-policy/">Terms and Conditions</a></span>
            </div>
        </div>
    </body>
</html>
