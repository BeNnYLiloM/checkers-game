<?php

echo '
    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8"/>
            <title>Checkers</title>
            <script src="/js/jquery-1.11.2.min.js"></script>
            <script src="/js/main.js"></script>
        </head>
        <body>
            <div class="form-authorization">
                <form action="authorization.php" method="post">
                    <div class="input-item">
                        <div class="label-text">Name:</div>
                        <div class="input-block">
                            <input type="text" name="name" placeholder="Enter your Name" onclick="this.placeholder=\'\'" onblur="this.placeholder=\'Enter your Name\'"/>
                        </div>
                    </div>
                    <div class="input-item">
                        <div class="label-text">Password:</div>
                        <div class="input-block">
                            <input type="password" name="password" placeholder="Enter your Password" onclick="this.placeholder=\'\'" onblur="this.placeholder=\'Enter your Password\'"/>
                        </div>
                    </div>
                    <div class="submit-item">
                        <input type="submit" value="Sign in"/>
                    </div>
                </form>
            </div><!-- end .form-authorization -->
            <div class="registration-link">
                <!-- <a href="#">Registration</a> -->
            </div><!-- end .registration-link -->
            <div class="form-registration">
                <form action="registration.php" method="post">
                    <div class="input-item">
                        <div class="label-text">Name:</div>
                        <div class="input-block">
                            <input type="text"  name="name" placeholder="Enter your Name" onclick="this.placeholder=\'\'" onblur="this.placeholder=\'Enter your Name\'"/>
                        </div>
                        <div class="input-item">
                            <div class="label-text">Password:</div>
                            <div class="input-block">
                                <input type="password" name="password" placeholder="Enter your Password" onclick="this.placeholder=\'\'" onblur="this.placeholder=\'Enter your Password\'"/>
                            </div>
                        </div>
                        <div class="input-item">
                            <div class="label-text">Confirm Password:</div>
                            <div class="input-block">
                                <input type="password" name="conf_password" placeholder="Confirm your Password" onclick="this.placeholder=\'\'" onblur="this.placeholder=\'Confirm your Password\'"/>
                            </div>
                        </div>
                        <div class="submit-item">
                            <input type="submit" value="Sign up"/>
                        </div>
                    </div>
                </form>
            </div><!-- end .form-registration -->
        </body>
    </html>
';