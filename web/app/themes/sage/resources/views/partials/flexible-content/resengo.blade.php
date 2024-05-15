@php
    $title = $content['title'] ?? null;
    $text = $content['text'] ?? null;
    $type = $content['type'] ?? null;
    $id = $content['arrangement_id'] ?? null;
@endphp

<section class="section section--resengo" data-animate="fade-to-top">
    <div class="container-fluid">
        <div class="row">
            @if ($title || $text)
                <div class="col-lg-6">
                    <div class="resengo-content">
                        @if ($title)
                            <h2>{!! $title !!}</h2>
                        @endif

                        @if ($text)
                            <div class="resengo-text">{!! $text !!}</div>
                        @endif
                    </div>
                </div>
            @endif

            <div class="col-lg-6">
                @if ($type)
                    <iframe src="//www.resengo.com/code/Resengo/?ACTION=TAKEAWAYURL&CompanyID=1742595&LC=nl"
                        ALLOWTRANSPARENCY="TRUE" style="background:transparent;" height="500" width="100%"
                        frameborder="0" scrolling="yes" marginheight="0" marginwidth="0" align="bottom"
                        id="ResengoTakeawayFrame" name="ResengoTakeawayFrame">No Frames</iframe>
                    <script>
                        window.addEventListener("message", function(e) {
                            if (e.data[0] === "setResengoFrameHeight") {
                                document.getElementById("ResengoTakeawayFrame").style.height = e.data[1] + "px"
                            }
                        }, false)
                    </script>
                @else
                    <script type="text/javascript" data-name="resengo-widget-cors-script">
                        (function() {
                            var k = function(a, c, d, b) {
                                    if (a.getElementById(d)) {
                                        if (b) {
                                            var e = 100;
                                            var f = function() {
                                                setTimeout(function() {
                                                    e--;
                                                    if (window.RESENGO_WIDGET_SCRIPT_LOADED) b();
                                                    else if (0 < e) f();
                                                    else throw Error("resengo widget script failed to load");
                                                }, 100)
                                            };
                                            f()
                                        }
                                    } else {
                                        var g = a.getElementsByTagName(c)[0];
                                        a = a.createElement(c);
                                        a.id = d;
                                        a.src = "https://static.resengo.com/ResengoWidget";
                                        b && (a.onload = b);
                                        g.parentNode.insertBefore(a, g)
                                    }
                                },
                                h = function() {
                                    return k(document, "script", "resengo-flow-widget-script", function() {
                                        RESENGO_WIDGET({
                                            companyId: "1742595",
                                            language: "nl",
                                            mode: "cors",
                                            primaryColor: "ed1b24",
                                            categoryID: "<?php echo $id; ?>"
                                        })
                                    })
                                };
                            window.attachEvent ? window.attachEvent("onload", h) : window.addEventListener("load", h, !1)
                        })();
                    </script>
                @endif
            </div>
        </div>
    </div>
</section>
