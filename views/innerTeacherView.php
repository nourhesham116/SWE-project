<?php
include "./partials/nav.html"
?>




<head>
    <style>
        /* Font */
@import url('https://fonts.googleapis.com/css?family=Quicksand:400,700');

/* Design */
*,
*::before,
*::after {
  box-sizing: border-box;
  padding: 0;
  margin:0; 
}

html {
  background-color: #ecf9ff;
}

body {
  color: #272727;
  font-family: 'Quicksand', serif;
  font-style: normal;
  font-weight: 400;
  letter-spacing: 0;
  /* padding: 1rem; */
}

.main{
  max-width: 1200px;
  margin: 0 auto;
}

h1 {
    font-size: 24px;
    font-weight: 400;
    text-align: center;
}

img {
  height: auto;
  max-width: 100%;
  vertical-align: middle;
}

.btn {
  color: #ffffff;
  padding: 0.8rem;
  font-size: 14px;
  text-transform: uppercase;
  border-radius: 4px;
  font-weight: 400;
  display: block;
  width: 100%;
  cursor: pointer;
  border: 1px solid rgba(255, 255, 255, 0.2);
  background: transparent;
}

.btn:hover {
  background-color: rgba(255, 255, 255, 0.12);
}

.cards {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  margin: 0;
  padding: 0;
}

.cards_item {
  display: flex;
  padding: 1rem;
}

@media (min-width: 40rem) {
  .cards_item {
    width: 50%;
  }
}

@media (min-width: 56rem) {
  .cards_item {
    width: 33.3333%;
  }
}

.card {
  background-color: white;
  border-radius: 0.5rem;
  box-shadow: 0 20px 40px -14px rgba(0, 0, 0, 0.25);
  display: flex;
  flex-direction: column;
  overflow: hidden;
}

.card_content {
  padding: 1rem;
  background: linear-gradient(to bottom left, #02024a 40%, #1b1b2aad 100%);
}

.card_title {
  color: #ffffff;
  font-size: 1.1rem;
  font-weight: 700;
  letter-spacing: 1px;
  text-transform: capitalize;
  margin: 0px;
}

.card_text {
  color: #ffffff;
  font-size: 0.875rem;
  line-height: 1.5;
  margin-bottom: 1.25rem;    
  font-weight: 400;
}
.made_by{
  font-weight: 400;
  font-size: 13px;
  margin-top: 35px;
  text-align: center;
}
    </style>
</head>

<body>
    
    <div class="main">
        <h1>class 1 year2</h1>
        <ul class="cards">
            <li class="cards_item">
                <div class="card">
                    <div class="card_image"><img src="../img/checklist-check-list-marker.jpg"></div>
                    <div class="card_content">
                        <h2 class="card_title">Attendance</h2>
                        <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
                        <button class="btn card_btn">Read More</button>
          </div>
        </div>
    </li>
    <li class="cards_item">
        <div class="card">
            <div class="card_image"><img src="../img/checklist-check-list-marker.jpg"></div>
            <div class="card_content">
                <h2 class="card_title">Card Grid Layout</h2>
                <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
                <button class="btn card_btn">Read More</button>
            </div>
        </div>
    </li>
    <li class="cards_item">
        <div class="card">
            <div class="card_image"><img src="../img/checklist-check-list-marker.jpg"></div>
            <div class="card_content">
                <h2 class="card_title">Card Grid Layout</h2>
                <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
                <button class="btn card_btn">Read More</button>
            </div>
        </div>
    </li>
    
    <li class="cards_item">
        <div class="card">
            <div class="card_image"><img src="../img/checklist-check-list-marker.jpg"></div>
            <div class="card_content">
                <h2 class="card_title">Card Grid Layout</h2>
                <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
                <button class="btn card_btn">Read More</button>
          </div>
        </div>
    </li>
    </ul>
</div>

  <h3 class="made_by">Made with ♡</h3>
</body>




<?php
include "./partials/footer.html"
?>
