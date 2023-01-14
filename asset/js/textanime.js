const txtAnim= document.querySelector('.textanim');

new Typewriter(txtAnim,{
  // deley
 loop:true

})
.changeDelay(50)
.typeString("presentation")

.start()
