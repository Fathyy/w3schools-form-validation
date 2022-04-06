<?php
header('content-type:text/css; charset:UTF-8;');
$primary_color ="#7BC895";
$secondary_color= "#BABBBF";
$text_color="#333438";


?>
.navbar{
    background-color: <?php echo $primary_color; ?>;
}
.navbar-nav, .nav-item{
    padding-right: 2rem;
}
.navbar-nav, .nav-item, .nav-link{
    color: var(--primary-color);
}
/* Navbar styling ends here */

// image heading styling begins here

.image-heading{
   max-height: 43.75rem; 
   background-color: <?php echo $primary_color; ?>;
}

.roman-image{
    max-width: 100%;
    height: 100%;
    object-fit: cover;  
}
.shop-now{
    color:<?php echo $secondary_color; ?>;
    background-color:<?php echo $primary_color; ?>;
}


// image heading styling ends here
.items-type{
    list-style-type: none;   
    margin: 0 auto;
    display: block;
    
}

