<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Exclusive Shop</title>
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
        <ul class="dropdown-menu">
          <li>English</li>
          <li>Spanish</li>
          <li>French</li>
        </ul>
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
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Contact</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Sign Up</a>
          </li>
        </ul>
        <div class="search_bar">
          <input
            class="search_input"
            placeholder="What Are You Looking For?"
          />
          <span class="material-symbols-outlined search_icon">search</span>
        </div>
        <div class="user-menu">
          <?php
            session_start();
            if (isset($_SESSION['user_id'])) {
              echo '
              <div class="dropdown">
                <button class="dropbtn">User <i class="arrow down"></i></button>
                <div class="dropdown-content">
                  <a href="#">Manage My Account</a>
                  <a href="#">My Order</a>
                  <a href="#">My Cancellations</a>
                  <a href="#">My Reviews</a>
                  <a href="logout.php">Logout</a>
                </div>
              </div>
              ';
            } else {
              echo '<a href="login.php">Login</a>';
            }
          ?>
        </div>
      </div>
      <div class="action_bar">
        <div class="action_container">
          <span class="material-symbols-outlined action_icon">favorite</span>
          <span class="material-symbols-outlined">shopping_cart</span>
        </div>
      </div>
    </nav>
    <hr />
    <div class="mainSection">
      <div class="sidebar">
        <ul>
          <li>Woman's Fashion</li>
          <li>Men's Fashion</li>
          <li>Electronics</li>
          <li>Home & Lifestyle</li>
          <li>Medicine</li>
          <li>Sports & Outdoor</li>
          <li>Baby's & Toys</li>
          <li>Groceries & Pets</li>
          <li>Health & Beauty</li>
        </ul>
      </div>
      <div class="main-banner">
        <img src="img/banner.png" alt="iPhone Banner" />
        <div class="banner-content">
          <h2>iPhone 14 Series</h2>
          <p>Up to 10% off Voucher</p>
          <a href="#">Shop Now</a
          ><span class="material-symbols-outlined arrow-icon">arrow_right_alt</span>
        </div>
      </div>
    </div>
    <div class="flash-sales">
      <div class="header">
        <div class="elementor-widget-wrap elementor-element-populated">
          <div
            class="elementor-element elementor-element-7890fa9 elementor-position-left elementor-mobile-position-left elementor-view-default elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
            data-id="7890fa9"
            data-element_type="widget"
            data-widget_type="icon-box.default"
          >
            <div class="elementor-widget-container">
              <link
                rel="stylesheet"
                href="https://glamaxin.com/wp-content/plugins/elementor/assets/css/widget-icon-box.min.css"
              />
              <div class="elementor-icon-box-wrapper">
                <div class="elementor-icon-box-icon">
                  <span class="elementor-icon elementor-animation-">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="20"
                      height="40"
                      viewBox="0 0 20 40"
                      fill="none"
                    >
                      <rect
                        width="20"
                        height="40"
                        rx="4"
                        fill="#DB4444"
                      ></rect>
                    </svg>
                  </span>
                </div>
                <div class="elementor-icon-box-content">
                  <h3 class="elementor-icon-box-title">
                    <span>Today's</span>
                  </h3>
                  <h1 class="flash-sales-title">Flash Sales</h1>
                </div>
              </div>
              <div class="timer">
                <div>
                  Days<br /><span id="days">03</span> <span class="light-span">:</span>
                </div>
                <div>
                  Hours <br /><span id="hours">23</span> <span class="light-span">:</span>
                </div>
                <div>
                  Minutes<br /><span id="minutes">19</span> <span class="light-span">:</span>
                </div>
                <div>
                  Seconds<br /><span id="seconds">56</span>
                </div>
              </div>
              <div class="arrows">
                <span class="material-symbols-outlined">arrow_back</span>
                <span class="material-symbols-outlined">arrow_forward</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="products">
        <div class="product">
          <div class="discount">-40%</div>
          <img src="img/f1.png" alt="HAVIT HV-G92 Gamepad" />
          <h2>HAVIT HV-G92 Gamepad</h2>
          <p class="price">$120 <span class="old-price">$160</span></p>
          <p class="rating">⭐⭐⭐⭐⭐ (88)</p>
        </div>
        <div class="product">
          <div class="discount">-35%</div>
          <img src="img/f2.png" alt="AK-900 Wired Keyboard" />
          <h2>AK-900 Wired Keyboard</h2>
          <p class="price">$960 <span class="old-price">$400</span></p>
          <p class="rating">⭐⭐⭐⭐⭐ (75)</p>
        </div>
        <div class="product">
          <div class="discount">-30%</div>
          <img src="img/f3.png" alt="IPS LCD Gaming Monitor" />
          <h2>IPS LCD Gaming Monitor</h2>
          <p class="price">$370 <span class="old-price">$400</span></p>
          <p class="rating">⭐⭐⭐⭐⭐ (99)</p>
        </div>
        <div class="product">
          <div class="discount">-25%</div>
          <img src="img/f4.png" alt="S-Series Comfort Chair" />
          <h2>S-Series Comfort Chair</h2>
          <p class="price">$375 <span class="old-price">$400</span></p>
          <p class="rating">⭐⭐⭐⭐⭐ (99)</p>
        </div>
      </div>
      <div class="button-container">
        <button class="view-product-button">View All Products</button>
      </div>
    </div>
  </div>
  <script src="scripts.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9QK/ScQsAP7hUibX39j2xAf6dnV+0f1p5j3gt" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
