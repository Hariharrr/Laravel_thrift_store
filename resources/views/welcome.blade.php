<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Nunito"/>
    <title>Document</title>
</head>
<body>

    <header>
        <div class="navbar">
            <div class="nav-items flex-flow-row">
                <div class="nav-item"><a><img src="images/logo.png" height="40rem" width="100rem"></a></div>
                <div class="nav-item"><a href="listing-page/listingpage.html">Categories</a></div>
                <div class="nav-item"><a href="listing-page/listingpage.html">Clothing</a></div>
                <div class="nav-item"><a href="listing-page/listingpage.html">Brands</a></div>
                <div class="nav-item"><a href="listing-page/listingpage.html">Beauty</a></div>
                <div class="search-container">
                    <form>
                      <button type="submit"><i class="fa fa-search"></i></button>
                      <input type="text" placeholder="Search.." name="search">
                    </form>
                  </div>
                  <div class="nav-items-right flex-flow-row">
                    <div class="nav-item"><a href="signup-login/signup.html"><i class="fa fa-user fa-lg" aria-hidden="true"></i></a></div>
                    <div class="nav-item"><a href="wishlist/wishlist.html"><i class="fa fa-heart fa-lg" aria-hidden="true"></i></a></div>
                    <div class="nav-item"><a href="cart/cart.html"><i class="fa fa-shopping-bag fa-lg" aria-hidden="true"></i></a></div>                     
                  </div>
            </div>
        </div>
    </header>

    <section>
        <div class="main-container">
      
            <img class="img-container" src="images/main.jpg">
        </div>

        <div class="card-container">
            <div class="flex-flow-row card-items">
                <div class="card card-component">
                    <img class="card-img" src="images/women.jpg">
                    <div class="card-details flex-flow-column">
                        <h2><a>Apparel</a></h2> 
                    </div>
                </div>

            <div class="card card-component">
                <img class="card-img" src="images/sale.jpg">
                <span class="bestseller-badge"><h3>Flat 40% off</h3></span>
                <div class="card-details flex-flow-column">
                    <h2><a>Flash Sale</a></h2>
                </div>  
            </div>

            <div class="card card-component">
                <img class="card-img" src="images/beauty.jpg">
                <div class="card-details flex-flow-column">
                    <h2><a>Beauty</a></h2>
                </div>  
            </div>
        </div>
    </section>

    <footer class="footer">
        <h3>Made with 💜 by Swastika</h3>
    </footer>

</body>
</html>