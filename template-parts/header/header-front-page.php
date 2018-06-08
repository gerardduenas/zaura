<style>
header.bg_front{background-size:cover;position:relative;overflow:hidden}
header.bg_front img{position:absolute;top:50%;left:50%;-webkit-transform:translateX(-50%) translateY(-50%);-ms-transform:translateX(-50%) translateY(-50%);transform:translateX(-50%) translateY(-50%);min-width:100%;min-height:100%;width:auto;height:auto;overflow:hidden;z-index:-2}
header.bg_front .bg_image{background-size:cover;background-repeat:none;background-position:center;top:0;right:0;bottom:0;left:0;position:absolute;z-index:-2}
header.bg_front .container .col-md{position:absolute;top:50%;left:50%;-webkit-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}
header.bg_front .container p{font-size:1.1em;font-weight:700;max-width:600px;margin:30px auto}
header.bg_front .container .btn{font-size:1.1em;padding-top:12px;padding-bottom:12px}
</style>
<script>
$(document).ready(function () {
    $( ".bg_front" ).css("height", $(window).height());
});
</script>
<header class="bg_front">
    <img id="front-img" src="http://local.wordpress.test/wp-content/uploads/2018/06/IMG_6680.jpg" alt="First slide">
    <div class="container">
        <div class="row">
            <div class="col-md">
                <h1 style="text-align: center;">Zaura Sàhara</h1>
                <div>
                    <p style="text-align: center;">Estudiants de Ciències de la Salut pel Sàhara</p>
                </div>
                <p class="text-center">
                    <a class="btn btn-lg btn-warning" href="#main">Coneix-nos</a>
                </p>
            </div>
        </div>
    </div>
</header>
