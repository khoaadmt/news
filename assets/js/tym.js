const likeIcon = document.querySelector('.like-icon');
const likeCount = document.querySelector('.like-count');

let count = 0;

likeIcon.addEventListener('click', function() {
    if (likeIcon.classList.contains('active')) {
        likeIcon.classList.remove('active');
        count--;
    } else {
        likeIcon.classList.add('active');
        count++;
    }

    likeCount.textContent = count;
});