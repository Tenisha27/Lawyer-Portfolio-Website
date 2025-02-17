<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hamburger Menu</title>
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Round|Material+Icons+Sharp|Material+Icons+Two+Tone"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200;300;400;500;600;700;800&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />

    <style>
      body {
        width: 100%;
        height: 100vh;
        margin: 0;
        padding: 0;
        background: black;
        /* display: grid; */
        /* place-items: center; */
      }
      .menu {
        width: 100%;
        height: fit-content;
        background: white;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 10px;
        box-sizing: border-box;
        box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.35);
        /* border-radius: 2mm; */
        position: relative;
        /* position:sticky; */
        background: linear-gradient(90deg, #0052D4, #4364F7, #6FB1FC);
        color: #fff;
      }
      .menu img {
        width: 140px;
      }
      .right {
        display: flex;
        align-items: center;
      }
      .head {
        text-decoration: none;
        font-family: poppins;
        font-size: 16px;
        color: black;
        margin: 0 20px;
      }
      .head:hover {
        border-bottom: 0.6mm solid rgb(7, 102, 197);
        color: rgb(7, 102, 197);
      }
      .right button {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: none;
        border: none;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
      }
      .right button:hover {
        background: rgb(233, 243, 255);
        color: rgb(7, 102, 197);
      }
      .sub-menu {
        position: absolute;
        top: 55px;
        right: 10px;
        width: 200px;
        height: fit-content;
        display: none;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        background: rgb(3, 112, 244);
        border-radius: 2mm;
        padding: 10px 0;
        box-shadow: rgba(0, 0, 0, 0.27) 0px 15px 38px,
          rgba(0, 0, 0, 0.2) 0px 10px 12px;
      }
      .option,
      .sub {
        width: 100%;
        text-align: center;
        text-decoration: none;
        font-family: poppins;
        color: white;
        font-weight: 500;
        padding: 10px 0;
      }
      .option:hover,
      .sub:hover {
        background: white;
        color: rgb(1, 42, 84);
      }
      .sub {
        display: none;
      }
      @media only screen and (max-width: 450px) {
        .head {
          display: none;
        }
        .sub {
          display: block;
        }
      }
    </style>
  </head>
  <body>
    <div class="menu">
      <img src="../images/logo.png" alt="logo" />

      <div class="right">
        <a href="" class="head">Home</a>
        <a href="" class="head">About</a>
        <a href="" class="head">Services</a>

        <button class="toggle">
          <span class="material-icons"> more_vert </span>
        </button>
      </div>

      <div class="sub-menu">
        <a href="" class="sub">Home</a>
        <a href="" class="sub">About</a>
        <a href="" class="sub">Services</a>
        <a href="" class="option">Testimonials</a>
        <a href="" class="option">Contact</a>
        
      </div>
    </div>

    <script>
      let subMenu = document.querySelector(".sub-menu");

      window.addEventListener("click", (e) => {
        if (e.target.closest(".toggle")) {
          subMenu.style.display = "flex";
        } else {
          subMenu.style.display = "none";
        }
      });
    </script>
  </body>
</html>