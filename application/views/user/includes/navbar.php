<header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="<?php echo base_url('home'); ?>"><h2>< IsiNdex ><em>.</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('home'); ?>">ANA SƏHİFƏ
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('about_us'); ?>">HAQQIMIZDA</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('category'); ?>">XƏBƏRLƏR</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('single'); ?>">POST TƏFƏRRÜATI</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('contact'); ?>">BİZİMLƏ ƏLAQƏ</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    
    <script>
      const activePage = window.location.pathname;
      const navLinks = document.querySelectorAll('nav a').forEach(link => {
        if(link.href.includes(`${activePage}`)){
          link.classList.add('active');
          console.log(link);
        }
      })
    </script>