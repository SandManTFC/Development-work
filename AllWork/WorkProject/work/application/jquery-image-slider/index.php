<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>j</title>
    
 <link href="http://localhost/work/public_html/css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="http://localhost/work/jquery-image-slider/css/style.css" />
<link rel="stylesheet" type="text/css" href="http://localhost/work/jquery-image-slider/fancybox/jquery.fancybox-1.3.1.css" media="screen" />
</head>

<body>
<div id="wrapper">
   
   <h1><a href="#">Welcome to PDL Groundworks and Paving</a></h1>
   <ul class="topNav">
	    <li><a href="#" class="topNavAct">HOME</a></li>
		<li><a href="#">ABOUT US</a></li>
		<li><a href="#">DRIVEWAYS</a></li>
		<li><a href="#">PATIOS</a></li>
		<li><a href="#">DRAINAGE</a></li>
		<li><a href="#">WALLING</a></li>
		<li><a href="#">LANDSCAPES</a></li>
		<li><a href="#">REPAIRS</a></li>
		<li><a href="#">GALLERY</a></li>
		<li><a href="#" class="topNavLast">VIDEO</a></li>
        
	  </ul><br class="clear" />
   
  
	 
	  </div>
    <div id="content">
        <div class="gallery-wrap">
            <div class="gallery clearfix">
                <div class="gallery__item">
                    <a href="images/image1-big.jpg" class="gallery__link">
                        <img src="images/image1.jpg" class="gallery__img" alt="" />
                    </a>
                </div>
                 <div class="gallery__item">
                    <a href="images/image2-big.jpg" class="gallery__link">
                        <img src="images/image2.jpg" class="gallery__img" alt="" />
                    </a>
                </div>
                <div class="gallery__item">
                    <a href="images/image3-big.jpg" class="gallery__link">
                        <img src="images/image3.jpg" class="gallery__img" alt="" />
                    </a>
                </div>
                <div class="gallery__item">
                    <a href="images/image4-big.jpg" class="gallery__link">
                        <img src="images/image4.jpg" class="gallery__img" alt="" />
                    </a>
                </div>
                <div class="gallery__item">
                    <a href="images/image1-big.jpg" class="gallery__link">
                        <img src="images/image1.jpg" class="gallery__img" alt="" />
                    </a>
                </div>
                <div class="gallery__item">
                    <a href="images/image2-big.jpg" class="gallery__link">
                        <img src="images/image2.jpg" class="gallery__img" alt="" />
                    </a>
                </div>
                <div class="gallery__item">
                    <a href="images/image3-big.jpg" class="gallery__link">
                        <img src="images/image3.jpg" class="gallery__img" alt="" />
                    </a>
                </div>
                <div class="gallery__item">
                    <a href="images/image4-big.jpg" class="gallery__link">
                        <img src="images/image4.jpg" class="gallery__img" alt="" />
                    </a>
                </div>
                <div class="gallery__item">
                    <a href="images/image1-big.jpg" class="gallery__link">
                        <img src="images/image1.jpg" class="gallery__img" alt="" />
                    </a>
                </div>
                <div class="gallery__item" style="width: 400px">
                    <a href="images/image2-big.jpg" class="gallery__link">
                        <img src="images/image2.jpg" class="gallery__img" alt="" />
                    </a>
                </div>
                <div class="gallery__item">
                    <a href="images/image3-big.jpg" class="gallery__link">
                        <img src="images/image3.jpg" class="gallery__img" alt="" />
                    </a>
                </div>
            </div> <!-- .gallery -->
            <div class="gallery__controls clearfix">
                <div href="#" class="gallery__controls-prev">
                    <img src="images/prev.png" alt="" />
                </div>
                <div href="#" class="gallery__controls-next">
                    <img src="images/next.png" alt="" />
                </div>
            </div> <!-- .gallery__controls -->
        </div> <!-- .gallery-wrap -->
    </div> <!-- #content -->

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript">
    // Only run everything once the page has completely loaded
    $(window).load(function(){

        // Set general variables
        // ====================================================================
        var totalWidth = 0;

        // Total width is calculated by looping through each gallery item and
        // adding up each width and storing that in `totalWidth`
        $(".gallery__item").each(function(){
            totalWidth = totalWidth + $(this).outerWidth(true);
        });

        // The maxScrollPosition is the furthest point the items should
        // ever scroll to. We always want the viewport to be full of images.
        var maxScrollPosition = totalWidth - $(".gallery-wrap").outerWidth();

        // This is the core function that animates to the target item
        // ====================================================================
        function toGalleryItem($targetItem){
            // Make sure the target item exists, otherwise do nothing
            if($targetItem.length){

                // The new position is just to the left of the targetItem
                var newPosition = $targetItem.position().left;

                // If the new position isn't greater than the maximum width
                if(newPosition <= maxScrollPosition){

                    // Add active class to the target item
                    $targetItem.addClass("gallery__item--active");

                    // Remove the Active class from all other items
                    $targetItem.siblings().removeClass("gallery__item--active");

                    // Animate .gallery element to the correct left position.
                    $(".gallery").animate({
                        left : - newPosition
                    });
                } else {
                    // Animate .gallery element to the correct left position.
                    $(".gallery").animate({
                        left : - maxScrollPosition
                    });
                };
            };
        };

        // Basic HTML manipulation
        // ====================================================================
        // Set the gallery width to the totalWidth. This allows all items to
        // be on one line.
        $(".gallery").width(totalWidth);

        // Add active class to the first gallery item
        $(".gallery__item:first").addClass("gallery__item--active");

        // When the prev button is clicked
        // ====================================================================
        $(".gallery__controls-prev").click(function(){
            // Set target item to the item before the active item
            var $targetItem = $(".gallery__item--active").prev();
            toGalleryItem($targetItem);
        });

        // When the next button is clicked
        // ====================================================================
        $(".gallery__controls-next").click(function(){
            // Set target item to the item after the active item
            var $targetItem = $(".gallery__item--active").next();
            toGalleryItem($targetItem);
        });
    });
    </script>

    <script type="text/javascript" src="./fancybox/jquery.fancybox-1.3.1.js"></script>
    <script type="text/javascript">
    // Fancybox specific
    // To make images pretty. Not important
    $(document).ready(function(){
        $(".gallery__link").fancybox({
            'titleShow'     : false,
            'transitionIn'  : 'elastic',
            'transitionOut' : 'elastic'
        });
    });
    </script>
</body>
</html>