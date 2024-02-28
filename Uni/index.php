<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    </head>
<body>
    <?php get_header(); ?>

    <section id="hero" class="py-5" style="background-color: black">
        <div class="container py-3" style="background-color: black;">
            <div class="container py-4" style="background-color: #40A2D8; border-bottom-left-radius: 22px; border-bottom-right-radius: 22px; border-top-left-radius: 22px; border-top-right-radius: 22px;">
                <div class="row">
                    <div class="col-lg-8 p-3 p-lg-5 pt-lg-5"> 
                        <h1 class="display-4 fw-bold lh-1" style="text-align: center; color: #F0EDCF;">Welcome to Trinkets and Travels!</h1>
                        <p class="lead my-5" style="text-align: center; font-weight: 600;">We are a bunch of friends gathering our gains, Ill gotten or not, to present to you!</p>
                        <p class="lead my-5" style="text-align: center; font-weight: 500;">Take a look at our wares or when next we may meet.</p>
                        <div class="d-grid gap-2 d-md-flex justify-content-center mb-4 mb-lg-3">
                            <a href="./ourWears.html"><button type="button" class="btn btn-lg px-4 me-md-2 fw-bold" style="color:#F0EDCF ;background-color: #0B60B0;">Our Wares</button></a>
                            <a href="./nextVenue.html"><button type="button" class="btn btn-lg px-4 me-md-2 fw-bold" style="color: #F0EDCF; background-color: #1c7fdc;">Next Venues</button></a>
                        </div>
                    </div>
                    <div class="col-lg-3 p-3 p-lg-3 pt-lg-5 text-end">
                    <img draggable="false" class="rounded-lg-2" src="./wp-content/themes/Uni/Images/Reginold-1.png.png" alt="reginold" width="100%">
                    </div>
            </div>
        </div>
    </section>


   
<section style="background-color: #F0EDCF; border-top-right-radius: 22px; border-top-left-radius: 22px;">
    <div class="container py-4">
        <header class="pb-3 mb-4 border-bottom">
          <a href="./aboutUs.html" class="d-flex align-items-center text-body-emphasis text-decoration-none">
            <img draggable="false" src="./wp-content/themes/Uni/Images/New Piskel.png" alt="reginold">
            <span class="fs-4 mx-3">Current Events</span>
          </a>
        </header>
    
        <div class="p-5 mb-4 rounded-3" style="background-color: #40A2D8;"> 
          <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Website Overhaul</h1>
            <p class="col-md-8 fs-4">We are currently having our website built and reworked, so we apoligize for any 
                inconveniences that may arise. We hope to have it up and running at full capacity soon. While you wait, check out our
            wares page!</p>
            </p>
            <a href="./ourWears.html"><button class="btn btn-lg" type="button" style="background-color: #0B60B0; color: #F0EDCF;">Our Wares</button></a>
          </div>
        </div>
    
        <div class="row align-items-md-stretch">
          <div class="col-md-6">
            <div class="h-100 p-5 text-bg-dark rounded-3">
              <h2 style="color: #F0EDCF;">We are always avaliable to chat</h2>
              <p style="color: #F0EDCF;">We can do custom stl files for your projects, Such as low poly characters and boxes for gifts. We can do custom 
                    wood burning for your boxes and other wooden items. We can also do custom painting for your miniatures. We are 
                    always avaliable through our social media links!</p>
              </p>
              <a href="#"><button class="btn btn-lg" type="button" style="background-color: #0B60B0; color: #F0EDCF;">Instagram</button></a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="h-100 p-5 border rounded-3" style="background-color: #40A2D8;">
              <h2>Our book is going public soon!</h2>
              <p>Our chief writer has been working on his masterpeice for over a year now. Taking every precaution to ensure his world is vivid and impossible to put down.
                Check out the preview on Our Wares page!
              </p>
              <a href="./ourWears.html"><button class="btn" type="button" style="background-color: #0B60B0; color: #F0EDCF;">*Shorthand book name*</button></a>
            </div>
          </div>
        </div>
    </div>
</section>

    <?php get_footer();?>
</body>
</html>