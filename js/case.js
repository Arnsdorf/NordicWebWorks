document.addEventListener("DOMContentLoaded", function () {
    // Function to update the image, tech tags, and URL dynamically
    function updateContent(container, imageElement, tagsElement, caseIndex) {
        if (!container) return; // Ensure container exists
        const newImageSrc = container.querySelector('.case-info-img').src;
        imageElement.src = newImageSrc;

        // Update the tech tags
        const newTagsHtml = container.querySelector('.row').innerHTML;
        tagsElement.innerHTML = newTagsHtml;

        // Opdater URL med den nye caseIndex
        window.history.replaceState(null, null, "?case=" + caseIndex);
    }

    // For mobile version
    let currentCaseIndex = 0;
    const cases = document.querySelectorAll('#case-container .case-info'); // Select all case elements for mobile
    const mobileImg = document.getElementById('mobile-case-img');
    const mobileTags = document.getElementById('mobile-tech-tags').querySelector('.row');

    if (cases.length > 0) { // Ensure cases array is not empty
        document.getElementById('nextBtn').addEventListener('click', function () {
            cases[currentCaseIndex].classList.remove('active'); // Hide current case
            currentCaseIndex = (currentCaseIndex + 1) % cases.length; // Move to next case, loop back if at the end
            cases[currentCaseIndex].classList.add('active'); // Show next case
            updateContent(cases[currentCaseIndex], mobileImg, mobileTags, currentCaseIndex); // Update the image, tags, and URL
        });

        document.getElementById('prevBtn').addEventListener('click', function () {
            cases[currentCaseIndex].classList.remove('active'); // Hide current case
            currentCaseIndex = (currentCaseIndex - 1 + cases.length) % cases.length; // Move to previous case, loop to end if at the beginning
            cases[currentCaseIndex].classList.add('active'); // Show previous case
            updateContent(cases[currentCaseIndex], mobileImg, mobileTags, currentCaseIndex); // Update the image, tags, and URL
        });
    }

    // For PC and Tablet version
    let currentCaseIndexMd = 0;
    const casesMd = document.querySelectorAll('#case-container-md .case-info'); // Select all case elements for larger screens
    const desktopImg = document.getElementById('desktop-case-img');
    const desktopTags = document.getElementById('desktop-tech-tags').querySelector('.row');

    if (casesMd.length > 0) { // Ensure casesMd array is not empty
        document.getElementById('nextBtn-md').addEventListener('click', function () {
            casesMd[currentCaseIndexMd].classList.remove('active'); // Hide current case
            currentCaseIndexMd = (currentCaseIndexMd + 1) % casesMd.length; // Move to next case, loop back if at the end
            casesMd[currentCaseIndexMd].classList.add('active'); // Show next case
            updateContent(casesMd[currentCaseIndexMd], desktopImg, desktopTags, currentCaseIndexMd); // Update the image, tags, and URL
        });

        document.getElementById('prevBtn-md').addEventListener('click', function () {
            casesMd[currentCaseIndexMd].classList.remove('active'); // Hide current case
            currentCaseIndexMd = (currentCaseIndexMd - 1 + casesMd.length) % casesMd.length; // Move to previous case, loop to end if at the beginning
            casesMd[currentCaseIndexMd].classList.add('active'); // Show previous case
            updateContent(casesMd[currentCaseIndexMd], desktopImg, desktopTags, currentCaseIndexMd); // Update the image, tags, and URL
        });
    }
});
