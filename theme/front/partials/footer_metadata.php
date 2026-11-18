<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@studio-freight/lenis@1.0.42/dist/lenis.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/framer-motion@10.16.4/dist/framer-motion.js"></script>


<style>
	document.addEventListener('DOMContentLoaded', () => {
	  const lenis = new Lenis({
	    duration: 1.2,
	    easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
	    smoothWheel: true
	  });
	
	  function raf(time) {
	    lenis.raf(time);
	    requestAnimationFrame(raf);
	  }
	
	  requestAnimationFrame(raf);
	});
</style>