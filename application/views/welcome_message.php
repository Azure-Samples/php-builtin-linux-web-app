<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Azure App Service</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url();?>/css/bootstrap.min.css">
  <script src="<?php echo base_url();?>/js/jquery.min.js"></script>
  <script src="<?php echo base_url();?>/js/bootstrap.min.js"></script>  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/jumbotron.css">
</head>
<link href="http://amp.azure.net/libs/amp/2.1.2/skins/amp-default/azuremediaplayer.min.css" rel="stylesheet">
<script src="http://amp.azure.net/libs/amp/2.1.2/azuremediaplayer.min.js"></script>
<body> 
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">         
          <a class="navbar-brand" href="#">Azure App Service</a>		 
        </div>            
      </div>
    </nav> 

<div class="jumbotron" style="background-image: url('../images/STB13_Ken_06.png');">
 <div class="container">
<!--Add Video "-->
<!--<div  style="float: right">
    <iframe width="350px" height ="200px" class="embed-responsive-item" src="https://www.youtube.com/embed/ma6-56SC-20"></iframe>
</div>  -->
   
  <h2 class="display-3">Build, deploy and scale applications faster</h2>   
<p class="lead">
    <a class="btn btn-primary btn-lg" href="https://docs.microsoft.com/azure/app-service-web" role="button">Learn more</a>
  </p>     
</div>
</div>
<div class="container text-center">
  <video id="vid1" class="azuremediaplayer amp-default-skin" controls="" autoplay="" name="media" width="640" height="400">
    <source src="http://amssamples.streaming.mediaservices.windows.net/2e91931e-0d29-482b-a42b-9aadc93eb825/AzurePromo.mp4" type="video/mp4">
    <p class="amp-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that supports HTML5 video</p>
  </video>
</div><div class="container">
    <h1 class="text-center v-center" style="padding-bottom:20px">Get started with App Service on Linux</h1>
</div>
<div class="container">
        <div class="row text-center">
            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="<?php echo base_url();?>/images/overview.png"  height="42" width="42" alt="">
                    <div class="caption">
                        <h4>Overview</h4>
                    </div>
                    <div style="text-align:left">
                        <ul >
                          <li><a href="https://docs.microsoft.com/azure/app-service-web/app-service-linux-intro">What is Web App on Linux</a></li>
                          <li><a href="https://azure.microsoft.com/pricing/details/app-service/">Pricing</a></li>
                          <li><a href="https://docs.microsoft.com/azure/app-service-web">Documentation</a></li>
                          <li><a href="https://docs.microsoft.com/en-us/azure/app-service-web/app-service-linux-choosing-deployment-type">Custom container or built-in application stack?</a></li>                            
                        </ul>     
                    </div>
                    <p class="caption" style="padding:5px">
                            <a href="https://azure.microsoft.com/try/app-service/" class="btn btn-primary">Try for Free!</a> 
                    </p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="<?php echo base_url();?>/images/container.png"  height="42" width="42" alt="">
                    <div class="caption">
                        <h4>Bring your own Docker Container</h4>
                    </div>
                    <br/>
                   <div style="text-align:left">
                       <ul >
                        <li><a href="https://docs.microsoft.com/azure/app-service-web/app-service-linux-using-custom-docker-image">Create web app</a></li>
                        <li><a href="https://docs.microsoft.com/azure/app-service-web/app-service-linux-how-to-create-web-app">Continuous Deployment</a></li>
                        <li><a href="https://docs.microsoft.com/en-us/azure/app-service-web/app-service-linux-ssh-support">Enable SSH for custom image</a></li>
                        </ul>                                             
                    </div>
                        <p class="caption" style="padding:11px">
                            <a href="https://azure.microsoft.com/overview/webinars/" class="btn btn-primary">WebCast</a>
                        </p>
                    </div>
                </div>
           

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                     <img src="<?php echo base_url();?>/images/linux-web-app.png" height="42" width="42" alt="">
                    <div class="caption">
                        <h4>Use Built-in images</h4>
                    </div>
                    <div style="text-align:left">
                        <ul>
                          <li><a href="https://docs.microsoft.com/azure/app-service-web/app-service-linux-how-to-create-web-app">Create a web app using built-in image</a></li>
                          <li><a href="https://docs.microsoft.com/en-us/azure/app-service-web/app-service-linux-using-dotnetcore">Create .NET Core App</a></li>
                          <li><a href="https://docs.microsoft.com/azure/app-service-web/app-service-linux-using-nodejs-pm2">Create a NodeJS App</a></li>
                          <li><a href="https://docs.microsoft.com/azure/app-service-web/app-service-linux-ruby-get-started">Create a Ruby App</a></li>                          
                        </ul>                                              
                    </div>
                    <p class="caption" style="padding:5px">
                            <a href="https://docs.microsoft.com/azure/app-service-web/" class="btn btn-primary">Tutorial</a> 
                    </p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="<?php echo base_url();?>/images/github.png"  height="42" width="42" alt="">
                    <div class="caption">
                        <h4>Samples and Resources</h4>
                    </div>
                    <div style="text-align:left">
                        <ul>                        
                        <li><a href="https://github.com/azure-app-service">Docker image Samples on Github</a></li>
                        <li><a href="https://channel9.msdn.com/">Channel9 Videos</a></li>
                        <li><a href="https://github.com/azure/azure-quickstart-templates/">Azure Quickstart Templates</a></li>
                        <li><a href="https://social.msdn.microsoft.com/forums/azure/en-US/home?forum=windowsazurewebsitespreview">Forums</a></li>                            
                            
                        </ul>
                        <br/>                        
                    </div>
                    <p class="caption" style="padding:5px">
                            <a href="https://feedback.azure.com/forums/169385-web-apps" class="btn btn-primary">UserVoice</a>
                    </p>
                </div>
            </div>

        </div>
</div>        

<hr>
</body>
</html>
