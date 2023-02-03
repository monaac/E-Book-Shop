<!DOCTYPE html>
<html>
  <head>
    <title>My E-Book Shop</title>
    <style>
      /* Add CSS styles here */
      body {
        font-family: Arial, sans-serif;
      }

      h1 {
        text-align: center;
        margin-top: 50px;
      }

      .book {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin: 50px 0;
        padding: 20px;
        border: 1px solid lightgray;
        border-radius: 10px;
      }

      .book-image {
        width: 200px;
        height: 200px;
        background-size: cover;
        background-position: center;
        margin-right: 20px;
      }

      .book-title {
        font-size: 24px;
        font-weight: bold;
      }

      .book-price {
        font-size: 18px;
        color: green;
      }

      .btn-add-to-cart {
        background-color: green;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <h1>My E-Book Shop</h1>

    <!-- Book 1 -->
    <div class="book">
      <div class="book-image" style="background-image: url(book-1.jpg)"></div>
      <div class="book-title">Book 1</div>
      <div class="book-price">$9.99</div>
      <button class="btn-add-to-cart">Add to Cart</button>
    </div>

    <!-- Book 2 -->
    <div class="book">
      <div class="book-image" style="background-image: url(book-2.jpg)"></div>
      <div class="book-title">Book 2</div>
      <div class="book-price">$12.99</div>
      <button class="btn-add-to-cart">Add to Cart</button>
    </div>

    <!-- Book 3 -->
    <div class="book">
      <div class="book-image" style="background-image: url(book-3.jpg)"></div>
      <div class="book-title">Book 3</div>
      <div class="book-price">$7.99</div>
      <button class="btn-add-to-cart">Add to Cart</button>
    </div>

    <script>
      // Add JavaScript code here
      const addToCartButtons = document.querySelectorAll('.btn-add-to-cart');

      addToCartButtons.forEach(function(button) {
        button.addEventListener('click', function() {
          alert('Book added to cart!');
        });
      });
    </script>
  </body>
</html>
