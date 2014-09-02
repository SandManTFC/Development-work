<?php include 'header_view.php'; ?>

<div class="out">
<div class="right">

 <h1>Comments</h1>



    <?php foreach($shout as $shout): ?>



    <code> <b><?php echo $shout->name.' says -';?></b><br><?php echo $shout->shout?></code>

    <?php endforeach; ?>



   



    <p><b>Comment</b></p>

    <form action="http://localhost/portfilio/index.php/port_design/shout" method="post">

    <fieldset>

    <legend>Comment:</legend>

    Name:<input type="text" name="name" />

    Leave Comment:<input type="text" name="shout" />

    Email:<input type="text" name="email" />

    <input type="submit" value="submit" name="submit" />



    </fieldset>

    </form>



</div>
<div class="in">

<?php include 'menu_view.php'; ?>

innercss
</div><!--  inner menu box -->


<div class="verticaldivider"></div>
<div class="main">

main css
</div>

IT Projects Developed by Philip lee
</div><!-- Outer box -->

</body>
</html>
