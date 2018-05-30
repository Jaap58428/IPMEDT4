window.onload = function () {
  document.getElementsByTagName('body')[0].style.filter = "brightness(100%)";
  setTimeout(function () {
    document.getElementById('splash-box').classList.add('slide-in-top');
  }, 1500);

  document.getElementById('infoknop').addEventListener("click", function () {
    $.scrollify.next();
  });
  document.getElementById('startknop').addEventListener("click", function () {
    $.scrollify.next();
  });


  $.scrollify({
      section : "section",
      sectionName : "section-name",
      interstitialSection : ".logo",
      easing: "easeOutExpo",
      scrollSpeed: 1100,
      offset : 0,
      scrollbars: false,
      standardScrollElements: "",
      setHeights: true,
      overflowScroll: false,
      updateHash: true,
      touchScroll:false,
      before:function() {},
      after:function() {},
      afterResize:function() {},
      afterRender:function() {}
    });

}
