<?php
$id = "top";
include "./include/header.php"
?>
    <div class="view" style="background-image: url('./asset/img/TOP/IMAGE-1.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;">
    </div>
    <!-- <div class="" style="background-image: url('./asset/img/TOP/IMAGE-2.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;"> -->
    <div>

        <div class="mask justify-content-center align-items-center" style="background:#000;">
            <div class="ahihi">
            <div class="row">
            <div class="col-md-12">
            <!-- <div class="col-md-6 full-row-left"> -->
            <video style="display: block;width: 100%;height: auto;max-width: 100%;" class=" mr-auto ml-auto" playsinline=""  controls=""  autoplay="" muted="" loop=""  id="vid">
                <source src="./asset/img/video.mp4" type="video/mp4">
                Trình duyệt của bạn không hỗ trợ HTML5.
            </video>
            <script>
                var vid = document.getElementById('vid');
                    // vid.autoplay = true;
                    // vid.load();
            </script>
               </div>
               <!-- <div class="col-md-6 full-row-right">
               <iframe class="videos-row-iframe" src="https://www.youtube.com/embed/gh3xTSevhLk"  frameborder="0" allowfullscreen></iframe>
               </div> -->
            </div>
            </div>
            <div class="text-center white-text mx-5 wow fadeIn"></div>

        </div>

    </div>
    <div class="view" style="background-image: url('./asset/img/TOP/IMAGE-5.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;">


        <div class="mask d-flex justify-content-center align-items-center">


            <div class="rgba-black-light text-center white-text mx-5 wow fadeIn d-flex justify-content-center align-items-center">
                <div class="content-main">
                    <h1 class="mb-4">
                        <strong class="strong-title">Wedding Ceremony</strong>
                    </h1>

                    <p>
                        <strong class="sub-paragrap">ワタベウェディングセレモニー</strong>
                    </p>

                    <a href="./ceremony.php" class="btn btn-outline-white btn-lg">CLICK HERE</a>
                </div>

            </div>


        </div>


    </div>
    <div class="view" style="background-image: url('./asset/img/TOP/imageFix.jpg'); background-repeat: no-repeat; background-size: cover;">


        <div class="mask d-flex justify-content-center align-items-center">


            <div class="rgba-black-light text-center white-text mx-5 wow fadeIn d-flex justify-content-center align-items-center">
                <div class="content-main">
                    <h2 class="mb-4">
                        <strong class="strong-title">Photo plan</strong>
                    </h2>

                    <p>
                        <strong class="sub-paragrap">フォトプラン</strong>
                    </p>
                    <a href="./photoplan.php" class="btn btn-outline-white btn-lg">CLICK HERE </a>
                </div>
            </div>


        </div>


    </div>
    <div class="view" style="background-image: url('./asset/img/TOP/IMAGE-5-new.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;">

        <div class="mask d-flex justify-content-center align-items-center">

            <div class="rgba-black-light text-center white-text mx-5 wow fadeIn slower d-flex justify-content-center align-items-center">
                <div class="content-main">
                    <h2 class="mb-4">
                        <strong class="strong-title">Dress & Texudo</strong>
                    </h2>
                    <p>
                        <strong class="sub-paragrap">ドレス＆タキシード</strong>
                    </p>
                    <a href="./dress.php" class="btn btn-outline-white btn-lg">CLICK HERE </a>
                </div>
            </div>

        </div>

    </div>
    <div class="view" style="background-image: url('./asset/img/TOP/IMAGE-6-new.jpg'); background-repeat: no-repeat; background-size: cover;">

        <div class="mask d-flex justify-content-center align-items-center">

            <div class="rgba-black-light text-center white-text mx-5 wow fadeIn d-flex justify-content-center align-items-center">
                <div class="content-main">
                    <h2 class="mb-4">
                        <strong class="strong-title">Gallery</strong>
                    </h2>

                    <p>
                        <strong class="sub-paragrap">ギャラリー</strong>
                    </p>

                    <a href="./gallary.php" class="btn btn-outline-white btn-lg">CLICK HERE </a>
                </div>
            </div>

        </div>

    </div>
<?php
include "./include/footer.php"
?>
