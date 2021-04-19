const LoadMoreButton = document.querySelector('.button');
var i = 0;


LoadMoreButton.addEventListener('click', e => {
    if (i === 0) {
        LoadMoreButton.innerText = 'Show less';
        document.getElementById("more").style.display = "inline";
        document.getElementById("dots").style.display = "none";
        i = 1;
    } else {
        LoadMoreButton.innerText = 'Show more';
        document.getElementById("more").style.display = "none";
        document.getElementById("dots").style.display = "inline";
        i = 0;
    }

})

