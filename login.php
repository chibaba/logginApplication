<?php 
  require once 'core/init.php';
  if(Input::exists()) {
    if(Token::check(Input::get('token'))) {
       $validate = new Validate();
       $validation = $validate->check(array(
         'username' => array('required' => true),
         'password' => array('required' => true),
       ))
       if($validation->passed()) {
         //log user in
                } else {
                  foreach($validation->errors() as $errors) {
                    echo $error '<br>'
                  }
                }
    }
  }
?>

<form action="" method="post">
  <div class="field">
  <label for="username">username</label>
  <input type="text" name="username" id="username" autocomplete="off">
  </div>

  div class="field">
  <label for="username">passwords</label>
  <input type="text" name="password" id="password" autocomplete="off">
  </div>

   <input type="hidden" value="token" value="<?php echo Token::generate(); ?>">
  <input type="submit" value="log in"
</form>