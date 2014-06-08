<!DOCTYPE html>
<html>
    <head>
        <title>About & Reel - Scott Sternberg Productions</title>
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100italic,300,300italic,400italic,500,500italic,700,700italic,100' rel='stylesheet' type='text/css' />
        <link href='styles/style.css' type='text/css' rel='stylesheet' />
        <script src="scripts/jquery-1.11.1.js" type="text/javascript"></script>
		<script src="scripts/functions.js" type="text/javascript"></script>
    </head>
    <body class="body-show-page">
        <div class="main-wrapper">
            <div class="inner-wrapper">
            <?php include 'navigation.php';?>
                <div class="inner-begin">
					<div class="box-show-info clearfix">
						<div class="box-show-info-innerpage">
							<h1>Contact us</h1>
							
								<p class="contact-box">
								Scott Sternberg Productions<br>
								5254 Melrose Ave Suite 401D<br>
								Hollywood, CA 90038<br>
								Tel: 323.960.4550<br>
								Fax: 323.960.4555<br>
								</p>
								
								<form action="" method="post" class="dark-matter">
								<label>
									<span>Your Name :</span>
								    <input id="name" type="text" name="name"  />
								</label>
								
								<label>
									<span>Your Email :</span>
								    <input id="email" type="email" name="email" />
								</label>
								
								<label>
									<span>Message :</span>
								    <textarea id="message" name="message" ></textarea>
								</label> 
								 <label>
									<span>Subject :</span><select name="selection">
								    <option value="Job Inquiry">Job Inquiry</option>
								    <option value="General Question">General Question</option>
								    </select>
								</label>    
								 <label>
									<span>&nbsp;</span> 
								    <input type="button" class="button" value="Send" /> 
								</label>    
								</form>
							
						</div>
					</div>
                </div>
            </div>
        </div>
        <div class="footer-wrapper">
            <div class="inner-wrapper">
                <div class="footer-inner">
                    <div class="clearfix">
                       <?php include 'shows.php';?>
                    </div>
                    <div class="copyright">
                        Scott Sternberg Productions &copy; 2014. All Rights Reserved. For more information please contact us, thank you!
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>