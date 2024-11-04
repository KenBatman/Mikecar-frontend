// Mở modal
function openModal(modalId) {
    document.getElementById(modalId).style.display = "flex";
}

// Đóng modal
function closeModal(modalId) {
    document.getElementById(modalId).style.display = "none";
}
document.addEventListener('DOMContentLoaded', function() {
    // Get all nav links
    const navLinks = document.querySelectorAll('.nav-links a');
    
    // Add click event listener to each nav link
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Get the section id from the href
            const sectionId = this.getAttribute('href').substring(1);
            
            // Hide all sections
            document.querySelectorAll('.content-section').forEach(section => {
                section.classList.remove('active');
            });
            
            // Show the selected section
            const targetSection = document.getElementById(sectionId);
            if (targetSection) {
                targetSection.classList.add('active');
                
                // Smooth scroll to the section
                targetSection.scrollIntoView({ behavior: 'smooth' });
            }
        });
    });
});