<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please Sign In</h3>
                </div>
                <div class="panel-body">
                    <?php echo $this->Form->create('User'); ?>
                        <fieldset>
                            <div class="form-group">
                                <!-- <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus> -->
                                <?php echo $this->Form->input('username', array(
                                        'class' => 'form-control',
                                        'placeholder' => 'Email',
                                    )); ?>
                            </div>
                            <div class="form-group">
                                <!-- <input class="form-control" placeholder="Password" name="password" type="password" value=""> -->
                                <?php echo $this->Form->input('password',array(  'class' => 'form-control',
                                        'placeholder' => 'password',)); ?>

                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                </label>
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                            <!-- <a href="" class="btn btn-lg btn-success btn-block">Login</a> -->
                            <?php echo $this->Form->submit('Login'); ?>
                        </fieldset>
                    <?php echo $this->Form->end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>