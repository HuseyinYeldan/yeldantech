const readProgress = document.getElementById('read-progress');
const content = document.getElementById('content');
let frameCount = 0;

function updateProgressBar() {
  const contentHeight = content.clientHeight;
  const windowHeight = window.innerHeight;
  const scrollY = window.scrollY;

  const progress = (scrollY / (contentHeight - windowHeight)) * 95;
  readProgress.style.width = progress + '%';
}

function debounceScroll() {
  frameCount++;
  if (frameCount >= 100) {
    frameCount = 0;
    updateProgressBar();
  }
  requestAnimationFrame(debounceScroll);
}

window.addEventListener('scroll', debounceScroll);

updateProgressBar();

//RESİM KOPYALAMA
let image = document.querySelectorAll('.fr-fic');
let imageCopied = document.getElementById('image-copied');
let copyMessageTimeout;

for (let i = 0; i < image.length; i++) {
  image[i].parentElement.classList.add('image-parent');
  image[i].parentElement.addEventListener('click', function () {
    navigator.clipboard.writeText(image[i].src);

    clearTimeout(copyMessageTimeout);

    imageCopied.style.bottom = '10px';
    copyMessageTimeout = setTimeout(() => {
      imageCopied.style.bottom = '-100px';
    }, 2000);
  });
}

let shareBlog = document.getElementById('share-blog');

shareBlog.addEventListener('click',function(){
  let url = document.location.href

  navigator.clipboard.writeText(url).then(function() {

    clearTimeout(copyMessageTimeout);

    imageCopied.style.bottom = '10px';
    copyMessageTimeout = setTimeout(() => {
      imageCopied.style.bottom = '-100px';
    }, 2000);
  }, function() {
      console.log('Copy error')
  });

})
