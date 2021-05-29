
<section class="testimonials section-padding" data-scroll-index="5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title">
                    <h2>What our <span>client</span> say </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="owl-carousel testimonials-carousel">
                <div class="testimonial-item">
                    <div class="img-box">
                        <img src="<?php echo base_url('public/images/1.jpg'); ?>" alt="Img App">
                        <i class="fas fa-quote-right"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod 
                        tempor invidunt ut labore.</p>
                    <h3>Bootstrap</h3>
                    <span>UI designer</span>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="img-box">
                        <img src="<?php echo base_url('public/images/2.jpg'); ?>" alt="Img App">
                        <i class="fas fa-quote-right"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod 
                        tempor invidunt ut labore.</p>
                    <h3>Bootstrap</h3>
                    <span>UI designer</span>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="img-box">
                        <img src="<?php echo base_url('public/images/3.jpg'); ?>" alt="Img App">
                        <i class="fas fa-quote-right"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod 
                        tempor invidunt ut labore.</p>
                    <h3>Bootstrap</h3>
                    <span>UI designer</span>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="img-box">
                        <img src="<?php echo base_url('public/images/4.jpg'); ?>" alt="Img App">
                        <i class="fas fa-quote-right"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod 
                        tempor invidunt ut labore.</p>
                    <h3>Bootstrap</h3>
                    <span>UI designer</span>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


   
   $('.testimonials-carousel').owlCarousel({
    loop:true,
    margin:0,
    autoplay:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            
        },
        600:{
            items:2,
           
        },
        1000:{
            items:3,
        }
    }
});