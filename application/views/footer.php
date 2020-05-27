    <!--Page Footer-->
    <footer class = "main-footer">
        <div class = "container-fluid">
            <div class = "row">
                <div class = "col-sm-6">
                    <p>EstimeSoft &copy;
                        2018</p>
                </div>
            </div>
        </div>
    </footer>
</div>
</div>
</div>
<!-- Javascript files-->
<script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/tether.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.cookie.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.validate.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/front.js'); ?>"></script>
 <!-- js custom-->
        <?php
            if(isset($js)){
                echo $js;
            }
        ?>
</body>
</html>