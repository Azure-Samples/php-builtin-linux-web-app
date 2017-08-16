<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<HTML>
    <HEAD>
        <link href="http://amp.azure.net/libs/amp/2.1.2/skins/amp-default/azuremediaplayer.min.css" rel="stylesheet">
        <script src="http://amp.azure.net/libs/amp/2.1.2/azuremediaplayer.min.js"></script>
    </HEAD>
    <BODY>
         <video id="vid2" class="azuremediaplayer amp-default-skin"  controls="" autoplay="" name="media" width="640" height="400">
            <source src="http://amssamples.streaming.mediaservices.windows.net/2e91931e-0d29-482b-a42b-9aadc93eb825/AzurePromo.mp4" type="video/mp4">
            <p class="amp-no-js">
                To view this video please enable JavaScript, and consider upgrading to a web browser that supports HTML5 video
            </p>
        </video> 
    </BODY>
</HTML>
