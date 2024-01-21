const blogContent = document.getElementById('content')
const tocList = document.getElementById('tocList')
let blogContentChildren = blogContent.children;
let tableOfContents = [];
let tocIndex = 0;

for (let i = 0; i < blogContentChildren.length; i++) {

    if(blogContentChildren[i].tagName == 'H2'){
        tocIndex++;
        blogContentChildren[i].id = `toc${tocIndex}`
    }
    
}