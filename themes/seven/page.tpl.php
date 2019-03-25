
  <div id="branding" class="clearfix">
    <?php print $breadcrumb; ?>
    <?php print render($title_prefix); ?>
    <?php if ($title): ?>
      <h1 class="page-title"><?php print $title; ?></h1>
    <?php endif; ?>
    <?php print render($title_suffix); ?>
    <?php print render($primary_local_tasks); ?>
  </div>

  <div id="page">
    <?php if ($secondary_local_tasks): ?>
      <div class="tabs-secondary clearfix"><?php print render($secondary_local_tasks); ?></div>
    <?php endif; ?>

    <div id="content" class="clearfix">
      <div class="element-invisible"><a id="main-content"></a></div>
      <?php if ($messages): ?>
        <div id="console" class="clearfix"><?php print $messages; ?></div>
      <?php endif; ?>


      <?php if ($page['help']): ?>
        <div id="help">
          <?php print render($page['help']); ?>
        </div>
      <?php endif; ?>
      
      <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>

      <?php print render($page['content']); ?>

    </div>


<!--      <form action="action_page.php">-->
<!--          <div class="">-->
<!--              <h1>Register</h1>-->
<!--              <p>Please fill in this form to create an account.</p>-->
<!--              <hr>-->
<!---->
<!--              <label for="email"><b>Email</b></label>-->
<!--              <input type="text" placeholder="Enter Email" name="email" required>-->
<!---->
<!--              <label for="psw"><b>Password</b></label>-->
<!--              <input type="password" placeholder="Enter Password" name="psw" required>-->
<!---->
<!--              <label for="psw-repeat"><b>Repeat Password</b></label>-->
<!--              <input type="password" placeholder="Repeat Password" name="psw-repeat" required>-->
<!--              <hr>-->
<!---->
<!--              <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>-->
<!--              <button type="submit" class="registerbtn">Register</button>-->
<!--          </div>-->
<!---->
<!--          <div class="container signin">-->
<!--              <p>Already have an account? <a href="#">Sign in</a>.</p>-->
<!--          </div>-->
<!--      </form>-->

  </div>
