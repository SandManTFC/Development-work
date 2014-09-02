    <html>

    <head>

    <title>Welcome to CodeIgniter shoutbox!</title>



    <style type="text/css">



    body {

    background-color: #fff;

    margin: 40px;

    font-family: Lucida Grande, Verdana, Sans-serif;

    font-size: 14px;

    color: #4F5155;

    }



    a {

    color: #003399;

    background-color: transparent;

    font-weight: normal;

    }



    h1 {

    color: #444;

    background-color: transparent;

    border-bottom: 1px solid #D0D0D0;

    font-size: 16px;

    font-weight: bold;

    margin: 24px 0 2px 0;

    padding: 5px 0 6px 0;

    }



    code {

    font-family: Monaco, Verdana, Sans-serif;

    font-size: 12px;

    background-color: #f9f9f9;

    border: 1px solid #D0D0D0;

    color: #002166;

    display: block;

    margin: 14px 0 14px 0;

    padding: 12px 10px 12px 10px;

    }



    </style>

    </head>

    <body>



   



    <p>Recent Comments</p>





    <?php foreach($shout as $shout): ?>



    <code> <b><?php echo $shout->name.' says -';?></b><br><?php echo $shout->shout?></code>

    <?php endforeach; ?>



   



    <p><b>Comment</b></p>

    <form action="http://localhost/portfilio/index.php/shoutbox/shout" method="post">

    <fieldset>

    <legend>Comment:</legend>

    Name:<input type="text" name="name" />

    Leave Comment:<input type="text" name="shout" />

    Email:<input type="text" name="email" />

    <input type="submit" value="submit" name="submit" />



    </fieldset>

    </form>



    



    </body>

    </html>
