<footer class="main-footer">
    <div class="footer-overlay">
        <div class="container">
            
            <div class="footer-header">
                <div class="title-box">ABOUT</div>
                <div class="title-box">PLLC</div>
            </div>

            <div class="footer-content">
                <p class="quote">"The goal will always be to make home buyers and sellers feel confident and comfortable during closing and to make the buying process smoother for my client by answering their home questions about real estate from a legal standpoint." – Justin Champion, Esq., Owner</p>
                
                <ul class="footer-list">
                    <li><strong>Residential Real Estate</strong> – That focus on real estate law means we can help provide expertise in helping clients both as buyer and sellers in the local market. Whether they have questions about real estate law or need assistance with your real estate closing, we’ll find more than equipped to provide excellent legal service.</li>
                    <li><strong>Mobile Closing Services</strong> – Is coming into the office or your real estate closing putting a wrench in your busy schedule? Our mobile closing service is the perfect solution. After all, we meet your real estate requirements right at your location and provide you our signature services at your new home address.</li>
                    <li><strong>Client Portal</strong> – Having convenient access to your real estate documents is one way to make sure no time is left unspent. Use our client portal to keep track of important information and to help maintain communication with your real estate client in the most convenient way possible.</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="footer-bottom" style="background: #1a2a4a;">
        <div class="container">
            <div class="bottom-flex">
                <div class="yellow-action">
                    <a href="#" class="btn-yellow">MOBILE REAL ESTATE</a>
                    <span>Closing services available at your location</span>
                </div>
            </div>
          
        </div>
    </div>
        <div class="copyright-bottom">
        <div class="container">
           
            <div class="copyright-text">
                © 2024 Champion Law PLLC. All Rights Reserved. | North Carolina Real Estate Lawyer
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Check if the URL has the 'updated=true' parameter we added in acf_form
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.get('updated') === 'true') {
        Swal.fire({
            title: 'Success!',
            text: 'Your message has been sent to Gilmar.',
            icon: 'success',
            confirmButtonColor: '#003366',
            timer: 4000
        });
        
        // Clean the URL so the popup doesn't show again on refresh
        window.history.replaceState({}, document.title, window.location.pathname);
    }
});
</script>
</body>
</html>