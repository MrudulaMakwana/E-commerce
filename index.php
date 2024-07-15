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
                } 
            ?>
        </div>
        </div>
        <div class="action_bar">
          <div class="action_container">
            <span class="material-symbols-outlined action_icon">favorite</span>
            <span class="material-symbols-outlined"> shopping_cart </span>
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
            ><span class="material-symbols-outlined arrow-icon"
              >arrow_right_alt</span
            >
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
                  <div>Days<br /><span id="days">03</span> <span class="light-span">:</span></div>
                  <div>Hours <br /><span id="hours">23</span>  <span class="light-span">:</span></div>
                  <div>Minutes<br /><span id="minutes">19</span>  <span class="light-span">:</span></div>
                  <div>Seconds<br /><span id="seconds">56</span>  </div>
                </div>
                <div class="arrows">
                  <span class="material-symbols-outlined">
                    arrow_back
                    </span><span class="material-symbols-outlined">
                      arrow_forward
                      </span>
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
          <button class="view-product-button ">View All Products</button>
         </div>
      </div>

      <div class="elementor-widget-wrap elementor-element-populated">
        <div class="elementor-element elementor-element-7890fa9 elementor-position-left elementor-mobile-position-left elementor-view-default elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="7890fa9" data-element_type="widget" data-widget_type="icon-box.default">
            <div class="elementor-widget-container">
                <link rel="stylesheet" href="https://glamaxin.com/wp-content/plugins/elementor/assets/css/widget-icon-box.min.css">
                <div class="elementor-icon-box-wrapper">
                    <div class="elementor-icon-box-icon">
                        <span class="elementor-icon elementor-animation-">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="40" viewBox="0 0 20 40" fill="none">
                                <rect width="20" height="40" rx="4" fill="#DB4444"></rect>
                            </svg>
                        </span>
                    </div>
                    <div class="elementor-icon-box-content">
                        <h3 class="elementor-icon-box-title">
                            <span>Categories</span>
                        </h3>
                        <h4 class="flash-sales-title">Browse By Category</h4>
                    </div>
                    <a class="elementor-button elementor-button-link elementor-size-xs" href="#">
                        <span class="elementor-button-content-wrapper">
                            <span class="elementor-button-text">More</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <div class="elementor-widget-wrap elementor-element-populated">
          <div class="jet-woo-categories__item">
            <div class="jet-woo-categories__inner-box">
              <div class="jet-woo-categories-thumbnail__wrap">
                <div class="jet-woo-category-thumbnail">
                  <a
                    href="https://glamaxin.com/product-category/gaming/phones/"
                    rel="bookmark"
                  >
                    <img
                      loading="lazy"
                      decoding="async"
                      width="56"
                      height="56"
                      src="https://glamaxin.com/wp-content/uploads/2023/12/Category-CellPhone.svg"
                      class="attachment-full size-full"
                      alt=""
                    />
                  </a>
                  <div class="jet-woo-category-img-overlay"></div>
                  <div class="jet-woo-category-img-overlay__hover"></div>
                </div>
              </div>
              <div class="jet-woo-categories-content">
                <div class="jet-woo-category-content__inner">
                  <h5 class="jet-woo-category-title">
                    <a
                      href="https://glamaxin.com/product-category/gaming/phones/"
                      class="jet-woo-category-title__link"
                      >Phones</a
                    >
                  </h5>
                </div>
                <div class="jet-woo-category-count__wrap"></div>
              </div>
            </div>
          </div>
          <div class="jet-woo-categories__item">
            <div class="jet-woo-categories__inner-box">
              <div class="jet-woo-categories-thumbnail__wrap">
                <div class="jet-woo-category-thumbnail">
                  <a
                    href="https://glamaxin.com/product-category/gaming/computers/"
                    rel="bookmark"
                  >
                    <img
                      loading="lazy"
                      decoding="async"
                      width="56"
                      height="56"
                      src="https://glamaxin.com/wp-content/uploads/2023/12/Category-Computer.svg"
                      class="attachment-full size-full"
                      alt=""
                    />
                  </a>
                  <div class="jet-woo-category-img-overlay"></div>
                  <div class="jet-woo-category-img-overlay__hover"></div>
                </div>
              </div>
              <div class="jet-woo-categories-content">
                <div class="jet-woo-category-content__inner">
                  <h5 class="jet-woo-category-title">
                    <a
                      href="https://glamaxin.com/product-category/gaming/computers/"
                      class="jet-woo-category-title__link"
                      >Computers</a
                    >
                  </h5>
                </div>
                <div class="jet-woo-category-count__wrap"></div>
              </div>
            </div>
          </div>
          <div class="jet-woo-categories__item">
            <div class="jet-woo-categories__inner-box">
              <div class="jet-woo-categories-thumbnail__wrap">
                <div class="jet-woo-category-thumbnail">
                  <a
                    href="https://glamaxin.com/product-category/gaming/smartwatch/"
                    rel="bookmark"
                  >
                    <img
                      loading="lazy"
                      decoding="async"
                      width="56"
                      height="56"
                      src="https://glamaxin.com/wp-content/uploads/2023/12/Category-SmartWatch.svg"
                      class="attachment-full size-full"
                      alt=""
                    />
                  </a>
                  <div class="jet-woo-category-img-overlay"></div>
                  <div class="jet-woo-category-img-overlay__hover"></div>
                </div>
              </div>
              <div class="jet-woo-categories-content">
                <div class="jet-woo-category-content__inner">
                  <h5 class="jet-woo-category-title">
                    <a
                      href="https://glamaxin.com/product-category/gaming/smartwatch/"
                      class="jet-woo-category-title__link"
                      >SmartWatch</a
                    >
                  </h5>
                </div>
                <div class="jet-woo-category-count__wrap"></div>
              </div>
            </div>
          </div>
          <div class="jet-woo-categories__item">
            <div class="jet-woo-categories__inner-box">
              <div class="jet-woo-categories-thumbnail__wrap">
                <div class="jet-woo-category-thumbnail">
                  <a
                    href="https://glamaxin.com/product-category/headphones/"
                    rel="bookmark"
                  >
                    <img
                      loading="lazy"
                      decoding="async"
                      width="56"
                      height="56"
                      src="https://glamaxin.com/wp-content/uploads/2023/12/Category-Headphone.svg"
                      class="attachment-full size-full"
                      alt=""
                    />
                  </a>
                  <div class="jet-woo-category-img-overlay"></div>
                  <div class="jet-woo-category-img-overlay__hover"></div>
                </div>
              </div>
              <div class="jet-woo-categories-content">
                <div class="jet-woo-category-content__inner">
                  <h5 class="jet-woo-category-title">
                    <a
                      href="https://glamaxin.com/product-category/headphones/"
                      class="jet-woo-category-title__link"
                      >HeadPhones</a
                    >
                  </h5>
                </div>
                <div class="jet-woo-category-count__wrap"></div>
              </div>
            </div>
          </div>
          <div
            class="elementor-element elementor-element-bbb798c elementor-widget elementor-widget-jet-woo-categories"
            data-id="bbb798c"
            data-element_type="widget"
            data-settings='{"columns":"6","columns_mobile":"2","columns_tablet":"3"}'
            data-widget_type="jet-woo-categories.default"
          >
            <div class="elementor-widget-container">
              <div class="elementor-jet-woo-categories jet-woo-builder">
                <div
                  class="jet-woo-categories jet-woo-categories--preset-5 col-row"
                  data-mobile-hover=""
                >
                  <div class="jet-woo-categories__item">
                    <div class="jet-woo-categories__inner-box">
                      <div class="jet-woo-categories-thumbnail__wrap">
                        <div class="jet-woo-category-thumbnail">
                          <a
                            href="https://glamaxin.com/product-category/camera/"
                            rel="bookmark"
                          >
                            <img
                              loading="lazy"
                              decoding="async"
                              width="56"
                              height="56"
                              src="https://glamaxin.com/wp-content/uploads/2023/12/Category-Camera.svg"
                              class="attachment-full size-full"
                              alt=""
                            />
                          </a>
                          <div class="jet-woo-category-img-overlay"></div>
                          <div class="jet-woo-category-img-overlay__hover"></div>
                        </div>
                      </div>
                      <div class="jet-woo-categories-content">
                        <div class="jet-woo-category-content__inner">
                          <h5 class="jet-woo-category-title">
                            <a
                              href="https://glamaxin.com/product-category/camera/"
                              class="jet-woo-category-title__link"
                              >Camera</a
                            >
                          </h5>
                        </div>
                        <div class="jet-woo-category-count__wrap"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="jet-woo-categories__item">
             <div class="jet-woo-categories__inner-box">
                 <div class="jet-woo-categories-thumbnail__wrap">
                    <div class="jet-woo-category-thumbnail">
                          <a
                            href="https://glamaxin.com/product-category/gaming/"
                            rel="bookmark"
                          >
                            <img
                              loading="lazy"
                              decoding="async"
                              width="56"
                              height="56"
                              src="https://glamaxin.com/wp-content/uploads/2023/12/Category-Gamepad.svg"
                              class="attachment-full size-full"
                              alt=""
                            />
                          </a>
                          <div class="jet-woo-category-img-overlay"></div>
                          <div class="jet-woo-category-img-overlay__hover"></div>
                        </div>
                      </div>
                      <div class="jet-woo-categories-content">
                        <div class="jet-woo-category-content__inner">
                          <h5 class="jet-woo-category-title">
                            <a
                              href="https://glamaxin.com/product-category/gaming/"
                              class="jet-woo-category-title__link"
                              >Gaming</a
                            >
                          </h5>
                        </div>
                        <div class="jet-woo-category-count__wrap"></div>
                      </div>
                </div>
            </div>
        </div>
    
        <div class="product-container">
          <div class="title-bar">
            <h3>This Month</h3>
          </div>
          <div class="header">
            <h2>Best Selling Products</h2>
            <a href="#" class="view-all">View All</a>
          </div>
          <div class="product-list">
            <div class="product-item">
              <img src="img/p1.png" alt="The north coat">
              <h5>The north coat</h5>
              <div class="price-info">
                <span class="price">$260</span>
                <span class="original-price">$360</span>
              </div>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-alt"></i>
                <span>(65)</span>
              </div>
              <div class="wishlist">
                <i class="fa fa-heart"></i>
              </div>
              <div class="view">
                <i class="fa fa-eye"></i>
              </div>
            </div>
            <div class="product-item">
              <img src="img/p2.png" alt="Gucci duffle bag">
              <h5>Gucci duffle bag</h5>
              <div class="price-info">
                <span class="price">$960</span>
                <span class="original-price">$1160</span>
              </div>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-alt"></i>
                <span>(65)</span>
              </div>
              <div class="wishlist">
                <i class="fa fa-heart"></i>
              </div>
              <div class="view">
                <i class="fa fa-eye"></i>
              </div>
            </div>
            <div class="product-item">
              <img src="img/p3.png" alt="RGB liquid CPU Cooler">
              <h5>RGB liquid CPU Cooler</h5>
              <div class="price-info">
                <span class="price">$160</span>
                <span class="original-price">$170</span>
              </div>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-alt"></i>
                <span>(65)</span>
              </div>
              <div class="wishlist">
                <i class="fa fa-heart"></i>
              </div>
              <div class="view">
                <i class="fa fa-eye"></i>
              </div>
            </div>
            <div class="product-item">
              <img src="img/p4.png" alt="Small BookShelf">
              <h5>Small BookShelf</h5>
              <div class="price-info">
                <span class="price">$360</span>
              </div>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-alt"></i>
                <span>(65)</span>
              </div>
              <div class="wishlist">
                <i class="fa fa-heart"></i>
              </div>
              <div class="view">
                <i class="fa fa-eye"></i>
              </div>
            </div>
          </div>
        </div>





        <div class="container-bannerProduct">
          <div class="content">
              <div class="category">Categories</div>
              <h1>Enhance Your<br>Music Experience</h1>
              <div class="countdown">
                  <div class="countdown-item">
                      <span class="number">23</span>
                      <span class="label">Hours</span>
                  </div>
                  <div class="countdown-item">
                      <span class="number">05</span>
                      <span class="label">Days</span>
                  </div>
                  <div class="countdown-item">
                      <span class="number">59</span>
                      <span class="label">Minutes</span>
                  </div>
                  <div class="countdown-item">
                      <span class="number">35</span>
                      <span class="label">Seconds</span>
                  </div>
              </div>
              <button class="cta-button">Buy Now!</button>
          </div>
          <div class="product-image">
              <img src="img/product-banner.png" alt="Product Image">
          </div>
      </div>


      <section class="products-section">
        <div class="header">
            <div class="icon"></div>
            <h2>Our Products</h2>
        </div>
        <h3>Explore Our Products</h3>
        <div class="products-grid">
            <div class="product-card">
                <img src="img/bp1.png" alt="Breed Dry Dog Food">
                <h3>Breed Dry Dog Food</h3>
                <p>$100</p>
                <div class="ratings">★★★★★ (85)</div>
            </div>
            <div class="product-card">
                <img src="img/bp2.png" alt="CANON EOS DSLR Camera">
                <h3>CANON EOS DSLR Camera</h3>
                <p>$300 <span class="original-price">$500</span></p>
                <div class="ratings">★★★★★ (205)</div>
                <button class="add-to-cart">Add To Cart</button>
            </div>
            <div class="product-card">
                <img src="img/bp3.png" alt="ASUS FHD Gaming Laptop">
                <h3>ASUS FHD Gaming Laptop</h3>
                <p>$700</p>
                <div class="ratings">★★★★★ (325)</div>
            </div>
            <div class="product-card">
                <img src="img/bp4.png" alt="Curology Product Set">
                <h3>Curology Product Set</h3>
                <p>$500</p>
                <div class="ratings">★★★★★ (145)</div>
            </div>
            <div class="product-card">
                <img src="img/bp5.png" alt="Kids Electric Car">
                <h3>Kids Electric Car</h3>
                <p>$300</p>
                <div class="ratings">★★★★★ (65)</div>
                <!-- <div class="new-label">New</div> -->
            </div>
            <div class="product-card">
                <img src="img/bp6.png" alt="Jr. Zoom Soccer Cleats">
                <h3>Jr. Zoom Soccer Cleats</h3>
                <p>$110</p>
                <div class="ratings">★★★★★ (20)</div>
                <!-- <div class="new-label">New</div> -->
            </div>
            <div class="product-card">
                <img src="img/bp7.png" alt="GP31 Shooter USB Gamepad">
                <h3>GP31 Shooter USB Gamepad</h3>
                <p>$90</p>
                <div class="ratings">★★★★★ (89)</div>
            </div>
            <div class="product-card">
                <img src="img/bp8.png" alt="Quilted Satin Jacket">
                <h3>Quilted Satin Jacket</h3>
                <p>$250</p>
                <div class="ratings">★★★★★ (90)</div>
            </div>
        </div>
        <button class="view-all">View All Products</button>
     </section>

                
  <div class="container mt-5">
        <!-- New Arrival Section -->
        <div class="mb-4">
            <span class="featured">Featured</span>
            <h2>New Arrival</h2>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12 mb-4">
                <div class="card product-card">
                    <img src="img/feature1.png" alt="PlayStation 5">
                    <div class="product-info">
                        <h5>PlayStation 5</h5>
                        <p>Black and White version of the PS5 coming out soon.</p>
                        <a href="#">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="row">
                    <div class="col-lg-12 col-md-6 mb-4">
                        <div class="card product-card">
                            <img src="img/feature2.png" alt="Women's Collections">
                            <div class="product-info">
                                <h5>Women's Collections</h5>
                                <p>Featured women collections that give you another vibe.</p>
                                <a href="#">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 mb-4">
                        <div class="card product-card">
                            <img src="img/feature3.png" alt="Speakers">
                            <div class="product-info">
                                <h5>Speakers</h5>
                                <p>Amazon wireless speakers</p>
                                <a href="#">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 mb-4">
                        <div class="card product-card">
                            <img src="img/feature4.png" alt="Perfume">
                            <div class="product-info">
                                <h5>Perfume</h5>
                                <p>GUCCI INTENSE OUD EDP</p>
                                <a href="#">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
            <div class="col-md-4">
                <div class="feature">
                    <div class="feature-icon">
                        <img src="img/v1.png" alt="Free and Fast Delivery">
                    </div>
                    <h5>FREE AND FAST DELIVERY</h5>
                    <p>Free delivery for all orders over $140</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature">
                    <div class="feature-icon">
                        <img src="img/v2.png" alt="24/7 Customer Service">
                    </div>
                    <h5>24/7 CUSTOMER SERVICE</h5>
                    <p>Friendly 24/7 customer support</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature">
                    <div class="feature-icon">
                        <img src="img/v3.png" alt="Money Back Guarantee">
                    </div>
                    <h5>MONEY BACK GUARANTEE</h5>
                    <p>We return money within 30 days</p>
                </div>
            </div>
        </div>


    </div>
  </div>
    

  <!-- <div class="container-fluid"> -->
  <div class="footer  mt-5">
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
                    <!-- <a href="https://twitter.com"><img src="https://upload.wikimedia.org/wikipedia/en/6/60/Twitter_Logo_as_of_2021.svg" alt="Twitter"></a> -->
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
