<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<html>
<head>
<style>
* {
  box-sizing: border-box;
}

/* Style the navigation bar */
.navbar {
  background-color: #f0f0f0;
  padding: 10px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

/* Style the navigation links */
.navbar a {
  color: black;
  text-decoration: none;
  font-weight: bold;
  margin: 10px;
}

/* Style the active link */
.navbar a.active {
  color: orange;
}

/* Style the main content */
.main {
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px;
}

/* Style the heading */
.main h1 {
  font-size: 36px;
  color: orange;
  margin-bottom: 10px;
}

/* Style the subheading */
.main h2 {
  font-size: 24px;
  color: black;
  margin-bottom: 20px;
}

/* Style the grid container */
.grid-container {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  grid-gap: 20px;
}

/* Style the grid items */
.grid-item {
  position: relative;
  height: 200px;
  overflow: hidden;
}

/* Style the grid images */
.grid-item img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

/* Style the grid overlays */
.grid-item .overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: rgba(0, 0, 0, 0.7);
  color: white;
  padding: 10px;
  font-size: 14px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

/* Style the social media icons */
.overlay .icons {
  display: flex;
}

.overlay .icons img {
  width: 20px;
  height: 20px;
  margin-right: 5px;
}

/* Style the sorting and pagination controls */
.controls {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-top: 20px;
}

/* Style the select element */
select {
  padding: 5px;
  border: 1px solid #ccc;
}

/* Style the pagination buttons */
.button {
  padding: 5px 10px;
  border: 1px solid #ccc;
  background-color: white;
  color: black;
  text-decoration: none;
}

/* Style the active pagination button */
.button.active {
  background-color: orange;
  color: white;
}

</style>
</head>
<body>

<!-- Navigation bar -->
<div class="navbar">
  <a href="#">saturnmedia</a>
  <div>
    <a href="#">Work</a>
    <a href="#">About</a>
    <a href="#">Services</a>
    <a href="#" class="active">Ideas</a>
    <a href="#">Careers</a>
    <a href="#">Contact</a>
  </div>
</div>

<!-- Main content -->
<div class="main">
  <h1>Ideas</h1>
  <h2>Where all great things begin</h2>

  <!-- Grid container -->
  <div class="grid-container">

    <!-- Grid item 1 -->
    <div class="grid-item">
      <img src="image1.jpg" alt="Image 1">
      <div class="overlay">
        <div class="text">Kenali Tingkatan Influencers Berdasarkan Jumlah Followers</div>
        <div class="icons">
          <img src="facebook.png" alt="Facebook">
          <img src="twitter.png" alt="Twitter">
          <img src="instagram.png" alt="Instagram">
        </div>
      </div>
    </div>

    <!-- Grid item 2 -->
    <div class="grid-item">
      <img src="image2.jpg" alt="Image 2">
      <div class="overlay">
        <div class="text">Jangan Asal Pilih Influencer, Berkat Cara Menyusun Strategi Influencer</div>
        <div class="icons">
          <img src="facebook.png" alt="Facebook">
          <img src="twitter.png" alt="Twitter">
          <img src="instagram.png" alt="Instagram">
        </div>
      </div>
    </div>

    <!-- Grid item 3 -->
    <div class="grid-item">
      <img src="image3.jpg" alt="Image 3">
      <div class="overlay">
        <div class="text">Kenali Tingkatan Influencers Berdasarkan Jumlah Followers</div>
        <div class="icons">
          <img src="facebook.png" alt="Facebook">
          <img src="twitter.png" alt="Twitter">
          <img src="instagram.png" alt="Instagram">
        </div>
      </div>
    </div>

    <!-- Grid item 4 -->
    <div class="grid-item">
      <img src="image4.jpg" alt="Image 4">
      <div class="overlay">
        <div class="text">Jangan Asal Pilih Influencer, Berkat Cara Menyusun Strategi Influencer</div>
        <div class="icons">
          <img src="facebook.png" alt="Facebook">
          <img src="twitter.png" alt="Twitter">
          <img src="instagram.png" alt="Instagram">
        </div>
      </div>
    </div>

    <!-- Grid item 5 -->
    <div class="grid-item">
      <img src="image5.jpg" alt="Image 5">
      <div class="overlay">
        <div class="text">Kenali Tingkatan Influencers Berdasarkan Jumlah Followers</div>
        <div class="icons">
          <img src="facebook.png" alt="Facebook">
          <img src="twitter.png" alt="Twitter">
          <img src="instagram.png" alt="Instagram">
        </div>
      </div>
    </div>

    <!-- Grid item 6 -->
    <div class="grid-item">
      <img src="image6.jpg" alt="Image 6">
      <div class="overlay">
        <div class="text">Jangan Asal Pilih Influencer, Berkat Cara Menyusun Strategi Influencer</div>
        <div class="icons">
          <img src="facebook.png" alt="Facebook">
          <img src="twitter.png" alt="Twitter">
          <img src="instagram.png" alt="Instagram">
        </div>
      </div>
    </div>

    <!-- Grid item 7 -->
    <div class="grid-item">
      <img src="image7.jpg" alt="Image 7">
      <div class="overlay">
        <div class="text">Kenali Tingkatan Influencers Berdasarkan Jumlah Followers</div>
        <div class="icons">
          <img src="facebook.png" alt="Facebook">
          <img src="twitter.png" alt="Twitter">
          <img src="instagram.png" alt="Instagram">
        </div>
      </div>
    </div>

    <!-- Grid item 8 -->
    <div class="grid-item">
      <img src="image8.jpg" alt="Image 8">
      <div class="overlay">
        <div class="text">Jangan Asal Pilih Influencer, Berkat Cara Menyusun Strategi Influencer</div>
        <div class="icons">
          <img src="facebook.png" alt="Facebook">
          <img src="twitter.png" alt="Twitter">
          <img src="instagram.png" alt="Instagram">
        </div>
      </div>
    </div>

  </div>

  <!-- Sorting and pagination controls -->
  <div class="controls">
    <div>
      <span>Showing 1 to 8 of 100</span>
      <span>Show per page:</span>
      <select>
        <option>10</option>
        <option>20</option>
        <option>50</option>
      </select>
      <span>Sort by:</span>
      <select>
        <option>Newest</option>
        <option>Oldest</option>
        <option>Most Popular</option>
      </select>
    </div>
    <div>
      <a href="#" class="button active">1</a>
      <a href="#" class="button">2</a>
      <a href="#" class="button">3</a>
      <a href="#" class="button">>></a>
    </div>
  </div>

</div>

</body>
</html>
