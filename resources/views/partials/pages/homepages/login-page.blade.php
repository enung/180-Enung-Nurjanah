 <!-- Conten Login -->
 <section class="bg-primary text-white mb-0" id="login">
  <div class="container">
    <h2 class="text-center text-uppercase text-white">Login</h2>
    <hr class="star-light mb-5">
    <div class="row">
      <div class="col-sm-4">
      </div>
      <div class="col-sm-4">
        <div class="form-group">
          @if (Session::has('error'))
          <p>{{ Session::get('error') }}</p>
          @endif
          <form action="{{ url('login') }}" method="POST">
            @csrf
            <label>Email</label><br>
            <input type="text" class="form-control" name="email" placeholder="Your Email">
            <label>Password</label><br>
            <input type="password" class="form-control" name="password" placeholder="Your Password">
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
