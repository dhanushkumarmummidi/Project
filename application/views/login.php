
<!--style="background-color:grey;"-->

<body>

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="login">
                        <img class="align-content" height=200 width=300 src="<?php echo base_url();?>images/fulllogo.png" alt="style stamp the final stamp to your fashion">
                    </a>
                </div>
                <div class="login-form">
                    
                <?php 
                // if( validation_errors()){
                    echo validation_errors('<div class="alert alert-danger">','</div>');
                // }
                if($this->session->userdata('error')){?>
                    <div class="alert alert-danger"><?php echo $this->session->userdata('error'); $this->session->unset_userdata('error'); ?></div>
                <?php }
                if($this->session->userdata('success')){?>
                    <div class="alert alert-success"><?php echo $this->session->userdata('success'); $this->session->unset_userdata('error'); ?></div>
                <?php }?>
                
                    <form action="<?php echo base_url();?>index.php/authenticate" method="post"> 
					    <div class="form-group">
                            <label>Login</label> 
                        </div>
        
                        <div class="form-group">  

                            <input type="email" class="form-control" placeholder="Email" name='lemail' >
                        </div>
                        <div class="form-group"> 
                            <input type="password" class="form-control" placeholder="Password" name="lpassword" >
                        </div>
                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
                        <div class="checkbox">
                            <!-- <label>
                                <input type="checkbox"> Remember Me
                            </label> -->
                            <label class="pull-right">
                                <a href="<?php echo base_url();?>index.php/forget-password">Forgot Password?</a>
                            </label>
                            
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
