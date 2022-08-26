<section id="homepage">
    <div class="panel-search">
        <div class="uk-container uk-container-center">
            <div class="search uk-text-center">
                <form action="">
                    <h1 class="heading-1">ĐỪNG KINH DOANH KHI CHƯA CÓ TÊN MIỀN</h1>
                    <div class="form-field">
                        <input class="input-text" type="text" placeholder="Nhập tên miền đăng ký vào đây">
                    </div>
                    <button class="btn btn-submit" value="" type="submit" name="check">Kiểm tra</button>
                </form>
            </div>
        </div>
    </div>
    <div class="panel-book">
        <div class="uk-container uk-container-center">
            <div class="warpper">
                <input class="radio" id="one" name="group" type="radio" checked />
                <input class="radio" id="two" name="group" type="radio" />
                <input class="radio" id="three" name="group" type="radio" />
                <input class="radio" id="four" name="group" type="radio" />
                <input class="radio" id="five" name="group" type="radio" />
                <div class="tabs">
                    <label class="tab" id="one-tab" for="one">CGV</label>
                    <label class="tab" id="two-tab" for="two">About us</label>
                    <label class="tab" id="three-tab" for="three">Contents</label>
                    <label class="tab" id="four-tab" for="four">Our team</label>
                    <label class="tab" id="five-tab" for="five" data-uk-modal="{target:'#my-id'}">Contact</label>
                </div>
                <div class="panels">
                    <div class="elementor-section elementor-top-section elementor-element elementor-element-d348f9b elementor-section-full_width elementor-section-height-min-height elementor-section-height-default elementor-section-items-middle">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-row">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-86e62ff">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-be2431d elementor-widget elementor-widget-text-editor" >
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-text-editor elementor-clearfix" >
                                                        <div class="_df_book df-lite" id="df_41841" >
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="my-id" class="uk-modal">
                <div class="uk-modal-dialog">
                    <a class="uk-modal-close uk-close"></a>
                    <div class="aside-home">
                        <form class="form ">
                            CONNTACT US</h2>
                            <p type="Name:"><input placeholder="Write your name here.."></input></p>
                            <p type="Email:"><input placeholder="Let us know how to contact you back.."></input></p>
                            <p type="Message:"><input placeholder="What would you like to tell us.."></input></p>
                            <button>Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="panel-banner">
    </div>
    <div class="panel-social">
        <ul class="uk-list uk-clearfix">
            <li><a class="image img-cover" href="" title=""><img src="resources/img/social1.png" alt=""></a></li>
            <li><a class="image img-cover" href="" title=""><img src="resources/img/social2.png" alt=""></a></li>
            <li><a class="image img-cover" href="" title=""><img src="resources/img/social3.png" alt=""></a></li>
            <li><a class="image img-cover" href="" title=""><img src="resources/img/social4.png" alt=""></a></li>
            <li><a class="image img-cover" href="" title=""><img src="resources/img/social5.png" alt=""></a></li>
            <li><a class="image img-cover" href="" title=""><img src="resources/img/social6.png" alt=""></a></li>
            <li><a class="image img-cover" href="" title=""><img src="resources/img/social7.png" alt=""></a></li>
        </ul>
    </div>
</section>

<script class="df-shortcode-script" type="application/javascript">
    window.option_df_41841 = {
        text: {
            toggleSound: "Bật\/tắt tiếng",
            toggleThumbnails: "Chuyển đổi hình",
            toggleOutline: "Chuyển đổi Outline \ / Bookmark",
            previousPage: "Trang trước",
            nextPage: "Trang sau",
            toggleFullscreen: "Chuyển đổi full màn hình",
            zoomIn: "Phóng to",
            zoomOut: "Thu nhỏ",
            toggleHelp: "Chuyển đổi Trợ giúp",
            singlePageMode: "Chế độ trang đơn",
            doublePageMode: "Chế độ trang đôi",
            downloadPDFFile: "Tải File PDF",
            gotoFirstPage: "Đi tới đầu trang",
            gotoLastPage: "Đi tới cuối trang",
            share: "Chia sẻ",
            mailSubject: "Tôi muốn bạn xem trang này",
            mailBody: "Kiểm tra trang web này {{url}}",
            loading: "Loading ",
        },
        moreControls: "download,pageMode,startPage,endPage,sound",
        hideControls: "",
        scrollWheel: "false",
        backgroundColor: "#777",
        backgroundImage: "",
        height: "auto",
        paddingLeft: "0",
        paddingRight: "0",
        controlsPosition: "bottom",
        duration: 800,
        soundEnable: "true",
        enableDownload: "true",
        enableAnnotation: "false",
        enableAnalytics: "false",
        webgl: "true",
        hard: "none",
        maxTextureSize: "1600",
        rangeChunkSize: "524288",
        stiffness: 3,
        pageMode: "1",
        pageSize: "0",
        autoPlay: "false",
        autoPlayDuration: 5000,
        autoPlayStart: "false",
        linkTarget: "2",
        sharePrefix: "dearflip-",
        forceFit: "true",
        autoEnableOutline: "false",
        autoEnableThumbnail: "false",
        overwritePDFOutline: "false",
        direction: "1",
        zoomRatio: 1.5,
        singlePageMode: "",
        source: [
            <?php for ( $i = 1; $i <= 27; $i++) {?>
                "\/resources\/img\/book\/ProfileV1-<?php echo $i?>.jpg",
            <?php } ?>
        ],
        wpOptions: "true",
        links: [
        <?php for ( $i  = 1; $i  <= 27; $i ++) {?>
            [],
        <?php } ?>
        ],
    };
    if (window.DFLIP && window.DFLIP.parseBooks) {
        window.DFLIP.parseBooks();
    }
    </script>