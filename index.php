<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Bootstrap  -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
      <!-- Font awesome  -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <!-- Google Font  -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
      <!-- ms css  -->
      <link rel="stylesheet" href="assets/css/style.css">
    <title>To Do List Vue.js</title>
</head>
<body>
    <!-- vue container  -->
    <div id="app" v-cloak>
       <!-- header  -->
      <header class="d-flex justify-content-between align-items-center">
        <div class="container d-flex justify-content-between">
          <div class="site-title">
            <h1 class="fs-4">Shopping</h1>
          </div>
          <nav class="d-lg-flex justify-content-center" :class="{show : isShow}">
            <ul class="d-block d-lg-flex">
              <li class="px-2"><a href="#">Services</a></li>
              <li class="px-2"><a href="#">Gallery</a></li>
              <li class="px-2"><a href="#">About</a></li>
              <li class="px-2"><a href="#">Contact</a></li>
            </ul>
          </nav>
          <div class="bar d-flex justify-content-center align-items-center d-lg-none">
            <i class="fa-solid fa-bars fs-5" @click="showToggle"></i>
          </div>
          <div class="icon-ctn text-end">
            <i class="fa-regular fa-star px-2"></i>
            <i class="fa-solid fa-user px-2"></i>
            <i class="fa-solid fa-cart-shopping ps-2"></i>
          </div>
        </div>
      </header>
      <!-- header  -->

      <!-- main  -->
      <main>
        <div class="container d-flex align-items-start justify-content-center">
          <div class="left">
            <div class="input-group mb-3">
              <input type="text" class="form-control ms-type-bar" v-model="toDoAdd"  placeholder="To Do ..." aria-label="Recipient's username" aria-describedby="button-addon2">
              <button class="btn btn-outline-secondary ms-type-btn"  type="button" id="button-addon2">Go!</button>
            </div>
            <ul class="list-group">
              <li class="list-group-item ms-li d-flex justify-content-between align-items-center" v-for="(todo, index) in toDoList">
                <span>{{ todo.text }}</span>
                <div class="cancel-ctn">
                  <i class="fa-solid fa-xmark"></i>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </main>
      <!-- main  -->

    </div>
    <!-- /vue container  -->

     <!-- script axios  -->
     <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
     <!-- script bootstrap  -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
     <!-- script Vue  -->
     <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
     <!-- script ms js  -->
     <script src="assets/js/main.js"></script>
</body>
</html>