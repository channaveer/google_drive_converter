<?php
/* @author  -   Channaveer Hakari
 * @email   -   channaveer888@gmail.com
 * @Version -	1.0
 * @Date    -   10/11/2014
 */
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>Google Link Coverter</title>
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <div class="wrapper">
        <div class="header">
            <h1 class="bg-gray padding5 margin-top0">Google Drive Files Link Converter</h1>
        </div>
        <div class="content">
            <div>
                Convert the Google Drive File Links [PDF, DOC, XLS, Images, ZIP] to a downloadable links
            </div>
            <br />
            <div>
                <strong>Directions</strong> - Upload PDF, DOC, XLS, Images, ZIP files to your Google Drive, right click and select share->share, if you are not able to find the sharable link then click on the <strong>'Get sharable link'</strong> to top right corner with <strong>'chain icon'</strong>,
                now you will get the sharable link but cannot force to download it. Paste the sharable link input box provided below and click button <strong>Convert to Downloadable Link</strong> to get the downloadable link, which you can share with anyone.
            </div>
            <br />
            <div>
                <h3>Add Google Drive File URL</h3>
                <input type="text" name="drive_url" id="drive_url" placeholder="Paste Shared Link" />
                <br /><br />
                <input type="button" value="Convert to Downloadable Link" id="convert" />
                <br /><br />
                <h3>
                    Converted URL
                    <span class="loading font-small">Loading...</span><br />
                </h3> 
                    
                <textarea name="converted_url" id="converted_url" cols="70" rows="4"></textarea>
            </div>
        </div>
        <div class="footer">
            <span class="font-small font-gray">&copy; Copyrights <?php echo date('Y'); ?> | Channaveer Hakari [ channaveer888@gmail.com ]</span>
        </div>
    </div>
    
    <script src="js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="js/google_converter.js" type="text/javascript"></script>
</body>
</html>
