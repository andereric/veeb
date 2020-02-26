<?php require_once APPROOT.'/views/inc/header.php';?>
<!-- register form -->
<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card card-body bg-light mt-5">
            <h2>Create an Account</h2>
            <form action="<?php echo URLROOT;?>/users/register" method="post">
                <div class="form-group">
                    <label for="name">Name: <sup></sup></label>
                    <input type="text" id="name">
                </div>
                <div class="form-group">
                    <label for="email">E-mail: <sup></sup></label>
                    <input type="text" id="email">
                </div>
                <div class="form-group">
                    <label for="pass">Password <sup></sup></label>
                    <input type="password" id="pass">
                </div>
                <div class="form-group">
                    <label for="pass2">Confirm Password <sup></sup></label>
                    <input type="password" id="pass2">

                </div>
            </form>
        </div>
    </div>
</div>
<?php require_once APPROOT.'/views/inc/footer.php';?>
