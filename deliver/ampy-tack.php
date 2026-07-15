<?php
/**
 * Ampy — tack-sida shortcode.  Usage on the page:  [ampy_tack]
 * Pair with the CSS snippet (ampy-tack.css) + JS snippet (ampy-tack.js).
 * Type: PHP (Functions). Scope: only the /tack-/ page if you like.
 */
if ( ! function_exists( 'ampy_tack_shortcode' ) ) {
	function ampy_tack_shortcode() {
		return <<<'AMPYTACK'
<div class="ampy-tack">
  <svg class="ampy-tack__aurora ampy-tack__aurora--top" xmlns="http://www.w3.org/2000/svg" width="399" height="308" viewBox="0 0 399 308" fill="none" aria-hidden="true"><path opacity="0.55" d="M398.501 19.1624V307.416C377.203 307.609 355.83 302.624 342.317 293.968C312.351 274.723 324.249 243.073 290.832 225.49C271.296 215.211 241.478 212.776 213.863 212.505C186.248 212.274 157.751 213.588 131.605 208.757C82.3243 199.637 54.8562 166.596 75.5674 141.361C85.1886 129.652 102.742 120.339 116.035 109.712C129.329 99.0458 138.436 85.3657 128.668 73.6951C108.838 50.0062 34.0715 54.798 7.77845 32.9254C-4.04606 23.1097 -1.54896 10.2412 9.61455 0.0390625H391.001L398.501 19.1624Z" fill="url(#at_p0t)"></path><path opacity="0.6" d="M398.499 0V241.34C355.859 222.68 321.444 193.856 302.503 160.131C293.654 144.379 284.851 125.261 262.485 120.588C244.078 116.765 225.536 124.967 208.24 130.948C190.9 136.928 167.201 139.967 155.151 129.052C133.764 109.64 178.361 77.2222 157.196 57.6797C143.857 45.3595 116.646 50.4248 97.2152 43.8562C76.1396 36.6993 69.2478 15.8497 77.9626 0H398.499Z" fill="url(#at_p1t)"></path><defs><radialGradient id="at_p0t" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(322.819 40.5771) scale(663.35 349.037)"><stop offset="0.5" stop-color="#b6f2ff"></stop><stop offset="1" stop-color="#f5f9ff"></stop></radialGradient><radialGradient id="at_p1t" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(372.244 23.8562) scale(378.832 278.434)"><stop stop-color="#5cc5b6"></stop><stop offset="0.5" stop-color="#00a991"></stop><stop offset="0.87" stop-color="#5cc5b6"></stop></radialGradient></defs></svg>
  <svg class="ampy-tack__aurora ampy-tack__aurora--bottom" xmlns="http://www.w3.org/2000/svg" width="270" height="226" viewBox="0 0 270 226" fill="none" aria-hidden="true"><path opacity="0.55" d="M1.26485e-06 210.532L1.96698e-05 0.00397235C14.4308 -0.137147 28.9113 3.50376 38.0674 9.82597C58.37 23.8816 50.3087 46.9971 72.95 59.8391C86.1865 67.3467 106.39 69.1248 125.1 69.3224C143.81 69.4917 163.117 68.5321 180.832 72.0602C214.222 78.7211 232.833 102.853 218.8 121.283C212.281 129.835 200.389 136.637 191.382 144.399C182.375 152.188 176.205 162.18 182.823 170.703C196.258 188.005 246.915 184.505 264.73 200.48C272.741 207.649 271.05 217.047 263.486 224.499L14.5 225L1.26485e-06 210.532Z" fill="url(#at_p0b)"></path><path opacity="0.6" d="M3.05544e-05 225.579L3.06452e-05 50C28.9339 63.6081 52.2862 84.628 65.139 109.223C71.143 120.71 77.1168 134.652 92.2928 138.06C104.784 140.848 117.365 134.866 129.101 130.505C140.868 126.144 156.949 123.927 165.125 131.887C179.638 146.043 149.376 169.685 163.737 183.936C172.789 192.921 191.253 189.227 204.438 194.017C218.739 199.237 223.416 214.441 217.502 226L3.05544e-05 225.579Z" fill="url(#at_p1b)"></path><defs><radialGradient id="at_p0b" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(51.2778 194.892) rotate(-180) scale(449.445 254.921)"><stop offset="0.5" stop-color="#a0fbc9"></stop><stop offset="1" stop-color="#f5f9ff"></stop></radialGradient><radialGradient id="at_p1b" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(17.8152 208.603) rotate(-180) scale(257.059 203.052)"><stop stop-color="#5cc5b6"></stop><stop offset="0.5" stop-color="#00a991"></stop><stop offset="0.87" stop-color="#5cc5b6"></stop></radialGradient></defs></svg>

  <div class="ampy-tack__card">
    <div class="ampy-tack__intro">
      <div class="ampy-tack__check" aria-hidden="true">
        <span class="ampy-tack__halo"></span>
        <svg class="ampy-tack__check-svg" width="112" height="112" viewBox="0 0 174 174" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect class="ampy-tack__disc" x="12" y="12" width="150" height="150" rx="75" fill="#55FF9A" fill-opacity="0.2" stroke="#ffffff" stroke-opacity="0.18" stroke-width="24"></rect>
          <path class="ampy-tack__tick" d="M118.582 66.3379L76.862 108.207L57.8984 89.1754" stroke="#00A991" stroke-width="12" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>
      </div>
      <header class="ampy-tack__hero">
        <h1 class="ampy-tack__title">Din förfrågan har blivit <br>mottagen!</h1>
        <p class="ampy-tack__sub">En av våra rådgivare kommer att kontakta dig <br>inom kort.</p>
      </header>
      <div class="ampy-tack__proof" aria-label="Omdöme">
        <p class="ampy-tack__rating">
          <span class="ampy-tack__stars" role="img" aria-label="5 av 5 i betyg på Google">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 .587l3.668 7.431 8.2 1.192-5.934 5.784 1.401 8.166L12 18.896l-7.335 3.864 1.401-8.166L.132 9.21l8.2-1.192z"></path></svg>
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 .587l3.668 7.431 8.2 1.192-5.934 5.784 1.401 8.166L12 18.896l-7.335 3.864 1.401-8.166L.132 9.21l8.2-1.192z"></path></svg>
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 .587l3.668 7.431 8.2 1.192-5.934 5.784 1.401 8.166L12 18.896l-7.335 3.864 1.401-8.166L.132 9.21l8.2-1.192z"></path></svg>
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 .587l3.668 7.431 8.2 1.192-5.934 5.784 1.401 8.166L12 18.896l-7.335 3.864 1.401-8.166L.132 9.21l8.2-1.192z"></path></svg>
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 .587l3.668 7.431 8.2 1.192-5.934 5.784 1.401 8.166L12 18.896l-7.335 3.864 1.401-8.166L.132 9.21l8.2-1.192z"></path></svg>
          </span>
          <span class="ampy-tack__ratingtext"><strong>5 av 5</strong> · Betyg på Google</span>
        </p>
      </div>
    </div>

    <hr class="ampy-tack__divider">

    <div class="ampy-tack__cta-wrap">
      <a class="ampy-tack__cta" href="https://ampy.se/elservice">Utforska våra eltjänster
        <svg viewBox="0 0 17 15" aria-hidden="true"><path d="M16.7071 8.07112C17.0976 7.68059 17.0976 7.04743 16.7071 6.65691L10.3431 0.292945C9.95262 -0.0975793 9.31946 -0.0975792 8.92893 0.292945C8.53841 0.683469 8.53841 1.31663 8.92893 1.70716L14.5858 7.36401L8.92893 13.0209C8.53841 13.4114 8.53841 14.0446 8.92893 14.4351C9.31946 14.8256 9.95262 14.8256 10.3431 14.4351L16.7071 8.07112ZM0 7.36401L8.74228e-08 8.36401L16 8.36401L16 7.36401L16 6.36401L-8.74228e-08 6.36401L0 7.36401Z"></path></svg>
      </a>
    </div>
  </div>

  <a class="ampy-tack__ghost" href="https://ampy.se/">Till startsidan</a>
</div>
AMPYTACK;
	}
	add_shortcode( 'ampy_tack', 'ampy_tack_shortcode' );
}
