var bodyClass = document.body.classList,
  lastScrollY = 0;
window.addEventListener('scroll', function(){
  var st = this.scrollY;
  // 判斷是向上捲動，而且捲軸超過 200px
  /*if( st < lastScrollY) {
    bodyClass.remove('hideUp');
  }else{
    bodyClass.add('hideUp');
  } */
  if(st > lastScrollY & st > 80) {
    bodyClass.add('hideUp');
  }else {
    bodyClass.remove('hideUp');
  }
  lastScrollY = st;
});

