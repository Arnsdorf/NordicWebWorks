// Function to update the image, tech tags, and URL dynamically
function updateContent(container, imageElement, tagsElement, caseIndex) {
    const newImageSrc = container.querySelector('.case-image').src;
    imageElement.src = newImageSrc;

    // Update the tech tags
    const newTagsHtml = container.querySelector('.tech-tags').innerHTML;
    tagsElement.innerHTML = newTagsHtml;

    // Update the URL dynamically
    updateCaseURL(caseIndex);
}

// Function to update the URL based on the current case index
function updateCaseURL(caseIndex) {
    const newURL = `caseinfo${caseIndex + 1}.php`; // Generate caseinfo1.php, caseinfo2.php, etc.
    window.history.pushState({}, '', newURL); // Update the URL without reloading the page
}

// For mobile version
let currentCaseIndex = 0;
const cases = document.querySelectorAll('#case-container .case-info'); // Select all case elements for mobile
const mobileImg = document.getElementById('mobile-case-img');
const mobileTags = document.getElementById('mobile-tech-tags').querySelector('.row');

document.getElementById('nextBtn').addEventListener('click', function() {
    cases[currentCaseIndex].classList.remove('active'); // Hide current case
    currentCaseIndex = (currentCaseIndex + 1) % cases.length; // Move to next case, loop back if at the end
    cases[currentCaseIndex].classList.add('active'); // Show next case
    updateContent(cases[currentCaseIndex], mobileImg, mobileTags, currentCaseIndex); // Update the image, tags, and URL
});

document.getElementById('prevBtn').addEventListener('click', function() {
    cases[currentCaseIndex].classList.remove('active'); // Hide current case
    currentCaseIndex = (currentCaseIndex - 1 + cases.length) % cases.length; // Move to previous case, loop to end if at the beginning
    cases[currentCaseIndex].classList.add('active'); // Show previous case
    updateContent(cases[currentCaseIndex], mobileImg, mobileTags, currentCaseIndex); // Update the image, tags, and URL
});

// For PC and Tablet version
let currentCaseIndexMd = 0;
const casesMd = document.querySelectorAll('#case-container-md .case-info'); // Select all case elements for larger screens
const desktopImg = document.getElementById('desktop-case-img');
const desktopTags = document.getElementById('desktop-tech-tags').querySelector('.row');

document.getElementById('nextBtn-md').addEventListener('click', function() {
    casesMd[currentCaseIndexMd].classList.remove('active'); // Hide current case
    currentCaseIndexMd = (currentCaseIndexMd + 1) % casesMd.length; // Move to next case, loop back if at the end
    casesMd[currentCaseIndexMd].classList.add('active'); // Show next case
    updateContent(casesMd[currentCaseIndexMd], desktopImg, desktopTags, currentCaseIndexMd); // Update the image, tags, and URL
});

document.getElementById('prevBtn-md').addEventListener('click', function() {
    casesMd[currentCaseIndexMd].classList.remove('active'); // Hide current case
    currentCaseIndexMd = (currentCaseIndexMd - 1 + casesMd.length) % casesMd.length; // Move to previous case, loop to end if at the beginning
    casesMd[currentCaseIndexMd].classList.add('active'); // Show previous case
    updateContent(casesMd[currentCaseIndexMd], desktopImg, desktopTags, currentCaseIndexMd); // Update the image, tags, and URL
});


