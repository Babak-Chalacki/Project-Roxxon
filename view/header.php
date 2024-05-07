<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <title>Document</title>
  <style>
    a{
      text-decoration: none;
    }
    #offcanvasScrolling {
      background: rgb(2, 0, 36);
      background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(221, 11, 11, 1) 0%, rgba(48, 45, 45, 1) 100%);
    }

    .nav-link {
      color: #ffffff;
      /* رنگ متن نورانی */
      /* اندازه فونت */
      font-weight: bold;
      /* وزن فونت بولد */
      text-shadow: 0 0 10px #ffffff, 0 0 20px #ffffff, 0 0 30px #ffffff, 0 0 40px #ffffff, 0 0 50px #ffffff, 0 0 60px #ffffff;
      /* سایه متن نورانی */
      animation: glow 2s linear infinite;
    }

    @keyframes glow {
      50% {
        text-shadow: 0 0 10px #ffffff, 0 0 20px #ffffff, 0 0 30px #04f033, 0 0 40px #ff0095, 0 0 50px #ffbf00, 0 0 60px #ffbf00;
      }
    }



    .box {
      position: relative;

    }

    .input {
      padding: 10px;
      width: 80px;
      height: 80px;
      background: none;
      border: 4px solid #ffd52d;
      border-radius: 50px;
      box-sizing: border-box;
      font-family: Comic Sans MS;
      font-size: 26px;
      color: #ffd52d;
      outline: none;
      transition: .5s;
    }
   

    .box:hover input {
      width: 350px;
      background: #3b3640;
      border-radius: 10px;
    }

    .box i {
      position: absolute;
      top: 50%;
      right: 15px;
      transform: translate(-50%, -50%);
      font-size: 26px;
      color: #ffd52d;
      transition: .2s;
    }

    .box:hover i {
      opacity: 0;
      z-index: -1;
    }

    /* YouTube icon */
    #ytb {
      height: 50px;
      width: 50px;
      text-align: center;
      line-height: 52px;
      border: 2px solid transparent;
      color: #ff1717;
      font-size: 25px;
      transition: 0.3s;
    }

    #ytb:hover {
      border-radius: 50%;
      border-color: #ff1717;
      box-shadow: 0 0 10px #ff4040;
    }


  #first_nav{
    background-color: rgb(0, 0, 0) !important;
  }


    
  </style>
</head>

<body>

