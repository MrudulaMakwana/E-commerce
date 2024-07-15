<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
    />
    <link rel="stylesheet" href="styles.css" />
    <style>
        /* .navbar-nav .nav-link {
            margin-right: 20px;
        }
        .contact-info, .contact-form {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 5px;
        }
        .contact-info h5 {
            font-weight: bold;
        }
        .contact-info .icon {
            color: #ff4a4a;
            font-size: 24px;
            margin-right: 10px;
        }
        .form-group .form-control {
            background: #f8f9fa;
            border: 1px solid #ddd;
        }
        .btn-send {
            background: #ff4a4a;
            color: white;
            border: none;
        } */

        
.breadcrumb {
    padding: 15px 20px;
    background-color: #f9f9f9;
}

.breadcrumb a {
    text-decoration: none;
    color: #000;
}

.breadcrumb span {
    color: #555;
}

.about {
    display: flex;
    justify-content: space-between;
    padding: 40px 20px;
}

.about-content {
    flex: 1;
    padding-right: 20px;
}

.about-image {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
}

.about-image img {
    max-width: 100%;
    height: auto;
}
.stats-section .card {
            text-align: center;
            padding: 20px;
            border: none;
        }
        .stats-section .card.active {
            background-color: #ff4a4a;
            color: white;
        }
        .stats-section .card i {
            font-size: 24px;
            margin-bottom: 10px;
        }
        .team-section .card {
            text-align: center;
            border: none;
            background: #f8f9fa;
            border-radius: 5px;
        }
        .team-section .card img {
            border-radius: 50%;
            margin-top: 20px;
        }
        .team-section .card-body {
            padding: 20px;
        }
        .team-section .card h5 {
            margin-top: 10px;
        }
        .team-section .card p {
            color: #888;
        }
        .team-section .card .social-icons i {
            font-size: 18px;
            color: #666;
            margin: 0 10px;
            transition: color 0.3s;
        }
        .team-section .card .social-icons i:hover {
            color: #ff4a4a;
        }
    </style>
</head>
<body>
<div class="top">
      <div class="notification-bar">
        <div class="promo-message">
          Summer Sale For All Swim Suits And Free Express Delivery - OFF 50%!
          <a href="#" class="shop-now">ShopNow</a>
        </div>
        <div class="language-selector">
          <span>English</span>
          <span class="material-symbols-outlined">expand_more</span>
          
        </div>
      </div>
    </div>
   <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <h4>Exclusive</h4>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="signup.php">Sign Up</a>
            </li>
          </ul>
          <div class="search_bar">
            <input
              class="search_input"
              placeholder="What Are You Looking For?"
            />
            <span class="material-symbols-outlined search_icon">search</span>
          </div>

        </div>
        <div class="action_bar">
          <div class="action_container">
            <span class="material-symbols-outlined action_icon">favorite</span>
            <span class="material-symbols-outlined"> shopping_cart </span>
          </div>
        </div>
        </div>

      </nav>
      <hr />
     <div class="container">
     <main>
        <div class="breadcrumb">
            <a href="#">Home</a> / <span>About</span>
        </div>
        <section class="about">
            <div class="about-content">
                <h2>Our Story</h2>
                <p>Launched in 2015, Exclusive is South Asia's premier online shopping marketplace with an active presence in Bangladesh. Supported by a wide range of tailored marketing, data and service solutions, Exclusive has 10,500 sellers and 300 brands and serves 3 million customers across the region.</p>
                <p>Exclusive has more than 1 million products to offer, growing at a very fast pace. Exclusive offers a diverse assortment in categories ranging from consumer.</p>
            </div>
            <div class="about-image">
                <img src="img/about-image.jpg" alt="Our Story">
            </div>
        </section>
    </main>
    <div class="container mt-5">
        <!-- Statistics Section -->
        <div class="row stats-section mb-5">
            <div class="col-md-3">
                <div class="card">
                    <i class="fas fa-users"></i>
                    <h4>10.5k</h4>
                    <p>Sellers active our site</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card active">
                    <i class="fas fa-dollar-sign"></i>
                    <h4>33k</h4>
                    <p>Monthly Product Sale</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <i class="fas fa-shopping-cart"></i>
                    <h4>45.5k</h4>
                    <p>Customer active in our site</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <i class="fas fa-chart-line"></i>
                    <h4>25k</h4>
                    <p>Annual gross sale in our site</p>
                </div>
            </div>
        </div>

        <!-- Team Section -->
        <div class="row team-section">
            <div class="col-md-4">
                <div class="card">
                    <img src="img/about1.png" alt="Tom Cruise">
                    <div class="card-body">
                        <h5>Tom Cruise</h5>
                        <p>Founder & Chairman</p>
                        <div class="social-icons">
                            <i class="fab fa-twitter"></i>
                            <i class="fab fa-instagram"></i>
                            <i class="fab fa-linkedin"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="img/about2.png" alt="Emma Watson">
                    <div class="card-body">
                        <h5>Emma Watson</h5>
                        <p>Managing Director</p>
                        <div class="social-icons">
                            <i class="fab fa-twitter"></i>
                            <i class="fab fa-instagram"></i>
                            <i class="fab fa-linkedin"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="img/about3.png" alt="Will Smith">
                    <div class="card-body">
                        <h5>Will Smith</h5>
                        <p>Product Designer</p>
                        <div class="social-icons">
                            <i class="fab fa-twitter"></i>
                            <i class="fab fa-instagram"></i>
                            <i class="fab fa-linkedin"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

     </div>
    <!-- <div class="container-fluid"> -->
  <div class="footer">
        <div class="container-fluid">
            <div class="subscribe">
                <h3>Exclusive</h3>
                <p>Subscribe</p>
                <p>Get 10% off your first order</p>
                <form action="#">
                    <input type="email" placeholder="Enter your email">
                    <input type="submit" value="Subscribe">
                </form>
            </div>
            <div class="support">
                <h3>Support</h3>
                <p>111 Bijoy sarani, Dhaka, DH 1515, Bangladesh.</p>
                <p>Email: exclusive@gmail.com</p>
                <p>Phone: +88015-88888-9999</p>
            </div>
            <div class="account">
                <h3>Account</h3>
                <a href="#">My Account</a><br>
                <a href="#">Login / Register</a><br>
                <a href="#">Cart</a><br>
                <a href="#">Wishlist</a><br>
                <a href="#">Shop</a>
            </div>
            <div class="quick-links">
                <h3>Quick Link</h3>
                <a href="#">Privacy Policy</a><br>
                <a href="#">Terms Of Use</a><br>
                <a href="#">FAQ</a><br>
                <a href="#">Contact</a>
            </div>
            <div class="download-app">
                <h3>Download App</h3>
                <p>Save $3 with App New User Only</p>
                <div class="app-links">
                    <a href="https://play.google.com/store/apps/details?id=com.example"><img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg" alt="Google Play"></a>
                    <a href="https://apps.apple.com/app/apple-store/id123456789"><img src="https://developer.apple.com/assets/elements/badges/download-on-the-app-store.svg" alt="App Store"></a>
                </div>
                <div class="social">
                    <a href="https://facebook.com"><img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Facebook"></a>
                    <a href="https://twitter.com"><img src="https://upload.wikimedia.org/wikipedia/en/6/60/Twitter_Logo_as_of_2021.svg" alt="Twitter"></a>
                    <a href="https://instagram.com"><img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram"></a>
                    <a href="https://linkedin.com"><img src="https://upload.wikimedia.org/wikipedia/commons/e/e9/Linkedin_icon.svg" alt="LinkedIn"></a>
                </div>
            </div>
            <div class="footer-bottom">
                © Copyright Rimel 2022. All rights reserved
            </div>
    </div>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>

</body>
</html>
