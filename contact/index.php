<?php include './header.php';?>
<header>
        <div class="logo">
            <a href="../hero/index.php">Discover Lanka </a>
        </div>
        <input type="checkbox" id="click">
        <label for="click" class="mainicon">
            <div class="menu">
                <i class="bi bi-list"></i>
            </div>
        </label>
        <nav>
            <a href="../hero/index.php">Home</a>
            <a href="../about us/index.php">About Us</a>
            <a class="dropdown-menu">
              <a type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Blog
              </a>
              <ul class="dropdown-menu">
                <li><a href="#">Advanture</a></li>
                <li><a href="#">Luxury</a></li>
                <li><a href="#">Food</a></li>
                <li><a href="#">Wild Life</a></li>
                <li><a href="#">Heritage</a></li>
              </ul>
            </a>
            
            <a href="#" class="active">Contact</a>
        </nav>
    </header>
    <div class="formcarry-container">
        <form action="#" method="POST" class="formcarry-form">
          <label for="name">Your Name</label>
          <input type="text" id="name" name="fullName" required />
  
          <label for="email">Your Email Address</label>
          <input type="email" id="email" name="email" required />
  
          <label for="message">Your Message</label>
          <textarea name="message" id="message" cols="30" rows="10"></textarea>
          <button type="submit">Send</button>
        </form>
      </div>
</div>
<?php include './footer.php';?>