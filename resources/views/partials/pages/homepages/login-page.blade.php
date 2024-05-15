 <!-- Conten Login -->
    <section class="bg-primary text-white mb-0" id="login">
      <div class="container">
        <h2 class="text-center text-uppercase text-white">Login</h2>
        <hr class="star-light mb-5">
        <div class="row">
          <div class="col-sm-4">
          </div>
          <div class="col-sm-4">
            <form action="{{ route('actionlogin') }}" method="post">
              <div class="form-group">
                <label>Username</label><br>
                <input type="email" class="form-control" placeholder="Your Email">
                <label>Password</label><br>
                <input type="password" class="form-control" placeholder="Your Password">
                <br>
                <button class="btn btn-warning" type="submit">Login</button>
              </div>  
            </form>
          </div>
          <div class="col-sm-4">
          </div>  
          <br><br><br><br><br><br><br><br><br>
        </div>
      </div>
    </section>
