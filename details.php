<?php include 'include/header.php'; ?>

<section id="upload">
    <div class="container">
        <header class="section-header">
            <h3>Details of PoE</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua.</p>
        </header>
        <div class="row">
            <div class="col-md-12">
                <div id="received_data"></div>
            </div>
        </div>
        <div>
</section>

<?php include 'include/footer.php'; ?>


<script>
    var signature = "<?php echo $_GET['signature']; ?>";            
</script>

<script src="js/details.js"></script>