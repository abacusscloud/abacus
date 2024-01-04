function animateReward() {
  const rewardAnimation = document.querySelector('.rewardAnimation');
  rewardAnimation.style.transform = 'translate(-50%, -50%) scale(1)';
  setTimeout(() => {
    window.location.href = "login.html";
  }, 1500); // Redirect after 1.5 seconds (1500 milliseconds)
}
