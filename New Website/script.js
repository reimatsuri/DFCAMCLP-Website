function toggleDropdown(dropdownId) {
  const dropdown = document.getElementById(dropdownId);
  dropdown.style.display =
      dropdown.style.display === "block" ? "none" : "block";
}

function openNav() {
  document.getElementById("mySidenav").style.width = "300px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

// Function to filter news based on search input
function filterNews() {
  const input = document.getElementById('searchInput').value.toLowerCase();
  const newsItems = document.querySelectorAll('#newsList li');

  newsItems.forEach(item => {
      const text = item.textContent.toLowerCase();
      if (text.includes(input)) {
          item.style.display = '';
      } else {
          item.style.display = 'none';
      }
  });
}



let currentIndex = 0;

function showImage(index) {
    const carousel = document.querySelector('.carousel');
    const images = document.querySelectorAll('.carousel-image');
    const totalImages = images.length;

    // Ensure index loops correctly
    if (index < 0) {
        currentIndex = totalImages - 1;
    } else if (index >= totalImages) {
        currentIndex = 0;
    } else {
        currentIndex = index;
    }

    // Adjust transform to show the correct image
    const offset = -currentIndex * 100;
    carousel.style.transform = `translateX(${offset}%)`;
}

function prevImage() {
    showImage(currentIndex - 1);
}

function nextImage() {
    showImage(currentIndex + 1);
}

document.getElementById('admissionForm').addEventListener('submit', function (e) {
  e.preventDefault();

  const name = document.getElementById('name').value;
  const email = document.getElementById('email').value;
  const contact = document.getElementById('contact').value;
  const course = document.getElementById('course').value;

  console.log(`Name: ${name}`);
  console.log(`Email: ${email}`);
  console.log(`Contact: ${contact}`);
  console.log(`Course: ${course}`);

  alert('Your registration has been submitted successfully!');
});

