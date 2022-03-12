<?php require 'header.html';?>  
<section>
    <div class="container" style="margin-top:30px">
        <div class="row">
          <div class="col-sm-4">
                <p> HTML CSS Bootstrap et PHP...</p>
          </div>        
          <div class="col-sm-8">
              <form>
                <div class="form-group">
                    <label for="EmailDemo">Your Email:</label>
                    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">Please enter your primary email</small>
                </div>
                <div class="form-group">
                    <label for="passDemo">Enter Password:</label>
                    <input type="password" class="form-control" name="pass" aria-describedby="passHelp" placeholder="Password">
                    <small id="passHelp" class="form-text text-muted">Must be 8 characters long</small>
                </div>
                <button type="submit" class="btn btn-success">Se connecter</button>
              </form>
          </div>
      </div>
    </div>
</section>
 <!-- FOOTER -->
 <?php require 'footer.html';?>    
</body>
</html>