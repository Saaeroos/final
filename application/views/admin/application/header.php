<style type="text/css">

  header {
    margin-top: 100px;
  }
</style>


<header>
    <div  id="admin" class="container-fluid">
      <div><h1>Admin <?php echo $this->session->currentUser[
        'first_name'] ?></h1></div>
    </div>

    <div class="container-fluid">
      <ul class="nav justify-content-end">
        <li class="nav-item"><a class="nav-link platform" href="/">Platform</a></li>
        <li class="nav-item"><a class="nav-link" href="/logout">Log Out</a></li>
      </ul>
    </div>
  </header>