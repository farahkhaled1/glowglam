<!DOCTYPE html>
<html lang="en">

<head>
  <title>Footer Design</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="stylesheet" href="footer.css" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap");

    body {
      line-height: 1.5;
      font-family: "Poppins", sans-serif;
      padding-top: 100px;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    .container {
      max-width: 1170px;
      margin: auto;
    }

    .row {
      display: flex;
      flex-wrap: wrap;
    }

    ul {
      list-style: none;
    }

    .footer {
      background-color: #24262b;
      padding: 70px 0;
      width: 100%;
      position: fixed 100%;
    }

    .footer-col {
      width: 25%;
      padding: 0 15px;
    }

    .footer-col h4 {
      font-size: 18px;
      color: #ffffff;
      text-transform: capitalize;
      margin-bottom: 35px;
      font-weight: 500;
      position: relative;
    }

    .footer-col h4::before {
      content: "";
      position: absolute;
      left: 0;
      bottom: -10px;
      background-color: #c23061;
      height: 2px;
      box-sizing: border-box;
      width: 50px;
    }

    .footer-col ul li:not(:last-child) {
      margin-bottom: 10px;
    }

    .footer-col ul li a {
      font-size: 16px;
      text-transform: capitalize;
      color: #ffffff;
      text-decoration: none;
      font-weight: 300;
      color: #bbbbbb;
      display: block;
      transition: all 0.3s ease;
    }

    .footer-col ul li a:hover {
      color: #ffffff;
      padding-left: 8px;
    }

    .footer-col .social-links a {
      display: inline-block;
      height: 40px;
      width: 40px;
      background-color: rgba(255, 255, 255, 0.2);
      margin: 0 10px 10px 0;
      text-align: center;
      line-height: 40px;
      border-radius: 50%;
      color: #ffffff;
      transition: all 0.5s ease;
    }

    .footer-col .social-links a:hover {
      color: #24262b;
      background-color: #ffffff;
    }

    /*responsive*/
    @media (max-width: 767px) {
      .footer-col {
        width: 50%;
        margin-bottom: 30px;
      }
    }

    @media (max-width: 574px) {
      .footer-col {
        width: 100%;
      }
    }
  </style>
</head>

<body>
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="footer-col">
          <h4>company</h4>
          <ul>
            <li><a href="#">about us</a></li>
            <li><a href="#">our products</a></li>
            <li><a href="#">Contact us</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>get help</h4>
          <ul>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">shipping</a></li>
            <li><a href="#">order status</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>online shop</h4>
          <ul>
            <li><a href="#">Perfumes</a></li>
            <li><a href="#">Cosmetics</a></li>
            <li><a href="#">Manicures</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>follow us</h4>
          <div class="social-links">
            <a href="https:\\www.facebook.com"><i class="fab fa-facebook-f"></i></a>
            <a href="https:\\www.twitter.com"><i class="fab fa-twitter"></i></a>
            <a href="https:\\www.instagram.com"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>