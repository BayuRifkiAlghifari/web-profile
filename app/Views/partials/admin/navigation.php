<?php  
  function is_active($page_now, $page)
  {
    return ($page_now == $page) ? 'colorlib-active' : '';
  }
?>

<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
<aside id="colorlib-aside" role="complementary" class="js-fullheight text-center">
    <h1 id="colorlib-logo"><a href="<?= base_url ?>">Bayu<span>.</span></a></h1>
    <nav id="colorlib-main-menu" role="navigation">
      <ul>
          <li class="<?= is_active($page, 'about') ?>"><a href="<?= base_url ?>admin/about">About</a></li>
          <li class="<?= is_active($page, 'project') ?>"><a href="<?= base_url ?>admin/project">Project</a></li>
          <li class="<?= is_active($page, 'contact') ?>"><a href="<?= base_url ?>admin/contact">Contact</a></li>
      </ul>
    </nav>

    <div class="colorlib-footer">
        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Template by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
        <ul>
            <li><a target="_blank" href="https://github.com/BayuRifkiAlghifari"><span class="icon-github"></span></a></li>
        </ul>
    </div>
</aside> <!-- END COLORLIB-ASIDE -->