		jQuery(document).ready(function($) {
				/**
				 * identifier variable must be unique ID
				 */
				var sangar = $('#sangar-example').sangarSlider({
			        timer :  false, // true or false to have the timer
			        pagination : 'content-horizontal', // bullet, content, none
			        //paginationContent : ["images/thumb/thumb-slide-1.jpg", "images/thumb/thumb-slide-2.jpg", "images/thumb/thumb-slide-3.jpg", "images/thumb/thumb-slide-4.jpg", "images/thumb/thumb-slide-5.jpg"], // can be text, image, or something			        
			        paginationContentType : 'image', // text, image
			        paginationContentWidth : 90, // pagination content width in pixel
			        paginationImageHeight : 90, // pagination image height
			        width : 600, // slideshow width
        			height : 600, // slideshow height
			        fixedHeight: true,
			        scaleSlide : true // slider will scale to the container size
				});
			})