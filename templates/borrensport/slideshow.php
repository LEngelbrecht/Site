 	<?php    
 $image1	=	htmlspecialchars($this->params->get('image1')); 
 $image2	=	htmlspecialchars($this->params->get('image2')); 
 $image3	=	htmlspecialchars($this->params->get('image3'));  
 $slidedisable	= $this->params->get("slidedisable");  
 ?>        
 
<div id="slide">
    <div id="slideshow-w">
		<div id="slideshow">
		    <img src="<?php echo $this->baseurl ?>/<?php echo htmlspecialchars($image1); ?>" alt="image1" />	    
            <img src="<?php echo $this->baseurl ?>/<?php echo htmlspecialchars($image2); ?>" alt="image2" />        
            <img src="<?php echo $this->baseurl ?>/<?php echo htmlspecialchars($image3); ?>" alt="image3" />    
		</div>
	</div>
</div>							
 