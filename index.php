<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./styles/index.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <title>Document</title>
  </head>
  <body>
    <div class="container">
      <!-- Header -->

      <header>
        <div id="menu-bar" class="fa fa-bars"></div>
        <a href="#" class="logo">Thú Cưng Shop</a>
        <nav class="navbar">
          <a href="index.php">Home</a>
          <a href="cho.php">Chó</a>
          <a href="meo.php">Mèo</a>
          <a href="#blog">blog</a>
          <a href="#news">news</a>
        </nav>
        <div class="user">
          <p class="username"></p>
          <button>Logout</button>
        </div>
      </header>

      <!-- Slider -->

      <section class="home" id="home">
        <div class="slide-container active">
          <div class="slide">
            <div class="content">
              <span>Nike Sport Shoes</span>
              <h3>Nike Metcon Shoes</h3>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit Sunt
                nam adipisci ipsa officiis Amet pariatur eaque soluta sit iure
                neque voluptate.
              </p>
              <a href="#" class="btn">add to card</a>
            </div>
            <div class="image">
              <img src="img/product1/cho1.jpg" class="shoe" alt="shoe" />
            </div>
          </div>
        </div>
        <div class="slide-container">
          <div class="slide">
            <div class="content">
              <span>Nike Sport Shoes</span>
              <h3>Nike Metcon Shoes</h3>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit Sunt
                nam adipisci ipsa officiis Amet pariatur eaque soluta sit iure
                neque voluptate.
              </p>
              <a href="#" class="btn">add to card</a>
            </div>
            <div class="image">
              <img src="img/product1/meo1.jpg" class="shoe" alt="shoe" />
            </div>
          </div>
        </div>
        <div class="slide-container">
          <div class="slide">
            <div class="content">
              <span>Nike Sport Shoes</span>
              <h3>Nike Metcon Shoes</h3>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit Sunt
                nam adipisci ipsa officiis Amet pariatur eaque soluta sit iure
                neque voluptate.
              </p>
              <a href="#" class="btn">add to card</a>
            </div>
            <div class="image">
              <img src="img/product1/meo2.jpg" class="shoe" alt="shoe" />
            </div>
          </div>
        </div>
        <div class="slide-container">
          <div class="slide">
            <div class="content">
              <span>Nike Sport Shoes</span>
              <h3>Nike Metcon Shoes</h3>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit Sunt
                nam adipisci ipsa officiis Amet pariatur eaque soluta sit iure
                neque voluptate.
              </p>
              <a href="#" class="btn">add to card</a>
            </div>
            <div class="image">
              <img src="img/product1/cho2.jpg" class="shoe" alt="shoe" />
            </div>
          </div>
        </div>

        <div id="prev" class="fa fa-angle-left" onclick="prev();"></div>
        <div id="next" class="fa fa-angle-right" onclick="next();"></div>
      </section>

      <!-- Product -->
<!-- 
      <section class="product" id="product">
        <h1 class="heading">latest <span>Products</span></h1>
        <div class="box-container">
          <div class="box">
            <div class="icons">
              <a href="#" class="fa fa-heart"></a>
              <a href="#" class="fa fa-share"></a>
              <a href="#" class="fa fa-eye"></a>
            </div>
            <div class="content">
              <img src="img/product1/cho3.jpg" alt="" />
              <h3>Chó Chihuahua</h3>
              <div class="price">$200 <span>$150</span></div>
              <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
            </div>
          </div>
          <div class="box">
            <div class="icons">
              <a href="#" class="fa fa-heart"></a>
              <a href="#" class="fa fa-share"></a>
              <a href="#" class="fa fa-eye"></a>
            </div>
            <div class="content">
              <img src="img/product1/cho4.jpg" alt="" />
              <h3>Chó PUG</h3>
              <div class="price">$200 <span>$150</span></div>
              <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
            </div>
          </div>
          <div class="box">
            <div class="icons">
              <a href="#" class="fa fa-heart"></a>
              <a href="#" class="fa fa-share"></a>
              <a href="#" class="fa fa-eye"></a>
            </div>
            <div class="content">
              <img src="img/product1/cho5.jpg" alt="" />
              <h3>Chó Bắc Kinh</h3>
              <div class="price">$200 <span>$150</span></div>
              <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
            </div>
          </div>
          <div class="box">
            <div class="icons">
              <a href="#" class="fa fa-heart"></a>
              <a href="#" class="fa fa-share"></a>
              <a href="#" class="fa fa-eye"></a>
            </div>
            <div class="content">
              <img src="img/product1/cho6.jpg" alt="" />
              <h3>Chó Alaska</h3>
              <div class="price">$200 <span>$150</span></div>
              <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
            </div>
          </div>
          <div class="box">
            <div class="icons">
              <a href="#" class="fa fa-heart"></a>
              <a href="#" class="fa fa-share"></a>
              <a href="#" class="fa fa-eye"></a>
            </div>
            <div class="content">
              <img src="img/product1/cho7.jpg" alt="" />
              <h3>Chó Husky</h3>
              <div class="price">$200 <span>$150</span></div>
              <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
            </div>
          </div>
          <div class="box">
            <div class="icons">
              <a href="#" class="fa fa-heart"></a>
              <a href="#" class="fa fa-share"></a>
              <a href="#" class="fa fa-eye"></a>
            </div>
            <div class="content">
              <img src="img/product1/cho8.jpg" alt="" />
              <h3>Chó Golden Retriever</h3>
              <div class="price">$200 <span>$150</span></div>
              <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
            </div>
          </div>
        </div>
      </section> -->

      <!-- Blog -->

      <section class="blog" id="blog">
        <h1 class="heading">Team <span>Weblog</span></h1>
        <div class="box-container">
          <div class="box">
            <img src="img/team/1.png" alt="" />
            <h3>Zahra Ahmadi</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos
              sequi temporibus impedit corporis vero ab exercitationem dolore
              voluptatibus, nisi non.
            </p>
            <div class="stars">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa fa-star"></i>
            </div>
          </div>
          <div class="box">
            <img src="img/team/2.png" alt="" />
            <h3>Maryam Nazari</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos
              sequi temporibus impedit corporis vero ab exercitationem dolore
              voluptatibus, nisi non.
            </p>
            <div class="stars">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa fa-star-half-o"></i>
            </div>
          </div>
          <div class="box">
            <img src="img/team/3.png" alt="" />
            <h3>Layla Akbari</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos
              sequi temporibus impedit corporis vero ab exercitationem dolore
              voluptatibus, nisi non.
            </p>
            <div class="stars">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-o"></i>
              <i class="fa fa fa-star-half-o"></i>
            </div>
          </div>
        </div>
      </section>

      <!-- news -->

      <section class="news" id="news">
        <div class="content">
          <h3>monthly news letter</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga sed
            itaque ducimus maxime facere nihil expedita non sunt? Nostrum,
            voluptatem?
          </p>
          <form action="">
            <input
              type="email"
              placeholder="please enter your email"
              class="email"
            />
            <input type="submit" value="save" class="btn" />
          </form>
        </div>
      </section>

      <!-- cridet -->

      <section class="cridet" id="cridet">
        <div class="box">
          <h3>all reserved by CIT EDUCATION</h3>
        </div>
      </section>
    </div>

    <script src="./js/index.js"></script>
  </body>
</html>
