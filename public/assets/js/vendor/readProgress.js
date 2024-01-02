const readProgress = document.getElementById('read-progress');
const content = document.getElementById('content')
// window.addEventListener('scroll',function(){
//     console.log(window.scrollY)
// })

function updateProgressBar() {
    const contentHeight = content.clientHeight;
    const windowHeight = window.innerHeight;
    const scrollY = window.scrollY;

    const progress = (scrollY / (contentHeight - windowHeight)) * 95;
    readProgress.style.width = progress + '%';


  }

  // Listen for scroll events and update the progress bar
  window.addEventListener('scroll', updateProgressBar);

  // Call the function initially to set the progress bar correctly
  updateProgressBar();