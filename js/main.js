let chatButtons = document.querySelectorAll('button.btn-chat');

chatButtons.forEach(chatButton => {
  chatButton.addEventListener('click', e => {
    let button = e.currentTarget;
    chatButtons.forEach(btn => btn !== button && btn.classList.remove('selected'));
    button.classList.toggle('selected');
  });
});

let storyButtons = document.querySelectorAll('button.btn-story');

storyButtons.forEach(storyButton => {
  storyButton.addEventListener('click', e => {
    let button = e.currentTarget;
    storyButtons.forEach(btn => btn !== button && btn.classList.remove('selected'));
    button.classList.toggle('selected');
  });
});

var scroll_l = $('.phone-content').scrollLeft(),
  scroll_t = $('.phone-content').scrollTop();
  $('.phone-content').scroll(function() {
    if ($('.phone-content').html().length) {
      scroll_l = $('.phone-content').scrollLeft();
      scroll_t = $('.phone-content').scrollTop();
    }
  });
  $('.phone-content').load('simulation.php?choiceOne=1', function() {
    $('.phone-content').scrollLeft(scroll_l);
    $('.phone-content').scrollTop(scroll_t);
  });