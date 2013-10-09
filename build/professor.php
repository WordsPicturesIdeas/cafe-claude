<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/c.css">
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
        <div class="jumbotron">
          <img src="/img/cafeclaude-logo-mobile.png" alt="" class="img-responsive">
          <h1>Caf&eacute; Claude</h1>
          <p>This is a site build console for Caf&eacute; Claude</p>
        </div>
        
      <div class="row">
        <div class="span10">

<?php
 
if ( $_POST ) {
        echo "</div></div><div class='row'><div class='span10'>";
        echo "<h4>Detailed output below:</h4>";
        echo "<pre>";
        $output = passthru('export HOME=/var/www/vhosts/wpibeta.org/subdomains/cafeclaude/httpdocs; /usr/bin/jekyll build -s /var/www/vhosts/wpibeta.org/subdomains/cafeclaude/cc-build/ --trace', $return);
          if($return != 0){
                            echo "<button class='btn btn-large btn-danger' type='button'>Problem with the process. Please carefully read the output above for clues to the cause of the failure.</button>";
                }else{
                      echo "<button class='btn btn-large btn-success' type='button'>Success.</button>";
                }
 
        echo $output . "</pre>";
} else {
?>
                                <form method="post">
            <fieldset>
              <div class="checkbox">
                <label>
                  <input type="hidden" name="activate" value="activate"/> <!-- Activate -->
                                                                        The process may take a minute. Please only press it once.
                </label>
              </div>
              <button type='submit' class='btn btn-warning btn-large btn-block'> Build the Caf&eacute; site</button>
            </fieldset>
                                        </form>
                                </div>
                        </div>
 <?php } ?>
    </div>
  </body>
</html>
 

