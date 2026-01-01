<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
const thumb = document.getElementById('cvThumb');
const modal = document.getElementById('cvModal');
const closeBtn = document.getElementById('cvClose');

thumb.addEventListener('click', () => {
    modal.style.display = 'flex';
});

closeBtn.addEventListener('click', () => {
    modal.style.display = 'none';
});

modal.addEventListener('click', (e) => {
    if (e.target === modal) modal.style.display = 'none';
});
</script>
<!-- end Simple Custom CSS and JS -->
