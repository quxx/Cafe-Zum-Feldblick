!(function (w, d) {
  if (!w.gfmWidgetLoaded) {
    try {
      function getIFrame(url) {
        const utmContent =
            (window && window.location && window.location.hostname) || "none",
          parsedUrl = new URL(url);
        parsedUrl.searchParams.set("utm_content", utmContent),
          parsedUrl.searchParams.set("utm_medium", "referral"),
          parsedUrl.searchParams.set("utm_source", "widget");
        const iframeSrc = `${parsedUrl}#:~:tcm-regime=GDPR&tcm-prompt=Hidden`,
          iframe = d.createElement("iframe"),
          widgetSize = parsedUrl.pathname.split("/")[4] || "large";
        return (
          "small" === widgetSize
            ? iframe.setAttribute("height", "70")
            : "medium" === widgetSize
            ? iframe.setAttribute("height", "200")
            : iframe.setAttribute("height", "500"),
          iframe.setAttribute("class", "gfm-embed-iframe"),
          iframe.setAttribute("width", "100%"),
          iframe.setAttribute("frameborder", "0"),
          iframe.setAttribute("scrolling", "no"),
          iframe.setAttribute("style", "background: #f4f3f2;"),
          iframe.setAttribute("src", iframeSrc),
          iframe
        );
      }
      w.addEventListener(
        "message",
        function (event) {
          if (
            event.data &&
            "gfm-embed-widget-resize" === event.data.type &&
            void 0 !== event.data.offsetHeight
          ) {
            const embed = (function (event) {
              return [].slice
                .call(d.getElementsByClassName("gfm-embed-iframe"))
                .filter((iframe) => iframe.contentWindow === event.source)[0];
            })(event);
            embed && (embed.height = event.data.offsetHeight);
          }
        },
        !1
      ),
        d.addEventListener("DOMContentLoaded", function () {
          const embeds = d.getElementsByClassName("gfm-embed");
          for (let i = 0; i < embeds.length; i++) {
            const iframe = getIFrame(embeds[i].getAttribute("data-url"));
            embeds[i].appendChild(iframe);
          }
        });
    } catch (error) {}
    w.gfmWidgetLoaded = !0;
  }
})(window, document);
