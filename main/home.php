<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Estate Website Middle Page</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section -->

<header>

    <a href="#" class="logo"><span>real</span>Estate</a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#featured">featured</a>
        <a href="#contact">contact</a>
    </nav>
    

    <div class="search-box">
        <form action="" onsubmit="return false">
        <input type="text" id="search" placeholder="search-here">
        </form>

    </div>

    <div class="icons">
        <div id="menu-bars" class="fas fa-bars"></div>
       <a href="#" class="fas fa-user"></a>
    </div>

</header>

<!-- home section starts -->

<section class="home" id="home">

    <form action="">

        <h3>find by your need</h3>

        <div class="inputBox">
            <select name="" id="">
                <option value="" disabled hidden selected>Price</option>
            </select>

            <select name="" id="">
                <option value="" disabled hidden selected>Price Sort By</option>
               <option value="under construction">Low To High</option>
               <option value="Ready To Move">High To Low</option>
            </select>
            
            <table>
                <tr>
                    <td><h3>Category</h3></td>
                    <td><div class="filter-box">
                
                        <a href="#" class="categorybtn active" data-filter="all">All</a>
                        <a href="#" class="categorybtn" data-filter="house">House</a>
                        <a href="#" class="categorybtn" data-filter="villa">Villa</a>
                        <a href="#" class="categorybtn" data-filter="property">Other Property</a>
                    </div></td>
                </tr>
            </table>
            
            

        </div>

    </form>

</section>

<!-- featured section -->

<section class="featured" id="featured">

    <h1 class="heading"> featured properties </h1>

    <div class="box-container" id="s-products">

        <div class="box house">
            <div class="image-container ">
                <img src="images/img-1.jpg" alt="">
                <div class="info">
                    <h3>3 days ago</h3>
                </div>
                <div class="icons">
                    <a href="#" class="fas fa-camera"><h3>4</h3></a>
                </div>
            </div>
            <div class="content">
                <div class="price">
                    <h3>13.8 Lac</h3>
                    <a href="#" class="fas fa-phone"></a>
                </div>
                <div class="location">
                    <h3>SB Residency</h3>
                    <p>By SB Builder & Developers</p>
                </div>
                <div class="details">
                    <h3> <i class="fas fa-expand"></i> 500 sqft </h3>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckDefault">
                          Add To Compare
                        </label>
                      </div>
                </div>
                <div class="buttons">
                    <a href="#" class="btn">view details</a>
                </div>
            </div>
        </div>

        <div class="box villa">
            <div class="image-container">
                <img src="images/img-2.jpg" alt="">
                <div class="info">
                    <h3>6 days ago</h3>
                </div>
                <div class="icons">
                    <a href="#" class="fas fa-camera"><h3>7</h3></a>
                </div>
            </div>
            <div class="content">
                <div class="price">
                    <h3>28 Lac</h3>
                    <a href="#" class="fas fa-phone"></a>
                </div>
                <div class="location">
                    <h3>modern apartments</h3>
                    <p> In west, Mumbai</p>
                </div>
                <div class="details">
                    <h3> <i class="fas fa-expand"></i> 560 sqft </h3>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckDefault">
                          Add To Compare
                        </label>
                      </div>
                </div>
                <div class="buttons">
                    <a href="#" class="btn">view details</a>
                </div>
            </div>
        </div>

        <div class="box villa">
            <div class="image-container">
                <img src="images/img-3.jpg" alt="">
                <div class="info">
                    <h3>1 days ago</h3>
                </div>
                <div class="icons">
                    <a href="#" class="fas fa-camera"><h3>6</h3></a>
                </div>
            </div>
            <div class="content">
                <div class="price">
                    <h3>48.7 Lac</h3>
                    <a href="#" class="fas fa-phone"></a>
                </div>
                <div class="location">
                    <h3>Chhattarpur, New Delhi</h3>
                </div>
                <div class="details">
                    <h3> <i class="fas fa-expand"></i> 810 sqft </h3>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckDefault">
                          Add To Compare
                        </label>
                      </div>
                </div>
                <div class="buttons">
                    <a href="#" class="btn">view details</a>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="image-container">
                <img src="images/img-4.jpg" alt="">
                <div class="info">
                    <h3>9 days ago</h3>
                </div>
                <div class="icons">
                    <a href="#" class="fas fa-camera"><h3>6</h3></a>
                </div>
            </div>
            <div class="content">
                <div class="price">
                    <h3>60 Lac</h3>
                    <a href="#" class="fas fa-phone"></a>
                </div>
                <div class="location">
                    <h3>mahadev apartments</h3>
                    <p>by Mahadev Builder and Developer Pvt. Ltd.

                    </p>
                </div>
                <div class="details">
                    <h3> <i class="fas fa-expand"></i> 810 sqft </h3>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckDefault">
                          Add To Compare
                        </label>
                      </div>
                </div>
                <div class="buttons">
                    <a href="#" class="btn">view details</a>
                </div>
            </div>
        </div>

        
        <div class="box house">
            <div class="image-container">
                <img src="images/img-1.jpg" alt="">
                <div class="info">
                    <h3>3 days ago</h3>
                </div>
                <div class="icons">
                    <a href="#" class="fas fa-camera"><h3>4</h3></a>
                </div>
            </div>
            <div class="content">
                <div class="price">
                    <h3>13.8 Lac</h3>
                    <a href="#" class="fas fa-phone"></a>
                </div>
                <div class="location">
                    <h3>SB Residency</h3>
                    <p>By SB Builder & Developers</p>
                </div>
                <div class="details">
                    <h3> <i class="fas fa-expand"></i> 500 sqft </h3>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckDefault">
                          Add To Compare
                        </label>
                      </div>
                </div>
                <div class="buttons">
                    <a href="#" class="btn">view details</a>
                </div>
            </div>
        </div>

        <div class="box villa">
            <div class="image-container">
                <img src="images/img-2.jpg" alt="">
                <div class="info">
                    <h3>6 days ago</h3>
                </div>
                <div class="icons">
                    <a href="#" class="fas fa-camera"><h3>7</h3></a>
                </div>
            </div>
            <div class="content">
                <div class="price">
                    <h3>28 Lac</h3>
                    <a href="#" class="fas fa-phone"></a>
                </div>
                <div class="location">
                    <h3>modern apartments</h3>
                    <p> In west, Mumbai</p>
                </div>
                <div class="details">
                    <h3> <i class="fas fa-expand"></i> 560 sqft </h3>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckDefault">
                          Add To Compare
                        </label>
                      </div>
                </div>
                <div class="buttons">
                    <a href="#" class="btn">view details</a>
                </div>
            </div>
        </div>

        <div class="box villa">
            <div class="image-container">
                <img src="images/img-3.jpg" alt="">
                <div class="info">
                    <h3>1 days ago</h3>
                </div>
                <div class="icons">
                    <a href="#" class="fas fa-camera"><h3>6</h3></a>
                </div>
            </div>
            <div class="content">
                <div class="price">
                    <h3>48.7 Lac</h3>
                    <a href="#" class="fas fa-phone"></a>
                </div>
                <div class="location">
                    <h3>Chhattarpur, New Delhi</h3>
                </div>
                <div class="details">
                    <h3> <i class="fas fa-expand"></i> 810 sqft </h3>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckDefault">
                          Add To Compare
                        </label>
                      </div>
                </div>
                <div class="buttons">
                    <a href="#" class="btn">view details</a>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="image-container">
                <img src="images/img-4.jpg" alt="">
                <div class="info">
                    <h3>9 days ago</h3>
                </div>
                <div class="icons">
                    <a href="#" class="fas fa-camera"><h3>6</h3></a>
                </div>
            </div>
            <div class="content">
                <div class="price">
                    <h3>60 Lac</h3>
                    <a href="#" class="fas fa-phone"></a>
                </div>
                <div class="location">
                    <h3>mahadev apartments</h3>
                    <p>by Mahadev Builder and Developer Pvt. Ltd.

                    </p>
                </div>
                <div class="details">
                    <h3> <i class="fas fa-expand"></i> 810 sqft </h3>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckDefault">
                          Add To Compare
                        </label>
                      </div>
                </div>
                <div class="buttons">
                    <a href="#" class="btn">view details</a>
                </div>
            </div>
        </div>

        
        <div class="box house">
            <div class="image-container">
                <img src="images/img-1.jpg" alt="">
                <div class="info">
                    <h3>3 days ago</h3>
                </div>
                <div class="icons">
                    <a href="#" class="fas fa-camera"><h3>4</h3></a>
                </div>
            </div>
            <div class="content">
                <div class="price">
                    <h3>13.8 Lac</h3>
                    <a href="#" class="fas fa-phone"></a>
                </div>
                <div class="location">
                    <h3>SB Residency</h3>
                    <p>By SB Builder & Developers</p>
                </div>
                <div class="details">
                    <h3> <i class="fas fa-expand"></i> 500 sqft </h3>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckDefault">
                          Add To Compare
                        </label>
                      </div>
                </div>
                <div class="buttons">
                    <a href="#" class="btn">view details</a>
                </div>
            </div>
        </div>

        <div class="box villa">
            <div class="image-container">
                <img src="images/img-2.jpg" alt="">
                <div class="info">
                    <h3>6 days ago</h3>
                </div>
                <div class="icons">
                    <a href="#" class="fas fa-camera"><h3>7</h3></a>
                </div>
            </div>
            <div class="content">
                <div class="price">
                    <h3>28 Lac</h3>
                    <a href="#" class="fas fa-phone"></a>
                </div>
                <div class="location">
                    <h3>modern apartments</h3>
                    <p> In west, Mumbai</p>
                </div>
                <div class="details">
                    <h3> <i class="fas fa-expand"></i> 560 sqft </h3>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckDefault">
                          Add To Compare
                        </label>
                      </div>
                </div>
                <div class="buttons">
                    <a href="#" class="btn">view details</a>
                </div>
            </div>
        </div>

        <div class="box villa">
            <div class="image-container">
                <img src="images/img-3.jpg" alt="">
                <div class="info">
                    <h3>1 days ago</h3>
                </div>
                <div class="icons">
                    <a href="#" class="fas fa-camera"><h3>6</h3></a>
                </div>
            </div>
            <div class="content">
                <div class="price">
                    <h3>48.7 Lac</h3>
                    <a href="#" class="fas fa-phone"></a>
                </div>
                <div class="location">
                    <h3>varad Nagar, Kolhapur</h3>
                </div>
                <div class="details">
                    <h3> <i class="fas fa-expand"></i> 810 sqft </h3>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckDefault">
                          Add To Compare
                        </label>
                      </div>
                </div>
                <div class="buttons">
                    <a href="#" class="btn">view details</a>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="image-container">
                <img src="images/img-4.jpg" alt="">
                <div class="info">
                    <h3>9 days ago</h3>
                </div>
                <div class="icons">
                    <a href="#" class="fas fa-camera"><h3>6</h3></a>
                </div>
            </div>
            <div class="content">
                <div class="price">
                    <h3>60 Lac</h3>
                    <a href="#" class="fas fa-phone"></a>
                </div>
                <div class="location">
                    <h3>mahadev apartments</h3>
                    <p>by Mahadev Builder and Developer Pvt. Ltd.

                    </p>
                </div>
                <div class="details">
                    <h3> <i class="fas fa-expand"></i> 810 sqft </h3>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckDefault">
                          Add To Compare
                        </label>
                      </div>
                </div>
                <div class="buttons">
                    <a href="#" class="btn">view details</a>
                </div>
            </div>
        </div>

    </div>
    
</section>

<!-- contact section -->

<section class="contact" id="contact">

<h1 class="heading">contact us </h1>

<div class="row">
    <div class="icons-container">

        <div class="icons">
            <img src="images/icon-1.png" alt="">
            <h3>phone number</h3>
        </div>
    
        <div class="icons">
            <img src="images/icon-2.png" alt="">
            <h3>email address</h3>
        </div>
    
    </div>

    <table class="address"><tr>
        <td><h1>Address :</h1></td>

    </tr>
    <tr>
        <td>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30228.334641909376!2d76.36858247847456!3d18.72931977567019!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc55dea80fc844b%3A0x832ed2ba02646203!2sAmbajogai%2C%20Maharashtra%20431517!5e0!3m2!1sen!2sin!4v1631011737395!5m2!1sen!2sin" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe></td>
    </tr>
    </table>


</div>

</section>
<!-- footer section -->

<section class="footer">

    <div class="footer-container">

        <div class="box-container">

            <div class="box">
                <h3>branch location</h3>
                <table class="f-branchloc">
                    <tr>
                        <td><a href="#">Mumbai</a> </td>
                        <td><a href="#">Delhi</a></td>
                        <td><a href="#">Aurangabad</a></td>
                        <td><a href="#">Kolhapur</a></td>
                    </tr>
                </table>
            </div> 

            <div class="box">
                
                <h3>Follow Us</h3>
                <table class="f-sociallin">
                    <tr>
                        <td><i class="fab fa-facebook-f"></i></td>
                        <td>
                            <i class="fab fa-instagram"></i>
                            </td>
                        <td>
                            <i class="fab fa-linkedin-in"></i></td>
                        <td>
                            <i class="fab fa-whatsapp"></i></td>
                    </tr>
                </table>
            </div> 

        </div>

    </div>

</section>





<!-- JS -->
<script>

let menu = document.querySelector('#menu-bars');
let navbar = document.querySelector('.navbar');

menu.onclick = () =>{
    navbar.classList.toggle('active');
    menu.classList.toggle('fa-times');
}

window.onscroll = () =>{
    navbar.classList.remove('active');
    menu.classList.remove('fa-times');
}

</script>

<script src="script.js"></script>

</body>
</html>