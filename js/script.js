const selectTag = document.querySelectorAll(".searchInputArea .select select")[0],
banner = document.querySelector(".banner"),
chevron_left = document.querySelector(".banner .left"),
chevron_right = document.querySelector(".banner .right"),
topButtonArea = document.querySelector('.topButtonWrapper');

window.setInterval(() => {
banner.style.backgroundImage = `url(./images/img${Math.floor(Math.random() * 8)}.jpg)`;
banner.style.transition = '0.8s ease';
}, 3500);

chevron_left.addEventListener('click', () => {
banner.style.backgroundImage = `url(./images/img${Math.floor(Math.random() * 8)}.jpg)`;
banner.style.transition = '0.8s ease';
});

chevron_right.addEventListener('click', () => {
banner.style.backgroundImage = `url(./images/img${Math.floor(Math.random() * 8)}.jpg)`;
banner.style.transition = '0.8s ease';
});

topButtonArea.addEventListener('click', () => {
	let platform = navigator.userAgentData.platform;
	if(platform === 'Safari')
		document.body.scrollTop = 0;
	else
		document.documentElement.scrollTop = 0;
});