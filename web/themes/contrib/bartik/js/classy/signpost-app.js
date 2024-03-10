document.addEventListener("DOMContentLoaded", function() {
  alignContentTextHeight();
});
window.addEventListener("resize", function() {
  alignContentTextHeight();
});
function alignContentTextHeight() {
  if (window.innerWidth > 1140) {
    let multipostItems = document.querySelectorAll('.multipost__items');
    multipostItems.forEach(function(item) {
      let contentTexts = item.querySelectorAll('.multipost__content-text');
      let maxHeight = 0;
      contentTexts.forEach(function(contentText) {
        contentText.style.height = '';
        maxHeight = Math.max(maxHeight, contentText.offsetHeight);
      });
      contentTexts.forEach(function(contentText) {
        contentText.style.height = maxHeight + 'px';
      });
    });
  } else {
    let contentTexts = document.querySelectorAll('.multipost__content-text');
    contentTexts.forEach(function(contentText) {
      contentText.style.height = '';
    });
  }
}

document.addEventListener("DOMContentLoaded", function () {
  let mainContainers = document.querySelectorAll('.multipost__content');

  mainContainers.forEach(function (mainContainer) {
    let imgElement = mainContainer.querySelector('.multipost__content-img');
    let hintElement = mainContainer.querySelector('.multipost__content-text--hint');
    if (imgElement && hintElement) {
      imgElement.addEventListener('click', function () {
        hintElement.classList.add('--active');
      });
    }
    document.addEventListener('click', function (event) {
      if (!imgElement.contains(event.target) && !hintElement.contains(event.target)) {
        hintElement.classList.remove('--active');
      }
    });
  });
});