//Loader
//<![CDATA[
window.addEventListener('load', () => {
    const loader = document.getElementById('PreLoaderBar'); 
    // Add transition for smooth fade out

    loader.classList.add('transition-opacity', 'duration-700', 'opacity-0');    
    // Remove it from DOM after transition
    
    setTimeout(() => {
        loader.remove();
    }, 800); // Slightly longer than the duration
});
//]]>

// Autofill current add with perm add
document.addEventListener("DOMContentLoaded", () => {
    window.copyAddress = function () {
        const isChecked = document.getElementById("sameAddress").checked;
    
        const permStreet = document.getElementById("permStreet").value;
        const permCity = document.getElementById("permCity").value;
        const permProvince = document.getElementById("permProvince").value;
        const permPostal = document.getElementById("permPostal").value;
    
        const currStreet = document.getElementById("currStreet");
        const currCity = document.getElementById("currCity");
        const currProvince = document.getElementById("currProvince");
        const currPostal = document.getElementById("currPostal");
    
        if (isChecked) {
            currStreet.value = permStreet;
            currCity.value = permCity;
            currProvince.value = permProvince;
            currPostal.value = permPostal;
        } else {
            currStreet.value = "";
            currCity.value = "";
            currProvince.value = "";
            currPostal.value = "";
        }
    };
});

// Course Section Filter for Student Grades
document.addEventListener('DOMContentLoaded', function () {
    const select = document.getElementById('courseFilter');
    const sections = document.querySelectorAll('.course');

    function filterSections() {
        const selected = select.value;
        sections.forEach(section => {
            if (selected === 'all' || section.dataset.course === selected) {
                section.style.display = 'block'; 
            } else {
                section.style.display = 'none';
            }
        });
    }

    filterSections();

    select.addEventListener('change', filterSections);
});

//popover
document.addEventListener('DOMContentLoaded', function () {
    const popover = document.getElementById('success-popover');
    if (popover) {
        // Fade in
        popover.classList.add('opacity-100');

        // Fade out after 3 seconds
        setTimeout(() => {
            popover.classList.remove('opacity-100');
            popover.classList.add('opacity-0');
        }, 3000);
    }
});