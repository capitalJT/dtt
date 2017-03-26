<!doctype html>
<?php 
  if ( ! ini_get('date.timezone') ){
    date_default_timezone_set('GMT');
  }
?>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Times Transformation</title>
    <meta name="description" content="The leading souce for cyber security professionals.">
    <link href="https://fonts.googleapis.com/css?family=Oswald|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>
    <?php include_once("analyticstracking.php") ?>
    <div class="header">
      <div class="row">
        <div class="medium-7 columns">
          <a class="logo" href="#">Digital Times Transformation</a>
        </div>
        <div class="medium-5 columns main-navigation">
          <ul>
            <li><a href="#about-us">About Us</a></li>
            <li><a href="#contact">Contact Us</a></li>
          </ul>
        </div>
      </div>  
    </div>

    <div class="hero">
      <div class="row">
        <div class="large-12 columns">
          <h1>The cost of a bad executive hire could cost the company $1.5 million</h1>
        </div>
        <div class="large-9 large-centered columns">
          <span class="separator"></span>
          <p>Cyber Security is the most complex issue facing Business Leaders today. It's not about IT, it's about Risk Management. Partnering with the right expert is essential in protecting your&nbsp;organization. <span class="dtt">Digital Times Transformation solves those issues.</span></p>
        </div>
        <a class="button large" href="#contact">Contact Us</a>
      </div>        
    </div>

    <div id="about-us" class="value">
      <div class="row">
        <div class="large-12 columns">
          <h2>What makes us unique?</h2>
          <span class="separator"></span>
        </div>
        <div class="large-4 columns">
          <img src="images/advisory-board.svg">
          <h4>Global Advisory Board</h4>
          <p>Get unparalleled access to our world class resources through our globally recognized cyber security advisory board. Talk to us about our cyber-on-demand services exclusively available to you as our client.</p>
        </div>
        <div class="large-4 columns">
          <img src="images/executive-recruiting.svg">
          <h4>Executive Search & Consulting</h4>
          <p>Executives impact the cultural direction of your business. A misfit hire here could damage your reputation, impact your momentum and reduce your credibility with employees and external&nbsp;stakeholders.</p>
        </div>
        <div class="large-4 columns">
          <img src="images/cyber-security-professionals.svg">
          <h4>Cyber Security Professionals</h4>
          <p>Finding the elusive cyber security professional is a niche, highly specialized process. It requires a unique skill set and a deep understanding of today's cyber landscape.</p>
        </div>
      </div>
    </div>

    <div id="contact" class="contact">
      <h2>Contact Us</h2>
      <span class="separator"></span>
      <div class="row">
        <div class="large-6 large-centered columns">
          <form id="my-form" action="https://formspree.io/info@jabaltorres.com" method="POST" data-abide>
            <input type="text" name="name" placeholder="Full Name" required>
            <input type="email" name="_replyto" placeholder="username@address.com" required>
            <textarea name="message" rows="4" cols="50" placeholder="Enter your message here" required></textarea>
            <input type="submit" class="button large" value="Send Message">
          </form>
        </div>
      </div>
      <span class="separator"></span>
      <p><a class="phone-num" href="tel:1-203-391-4418">1-203-391-4418</a></p>
    </div>
    <div class="footer">
      <div class="row">
        <div class="large-9 columns">
          <p>© <?php echo date("Y"); ?> Digital Times Transformation. All rights reserved.</p>  
        </div>
        <div class="large-3 columns">
          <p class="text-right"><a id="scroll-to-top" href="#">Back to top</a></p>  
        </div>
      </div>  
    </div>
      
    <!-- <script src="bower_components/jquery/dist/jquery.js"></script> -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
 

    <!-- <script src="bower_components/what-input/dist/what-input.js"></script> -->
    <!-- <script src="bower_components/foundation-sites/dist/js/foundation.js"></script> -->
    <script src="js/min/app-min.js"></script>
  </body>
</html>
