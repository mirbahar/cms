<?php include'layoutMain/header.php'?>
<script type="text/javascript">
    // To conform clear all data in cart.
    function clear_cart() {
        var result = confirm('Are you sure want to clear all bookings?');

        if (result) {
            window.location = "<?php echo base_url(); ?>index.php/shopping/remove/all";
        } else {
            return false; // cancel button
        }
    }
</script>
<section class="content">
    <div class="container">
  <?php echo $content_for_layout;?>
    </div>

</section>
<?php include'layoutMain/footer.php'?>
